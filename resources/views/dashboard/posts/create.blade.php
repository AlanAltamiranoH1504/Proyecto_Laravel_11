@extends("dashboard.layout")

{{--Seccion de cabecera--}}
@section("header")
    <h1 style="text-align: center">MANEJO DE FORMULARIOS CON CRUD Y MVC</h1>
@endsection

{{--Seccion de body--}}
@section("body")
    <h1 style="text-align: center">Aqui es donde va a estar el formulario</h1>
    {{--Definimos el formulario--}}
    <fieldset style="width: 400px; margin: 15px auto">
        <form method="post" action="{{action([\App\Http\Controllers\Dashboard\PostController::class, "store"])}}">
            {{csrf_field()}}
            <p>
                <label for="title">Title: </label>
                <input type="text" name="title" id="title">
            </p>
            <p>
                <label for="slug">Slug: </label>
                <input type="text" name="slug" id="slug">
            </p>
            <p>
                <label for="description">Description: </label>
                <input type="text" name="description" id="description">
            </p>
            <p>
                <label for="content">Content: </label>
                <input type="text" name="content" id="content">
            </p>
            <p>
                <label for="image">Image: </label>
                <input type="text" name="image" id="image">
            </p>
            <p>
                <label for="posted">Posted: </label>
                <select name="posted">
                    <option value="">Seleccione una opcion</option>
                    <option value="yes">Yes</option>
                    <option value="not">Not</option>
                </select>
            </p>
            <p>
                <label for="category_id">Category ID: </label>
                <select id="category_id" name="category_id">
                    <option value="">Seleccione una opcion</option>
                    @foreach($categorias as $categoria)
                        <option value="{{$categoria->title}}">{{$categoria->title}}</option>
                    @endforeach
                </select>
            </p>
            <div style="margin: 0px auto; max-width: 50px">
                <input type="submit" value="Enviar" style="margin: 10px auto">
            </div>
        </form>
    </fieldset>
@endsection

{{--Seccion de footer--}}
@section("footer")
    <h3 style="text-align: center">Alan Altamirano Hernandez - Diciembre 2024</h3>
@endsection
