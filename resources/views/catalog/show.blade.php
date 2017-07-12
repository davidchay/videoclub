@extends('layouts.master')

@section('content')


<div class="row">

    <div class="col-sm-4">

        {{-- TODO: Imagen de la película --}}
        <img class="img-responsive" src="{{$pelicula['poster']}}"><img>

    </div>
    <div class="col-sm-8">

        {{-- TODO: Datos de la película --}}
        <h1>{{$pelicula->title}}</h1>
        <h4>Año: {{$pelicula->year}}</h4>
        <h4>Director: {{$pelicula->director}}</h4>
        <p>
            <strong>Resumen</strong>
            {{$pelicula->synopsis}}
        </p>
        <p>
            <strong>Estado:</strong>
            @if($pelicula->rented)
                Película actualmente alquilada
            @else
                Película disponible
            @endif
        </p>
        @if($pelicula->rented)
            <a href="#" class="btn btn-danger">Devolver Película</a>
        @else
            <a href="#" class="btn btn-primary">Alquilar Película</a>
        @endif
        
        <a href="{{ url('/catalog/edit/' . $pelicula->id ) }}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Editar Película</a>
        <a href="#" class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"></i> Volver al listado</a>
    </div>
</div>

@stop