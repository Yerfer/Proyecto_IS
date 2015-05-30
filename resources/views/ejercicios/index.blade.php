@extends('ejercicios/Layout')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Ejercicios</div>
				<div class="panel-body">
                 @if($ejercicios)
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Duracion</th>
                        <th>Repeticiones</th>
                        <th>Series</th>
                        <th>Categoria</th>
                        <th>Descripcion</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($ejercicios as $ejercicio)
                      <tr>
                        <td><a href="ejercicios/{{$ejercicio->id}}">{{$ejercicio->id}}</a></td>
                        <td>{{$ejercicio->nombre}}</td>
                        <td>{{$ejercicio->tiempo}}</td>
                        <td>{{$ejercicio->repeticiones}}</td>
                        <td>{{$ejercicio->series}}</td>
                        <td>{{$ejercicio->categoria}}</td>
                        <td>{{$ejercicio->descripcion}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  @endif
                 </div>
            </div>
        </div>
    </div>
</div>
               

@endsection