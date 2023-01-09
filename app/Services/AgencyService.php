<?php
namespace App\Services;

use App\Models\Application;
use App\Models\User;
use App\Models\Phase;
use App\Models\Payment;
use Illuminate\Support\Str;

class AgencyService
{
    public static function createApplication($request){
        $user = UserService::getUser(sanitize_input($request->email));
        $user = json_decode($user);
        if($user == null){
            $user = UserService::createUser($request); 
        }
        
        $app = new Application();
        // $user = User::where('email', sanitize_input($data->email))->first();
        
        $app->user_id = $user->id;
        $app->agency_id = sanitize_input($request->agency_id);
        $app->phase_id = sanitize_input($request->phase_id);
        $app->mode = sanitize_input($request->mode);
        $app->save();

        $phase = Phase::where('id',  $app->phase_id)->first();
        // dd($phase->{$request->mode.'_mode_price'});
        // dd($request->mode);
        $payment_array = [
            'email'=>$user->email,
            'amount'=>$phase->{$request->mode.'_mode_price'},
            'reference'=>Str::random(30),
            'purpose'=>'agency_application',
        ];
        $payment_data = (object) $payment_array;

        PaymentService::initiatePayment([
            'user_id'=>$user->id,
            'application_id'=>$app->id,
            'amount'=>$payment_array['amount'],
            'reference'=>$payment_array['reference']
        ]);
        
        return PaymentService::pay($payment_data);
        
    }

    public static function updateApplication(int $pament_id, array $data){
        $payment = Payment::with('application')->where('id', $pament_id)->first();
        $application = $payment->application;
        foreach($data as $key=>$value){
            $application->{$key} = $value;
        }
        $application->save();
    }
}