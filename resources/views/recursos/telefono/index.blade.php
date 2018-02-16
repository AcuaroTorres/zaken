@extends('layouts.app')

@section('title', 'Lista de Telefonos')

@section('content')

<a href="{{ route('recursos.telefono.create') }}" class="btn btn-primary">Crear Telefono</a>
<hr>

<table class="table table-striped">
	<thead>
		<th>ID</th>
		<th>Número</th>
		<th>Minsal</th>
		<th>Accion</th>
	</thead>
	<tbody>
		@foreach($telefonos as $telefono)
		<tr>
			<td>{{ $telefono->id }}</td>
			<td>{{ $telefono->numero }}</td>
			<td>{{ $telefono->minsal }}</td>
			<td>
				<a href="{{ route('recursos.telefono.edit', $telefono->id) }}" class="btn btn-warning">
				<span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection