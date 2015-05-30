@extends('maquinas/Layout')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Maquina</div>
				<div class="panel-body">
                {!!Form::open(array('url' => 'maquinas/' . $maquina->id , 'method'=>'put' ))!!}
                nombre : {!!Form::text('nombre',$maquina->nombre ,['class' => 'form-control'])!!}<br>
                descripcion<br>
                {!!Form::text('descripcion',$maquina->descripcion,  ['class' => 'form-control'])!!}<br>
                caracteristicas<br>
                {!!Form::text('caracteristicas',$maquina->caracteristicas, ['class' => 'form-control'])!!}<br><br>
                <input class="btn btn-success" type="submit" value="Guardar">
                {!!Form::close()!!}

                 </div>
            </div>
        </div>
    </div>
</div>
@endsection