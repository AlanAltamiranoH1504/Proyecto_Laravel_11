@extends('dashboard.layout')

@section('header')
    <h1 class="text-center text-3xl font-bold text-gray-800 my-6">Detalles de Entidad</h1>
@endsection

@section('body')
    @if($post != null)
        {{-- Tabla de Detalles --}}
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                <thead class="bg-blue-500 text-white">
                <tr>
                    <th class="px-4 py-2 text-left">ID</th>
                    <th class="px-4 py-2 text-left">Título</th>
                    <th class="px-4 py-2 text-left">Slug</th>
                    <th class="px-4 py-2 text-left">Descripción</th>
                    <th class="px-4 py-2 text-left">Contenido</th>
                    <th class="px-4 py-2 text-left">Imagen</th>
                    <th class="px-4 py-2 text-left">Publicado</th>
                    <th class="px-4 py-2 text-left">ID Categoría</th>
                    <th class="px-4 py-2 text-left">Acciones</th>
                </tr>
                </thead>
                <tbody class="text-center text-sm">
                <tr>
                    <td class="border px-4 py-3">{{ $post->id }}</td>
                    <td class="border px-4 py-3">{{ $post->title }}</td>
                    <td class="border px-4 py-3">{{ $post->slug }}</td>
                    <td class="border px-4 py-3">{{ $post->description }}</td>
                    <td class="border px-4 py-3">{{ $post->content }}</td>
                    <td class="border px-4 py-3">{{ $post->image }}</td>
                    <td class="border px-4 py-3">{{ $post->posted }}</td>
                    <td class="border px-4 py-3">{{ $post->categoria_id }}</td>
                    <td class="border px-4 py-3 space-x-2">
                        {{-- Botón Editar --}}
                        <a href="{{ action([\App\Http\Controllers\Dashboard\PostController::class, 'edit'], ['post' => $post->id]) }}"
                           class="inline-block px-4 py-2 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600 transition">
                            Editar
                        </a>
                        {{-- Botón Eliminar --}}
                        <a href="#"
                           class="inline-block px-4 py-2 bg-red-500 text-white rounded-lg shadow hover:bg-red-600 transition">
                            Eliminar
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        {{-- Botón para regresar al listado --}}
        <div class="text-center mt-6">
            <a href="{{ action([\App\Http\Controllers\Dashboard\PostController::class, 'index']) }}"
               class="inline-block px-6 py-2 bg-green-600 text-white font-semibold text-sm uppercase rounded-lg shadow hover:bg-green-700 transition">
                Ir a Listado
            </a>
        </div>
    @endif
@endsection

@section('footer')
    <footer class="text-center mt-12 py-6 bg-gray-100 text-gray-600 border-t">
        <p>Alan Altamirano Hernández - Diciembre 2024</p>
    </footer>
@endsection
