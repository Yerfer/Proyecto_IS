@extends('ejercicios/Layout')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Ejercicios</div>
				<div class="panel-body">
                {!! Form::open(array('url' => 'ejercicios')) !!}
                    Nombre : <br>
                    {!!Form::text('nombre',null, ['class' => 'form-control'])!!}<br>
                    Tiempo:<br>
                    {!!Form::text('tiempo',null,['class' => 'form-control'])!!}<br>
                    Repeticiones:<br>
                    {!!Form::number('repeticiones',null,['class' => 'form-control'])!!}<br>
                    Series:<br>
                    {!!Form::number('series',null,['class' => 'form-control'])!!}<br>
                    Categoria : 
                    {!!Form::select('categoria', array('Aerobicos' => 'Aerobicos', 'flexibilidad' => 'flexibilidad', 'equilibrio' => 'equilibrio', 'anaerobicos' => 'anaerobicos', 'tonificacion' => 'tonificacion', 'relajacion' => 'relajacion'),['class' => 'form-control'])!!}<br><br>
                    Descripcion:<br>
                    {!!Form::text('descripcion',null,['class' => 'form-control'])!!}<br>
                    <br>
                    <input class="btn btn-primary" type="submit" value="Crear">
                {!! Form::close() !!}
                </div>
             </div>
         </div>
     </div>
 </div>
 @endsection