<?php

namespace App\Http\Controllers;

class FabricaController extends Controller
{
    public function index()
    {
        $proceso = [
            ['titulo' => 'Selección de Ingredientes', 'descripcion' => 'Elegimos los mejores ingredientes naturales'],
            ['titulo' => 'Elaboración Artesanal', 'descripcion' => 'Cada alfajor es hecho a mano con dedicación'],
            ['titulo' => 'Control de Calidad', 'descripcion' => 'Verificamos que cada producto sea perfecto'],
            ['titulo' => 'Empaque y Distribución', 'descripcion' => 'Empacamos con cuidado para mantener la frescura'],
        ];

        return view('fabrica', compact('proceso'));
    }
}