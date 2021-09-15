<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'personas';
    protected $fillable = [
        'nombre',
        'apellido',
        'num_dni',
        'direccion',
        'num_celular',
        'correo',
        'url_linkedin',
        'url_copia_dni',
        'salario',
        'fecha_nacimiento',
        'avatar',
        'tipo_persona',
        'area_id',
        'vacante_id'
    ];

    public function area() {
        return $this->belongsTo(Area::class);
    }
}
