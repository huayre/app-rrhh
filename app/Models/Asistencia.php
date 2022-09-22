<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;
    protected $fillable = [
        'dia'
    ];

    public function personas()
    {
        return $this->belongsToMany(Persona::class);
    }
}
