<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
<<<<<<< HEAD
        Commands\BlogInstall::class,
        Commands\CreateAdmin::class,
=======
        //
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
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
    }

    /**
     * Register the Closure based commands for the application.
=======
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
     *
     * @return void
     */
    protected function commands()
    {
<<<<<<< HEAD
=======
        $this->load(__DIR__.'/Commands');

>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
        require base_path('routes/console.php');
    }
}
