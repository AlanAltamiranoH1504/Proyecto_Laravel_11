@extends('layout.maestra')

@section('header')
    <h1>DIRECTIVAS</h1>
@endsection

@section('container')
    @if($nombre == null && $paises == null)
        <h1>Las variables que se compartieron estan vacias</h1>
    @elseif($nombre != null && $paises !=null > 0)
        <h2>Las variables tienen contenido</h2>
        <strong>Primer Variable: {{$nombre}}</strong>
        @foreach($paises as $pais)
            <li>Pais: {{$pais}}</li>
        @endforeach
    @endif
@endsection

@section('footer')
    <p>Alan Altamirano Hernandez</p>
@endsection
