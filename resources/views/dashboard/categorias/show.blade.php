@extends('dashboard.layout')

@section('header')
    <h1 style="text-align: center">DETALLES DE CATEGORI</h1>
@endsection


@section('body')

    <fieldset style="width: 400px; margin: 15px auto">
        <form method="post">
            {{csrf_field()}}
            <p>
                <label for="title">Title: </label>
                <input type="text" name="title" value="{{$categoria->title}}">
            </p>
            <p>
                <label for="slug">Slug: </label>
                <input type="text" name="slug" value="{{$categoria->slug}}">
            </p>
        </form>
    </fieldset>

    <div style="max-width: 200px; margin: 20px auto; text-align: center;">
        <a href="{{action([\App\Http\Controllers\Dashboard\CategoriaController::class, 'index'])}}"
           style="border:solid 1px black; display: inline-block; background-color: green; color: white; padding: 12px 20px; text-align: center; font-weight: bold; text-transform: uppercase; text-decoration: none; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); transition: background-color 0.3s ease;">
            Ir a Listado
        </a>
    </div>
@endsection

@section('footer')
    <h3 style="text-align: center">Alan Altamirano Hernandez - Diciembre 2024</h3>
@endsection