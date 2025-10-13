<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMail;

class ContactoController extends Controller
{
    public function index()
    {
        return view('contacto');
    }

    public function enviar(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'telefono' => 'required|string|max:20',
            'cantidad' => 'required|integer|min:1',
            'tipo' => 'required|string',
            'mensaje' => 'nullable|string|max:1000',
        ]);

        try {
            Mail::to(env('ADMIN_EMAIL'))->send(new ContactoMail($validated));
            return back()->with('success', '¡Solicitud enviada! Te contactaremos pronto.');
        } catch (\Exception $e) {
            return back()->with('error', 'Error al enviar: ' . $e->getMessage());
        }
    }
}