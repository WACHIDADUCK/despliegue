<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\TestJob; // Asegúrate de importar el Job

class DispatchTestJobCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dispatch:test-job'; // Nombre del comando

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dispatch a test job'; // Descripción del comando

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Despacha el Job a la cola
        dispatch(new TestJob());

        // Mensaje en la consola confirmando el despacho
        $this->info('Test job dispatched!');
        return 0;
    }
}