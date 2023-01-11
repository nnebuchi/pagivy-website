<?php

namespace App\Listeners;

use App\Event\ApplicationPaymentCompleted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendApplicationDetailMails;

class SendApplicationDetailToAdmin
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
     * @param  \App\Event\ApplicationPaymentCompleted  $event
     * @return void
     */
    public function handle(ApplicationPaymentCompleted $event)
    {
        Mail::to(env('APPLICATION_RECEPIENT_MAIL'))->send(new SendApplicationDetailMails($event->application));
    }
}
