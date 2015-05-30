@extends('maquinas/Layout')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">{{$maquina->nombre}}</div>
				<div class="panel-body">
                    <h3>Descripcion</h3>
                    <p>{{$maquina->descripcion}}</p>
                    <h3>Caracteristicas</h3>
                    <p>{{$maquina->caracteristicas}}</p>
                {!!Form::open(array('url' => 'maquinas/'.$maquina->id,'method' => 'delete'))!!}
                <input class="btn btn-danger" type="submit" value="Eliminar">
                <a class="btn btn-success" href="/maquinas/{{$maquina->id}}/edit" role="button">Editar</a>
                {!!Form::close()!!}
                    </div>
                 </div>
             </div>
         </div>
     </div>
     @endsection