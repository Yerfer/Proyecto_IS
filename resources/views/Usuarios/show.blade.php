@extends('Usuarios/LayoutCrear')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Usuarios</div>
				<div class="panel-body">
                @if($usuarios)

                          <table class="table">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Cedula</th>
                                <th>Tipo</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($usuarios as $usuario)
                              <tr>
                                <td><a href="usuario/{{$usuario->id}}">{{$usuario->id}}</a></td>
                                <td>{{$usuario->nombre}}</td>
                                <td>{{$usuario->apellido}}</td>
                                <td>{{$usuario->cedula}}</td>
                                <td>{{$usuario->tipo}}</td>
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

