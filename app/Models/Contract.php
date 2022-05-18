<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;
    public function Customer(){
        return $this->belongsTo("App\Customer");
    }
    public function Payment(){
        return $this->belongsTo("App\Payment");
    }
}
