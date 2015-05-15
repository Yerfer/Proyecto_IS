@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Rutinas</div>
                    <div class="panel-body">
                        <p>
                            <a role="button" class="btn btn-success" href="{{ route('pro.rutinas.create') }}" >Crear Rutina</a>
                        </p>
                        <p>Hay {{ $rutinas->total() }} Rutinas actualmente.</p>
                        <table class="table table-bordered">
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Acciones</th>
                            </tr>
                            @foreach($rutinas as $rutina)
                                <tr>
                                    <td>{{ $rutina->id }}</td>
                                    <td>{{ $rutina->nombre }}</td>
                                    <td>{{ $rutina->descripcion }}</td>
                                    <td>
                                        <a role="button" class="btn btn-warning" href="">Ver</a>
                                        <a role="button" class="btn btn-primary" href="">Editar</a>
                                        <a role="button" class="btn btn-danger" href="">Eliminar</a>
                                        <a href="">Ver</a>
                                        <a href="">Editar</a>
                                        <a href="">Eliminar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {!! $rutinas->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection