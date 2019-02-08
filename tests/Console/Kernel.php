<?php

namespace CNSDose\Salesforce\Tests\Console;

use Illuminate\Console\Scheduling\Schedule;
use Orchestra\Testbench\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \CNSDose\Salesforce\Console\GenerateModel::class,
        \CNSDose\Salesforce\Console\RetrieveAccessToken::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        //
    }
}
