@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Rutina</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <h4> <p>Nombre: </p> </h4>
                            <h3> {{ $rutina->nombre }} </h3>
                        </div>
                        <div class="form-group">
                            <h4> <p>Descripción: </p> </h4>
                            <h3> {{ $rutina->descripcion }} </h3>
                        </div>
                        <h4><p>Ejercicios para la semana.</p></h4>
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

                                                @foreach($rutinaejerciciodia as $rutinaejerciciod)
                                                    @if($i==$rutinaejerciciod->id_dia)
                                                        @foreach($ejercicios as $ejercicio)
                                                            @if($ejercicio->id==$rutinaejerciciod->id_ejercicio)
                                                                <h4> {{ $ejercicio->nombre }} </h4>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endforeach

                                        </td>
                                    @endfor
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection