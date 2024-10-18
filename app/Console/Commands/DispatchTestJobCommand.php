<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DispatchTestJobCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'app:dispatch-test-job-command';
    protected $signature = 'dispatch:test-job';


    /**
     * The console command description.
     *
     * @var string
     */
    // protected $description = 'Command description';
    protected $description = 'Dispatch a test job';


    /**
     * Execute the console command.
     */
    public function handle(){
    dispatch(new DispatchTestJobCommand());
    $this->info('Test job dispatched.');
    }
    
}
