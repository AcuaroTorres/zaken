<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ route('home') }}">
                {{ config('app.name') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->

           
            <ul class="nav navbar-nav">

                @guest
                    <li class="@if(Route::currentRouteName()=='recursos.telefono.directorio')active @endif">
                      <a href="{{ route('recursos.telefono.directorio') }}">Directorio Telefónico</a></li>
                @else

                <li class="dropdown @if(Route::currentRouteName()=='rrhh.users.index' OR
                                        Route::currentRouteName()=='rrhh.users.create' OR
                                        Route::currentRouteName()=='rrhh.cargos.index' )active @endif">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">RRHH <span class="caret"></span></a>
                  <ul class="dropdown-menu">                    

                    <li class="@if(Route::currentRouteName()=='rrhh.users.create')active @endif">
                      <a href="{{ route('rrhh.users.create') }}">Crear Usuario</a></li>

                    <li class="@if(Route::currentRouteName()=='rrhh.users.index')active @endif">
                      <a href="{{ route('rrhh.users.index') }}">Usuarios</a></li>

                    <li class="@if(Route::currentRouteName()=='rrhh.cargos.index')active @endif">
                      <a href="{{ route('rrhh.cargos.index') }}">Cargos</a></li>

                  </ul>
                </li>


                <li class="dropdown @if(Route::currentRouteName()=='recursos.telefono.index' OR
                                        Route::currentRouteName()=='recursos.telefono.create' OR
                                        Route::currentRouteName()=='recursos.telefono.edit' )active @endif">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Recursos <span class="caret"></span></a>
                  <ul class="dropdown-menu">                    

                    <li class="@if(Route::currentRouteName()=='recursos.telefono.index' OR
                                        Route::currentRouteName()=='recursos.telefono.create' OR
                                        Route::currentRouteName()=='recursos.telefono.edit' )active @endif">
                      <a href="{{ route('recursos.telefono.index') }}">Telefonos</a></li>

                  </ul>
                </li>
                @endguest
            </ul>
            

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                    <?php /* <li><a href="{{ route('register') }}">Register</a></li> */ ?>
                @else
                    <li class="dropdown @if(Route::currentRouteName()=='rrhh.password.edit')active @endif">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">

                            <li class="@if(Route::currentRouteName()=='password.edit')active @endif">
                                <a href="{{ route('password.edit') }}">Cambiar Clave</a></li>
                            
                            <li role="separator" class="divider"></li>

                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Cerrar Sesión
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
