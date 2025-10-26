<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    // Mostrar formulario de contacto
    public function index()
    {
        return view('contacto');
    }

    // Procesar el formulario
    public function enviar(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email',
            'telefono' => 'required|string|max:20',
            'mensaje' => 'required|string',
        ]);

        // Aquí puedes enviar un correo, guardar en base de datos, etc.
        // Por ahora, solo redirigimos con mensaje de éxito
        return back()->with('success', '¡Gracias por tu mensaje! Nos pondremos en contacto pronto.');
    }
}