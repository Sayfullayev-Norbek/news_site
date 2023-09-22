<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LogoutEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(\App\Events\LogoutEvent $event)
    {
        \Log::info("Foydalanuvchi ismi - {$event->user->name} ; foydalanuvchi chiqgan vaqt : ".date('d-m-Y h:i:s'));
    }
}
