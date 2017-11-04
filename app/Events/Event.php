<?php

namespace App\Events;

<<<<<<< HEAD
abstract class Event
{
    //
=======
use Illuminate\Queue\SerializesModels;

abstract class Event
{
    use SerializesModels;
>>>>>>> lumenContainer
}
