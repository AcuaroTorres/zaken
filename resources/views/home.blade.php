@extends('layouts.app')

@section('title', config('app.name') . ' - Home')

@section('content')
<div class="container">
    <div class="row">
        @auth
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    @if(Auth::user()->hasRole('Admin'))
                        <div>Acceso como Administrador</div>
                    @endif

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    @if(Auth::user()->hasRole('Admin'))
                        <div>Acceso como Administrador</div>
                    @endif

                </div>
            </div>
        </div>
        @else
        Visita
        @endauth
    </div>
</div>
@endsection
