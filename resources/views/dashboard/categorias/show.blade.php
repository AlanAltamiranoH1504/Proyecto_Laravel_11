@extends('dashboard.layout')

@section('header')
    <h1 class="text-center text-3xl font-bold text-gray-800 my-6">Detalles de Categoría</h1>
@endsection

@section('body')
    <div class="max-w-lg mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
        {{-- Encabezado de Detalles --}}
        <div class="bg-blue-500 p-6">
            <h2 class="text-center text-2xl font-semibold text-white">Información de la Categoría</h2>
        </div>

        {{-- Formulario de Detalles (Solo lectura por defecto) --}}
        <form method="POST" class="p-6 space-y-6">
            @csrf

            {{-- Campo Title --}}
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Título</label>
                <input type="text" name="title" id="title" value="{{ $categoria->title }}" readonly
                       class="mt-1 w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            {{-- Campo Slug --}}
            <div>
                <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                <input type="text" name="slug" id="slug" value="{{ $categoria->slug }}" readonly
                       class="mt-1 w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
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

@section('footer')
    <footer class="text-center mt-12 py-6 bg-gray-100 text-gray-600 border-t">
        <p>Alan Altamirano Hernández - Diciembre 2024</p>
    </footer>
@endsection
