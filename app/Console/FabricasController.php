<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FabricasController extends Controller
{
    public function index()
    {
        return view('fabricas'); // ← Crearemos esta vista
    }
}