@extends('layouts.app')

@section('title', 'Lista de Usuarios')

@section('content')

<form method="GET" action="{{ route('rrhh.users.index') }}" class="navbar_form pull-right">
	<div class="col-md-8 pull-right">
		<div class="input-group">
			<input type="text" class="form-control" name="name" placeholder="Buscar usuario por nombre">
			<span class="input-group-btn">
				<button class="btn btn-primary" type="submit">
			    	<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
				</button>
			</span>
		</div>
	</div>
</form>

<br><br>



<table class="table table-striped">
	<thead>
		<th>RUN</th>
		<th>Nombre</th>
		<th class="hidden-xs">Roles</th>
		<th>Accion</th>
	</thead>
	<tbody>
		@foreach($users as $user)
		<tr>
			<td>{{ $user->runFormat() }}</td>
			<td>{{ $user->name }}</td>
			<td class="hidden-xs">
			@foreach($user->roles as $rol)
				<span class="label label-<?=($rol->name == 'Admin')?'danger':'primary';?>"> {{ $rol->name }} </span>&nbsp;
			@endforeach
			</td>
			<td>
				<a href="{{ route('rrhh.users.edit',$user->id) }}" class="btn btn-warning">
				<span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>			
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
{{ $users->render() }}
		

@endsection