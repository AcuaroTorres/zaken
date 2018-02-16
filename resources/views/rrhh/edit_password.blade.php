@extends('layouts.app')

@section('title', 'Cambiar Password')

@section('content')

	<form method="POST" class="form-horizontal" action="{{ route('password.update') }}">
		{{ method_field('PUT') }} {{ csrf_field() }}

		<h3>Cambiar clave</h3>
		<br>

		<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
			<label class="col-xs-3 col-sm-2 control-label" for="password">Clave Actual</label>
			<div class="col-xs-9 col-sm-4"><input type="password" class="form-control" name="password" autofocus required="required"></div>
			 @if ($errors->has('password'))
			    <span class="help-block">
			        <strong>{{ $errors->first('password') }}</strong>
			    </span>
			@endif
		</div>

		<div class="form-group {{ $errors->has('newpassword') ? 'has-error' : '' }}">
			<label class="col-xs-3 col-sm-2 control-label" for="newpassword">Nueva Clave</label>
			<div class="col-xs-9 col-sm-4"><input type="password" class="form-control" name="newpassword" required="required"></div>
			@if ($errors->has('newpassword'))
			    <span class="help-block hidden-xs">
			        <strong>{{ $errors->first('newpassword') }}</strong>
			    </span>
			@endif
		</div>

		<div class="form-group {{ $errors->has('newpassword_confirm') ? 'has-error' : '' }}">
			<label class="col-xs-3 col-sm-2 control-label" for="newpassword_confirm">Confirmar Nueva Clave</label>
			<div class="col-xs-9 col-sm-4"><input type="password" class="form-control" name="newpassword_confirm" required="required"></div>
			@if ($errors->has('newpassword_confirm'))
			    <span class="help-block hidden-xs">
			        <strong>{{ $errors->first('newpassword_confirm') }}</strong>
			    </span>
			@endif
		</div>

		<div class="form-group">
			<div class="col-xs-offset-3 col-xs-7 col-sm-offset-2 col-sm-10">
			<input type="submit" name="" class="btn btn-primary" value="Cambiar Clave">
			</div>
		</div>

	</form>
@endsection