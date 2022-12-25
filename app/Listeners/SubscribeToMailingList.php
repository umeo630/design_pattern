<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use App\Models\MailingList;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SubscribeToMailingList
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
     * メルマガ登録処理
     *
     * @param  \App\Events\UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        MailingList::create([
            'email' => $event->user->email
        ]);
    }
}
