<?php

namespace App\Listeners;

use App\Events\FancyEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendPodcastNotification
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
     * @param  \App\Events\FancyEvent  $event
     * @return void
     */
    public function handle(FancyEvent $event)
    {
        //
    }
}
