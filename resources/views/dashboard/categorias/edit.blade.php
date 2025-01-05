@extends('dashboard.layout')

@section('header')
    <h1 class="text-center text-3xl font-bold text-gray-800 my-6">Edición de Categoría</h1>
@endsection

@section('body')
    @include('dashboard.fragment.erroresFormulario')

    <h2 class="text-center text-xl font-semibold text-gray-700 mb-6">Formulario de Actualización de Categoría</h2>

    {{-- Formulario de actualización de categoría --}}
    <div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-md">
        <form method="post" action="{{action([\App\Http\Controllers\Dashboard\CategoriaController::class, 'update'], ['categoria' => $categoria->id])}}">
            @method('PUT')
            @csrf

            {{-- Campo para el título --}}
            <div class="mb-4">
                <label for="title" class="block text-sm font-semibold text-gray-700">Title</label>
                <input type="text" name="title" value="{{$categoria->title}}" class="w-full p-2 border border-blue-300 rounded-md" />
            </div>

            {{-- Campo para el slug --}}
            <div class="mb-4">
                <label for="slug" class="block text-sm font-semibold text-gray-700">Slug</label>
                <input type="text" name="slug" value="{{$categoria->slug}}" class="w-full p-2 border border-blue-300 rounded-md" />
            </div>

            {{-- Botón de enviar --}}
            <div class="text-center mt-6">
                <button type="submit" class="px-6 py-3 bg-blue-600 text-white font-semibold text-sm uppercase rounded-lg shadow hover:bg-blue-700 transition">
                    Actualizar
                </button>
            </div>
        </form>
    </div>

    {{-- Enlace al listado de categorías --}}
    <div class="text-center mt-6">
        <a href="{{action([\App\Http\Controllers\Dashboard\CategoriaController::class, 'index'])}}"
           class="inline-block px-6 py-3 bg-green-600 text-white font-semibold text-sm uppercase rounded-lg shadow hover:bg-green-700 transition">
            Ir a Listado
        </a>
    </div>
@endsection

@section('footer')
    <footer class="text-center mt-12 py-6 bg-gray-100 text-gray-600 border-t">
        <p>Alan Altamirano Hernández - Diciembre 2024</p>
    </footer>
@endsection
