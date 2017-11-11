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
         Commands\Inspire::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {

        //Download Texas Future Tournaments
        $schedule->call(function () {
            $event = new \App\Http\Controllers\Events\EventController;
            $event->download('Texas','future');
           
        })
        ->timezone('America/Chicago')
        ->daily()
        ->at('3:30')
        ;

        // //Download Rankings
        // $start = '20:00';
        // //test to 1; prod go to groupid = 6
        // for ($groupID = 1; $groupID <= 1; $groupID++) {           
        //      for ($locationID = 0; $locationID <= 1; $locationID++) { 
        //         $schedule->call(function () {
        //             $rank = new \App\Http\Controllers\Members\RankingsController;
        //             $rank->download($groupID ,$locationID);                   
        //         })
        //         ->timezone('America/Chicago')
        //         ->weekly()
        //         ->fridays()
        //         ->at($start)
        //         ;
        //         $start = strtotime("+10 minutes", strtotime($start));

        //     }
        // }
    }
}
