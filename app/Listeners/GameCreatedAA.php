<?php

namespace App\Listeners;

use App\Events\GameCreated;
use Barryvdh\Debugbar\LaravelDebugbar;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class GameCreatedAA
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
     * @param  GameCreated  $event
     * @return void
     */
    public function handle(GameCreated $event)
    {
        // dd('Сработало событие - '.__METHOD__);
    }
}
