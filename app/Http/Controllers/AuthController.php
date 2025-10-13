<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        if (session()->has('authenticated')) {
            return redirect()->route('contacto');
        }
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $adminEmail = env('ADMIN_EMAIL');
        $adminPassword = env('ADMIN_PASSWORD');

        if ($request->email === $adminEmail && $request->password === $adminPassword) {
            session(['authenticated' => true, 'user_email' => $request->email]);
            return redirect()->route('contacto')->with('success', '¡Bienvenido!');
        }

        return back()->withErrors(['email' => 'Credenciales incorrectas'])->withInput();
    }

    public function logout()
    {
        session()->forget(['authenticated', 'user_email']);
        return redirect()->route('inicio')->with('success', 'Sesión cerrada correctamente');
    }
}