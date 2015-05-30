@extends('ejercicios/Layout')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">{{$ejercicio->nombre}}</div>
				<div class="panel-body">
                    <p><b>Duracion</b> : {{$ejercicio->tiempo}}</p>
                    <p><b>Repeticiones</b> : {{$ejercicio->repeticiones}}</p>
                    <p><b>Series</b> : {{$ejercicio->series}}</p>
                    <p><b>Categoria</b> : {{$ejercicio->categoria}}</p>
                    <b>Descripcion</b><br>
                    <p>{{$ejercicio->descripcion}}</p>
                {!!Form::open(array('url' => 'ejercicios/'.$ejercicio->id,'method' => 'delete'))!!}
                <input class="btn btn-danger" type="submit" value="Eliminar">
                <a class="btn btn-success" href="/ejercicios/{{$ejercicio->id}}/edit" role="button">Editar</a>
                {!!Form::close()!!}
                    </div>
                 </div>
             </div>
         </div>
     </div>
     @endsection