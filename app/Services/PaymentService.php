<?php
namespace App\Services;

use App\Event\ApplicationPaymentCompleted;
use App\Models\Payment;
use Exception;
use Throwable;

class PaymentService

{
    
    public static function pay($request){
        $paystack_sec_key = env('PAYSTACK_SEC_KEY');
        $callback_url = route('verify-paystack-pay');

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/initialize",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,

            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode([
                'amount' => $request->amount*100,
                'email' => $request->email,
                'callback_url' => $callback_url,
                'metadata' => ['payment_reference'=>$request->reference, 'purpose'=>$request->purpose],
            ]),

            CURLOPT_HTTPHEADER => [
                "authorization: Bearer ". $paystack_sec_key, //replace this with your own test key
                "content-type: application/json",
                "cache-control: no-cache"
            ],
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        if ($err) {
            // there was an error contacting the Paystack API
            die('Curl returned error: ' . $err);
        }

        $tranx = json_decode($response, true);
        if (!$tranx['status']) {
            // there was an error from the API
            dd('API returned error: ' . $tranx['message']);
        }

        return redirect($tranx['data']['authorization_url']);
    }

    public static function verifyPay($request){
        
        $paystack_sec_key = env('PAYSTACK_SEC_KEY');
        
        $curl = curl_init();
        $reference = isset($_GET['reference']) ? $_GET['reference'] : '';
        if (!$reference) {
            die('No reference supplied');
        }
        
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_HTTPHEADER => [
                "accept: application/json",
                "authorization: Bearer ".$paystack_sec_key,
                "cache-control: no-cache"
            ],
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        if ($err) {
            // there was an error contacting the Paystack API
            die('Curl returned error: ' . $err);
        }
    
        $tranx = json_decode($response, true);
    
        
        // dd($tranx);
        if (!$tranx['status']) {
            // there was an error from the API
            die('API returned error: ' . $tranx->message);
        }
    
        if ('success' == $tranx['data']['status']) {
            if($tranx['data']['metadata']['purpose'] === 'agency_application'){
                try {
                    $payment_id = self::markPaymentSuccess($tranx['data']['metadata']['payment_reference']);
                    
                    AgencyService::updateApplication($payment_id, [
                        'payment_status'=>'paid'
                    ]);
                } catch (Exception $e) {
                    throw new Exception($e, 1);
                    
                    // Session([
                    //     'msg'=>$e,
                    //     'alert'=>'danger'
                    // ]);
                }

                
                
            };
            
            NotificationService::NewApplicationMailUsingPayment($payment_id);
            Session([
                'msg'=>'Payment Successful. We will reach you soon',
                'alert'=>'success'
            ]);
            // dd("Payment Succesful");
            
    
            return redirect()->route('home');
            // return redirect()->route('user.order',$tranx['data']['metadata']['order_no'])->with('success', 'Your payment was successful');
            // transaction was successful...
            // please check other things like whether you already gave value for this ref
            // if the email matches the customer who owns the product etc
            // Give value
    
    
        }else{
            Session([
                'msg'=>'Payment Failed',
                'alert'=>'danger'
            ]);
            return redirect()->route('home'); 
        }
    }

    private static function markPaymentSuccess($reference){
        $payment = Payment::where('reference', $reference)->first();
        if(!$payment){
            return false;
        }
        $payment->status = 'success';
        $payment->save();
        return $payment->id;
    }

    public static function initiatePayment(array $data){
        // dd($data);
        $payment  = new Payment();
        foreach($data as $key=>$dd){
            $payment->{$key} = $dd;
        }
        $payment->save();
        return $payment; 
    }

}
