@extends('pro/rutinas/Layout')

@section('contenido')
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
                                        <a role="button" class="btn btn-warning" href="{{ route('pro.rutinas.show', $rutina->id) }}">Ver</a>
                                        <a role="button" class="btn btn-primary" href="{{ route('pro.rutinas.edit', $rutina->id) }}">Editar</a>

                                        {!! Form::open(['route' => ['pro.rutinas.destroy', $rutina], 'method' => 'DELETE']) !!}
                                            <button type="submit" onclick="return confirm('Estás Seguro de Eliminar esta Rutina?')" class="btn btn-danger">Eliminar</button>
                                        {!! Form::close() !!}

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