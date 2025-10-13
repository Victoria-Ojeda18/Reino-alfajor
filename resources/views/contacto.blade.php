@extends('layouts.app')

@section('title', 'Solicitar Alfajores')

@section('content')
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg p-8">
            <h1 class="text-4xl font-bold text-center text-amber-900 mb-4">Solicitar Alfajores</h1>
            <p class="text-center text-gray-700 mb-8">
                Completá el formulario y te contactaremos a la brevedad
            </p>

            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('contacto.enviar') }}" method="POST">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre Completo *</label>
                        <input 
                            type="text"
                            id="nombre"
                            name="nombre"
                            value="{{ old('nombre') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-amber-900"
                            required
                        >
                    </div>

                    <div>
                        <label for="email" class="block text-gray-700 font-bold mb-2">Email *</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="{{ old('email') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-amber-900"
                            required
                        >
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="telefono" class="block text-gray-700 font-bold mb-2">Teléfono *</label>
                        <input 
                            type="tel" 
                            id="telefono" 
                            name="telefono" 
                            value="{{ old('telefono') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-amber-900"
                            required
                        >
                    </div>

                    <div>
                        <label for="tipo" class="block text-gray-700 font-bold mb-2">Tipo de Alfajor *</label>
                        <select 
                            id="tipo" 
                            name="tipo" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-amber-900"
                            required
                        >
                            <option value="">Seleccionar...</option>
                            <option value="Dulce de Leche" {{ old('tipo') == 'Dulce de Leche' ? 'selected' : '' }}>Dulce de Leche</option>
                            <option value="Chocolate" {{ old('tipo') == 'Chocolate' ? 'selected' : '' }}>Chocolate</option>
                            <option value="Maicena" {{ old('tipo') == 'Maicena' ? 'selected' : '' }}>Maicena</option>
                            <option value="Mixto" {{ old('tipo') == 'Mixto' ? 'selected' : '' }}>Mixto</option>
                        </select>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="cantidad" class="block text-gray-700 font-bold mb-2">Cantidad (unidades) *</label>
                    <input 
                        type="number" 
                        id="cantidad" 
                        name="cantidad" 
                        value="{{ old('cantidad', 12) }}"
                        min="1"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-amber-900"
                        required
                    >
                </div>

                <div class="mb-6">
                    <label for="mensaje" class="block text-gray-700 font-bold mb-2">Mensaje Adicional</label>
                    <textarea 
                        id="mensaje" 
                        name="mensaje" 
                        rows="4"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-amber-900"
                    >{{ old('mensaje') }}</textarea>
                </div>

                <button 
                    type="submit" 
                    class="w-full bg-amber-900 text-white py-4 rounded-lg hover:bg-amber-800 transition font-semibold text-lg"
                >
                    Enviar Solicitud
                </button>
            </form>
        </div>
    </div>
</section>
@endsection