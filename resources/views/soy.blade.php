@extends('tema')


@section('Titulo','Soy')
@section('contenido')
  <h1>Datos</h1>
    <br>
     <img width="200px" height="200px" src = "{{ asset('/Bootstrap/images/perfil.jpg')}}" />
     <br>
@foreach ($informacion as $nom)
<li>{{$nom['nombre']}}</li>
@endforeach
  
  @endsection