@extends('dashboard.layout')

{{-- Cabecera --}}
@section('header')
    <h1 class="text-center text-3xl font-extrabold text-gray-800 my-6">Manejo de Formularios con CRUD y MVC</h1>
@endsection

{{-- Cuerpo --}}
@section('body')
    <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
        {{-- Título --}}
        <div class="bg-blue-500 p-6">
            <h2 class="text-center text-2xl font-semibold text-white">Crear Nueva Categoría</h2>
        </div>

        {{-- Mensajes de error --}}
        @include('dashboard.fragment.erroresFormulario')

        {{-- Formulario --}}
        <form method="POST" action="{{ action([\App\Http\Controllers\Dashboard\CategoriaController::class, 'store']) }}" class="p-6 space-y-6">
            @csrf

            {{-- Campo Title --}}
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Título</label>
                <input type="text" name="title" id="title" placeholder="Ingresa el título"
                       class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            {{-- Campo Slug --}}
            <div>
                <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                <input type="text" name="slug" id="slug" placeholder="Ingresa el slug"
                       class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            {{-- Botón Enviar --}}
            <div>
                <button type="submit"
                        class="w-full px-4 py-2 bg-blue-600 text-white font-semibold text-sm uppercase rounded-lg hover:bg-blue-700 shadow-md transition">
                    Crear Categoría
                </button>
            </div>
        </form>
    </div>

    {{-- Botón para regresar al listado --}}
    <div class="text-center mt-6">
        <a href="{{ action([\App\Http\Controllers\Dashboard\CategoriaController::class, 'index']) }}"
           class="inline-block px-6 py-2 bg-green-600 text-white font-semibold text-sm uppercase rounded-lg shadow hover:bg-green-700 transition">
            Volver al Listado
        </a>
    </div>
@endsection

{{-- Footer --}}
@section('footer')
    <footer class="text-center mt-12 py-6 bg-gray-100 text-gray-600 border-t">
        <p>Alan Altamirano Hernández - Diciembre 2024</p>
    </footer>
@endsection
