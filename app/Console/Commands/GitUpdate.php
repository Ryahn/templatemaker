<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class RefreshApp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:refresh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Pull files from GIT';

    /**
     * Is the code already updated or not
     * 
     * @var boolean
     */
    private $alreadyUpToDate;

    /**
     * Log from git pull
     * 
     * @var array
     */
    private $pullLog = [];

    /**
     * Log from composer install
     * 
     * @var boolean
     */
    private $composerLog = [];

    /**
     * Log from artisan
     * 
     * @var boolean
     */
    private $artisanLog = [];



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

        if(!$this->runPull()) {

            $this->error("An error occurred while executing 'git pull'. \nLogs:");

            foreach($this->pullLog as $logLine) {
                $this->info($logLine);
            }

            return;
        }

        if(!$this->runFetch()) {

            $this->error("An error occurred while executing 'git fetch'. \nLogs:");

            foreach($this->pullLog as $logLine) {
                $this->info($logLine);
            }

            return;
        }

        if(!$this->runReset()) {

            $this->error("An error occurred while executing 'git reset'. \nLogs:");

            foreach($this->pullLog as $logLine) {
                $this->info($logLine);
            }

            return;
        }


        if($this->alreadyUpToDate) {
            $this->info("The application is already up-to-date");
            return;
        }


        if(!$this->runComposer()) {

            $this->error("Error while updating composer files. \nLogs:");

            foreach($this->composerLog as $logLine) {
                $this->info($logLine);
            }

            return;
        }

        if($this->alreadyUpToDate) {
            $this->info("The application is already up-to-date");
            return;
        }


        if(!$this->runMigrate()) {

            $this->error("Error while running migrate. \nLogs:");

            foreach($this->artisanLog as $logLine) {
                $this->info($logLine);
            }

            return;
        }

        $this->info("Succesfully updated the application.");


    }


    public function runFetch()
    {
        $process = new Process(['git', 'fetch --all']);

        $this->info("Running 'git fetch'");
        
        $process->run(function($type, $buffer) {
            $this->pullLog[] = $buffer;
        });

        return $process->isSuccessful();
    }
    
    public function runReset()
    {
        $process = new Process(['git', 'reset --hard origin/main']);

        $this->info("Running 'git reset'");

        $process->run(function($type, $buffer) {
            $this->pullLog[] = $buffer;
        });

        return $process->isSuccessful();
    }

    /**
     * Run git pull process
     * 
     * @return boolean
     */

    private function runPull()
    {
        $process = new Process(['git', 'pull']);
        $this->info("Running 'git pull'");

        $process->run(function($type, $buffer) {
            $this->pullLog[] = $buffer;

            if($buffer == "Already up to date.\n") {
                $this->alreadyUpToDate = TRUE;
            }
        });

        return $process->isSuccessful();

    }

    /**
     * Run composer install process
     * 
     * @return boolean
     */

    private function runComposer()
    {

        $process = new Process(['composer install']);
        $this->info("Running 'composer install'");

        $process->run(function($type, $buffer) {
            $this->composerLog[] = $buffer;
        });


        return $process->isSuccessful();



    }

    /**
     * Run migrate install process
     * 
     * @return boolean
     */

    private function runMigrate()
    {

        $process = new Process(['php artisan migrate']);
        $this->info("Running 'artisan migrate'");

        $process->run(function($type, $buffer) {
            $this->artisanLog[] = $buffer;
        });


        return $process->isSuccessful();



    }


}