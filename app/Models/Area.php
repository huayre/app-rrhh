<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    public function personas() 
    {
        return $this->hasMany(Persona::class);
    }
}
