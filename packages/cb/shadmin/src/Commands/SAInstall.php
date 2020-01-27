<?php

namespace cb\shadmin\Commands;

use Illuminate\Console\Command;
use Artisan;
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
        $this->call('cache:clear');
        $this->call('ui:auth');
        exec('npm run production'); 
        
        //SH Authenticate Resource Publish 
        $this->_echo('Generating Authenticate Resource Publish...');
        $this->replaceFfile($from . "/resources/views/login.blade.php", $to . "/resources/views/auth/login.blade.php"); 
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
