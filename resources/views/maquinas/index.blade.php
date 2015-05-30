@extends('maquinas/Layout')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Maquinas</div>
				<div class="panel-body">
                 @if($maquinas)
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Caracteristicas</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($maquinas as $maquina)
                      <tr>
                        <td><a href="maquinas/{{$maquina->id}}">{{$maquina->id}}</a></td>
                        <td>{{$maquina->nombre}}</td>
                        <td>{{$maquina->descripcion}}</td>
                        <td>{{$maquina->caracteristicas}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                 </div>
            </div>
        </div>
    </div>
</div>
               @endif

@endsection