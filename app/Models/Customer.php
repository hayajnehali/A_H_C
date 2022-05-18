<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public function Contract(){
        return $this->hasMany("App\Contract");
    }

    public function Payment(){
        return $this->hasMany("App\Payment");
    }
}
