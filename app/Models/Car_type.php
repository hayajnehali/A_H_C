<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Car_type extends Model
{
    use HasFactory;
    public function cars(){
        return $this->hasMany("App\car");
    }
}
