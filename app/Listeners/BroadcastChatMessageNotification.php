<?php

namespace App\Listeners;

use App\Events\ChatReceveid;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class BroadcastChatMessageNotification
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
    public function handle(ChatReceveid $event)
    {
        Log::debug("Mensagem test broadcast Event");
        Log::debug("{$event->message()}");

        return $event;
    }
}
