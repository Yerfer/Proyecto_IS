@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Actualizar Rutina: {{ $rutinas->nombre }}</div>
                    <div class="panel-body">
                        {!! Form::model($rutinas,[ 'route' => ['pro.rutinas.update', $rutinas],  'method' => 'PUT']) !!}
                            <div class="form-group">
                                {!! Form::label('nombre', 'Nombre') !!}
                                {!! Form::text('nombre', null, [ 'class' => 'form-control', 'placeholder' => 'Introduzca el Nombre de la Nueva Rutina.']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('descripcion', 'Descripción') !!}
                                {!! Form::text('descripcion', null, [ 'class' => 'form-control', 'placeholder' => 'Introduzca una descripción que explique la nueva rutina.']) !!}
                            </div>
                            <p>Ejercicios para la semana.</p>
                            <div class="form-group">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Lunes</th>
                                        <th>Martes</th>
                                        <th>Miércoles</th>
                                        <th>Jueves</th>
                                        <th>Viernes</th>
                                    </tr>
                                    <tr>
                                        @for($i=1;$i<=5;$i++)
                                            <td>
                                                <select class="form-control" name="{{"Dia_".$i}}">
                                                    <option value="">Seleccione</option>
                                                    @foreach($ejercicios as $ejercicio)
                                                        <option value="{{$ejercicio->id}}">{{$ejercicio->nombre}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        @endfor
                                    </tr>

                                </table>
                            </div>
                            <button type="submit" class="btn btn-success">Actualizar Rutina</button>
                        {!! Form::close() !!}
                    </div>
                </div>

                {!! Form::open(['route' => ['pro.rutinas.destroy', $rutinas], 'method' => 'DELETE']) !!}
                    <button type="submit" onclick="return confirm('Estás Seguro de Eliminar esta Rutina?')" class="btn btn-danger">Eliminar Rutina</button>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection