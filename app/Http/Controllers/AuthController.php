<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pedido;
use App\Mail\NuevoPedido;           // ← nuevo
use App\Mail\ConfirmacionPedido;    // ya lo tenías
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail; // ← nuevo
class AuthController extends Controller
{
    // Mostrar formulario de registro
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Procesar registro
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);
        return redirect('/pedidos')->with('success', '¡Bienvenido al Club del Alfajor!');
    }

    // Mostrar formulario de login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Procesar login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/pedidos');
        }

        return back()->withErrors(['email' => 'Email o contraseña incorrectos.']);
    }

    // Cerrar sesión
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    // Mostrar la página de pedidos del usuario
    public function showPedidos()
    {
        // Carga los pedidos usando la relación 'pedidos' del modelo User
        $pedidos = Auth::user()->pedidos;
        return view('pedidos', compact('pedidos'));
    }

    // Guardar un nuevo pedido
    // Guardar un nuevo pedido
public function storePedido(Request $request)
{
    $request->validate([
        'tipo_alfajor' => 'required|string|max:100',
        'cantidad' => 'required|integer|min:1',
    ]);

    // Guardamos el pedido y lo guardamos en una variable
    $pedido = Pedido::create([
            'user_id' => Auth::id(),
            'tipo_alfajor' => $request->tipo_alfajor,
            'cantidad' => $request->cantidad,
        ]);

        // 📩 Enviar correo a la administradora (a ti)
        Mail::to('victoriaojeda@epet12smandes.edu.ar')->send(new NuevoPedido($pedido));

        // 📩 Enviar correo al usuario
        Mail::to(Auth::user()->email)->send(new ConfirmacionPedido($pedido));

        return back()->with('success', 'Pedido realizado con éxito 🍫');
    }

    
}