<?php

namespace App\Http\Controllers;

use App\Services\PaymentService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function pay(Request $request){
        // dd($request);
        return PaymentService::pay($request);
    }

    public function verifyPay(Request $request){
        return PaymentService::verifyPay($request);
    }
}
