<?php
namespace App\Services;

use App\Models\User;

class UserService
{
    public static function createUser(object $data){
        $user = new User;

        $user->email = sanitize_input($data->email) ;
        $user->first_name = sanitize_input($data->first_name);
        $user->last_name = sanitize_input($data->last_name);
        $user->phone = sanitize_input($data->phone);
        $user->telegram_phone = sanitize_input($data->telegram_phone);

        $user->save();

        return  $user;
    }

    public static function getUser($email){
        
        return json_encode(User::where('email', $email)->first());
    }
}