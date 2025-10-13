@extends('layouts.app')

@section('title', 'Iniciar Sesión')

@section('content')
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-lg p-8">
            <h1 class="text-3xl font-bold text-center text-amber-900 mb-8">Iniciar Sesión</h1>
            
            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        value="{{ old('email') }}"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-amber-900"
                        required
                    >
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-gray-700 font-bold mb-2">Contraseña</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-amber-900"
                        required
                    >
                </div>

                <button 
                    type="submit" 
                    class="w-full bg-amber-900 text-white py-3 rounded-lg hover:bg-amber-800 transition font-semibold text-lg"
                >
                    Ingresar
                </button>
            </form>

            <p class="text-center text-gray-600 mt-6">
                Ingresá para acceder al formulario de pedidos
            </p>
        </div>
    </div>
</section>
@endsection