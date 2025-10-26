@extends('layouts.app')

@section('title', 'Inicio - Reino alfajor')

@section('content')
<section class="hero-pattern py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-5xl md:text-6xl font-bold text-amber-900 mb-6">
            Reino alfajor
        </h1>
        <p class="text-xl md:text-2xl text-amber-800 mb-8">
            Tradición argentina en cada bocado
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('catalogo') }}" class="bg-amber-900 text-white px-8 py-3 rounded-lg hover:bg-amber-800 transition text-lg font-semibold">
                Ver Catálogo
            </a>
            @auth
                <a href="{{ route('pedidos') }}" class="bg-white text-amber-900 px-8 py-3 rounded-lg hover:bg-amber-100 transition text-lg font-semibold border-2 border-amber-900">
                    Hacer Pedido
                </a>
            @else
                <a href="{{ route('login') }}" class="bg-white text-amber-900 px-8 py-3 rounded-lg hover:bg-amber-100 transition text-lg font-semibold border-2 border-amber-900">
                    Hacer Pedido
                </a>
            @endauth
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-amber-900 mb-12">¿Por qué elegirnos?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center p-6">
                <div class="text-6xl mb-4">🥇</div>
                <h3 class="text-2xl font-bold text-amber-900 mb-3">Calidad Premium</h3>
                <p class="text-gray-700">Ingredientes seleccionados de la más alta calidad</p>
            </div>
            <div class="text-center p-6">
                <div class="text-6xl mb-4">👨‍🍳</div>
                <h3 class="text-2xl font-bold text-amber-900 mb-3">Te guiamos</h3>
                <p class="text-gray-700">Contactate con nosotros y te damos un guiado profesional por las mejores fábricas de alfajores.</p>
            </div>
            <div class="text-center p-6">
                <div class="text-6xl mb-4">🚚</div>
                <h3 class="text-2xl font-bold text-amber-900 mb-3">Envíos Rápidos</h3>
                <p class="text-gray-700">Entregamos frescura a tu puerta</p>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-amber-100">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-amber-900 mb-6">
            ¿Listo para probar nuestros alfajores?
        </h2>
        <p class="text-xl text-amber-800 mb-8">
            Hacé tu pedido ahora y disfrutá de la mejor calidad
        </p>
        <a href="{{ route('pedidos') }}" class="inline-block bg-amber-900 text-white px-10 py-4 rounded-lg hover:bg-amber-800 transition text-lg font-semibold">
            Solicitar Alfajores
        </a>
    </div>
</section>
@endsection