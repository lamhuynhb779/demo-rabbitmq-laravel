<?php

namespace App\Console\Commands;

use App\Jobs\TestJob;
use Illuminate\Console\Command;

class PushJobCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rabbitmq:push-job';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create an order';

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
     */
    public function handle()
    {
        dispatch(new TestJob("this is my data"));
    }
}
