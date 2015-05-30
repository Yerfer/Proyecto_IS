@extends('maquinas/Layout')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Crear Maquina</div>
				<div class="panel-body">
                {!! Form::open(array('url' => 'maquinas')) !!}
                nombre : {!!Form::text('nombre',null, ['class' => 'form-control'])!!}<br>
                    descripcion:<br>
                    {!!Form::text('descripcion',null,['class' => 'form-control'])!!}<br>
                    caracteristicas:<br>
                    {!!Form::text('caracteristicas',null,['class' => 'form-control'])!!}<br><br>
                    <input class="btn btn-primary" type="submit" value="Crear">
                {!! Form::close() !!}
                </div>
             </div>
         </div>
     </div>
 </div>
 @endsection