<?php

namespace App\Listeners;

use App\Events\TourCreated;
use App\Models\User;
use App\Notifications\NewTour;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendTourCreatedNotifications implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(TourCreated $event): void
    {
        foreach (User::whereNot('id', $event->tour->user_id)->cursor() as $user) {

            $user->notify(new NewTour($event->tour));

        }
    }
}
