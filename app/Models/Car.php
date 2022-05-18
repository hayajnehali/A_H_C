<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $primaryKey = "car_id";
    public function car_type(){
        return $this->belongsTo("App\Car_type");
    }
    public function User(){
        return $this->belongsTo("App\User");
    }
}
