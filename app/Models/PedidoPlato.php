<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoPlato extends Model
{
    use HasFactory;
    protected $fillable = [
        'pedido_id',
        'plato_id',
        'cantidad',
        'precio'
    ];
}
