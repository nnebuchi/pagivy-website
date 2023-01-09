<?php

namespace App\Http\Controllers;

use App\Services\AgencyService;
use App\Services\UserService;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function createApplication(Request $request){
        $request->validate([
            'email'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'phone'=>'required|max:11|min:11',
            'telegram_phone'=>'max:11|min:11',
            'mode'=>'required',
        ]);
        // dd($request);

        
        return AgencyService::createApplication($request);
        
    }
}
