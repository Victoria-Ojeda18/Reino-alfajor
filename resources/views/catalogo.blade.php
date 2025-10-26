@extends('layouts.app')

@section('title', 'Catálogo de Productos')

@section('content')
<section class="py-16">
    <div class="container mx-auto px-4">
        <h1 class="text-5xl font-bold text-center text-amber-900 mb-4">Nuestros Alfajores</h1>
        <p class="text-xl text-center text-gray-700 mb-12">
            Descubrí nuestra variedad de sabores artesanales
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($productos as $producto)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                <!-- Imagen del producto -->
                <img 
                    src="{{ $producto['imagen'] }}" 
                    alt="{{ $producto['nombre'] }}" 
                    class="w-full h-64 object-cover"
                >
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-amber-900 mb-2">{{ $producto['nombre'] }}</h3>
                    <p class="text-gray-700 mb-4">{{ $producto['descripcion'] }}</p>
                    <div class="flex justify-between items-center">
                        <span class="text-3xl font-bold text-amber-900">{{ $producto['precio'] }}</span>
                        <a href="{{ route('contacto') }}" class="bg-amber-900 text-white px-6 py-2 rounded-lg hover:bg-amber-800 transition">
                            Pedir
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <p class="text-lg text-gray-700 mb-4">¿Querés hacer un pedido personalizado?</p>
            <a href="{{ route('contacto') }}" class="inline-block bg-amber-900 text-white px-8 py-3 rounded-lg hover:bg-amber-800 transition text-lg font-semibold">
                Contactanos
            </a>
        </div>
    </div>
</section>
@endsection