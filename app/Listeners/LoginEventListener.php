<?php

namespace App\Listeners;

use App\Events\LoginEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LoginEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */

    //public $event;
    public function __construct()
    {
        //$this->event = $event;
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\LoginEvent  $event
     * @return void
     */
    public function handle(LoginEvent $event)
    {
        \Log::info("Foydalanuvchi ismi - {$event->user->name} ; foydalanuvchi kirgan vaqt : ".date('d-m-Y h:i:s'));
    }
}
