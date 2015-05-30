@extends('Deportista/LayoutDeport')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Bienvenido {{ $deportista[0]->nombre }}</div>
                    <div class="panel-body">
                        {!! Form::open([ 'route' => ['depor.objetivos.store', $deportista[0]->id], 'method' => 'POST']) !!}
                        <div class="form-group">
                            {!! Form::hidden('id_deportista', $deportista[0]->id ) !!}
                            {!! Form::label('objetivo', 'Objetivo Nuevo') !!}
                            {!! Form::text('objetivo', null, [ 'class' => 'form-control', 'placeholder' => 'Introduzca el Nuevo Objetivo a Realizar.']) !!}
                        </div>

                        <button type="submit" class="btn btn-success">Crear</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection