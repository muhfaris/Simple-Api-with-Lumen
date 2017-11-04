<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
<<<<<<< HEAD
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
=======
use Laravel\Lumen\Console\Kernel as ConsoleKernel;
>>>>>>> lumenContainer

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
<<<<<<< HEAD
        // Commands\Inspire::class,
=======
        //
>>>>>>> lumenContainer
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
<<<<<<< HEAD
        // $schedule->command('inspire')
        //          ->hourly();
=======
        //
>>>>>>> lumenContainer
    }
}
