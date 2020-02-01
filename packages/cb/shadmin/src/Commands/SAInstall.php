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
    protected $database_name;
    protected $database_user_name;
    protected $database_password;

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
        $this->call('cache:clear');
        $this->CheckRoute();
        $this->call('ui:auth');
        exec('npm install');
        exec('npm run production');
        //Check .env exists or not
        $env_file=base_path(".env");
        if(File::exists($env_file))
        {
           $this->_echo("File Get");
           $this->EnvironMent($env_file);
        }
        else
        {
          $env_example=base_path(".env.example");
          if(File::exists($env_example))
          {
               exec("cp .env.example .env");
               $this->call("key:generate");
               $this->EnvironMent($env_file);
          }
        }
        //SH Authenticate Resource Publish
        $this->_echo('Generating Authenticate Resource Publish...');
        $this->replaceFfile($from . "/resources/views/login.blade.php", $to . "/resources/views/auth/login.blade.php");
        $this->replaceFfile($from . "/resources/views/login.blade.php", $to . "/resources/views/auth/login.blade.php");
    }

    private function EnvironMent($env)
    {
        $this->_echo("Set Your Environment Varriable");
        $this->database_name=$this->ask('What is your DATABASE NAME?\n');
        $this->database_user_name=$this->ask('What is your DATABASE USER NAME?\n');
        $this->database_password=$this->secret('What is the DATABASE PASSWORD?\n');
        $environment_database=$_ENV['DB_DATABASE'];
        $environment_username=$_ENV['DB_USERNAME'];
        $environment_password=$_ENV['DB_PASSWORD'];
        file_put_contents($env, str_replace("DB_DATABASE=$environment_database","DB_DATABASE=".$this->database_name, file_get_contents($env)));
        file_put_contents($env, str_replace("DB_USERNAME=$environment_username","DB_USERNAME=".$this->database_user_name, file_get_contents($env)));
        file_put_contents($env, str_replace("DB_PASSWORD=$environment_password","DB_PASSWORD=".$this->database_password, file_get_contents($env)));
        $this->_echo("Successfully Setup Your Environment Varriable");

    }


    private function CheckRoute()
    {
        $route_file_path=base_path()."/routes/web.php";
        if(File::exists($route_file_path))
        {
          File::delete($route_file_path);
          file_put_contents($route_file_path,"<?php");
        }
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
