@extends('layouts.app')

@section('title', 'Iniciar Sesión - Reino Alfajor')

@section('content')
<section class="py-16 bg-amber-50">
    <div class="container mx-auto px-4">
        <div class="max-w-md mx-auto">
            <h1 class="text-4xl font-bold text-center text-amber-900 mb-8">
                Iniciar Sesión
            </h1>

            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-6 text-center">
                    <ul class="list-disc list-inside">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="bg-white p-8 rounded-xl shadow-md">
                <form action="{{ route('login.post') }}" method="POST">
                    @csrf

                    <div class="mb-6">
                        <label for="email" class="block text-amber-900 font-semibold mb-2">Email</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="{{ old('email') }}"
                            class="w-full px-4 py-2 border border-amber-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500"
                            required
                        >
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block text-amber-900 font-semibold mb-2">Contraseña</label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            class="w-full px-4 py-2 border border-amber-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500"
                            required
                        >
                    </div>

                    <div class="text-center">
                        <button 
                            type="submit" 
                            class="w-full bg-amber-900 text-white px-8 py-3 rounded-lg hover:bg-amber-800 transition text-lg font-semibold"
                        >
                            Ingresar
                        </button>
                    </div>
                </form>
            </div>

            <p class="text-center text-gray-600 mt-6">
                Ingresá para acceder al formulario de pedidos
            </p>

            <div class="text-center mt-6">
                <a href="{{ route('register') }}" class="text-amber-900 hover:text-amber-800 font-semibold">
                    ¿No tenés cuenta? Registrate
                </a>
            </div>
        </div>
    </div>
</section>
@endsection