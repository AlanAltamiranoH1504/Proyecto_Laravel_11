@extends('dashboard.layout')

@section('header')
    <h1 class="text-center text-3xl font-bold text-gray-800 my-6">Edición de Post</h1>
@endsection

@section('body')
    @include('dashboard.fragment.erroresFormulario')

    {{-- Formulario de edición de post --}}
    <div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-md">
        <form action="{{action([\App\Http\Controllers\Dashboard\PostController::class, 'update'], ['post' => $post->id])}}" enctype="multipart/form-data" method="post">
            @method('PUT')
            @csrf

            {{-- Campo para el título --}}
            <div class="mb-4">
                <label for="title" class="block text-sm font-semibold text-gray-700">Title</label>
                <input type="text" name="title" id="title" value="{{old('title', $post->title)}}" class="w-full p-2 border border-gray-300 rounded-md" />
            </div>

            {{-- Campo para el slug --}}
            <div class="mb-4">
                <label for="slug" class="block text-sm font-semibold text-gray-700">Slug</label>
                <input type="text" name="slug" id="slug" value="{{old('slug', $post->slug)}}" class="w-full p-2 border border-gray-300 rounded-md" />
            </div>

            {{-- Campo para la descripción --}}
            <div class="mb-4">
                <label for="description" class="block text-sm font-semibold text-gray-700">Description</label>
                <input type="text" name="description" id="description" value="{{old('description', $post->description)}}" class="w-full p-2 border border-gray-300 rounded-md" />
            </div>

            {{-- Campo para el contenido --}}
            <div class="mb-4">
                <label for="content" class="block text-sm font-semibold text-gray-700">Content</label>
                <input type="text" name="content" id="content" value="{{old('content', $post->content)}}" class="w-full p-2 border border-gray-300 rounded-md" />
            </div>

            {{-- Campo para la imagen --}}
            <div class="mb-4">
                <label for="image" class="block text-sm font-semibold text-gray-700">Image</label>
                <input type="file" name="image" class="w-full p-2 border border-gray-300 rounded-md" />
            </div>

            {{-- Campo para la opción "Posted" --}}
            <div class="mb-4">
                <label for="posted" class="block text-sm font-semibold text-gray-700">Posted</label>
                <select name="posted" class="w-full p-2 border border-gray-300 rounded-md">
                    <option value="">Seleccione una opción</option>
                    <option value="yes" {{ old('posted', $post->posted) == 'yes' ? 'selected' : '' }}>Yes</option>
                    <option value="no" {{ old('posted', $post->posted) == 'no' ? 'selected' : '' }}>No</option>
                </select>
            </div>

            {{-- Campo para la categoría --}}
            <div class="mb-4">
                <label for="categoria_id" class="block text-sm font-semibold text-gray-700">Category</label>
                <select name="categoria_id" id="categoria_id" class="w-full p-2 border border-gray-300 rounded-md">
                    <option value="">Seleccione una opción</option>
                    @foreach($categorias as $categoria)
                        <option value="{{$categoria->id}}" {{ old('categoria_id', $post->categoria_id) == $categoria->id ? 'selected' : '' }}>{{$categoria->title}}</option>
                    @endforeach
                </select>
            </div>

            {{-- Botón de enviar --}}
            <div class="text-center mt-6">
                <button type="submit" class="px-6 py-3 bg-blue-600 text-white font-semibold text-sm uppercase rounded-lg shadow hover:bg-blue-700 transition">
                    Actualizar
                </button>
            </div>
        </form>
    </div>

    {{-- Enlace al listado de posts --}}
    <div class="text-center mt-6">
        <a href="{{action([\App\Http\Controllers\Dashboard\PostController::class, 'index'])}}"
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
