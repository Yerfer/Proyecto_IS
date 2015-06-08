@extends('pro/rutinas/Layout')

@section('contenido')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"> Deportistas </div>
                    <div class="panel-body">
                        {!! Form::open([ 'route' => 'asignarrutinas.store', 'method' => 'POST']) !!}
                        @if($usuarios)
                            <!-- {!! $i=1 !!} -->
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Rutinas</th>
                                </tr>
                                </thead>
                                <body>
                                @foreach($usuarios as $usuario)
                                    @if($usuario->tipo=='deportista')
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$usuario->nombre}}</td>
                                            <td>{{$usuario->apellido}}</td>
                                            {!! Form::hidden('deportista_'.$i, $usuario->id) !!}
                                            <td>
                                                <select class="form-control" name="{{$i++}}">
                                                    <option value="">Seleccione</option>
                                                    @foreach($rutinas as $rutina)
                                                        <option value="{{$rutina->id}}">{{$rutina->nombre}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                                {!! Form::hidden('cantidad', $i) !!}
                                </body>
                            </table>
                        @endif
                        <button type="submit" class="btn btn-success">Asignar</button>
                        <br/>
                        {!! $usuarios->render() !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

