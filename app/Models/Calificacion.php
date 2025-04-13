<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    use HasFactory;
    protected $fillable = ['calificacion'];
    public function audios(){
        return $this->hasMany(Audio::class, 'id');
    }
}
