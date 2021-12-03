<?php

namespace App\Http\Controllers;
use App\Models\Money;
use Illuminate\Http\Request;
class ConfiController extends Controller
{
    public  function inicio() {
        $money = Money::all();
        return view('configuracion.index')->with(['money' => $money]);
    }
}
