@extends('layouts.app')

@section('title', 'Directorio Telefónico')

@section('content')

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

			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection