<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    public function payment(){
        return $this->hasOne(Payment::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function agency(){
        return $this->belongsTo(Agency::class);
    }

    public function phase(){
        return $this->belongsTo(Phase::class);
    }
}
