@extends('layouts.app')

@section('title', 'Registro - Reino Alfajor')

@section('content')
<section class="py-16 bg-amber-50">
    <div class="container mx-auto px-4">
        <div class="max-w-md mx-auto">
            <h1 class="text-4xl font-bold text-center text-amber-900 mb-8">
                ¡Asociate al Club del Alfajor! 🍪
            </h1>

            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-6 text-center">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6 text-center">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white p-8 rounded-xl shadow-md">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-6">
                        <label for="name" class="block text-amber-900 font-semibold mb-2">Nombre</label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            value="{{ old('name') }}" 
                            class="w-full px-4 py-2 border border-amber-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500"
                            required
                        >
                    </div>

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
                        <label for="password" class="block text-amber-900 font-semibold mb-2">Contraseña (mínimo 8 caracteres)</label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            class="w-full px-4 py-2 border border-amber-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500"
                            required
                        >
                    </div>

                    <div class="mb-6">
                        <label for="password_confirmation" class="block text-amber-900 font-semibold mb-2">Confirmar Contraseña</label>
                        <input 
                            type="password" 
                            id="password_confirmation" 
                            name="password_confirmation" 
                            class="w-full px-4 py-2 border border-amber-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500"
                            required
                        >
                    </div>

                    <div class="mb-6 flex items-start">
                        <input 
                            type="checkbox" 
                            name="acepta_directrices" 
                            id="acepta_directrices"
                            class="mt-1 mr-2 h-4 w-4 text-amber-600 focus:ring-amber-500 border-gray-300 rounded"
                            required
                        >
                        <label for="acepta_directrices" class="text-gray-700">
                            Acepto las <a href="/directrices" target="_blank" class="text-amber-900 hover:text-amber-800 font-semibold">directrices del Club</a> y quiero recibir alfajores mensuales.
                        </label>
                    </div>

                    <div class="text-center">
                        <button 
                            type="submit" 
                            class="w-full bg-amber-900 text-white px-8 py-3 rounded-lg hover:bg-amber-800 transition text-lg font-semibold"
                        >
                            Registrarme y asociarme
                        </button>
                    </div>
                </form>
            </div>

            <p class="text-center text-gray-600 mt-6">
                ¿Ya tenés cuenta? <a href="{{ route('login') }}" class="text-amber-900 hover:text-amber-800 font-semibold">Iniciá sesión aquí</a>
            </p>
        </div>
    </div>
</section>
@endsection