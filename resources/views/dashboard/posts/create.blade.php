@extends("dashboard.layout")

{{-- Sección de cabecera --}}
@section("header")
    <h1 class="text-center text-3xl font-bold text-gray-800 my-6">Manejo de Formularios con CRUD y MVC</h1>
@endsection

{{-- Sección de body --}}
@section("body")
    <div class="max-w-lg mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
        {{-- Título del Formulario --}}
        <div class="bg-blue-500 p-6">
            <h2 class="text-center text-2xl font-semibold text-white">Formulario de Creación de Posts</h2>
        </div>

        {{-- Mensajes de Error --}}
        @include('dashboard.fragment.erroresFormulario')

        {{-- Formulario --}}
        <form method="POST" action="{{ action([\App\Http\Controllers\Dashboard\PostController::class, "store"]) }}" class="p-6 space-y-6">
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

            {{-- Campo Description --}}
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Descripción</label>
                <input type="text" name="description" id="description" placeholder="Ingresa la descripción"
                       class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            {{-- Campo Content --}}
            <div>
                <label for="content" class="block text-sm font-medium text-gray-700">Contenido</label>
                <textarea name="content" id="content" placeholder="Ingresa el contenido"
                          class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>

            {{-- Campo Image --}}
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Imagen</label>
                <input type="text" name="image" id="image" placeholder="URL de la imagen"
                       class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            {{-- Campo Posted --}}
            <div>
                <label for="posted" class="block text-sm font-medium text-gray-700">Publicado</label>
                <select name="posted" id="posted" class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Seleccione una opción</option>
                    <option value="yes">Sí</option>
                    <option value="no">No</option>
                </select>
            </div>

            {{-- Campo Category ID --}}
            <div>
                <label for="categoria_id" class="block text-sm font-medium text-gray-700">Categoría</label>
                <select name="categoria_id" id="categoria_id" class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Seleccione una categoría</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->title }}</option>
                    @endforeach
                </select>
            </div>

            {{-- Botón Enviar --}}
            <div>
                <button type="submit"
                        class="w-full px-4 py-2 bg-blue-600 text-white font-semibold text-sm uppercase rounded-lg hover:bg-blue-700 shadow-md transition">
                    Crear Post
                </button>
            </div>
        </form>
    </div>

    {{-- Botón para regresar al listado --}}
    <div class="text-center mt-6">
        <a href="{{ action([\App\Http\Controllers\Dashboard\PostController::class, 'index']) }}"
           class="inline-block px-6 py-2 bg-green-600 text-white font-semibold text-sm uppercase rounded-lg shadow hover:bg-green-700 transition">
            Volver al Listado
        </a>
    </div>
@endsection

{{-- Sección de footer --}}
@section("footer")
    <footer class="text-center mt-12 py-6 bg-gray-100 text-gray-600 border-t">
        <p>Alan Altamirano Hernández - Diciembre 2024</p>
    </footer>
@endsection
