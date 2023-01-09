<?php
namespace App\Services;

use App\Event\ApplicationPaymentCompleted;
use App\Models\Payment;

class NotificationService
{
    public static function NewApplicationMailUsingPayment($payment_id){
       
        $payment = Payment::with('application')->where('id', $payment_id)->first();
        
        ApplicationPaymentCompleted::dispatch($payment->application);
    }
}