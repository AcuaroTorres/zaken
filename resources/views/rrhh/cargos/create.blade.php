@extends('layouts.app')

@section('title', 'Crear Cargo')

@section('content')

<form method="POST" class="form-horizontal" action="{{ route('rrhh.cargos.store') }}">
	{{ csrf_field() }}

	<div class="form-group">
		<label class="col-xs-2 col-sm-2 control-label" for="name">Nombre</label>
		<div class="col-xs-8 col-sm-8"><input type="text" class="form-control" name="name"></div>
	</div>


    <div class="form-group">
      <div class="col-xs-4 col-sm-2 col-sm-offset-2">
        <button type="submit" class="btn btn-primary">Crear</button>
      </div>
    </div>
</form>

@endsection