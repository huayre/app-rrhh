<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'persona_id',
        'monto',
        'hora_entrega',
    ];
    public function persona() {
        return $this->belongsTo(Persona::class);
    }

}
