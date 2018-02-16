<ul class="nav nav-tabs">

	<li>
		<a href="{{ route('rrhh.users.index') }}">
			<span class="glyphicon glyphicon-search"></span> </a></li>

	<li class="@if(Route::currentRouteName()=='rrhh.users.edit')active @endif">
		<a href="{{ route('rrhh.users.edit',$user->id) }}">
			<span class="glyphicon glyphicon-user"></span>
        	<span class="hidden-xs"> Perfil</span></a></li>

	<li class="@if(Route::currentRouteName()=='rrhh.roles.index')active @endif">
		<a href="{{ route('rrhh.roles.index', $user->id) }}">
		<span class="glyphicon glyphicon-wrench"></span>
		<span class="hidden-xs"> Roles</span></a></li>

</ul>
<br>