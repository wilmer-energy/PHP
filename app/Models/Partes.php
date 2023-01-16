<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cars;

class Partes extends Model
{
    use HasFactory;
    public function car(){
        return $this->belongsTo(Cars::class);
    }
}
