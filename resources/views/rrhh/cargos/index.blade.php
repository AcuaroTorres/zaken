@extends('layouts.app')

@section('title', 'Lista de Usuarios')

@section('content')

<a href="{{ route('rrhh.cargos.create') }}" class="btn btn-primary">Crear Cargo</a>
<hr>

<table class="table table-striped">
	<thead>
		<th>ID</th>
		<th>Nombre</th>
		<th>Accion</th>
	</thead>
	<tbody>
		@foreach($cargos as $cargo)
		<tr>
			<td>{{ $cargo->id }}</td>
			<td>{{ $cargo->name }}</td>
			<td>
				<a href="{{ route('rrhh.cargos.edit', $cargo->id) }}" class="btn btn-warning">
				<span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection