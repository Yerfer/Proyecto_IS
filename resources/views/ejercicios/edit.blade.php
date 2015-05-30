@extends('ejercicios/Layout')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Ejercicios</div>
				<div class="panel-body">
                {!!Form::open(array('url' => 'ejercicios/' . $ejercicio->id , 'method'=>'put' ))!!}
                    Nombre : <br>
                    {!!Form::text('nombre',$ejercicio->nombre, ['class' => 'form-control'])!!}<br>
                    Tiempo:<br>
                    {!!Form::text('tiempo',$ejercicio->tiempo,['class' => 'form-control'])!!}<br>
                    Repeticiones:<br>
                    {!!Form::number('repeticiones',$ejercicio->repeticiones,['class' => 'form-control'])!!}<br>
                    Series:<br>
                    {!!Form::number('series',$ejercicio->series,['class' => 'form-control'])!!}<br>
                    Categoria : 
                    {!!Form::select('categoria', array('Aerobicos' => 'Aerobicos', 'flexibilidad' => 'flexibilidad', 'equilibrio' => 'equilibrio', 'anaerobicos' => 'anaerobicos', 'tonificacion' => 'tonificacion', 'relajacion' => 'relajacion'),['class' => 'form-control'])!!}<br><br>
                    Descripcion:<br>
                    {!!Form::text('descripcion',$ejercicio->descripcion,['class' => 'form-control'])!!}<br>
                    
                <input class="btn btn-success" type="submit" value="Guardar">
                {!!Form::close()!!}

                 </div>
            </div>
        </div>
    </div>
</div>
@endsection