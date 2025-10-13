<?php

namespace App\Http\Controllers;

class CatalogoController extends Controller
{
    public function index()
    {
        $productos = [
            [
                'nombre' => 'Alfajor de Dulce de Leche',
                'descripcion' => 'Clásico alfajor con dulce de leche artesanal',
                'precio' => '$150',
                'imagen' => '/images/alfajor-dulce-leche.jpg'
            ],
            [
                'nombre' => 'Alfajor de Chocolate',
                'descripcion' => 'Cubierto con chocolate belga premium',
                'precio' => '$180',
                'imagen' => '/images/alfajor-chocolate.jpg'
            ],
            [
                'nombre' => 'Alfajor de Maicena',
                'descripcion' => 'Suave y delicado, tradición argentina',
                'precio' => '$140',
                'imagen' => '/images/alfajor-maicena.jpg'
            ],
        ];

        return view('catalogo', compact('productos'));
    }
}