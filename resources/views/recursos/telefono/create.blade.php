@extends('layouts.app')

@section('title', 'Crear Telefono')

@section('content')

<form method="POST" class="form-horizontal" action="{{ route('recursos.telefono.store') }}">
	{{ csrf_field() }}

	<div class="form-group">
		<label class="col-xs-2 col-sm-2 control-label" for="numero">Número</label>
		<div class="col-xs-8 col-sm-8"><input type="text" class="form-control" name="numero"></div>
	</div>

	<div class="form-group">
		<label class="col-xs-2 col-sm-2 control-label" for="minsal">Minsal</label>
		<div class="col-xs-8 col-sm-8"><input type="text" class="form-control" name="minsal"></div>
	</div>

    <div class="form-group">
      <div class="col-xs-4 col-sm-2 col-sm-offset-2">
        <button type="submit" class="btn btn-primary">Crear</button>
      </div>
      <div class="col-xs-4 col-sm-2">
      	<a href="{{ route('recursos.telefono.index') }}" class="btn btn-default">Cancelar</a>
      </div>
    </div>
</form>

@endsection