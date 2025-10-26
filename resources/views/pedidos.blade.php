@extends('layouts.app')

@section('title', 'Mis Pedidos - Reino Alfajor')

@section('content')
<section class="py-16 bg-amber-50">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl md:text-5xl font-bold text-amber-900 mb-6 text-center">
            Hola, {{ Auth::user()->name }} 🍪
        </h1>

        @if(session('success'))
            <div class="max-w-2xl mx-auto mb-8">
                <p class="bg-green-100 text-green-800 px-4 py-3 rounded-lg text-center">
                    {{ session('success') }}
                </p>
            </div>
        @endif

        <!-- Formulario de nuevo pedido -->
        <div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-md mb-12">
            <h2 class="text-2xl font-bold text-amber-900 mb-6 text-center">Hacer un nuevo pedido</h2>
            <form method="POST" action="{{ route('pedidos') }}">
                @csrf
                <div class="mb-6">
                    <label class="block text-amber-900 font-semibold mb-2">Tipo de alfajor:</label>
                    <select name="tipo_alfajor" required class="w-full px-4 py-2 border border-amber-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500">
                        <option value="Chocolate Blanco">Chocolate Blanco</option>
                        <option value="Maicena">Maicena</option>
                        <option value="Chocolate Negro">Chocolate Negro</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label class="block text-amber-900 font-semibold mb-2">Cantidad:</label>
                    <input type="number" name="cantidad" min="1" required class="w-full px-4 py-2 border border-amber-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500">
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-amber-900 text-white px-8 py-3 rounded-lg hover:bg-amber-800 transition text-lg font-semibold w-full sm:w-auto">
                        Hacer pedido
                    </button>
                </div>
            </form>
        </div>

        <!-- Lista de pedidos -->
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl font-bold text-amber-900 mb-6 text-center">Mis pedidos</h2>
            
            @forelse($pedidos as $pedido)
                <div class="bg-white p-4 rounded-lg shadow-sm mb-4 flex justify-between items-center">
                    <div>
                        <span class="font-semibold text-amber-900">{{ $pedido->cantidad }} x {{ $pedido->tipo_alfajor }}</span>
                    </div>
                    <div class="text-gray-600">
                        {{ $pedido->created_at->format('d/m/Y H:i') }}
                    </div>
                </div>
            @empty
                <div class="bg-white p-8 rounded-xl shadow-sm text-center">
                    <p class="text-gray-600 text-lg">No tienes pedidos aún.</p>
                </div>
            @endforelse
        </div>

        <!-- Botón de cerrar sesión -->
        <div class="max-w-xs mx-auto mt-12">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full bg-gray-200 text-amber-900 px-6 py-3 rounded-lg hover:bg-gray-300 transition font-semibold">
                    Cerrar sesión
                </button>
            </form>
        </div>
    </div>
</section>
@endsection