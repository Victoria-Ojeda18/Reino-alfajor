<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FabricaController extends Controller
{
    public function index()
    {
        $proceso = [
            [
                'titulo' => 'Selección de Ingredientes',
                'descripcion' => 'Utilizamos solo los mejores ingredientes: dulce de leche casero, harina de primera calidad y manteca artesanal.'
            ],
            [
                'titulo' => 'Preparación de la Masa',
                'descripcion' => 'Nuestra masa se prepara diariamente con recetas tradicionales transmitidas por generaciones.'
            ],
            [
                'titulo' => 'Cocción Artesanal',
                'descripcion' => 'Horneamos en lotes pequeños para garantizar la textura perfecta en cada alfajor.'
            ],
            [
                'titulo' => 'Relleno y Cobertura',
                'descripcion' => 'Rellenamos a mano y cubrimos con chocolate premium o azúcar impalpable según la variedad.'
            ],
            [
                'titulo' => 'Empaque Final',
                'descripcion' => 'Cada alfajor se empaca cuidadosamente para preservar su frescura hasta llegar a tu hogar.'
            ]
        ];

        return view('fabrica', compact('proceso'));
    }
}