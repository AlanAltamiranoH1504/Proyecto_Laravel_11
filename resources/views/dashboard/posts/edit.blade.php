@extends('dashboard.layout')

@section('header')
    <h1 style="text-align: center">EDICION DE POST</h1>
@endsection

@section('body')
    @include('dashboard.fragment.erroresFormulario')

    <fieldset style="width: 400px; margin: 15px auto">
        <form action="{{action([\App\Http\Controllers\Dashboard\PostController::class, 'update'], ['post' => $post->id])}}" enctype="multipart/form-data" method="post">
            @method('PUT')
            {{csrf_field()}}
            <p>
                <label for="title">Title: </label>
                <input type="text" name="title" id="title" value="{{old('title', $post->title)}}">
            </p>
            <p>
                <label for="slug">Slug: </label>
                <input type="text" name="slug" id="slug" value="{{old('slug', $post->slug)}}">
            </p>
            <p>
                <label for="description">Description: </label>
                <input type="text" name="description" id="description" value="{{old('description', $post->description)}}">
            </p>
            <p>
                <label for="content">Content: </label>
                <input type="text" name="content" id="content" value="{{old('content', $post->content)}}">
            </p>
            <p>
                <label for="image">Image: </label>
                <input type="file" name="image">
{{--                <input type="text" name="image" id="image" value="{{old('image', $post->image)}}">--}}
            </p>
            <p>
                <label for="posted">Posted: </label>
                <select name="posted">
                    <option value="">Seleccione una opcion</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </p>
            <p>
                <label for="categoria_id">Category ID: </label>
                <select id="categoria_id" name="categoria_id">
                    <option value="">Seleccione una opcion</option>
                    @foreach($categorias as $categoria)
                        <option value="{{$categoria->id}}">{{$categoria->title}}</option>
                    @endforeach
                </select>
            </p>
            <div style="margin: 0px auto; max-width: 50px">
                <input type="submit" value="Actualizar" style="margin: 10px auto">
            </div>
        </form>
    </fieldset>
    <div style="max-width: 200px; margin: 20px auto; text-align: center;">
        <a href="{{action([\App\Http\Controllers\Dashboard\PostController::class, 'index'])}}"
           style="border:solid 1px black; display: inline-block; background-color: green; color: white; padding: 12px 20px; text-align: center; font-weight: bold; text-transform: uppercase; text-decoration: none; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); transition: background-color 0.3s ease;">
            Ir a Listado
        </a>
    </div>

@endsection

@section('footer')
    <h3 style="text-align: center">Alan Altamirano Hernandez - Diciembre 2024</h3>
@endsection
