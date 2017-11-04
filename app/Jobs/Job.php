<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
<<<<<<< HEAD

abstract class Job
=======
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

abstract class Job implements ShouldQueue
>>>>>>> lumenContainer
{
    /*
    |--------------------------------------------------------------------------
    | Queueable Jobs
    |--------------------------------------------------------------------------
    |
    | This job base class provides a central location to place any logic that
    | is shared across all of your jobs. The trait included with the class
<<<<<<< HEAD
    | provides access to the "onQueue" and "delay" queue helper methods.
    |
    */

    use Queueable;
=======
    | provides access to the "queueOn" and "delay" queue helper methods.
    |
    */

    use InteractsWithQueue, Queueable, SerializesModels;
>>>>>>> lumenContainer
}
