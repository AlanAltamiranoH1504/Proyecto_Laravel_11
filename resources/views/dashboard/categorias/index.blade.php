@extends('dashboard.layout')

@section('header')
    <h1 style="text-align: center">LISTADO DE CATEGORIAS</h1>
@endsection

@section('body')
    @if($categorias != null)
        <div style="margin: 20px auto; max-width: 200px; border-radius: 15px; overflow: hidden;">
            <a style="border: solid 2px black; text-align: center; font-weight: bolder; text-transform: uppercase; text-decoration: none; background: green; color: white; padding: 10px; display: block; border-radius: 15px;"
               href="{{action([\App\Http\Controllers\Dashboard\CategoriaController::class, 'create'])}}">
                Crear Nueva Categoira
            </a>
        </div>

        <table style="border: 2px solid black; margin: 10px auto; width: 60%; border-collapse: collapse;">
            <thead>
            <tr>
                <th style="border: 1px solid black;">ID</th>
                <th style="border: 1px solid black;">TITLE</th>
                <th style="border: 1px solid black;">SLUG</th>
                <th style="border: 1px solid black;">Edicion</th>
                <th style="border: 1px solid black;">Borrado</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categorias as $categoria)
                <tr style="text-align: center">
                    <td style="border: 1px solid black;">{{$categoria->id}} → <a href="{{action([\App\Http\Controllers\Dashboard\CategoriaController::class, 'show'], ['categoria' => $categoria->id])}}">Detalles</a> </td>
                    <td style="border: 1px solid black;">{{$categoria->title}}</td>
                    <td style="border: 1px solid black;">{{$categoria->slug}}</td>
                    <td style="border: 1px solid black;"><a href="{{action([\App\Http\Controllers\Dashboard\CategoriaController::class, 'edit'], ['categoria' => $categoria->id])}}" style="border: solid 1px black; text-align: center; font-weight: lighter; text-decoration: none; background: #05a7dc; color: black; padding: 1px; display: block; border-radius: 15px;">Editar</a></td>
                    <td style="border: 1px solid black;">
                        <form method="post" action="{{action([\App\Http\Controllers\Dashboard\CategoriaController::class, 'destroy'], ['categoria' => $categoria->id])}}">
                            {{csrf_field()}}
                            @method('DELETE')
                            <button type="submit" style="border: solid 1px black; text-align: center; font-weight: lighter; text-decoration: none; background: red; color: black; padding: 5px; border-radius: 15px; cursor: pointer;">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection

@section('footer')
    <h3 style="text-align: center">Alan Altamirano Hernandez - Diciembre 2024</h3>
@endsection
