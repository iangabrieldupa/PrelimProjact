<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function course(){
        return $this->belongsTo('App\Course');
    }
}
