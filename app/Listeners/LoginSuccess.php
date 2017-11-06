<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login as LoginEvent;
use App\Events\BroadcastUserLogined;

class LoginSuccess
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
     * @param  KernelBootstrapped  $event
     * @return void
     */
    public function handle(LoginEvent $event)
    {
        broadcast(new BroadcastUserLogined($event->user));
    }

}
