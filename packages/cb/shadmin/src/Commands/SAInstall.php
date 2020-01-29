<?php

namespace cb\shadmin\Commands;

use Illuminate\Console\Command;
use Artisan;
use File;

class SAInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'SA:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'For SH Admin Install';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */

    public function handle()
    {
        //copy paste destination
        $from=base_path('packages/cb/shadmin/src/Installs');
        $to=base_path();

        $this->_echo('SH Admin installation started...');
        // $this->call('cache:clear');
        // $this->call('ui:auth');
        // exec('npm run production'); 
        
        //SH Authenticate Resource Publish 
        $this->_echo('Generating Authenticate Resource Publish...');
        $this->replaceFfile($from . "/resources/views/login.blade.php", $to . "/resources/views/auth/login.blade.php"); 


        //Database Connection 
         $databse_connection_confirmation = $this->ask('Are You Interest To Establish Your Database Connection  If Interested Say Y or N ?');
         if($databse_connection_confirmation == 'Y' or $databse_connection_confirmation == 'y')
         {
            $this->_echo('Greate :) Start Your Database Connection ...');

            //BasePath
            $filename = base_path('.env');

            // UserName
            $database_name = $this->ask('What Is Your Database Name  ?');
            $env_db_name = 'DB_DATABASE='; 
            $replace_db_name = 'DB_DATABASE='.$database_name;

            // UserName
            $username = $this->ask('What Is Your Username  ?');
            $env_db_user_name = 'DB_USERNAME='; 
            $replace_user_name = 'DB_USERNAME='.$username;

            // Password
            $password = $this->secret('What is the password ?');
            $env_db_password = 'DB_PASSWORD='; // the content after which you want to insert new stuff
            $replace_password = 'DB_PASSWORD='.$password;

            if (File::exists(base_path('.env'))) 
            {
                // DatabaseName
                file_put_contents($filename, str_replace($env_db_name, $replace_db_name, file_get_contents($filename)));

                //UserName
                file_put_contents($filename, str_replace($env_db_user_name, $replace_user_name, file_get_contents($filename)));

                // Password
                file_put_contents($filename, str_replace($env_db_password, $replace_password, file_get_contents($filename)));
            }
            else
            {
                File::move($from . "/.env", $to . '/.env'); 
                // DatabaseName
                file_put_contents($filename, str_replace($env_db_name, $replace_db_name, file_get_contents($filename)));

                // UserName
                file_put_contents($filename, str_replace($env_db_user_name, $replace_user_name, file_get_contents($filename)));

                // Password
                file_put_contents($filename, str_replace($env_db_password, $replace_password, file_get_contents($filename)));
            }
         }
        //Database Connection
    }

   

    public function replaceFfile($src,$dst)
    {   
        if(file_exists($dst)) {
           unlink($dst);
           copy($src,$dst);
        }
       
    }
    public function copy_paste($src,$dst) { 
            $dir = opendir($src); 
            @mkdir($dst); 
            while(false !== ( $file = readdir($dir)) ) { 
                if (( $file != '.' ) && ( $file != '..' )) { 
                    if ( is_dir($src . '/' . $file) ) { 
                        $this->copy_paste($src . '/' . $file,$dst . '/' . $file); 
                    } 
                    else { 
                        copy($src . '/' . $file,$dst . '/' . $file); 
                    } 
                } 
            } 
            closedir($dir); 
        } 

    //Statment Print
    public function _echo($info)
    {
        echo $info."\n";

    }
}
