<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function getUser(Request $request){
        $validator = Validator::make($request->all(),[
            'email'         => 'required'
        ]);

        if ($validator->fails()) {
            return returnValidationError($validator->errors(), 'Request failed');
        }
        return UserService::getUser(sanitize_input($request->email));
    }

}
