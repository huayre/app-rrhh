<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacante extends Model
{


    use HasFactory;
    protected $table = 'vacantes';
    protected $fillable = [
        'nombre',
        'cantidad',
        'fecha_limite',
        'requisitos',
        'responsabilidades',
        'beneficios',
        
        'tipo_puesto',
        'area_id'
        
    ];
    public function area() {
        return $this->belongsTo(Area::class);
    }
}
