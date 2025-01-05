@extends('dashboard.layout')

{{-- Cabecera --}}
@section('header')
    <h1 class="text-center text-2xl font-bold text-gray-800 my-4">Listado de Posts</h1>
@endsection

{{-- Cuerpo --}}
@section('body')

    {{-- Mensaje de Éxito --}}
    @if(session('success'))
        <div class="max-w-4xl mx-auto my-4 px-4 py-2 bg-green-100 border border-green-400 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    {{-- Botón Crear Nuevo Post --}}
    <div class="text-center my-6">
        <a href="{{ action([\App\Http\Controllers\Dashboard\PostController::class, 'create']) }}"
           class="inline-block px-6 py-2 bg-blue-600 text-white font-medium text-sm uppercase rounded shadow hover:bg-blue-700 transition">
            Crear Nuevo Post
        </a>
    </div>

    {{-- Tabla de Posts --}}
    @if($posts != null)
        <div class="overflow-x-auto max-w-7xl mx-auto">
            <table class="w-full text-sm text-left border shadow rounded-lg overflow-hidden">
                <thead class="bg-blue-600 text-white uppercase text-sm">
                <tr>
                    <th class="px-4 py-3 text-center">ID</th>
                    <th class="px-4 py-3 text-center">Título</th>
                    <th class="px-4 py-3 text-center">Slug</th>
                    <th class="px-4 py-3 text-center">Descripción</th>
                    <th class="px-4 py-3 text-center">Contenido</th>
                    <th class="px-4 py-3 text-center">Imagen</th>
                    <th class="px-4 py-3 text-center">Publicado</th>
                    <th class="px-4 py-3 text-center">Categoría</th>
                    <th class="px-4 py-3 text-center">Editar</th>
                    <th class="px-4 py-3 text-center">Eliminar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr class="{{ $loop->odd ? 'bg-gray-100' : 'bg-white' }} hover:bg-gray-50">
                        <td class="px-4 py-3 text-center border-b">
                            {{$post->id}} -
                            <a href="{{ action([\App\Http\Controllers\Dashboard\PostController::class, 'show'], ['post' => $post->id]) }}"
                               class="text-blue-600 hover:underline">
                                Detalles
                            </a>
                        </td>
                        <td class="px-4 py-3 text-center border-b">{{$post->title}}</td>
                        <td class="px-4 py-3 text-center border-b">{{$post->slug}}</td>
                        <td class="px-4 py-3 text-center border-b">{{$post->description}}</td>
                        <td class="px-4 py-3 text-center border-b truncate max-w-xs">{{$post->content}}</td>
                        <td class="px-4 py-3 text-center border-b">{{$post->image}}</td>
                        <td class="px-4 py-3 text-center border-b">{{$post->posted}}</td>
                        <td class="px-4 py-3 text-center border-b">{{$post->categoria_id}}</td>
                        <td class="px-4 py-3 text-center border-b">
                            <a href="{{ action([\App\Http\Controllers\Dashboard\PostController::class, 'edit'], ['post' => $post->id]) }}"
                               class="inline-block px-4 py-2 bg-green-600 text-white font-medium text-sm uppercase rounded shadow hover:bg-green-700 transition">
                                Editar
                            </a>
                        </td>
                        <td class="px-4 py-3 text-center border-b">
                            <form action="{{ action([\App\Http\Controllers\Dashboard\PostController::class, 'destroy'], ['post' => $post->id]) }}"
                                  method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700 transition">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        {{-- Paginación --}}
        <div class="mt-6">
            {{ $posts->links('pagination::tailwind') }}
        </div>
    @endif
@endsection

{{-- Footer --}}
@section('footer')
    <footer class="text-center mt-12 py-4 border-t text-gray-600">
        Alan Altamirano Hernández - Diciembre 2024
    </footer>
@endsection
