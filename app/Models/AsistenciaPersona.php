<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsistenciaPersona extends Model
{
    use HasFactory;
    protected $table = 'persona_asistencia';
    protected $fillable = [
        'persona_id',
        'asistencia_id',
    ];
}
