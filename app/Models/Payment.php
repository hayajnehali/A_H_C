<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    public function Customer(){
        return $this->belongsTo("App\Customer");
    }

public function Contract(){
    return $this->hasMany("App\Contract");
    }

}
