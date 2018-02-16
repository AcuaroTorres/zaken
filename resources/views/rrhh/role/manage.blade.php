@extends('layouts.app')

@section('title', 'Asignar roles a Usuario')

@section('content')

@include('rrhh.submenu')

<div class="panel panel-default">
	<div class="panel-heading">
    	<h3 class="panel-title">Asignar roles a: <strong> {{ $user->name }} </strong> ({{ $user->runFormat() }})</h3>
  	</div>
  	<div class="panel-body">
  		
  		<form class="form-horizontal" method="POST" action="{{ route('rrhh.roles.attach',$user->id) }}">
  			{{ csrf_field() }}
			<input type="hidden" name="user_id" value="{{ $user->id }}">
		

		<table class="table table-striped">
			<thead>
				<th style="width: 100px">Seleccion</th>
				<th>ID</th>
				<th>Nombre</th>
				<th>Descripcion</th>
			</thead>
			<tbody>
				@foreach($roles as $rol)
				<tr>
					<td>
						<center>
							<input type="checkbox" name="roles[{{ $rol->id }}]" class="big-checkbox" @if($user->hasRole($rol->name)) checked @endif>
						</center>
					</td>
					<td>{{ $rol->id }}</td>
					<td>{{ $rol->name }}</td>
					<td>{{ $rol->description }} </td>
				</tr>
				@endforeach
			</tbody>
		</table>

		<input type="submit" class="btn btn-primary" name="btnGuardar" value="Guardar">
		</form>

	</div>
</div>
@endsection