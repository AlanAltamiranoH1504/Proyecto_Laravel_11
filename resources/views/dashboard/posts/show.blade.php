@extends('dashboard.layout')

@section('header')
    <h1 style="text-align: center">DETALLES ENTIDAD</h1>
@endsection

@section('body')
    @if($post != null)
        <table style="border: 2px solid black; margin: 10px auto; width: 90%; border-collapse: collapse;">
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
                    <th style="border: 1px solid black;">DETALLES</th>
                </tr>
            </thead>
            <tbody style="text-align: center">
                <tr>
                    <td>{{$post->id}}</td>
                    <td style="border: 1px solid black;">{{$post->title}}</td>
                    <td style="border: 1px solid black;">{{$post->slug}}</td>
                    <td style="border: 1px solid black;">{{$post->description}}</td>
                    <td style="border: 1px solid black;">{{$post->content}}</td>
                    <td style="border: 1px solid black;">{{$post->image}}</td>
                    <td style="border: 1px solid black;">{{$post->posted}}</td>
                    <td style="border: 1px solid black;">{{$post->categoria_id}}</td>
                    <td style="border: 1px solid black;"><a href="{{action([\App\Http\Controllers\Dashboard\PostController::class, 'edit'], ["post" => $post->id])}}" style="border: solid 1px black; text-align: center; font-weight: lighter; text-decoration: none; background: #05a7dc; color: black; padding: 1px; display: block; border-radius: 15px;">Editar</a></td>
                    <td style="border: 1px solid black;"><a href="" style="border: solid 1px black; text-align: center; font-weight: lighter; text-decoration: none; background: red; color: black; padding: 1px; display: block; border-radius: 15px;">Eliminar</a></td>
                </tr>
            </tbody>
        </table>
        <div style="max-width: 200px; margin: 20px auto; text-align: center;">
            <a href="{{action([\App\Http\Controllers\Dashboard\PostController::class, 'index'])}}"
               style=" border:solid 1px black; display: inline-block; background-color: green; color: white; padding: 12px 20px; text-align: center; font-weight: bold; text-transform: uppercase; text-decoration: none; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); transition: background-color 0.3s ease;">
                Ir a Listado
            </a>
        </div>

    @endif
@endsection

@section('footer')
    <h3 style="text-align: center">Alan Altamirano Hernandez - Diciembre 2024</h3>
@endsection
