@extends('layouts.app')

@section('title', 'Crear Usuario')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Nuevo Usuario</h3>
  </div>
  <div class="panel-body">

  <form class="form-horizontal" method="POST" action="{{ route('rrhh.users.store') }}">
    {{ csrf_field() }}

    <div class="form-group">
      <label for="inputId" class="col-xs-2 control-label">Id:</label>
      <div class="col-xs-6 col-md-4">
        <input type="number" name="id" id="inputId" class="form-control" value="min="{6" min="{6"} max="99999999" step="" required="required" title="">
      </div>

      <div class="col-xs-1 col-md-1">
        -
      </div>

      <div class="col-xs-3 col-md-1">
        <input type="text" name="dv" id="inputDv" class="form-control" required="required" title="Digito verificador">
      </div>
    </div>
    
    <div class="form-group">
      <label for="nombre" class="col-xs-2 control-label">Nombre:</label>
      <div class="col-xs-10 col-md-4">
        <input type="text" name="name" id="input" class="form-control" value="" required="required" title="">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-xs-2 control-label">Email:</label>
      <div class="col-xs-10 col-md-4">
        <input type="text" name="email" id="inputEmail" class="form-control" value="" required="required" title="">
      </div>
    </div>

    <div class="form-group">
      <div class="col-xs-4 col-md-offset-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
    
  </form>
  
  </div>
</div>


<script type="text/javascript">
  
  /*
  * Calcula digito verificador
  */
  $.calculaDigitoVerificador = function (rut) {
    // type check
    if (!rut || !rut.length || typeof rut !== 'string') {
      return -1;
    }
    // serie numerica
    var secuencia = [2,3,4,5,6,7,2,3];
    var sum = 0;
    //
    for (var i=rut.length - 1; i >=0; i--) {
      var d = rut.charAt(i)
      sum += new Number(d)*secuencia[rut.length - (i + 1)];
    };
    // sum mod 11
    var rest = 11 - (sum % 11);
    // si es 11, retorna 0, sino si es 10 retorna K,
    // en caso contrario retorna el numero
    return rest === 11 ? 0 : rest === 10 ? "K" : rest;
  };
  

  calculaDigitoVerificador("4678982");
</script>
@endsection