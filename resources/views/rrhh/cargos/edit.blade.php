@extends('layouts.app')

@section('title', 'Editar Cargo')

@section('content')

	<form method="POST" class="form-horizontal" action="{{ route('rrhh.cargos.update',$cargo->id) }}">
		{{ method_field('PUT') }} {{ csrf_field() }}

		<div class="form-group">
			<label class="col-xs-2 col-sm-2 control-label" for="name">ID</label>
			<div class="col-xs-8 col-sm-8"><p class="form-control-static">{{ $cargo->id }}</p></div>
		</div>

		<div class="form-group">
			<label class="col-xs-2 col-sm-2 control-label" for="name">Nombre</label>
			<div class="col-xs-8 col-sm-8"><input type="text" class="form-control" name="name" value="{{ $cargo->name }}"></div>
		</div>


		<div class="form-group">
			<div class="col-xs-4 col-sm-2 col-sm-offset-2">
				<button type="submit" class="btn btn-sm btn-primary">
					<span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Actualizar</button>
			</div>
			
			</form>
			

			<div class="col-xs-4 col-sm-2">
				<form method="POST" action="{{ route('rrhh.cargos.destroy', $cargo->id) }}" style="display: inline;">
					{{ method_field('DELETE') }} {{ csrf_field() }}
					<button class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar</button>
				</form>
			</div>
		</div>

@endsection