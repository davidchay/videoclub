@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:20px">

	<div class="col-md-offset-3 col-md-6">

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title text-center">
					<span class="glyphicon glyphicon-film" aria-hidden="true"></span>
					Editar película
				</h3>
			</div>

			<div class="panel-body" style="padding:30px">
			
				{{-- TODO: Abrir el formulario e indicar el método POST --}}
				{{method_field('PUT')}}
				<form action="" method="POST">
					
					{{-- TODO: Protección contra CSRF --}}
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="id" value="{{ $pelicula->id }}">
					<input type="hidden" name="_method" value="PUT" />

    				<div class="form-group">
    					<label for="title">Título</label>
    					<input type="text" name="title" id="title" class="form-control" value="{{ $pelicula->title }}">
					</div>

					<div class="form-group">
						{{-- TODO: Completa el input para el año --}}
                        <label for="year">Año</label>
                        <input type="text" name="year" id="year" class="form-control" value="{{ $pelicula->year }}">
					</div>

					<div class="form-group">
						{{-- TODO: Completa el input para el director --}}
                        <label for="director">Director</label>
                        <input type="text" name="director" id="director" class="form-control" value="{{ $pelicula->director }}">
					</div>

					<div class="form-group">
						{{-- TODO: Completa el input para el poster --}}
                        <label for="poster">poster</label>
                        <input type="text" name="poster" id="poster" class="form-control" value="{{ $pelicula->poster }}">
					</div>

					<div class="form-group">
						<label for="synopsis">Resumen</label>
    					<textarea name="synopsis" id="synopsis" class="form-control" rows="3">{{ $pelicula->synopsis }}</textarea>
					</div>

					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
							Modificar película
						</button>
					</div>

				{{-- TODO: Cerrar formulario --}}
				</form>
                

			</div>
		</div>
	</div>
</div>

@stop