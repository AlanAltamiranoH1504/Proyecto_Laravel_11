{{--Verificamos si existen errores en la variable errors--}}
@if($errors->any())
    {{--Iteramos los errores--}}
    @foreach($errors->all() as $error)
        <div style="border: solid 2px red; text-align: center; font-weight: bolder; color: white; background: red; max-width: 400px; margin: 10px auto;">
            {{$error}}
        </div>
    @endforeach
@endif
