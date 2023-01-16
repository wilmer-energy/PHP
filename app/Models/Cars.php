<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Partes;

class Cars extends Model
{
    use HasFactory;
    protected $fillable=['brand','email'];
    public function parte(){
        return $this->hasOne(Partes::class);
    }
}
