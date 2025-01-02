@extends('dashboard.layout')

{{--Cabecera--}}
@section('header')
    <h1 style="text-align: center">LISTADO DE POSTS</h1>
@endsection
{{--Body--}}
@section('body')
    <div style="margin: 20px auto; max-width: 200px; border-radius: 15px; overflow: hidden;">
        <a style="border: solid 2px black; text-align: center; font-weight: bolder; text-transform: uppercase; text-decoration: none; background: green; color: white; padding: 10px; display: block; border-radius: 15px;"
           href="{{action([\App\Http\Controllers\Dashboard\PostController::class,'create'])}}">
            Crear Nuevo Post
        </a>
    </div>

    @if($posts != null)
        <table style="border: 2px solid black; margin: 10px auto; width: 80%; border-collapse: collapse;">
            <thead>
            <tr>
                <th style="border: 1px solid black;">ID</th>
                <th style="border: 1px solid black;">TITLE</th>
                <th style="border: 1px solid black;">SLUG</th>
                <th style="border: 1px solid black;">DESCRIPTION</th>
                <th style="border: 1px solid black;">CONTENT</th>
                <th style="border: 1px solid black;">IMAGE</th>
                <th style="border: 1px solid black;">POSTED</th>
                <th style="border: 1px solid black;">CATEGORIA_ID</th>
                <th style="border: 1px solid black">Edicion</th>
                <th style="border: 1px solid black">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr style="text-align: center">
                    <td style="border: 1px solid black;">{{$post->id}} - <a href="{{action([\App\Http\Controllers\Dashboard\PostController::class, 'show'], ['post' => $post->id])}}">Detalles</a></td>
                    <td style="border: 1px solid black;">{{$post->title}}</td>
                    <td style="border: 1px solid black;">{{$post->slug}}</td>
                    <td style="border: 1px solid black;">{{$post->description}}</td>
                    <td style="border: 1px solid black;">{{$post->content}}</td>
                    <td style="border: 1px solid black;">{{$post->image}}</td>
                    <td style="border: 1px solid black;">{{$post->posted}}</td>
                    <td style="border: 1px solid black;">{{$post->categoria_id}}</td>
                    <td style="border: 1px solid black;"><a href="{{action([\App\Http\Controllers\Dashboard\PostController::class, 'edit'], ["post" => $post->id])}}" style="border: solid 1px black; text-align: center; font-weight: lighter; text-decoration: none; background: #05a7dc; color: black; padding: 1px; display: block; border-radius: 15px;">Editar</a></td>
                    <td style="border: 1px solid black;">
                        <form action="{{ action([\App\Http\Controllers\Dashboard\PostController::class, 'destroy'], ['post' => $post->id]) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="border: solid 1px black; text-align: center; font-weight: lighter; text-decoration: none; background: red; color: black; padding: 5px; border-radius: 15px; cursor: pointer;">
                                Eliminar
                            </button>
                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
            {{$posts->links()}}
        </div>
    @endif
@endsection

{{--Footer--}}
@section('footer')
    <h3 style="text-align: center">Alan Altamirano Hernandez - Diciembre 2024</h3>
@endsection
