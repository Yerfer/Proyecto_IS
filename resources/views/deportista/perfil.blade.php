

@extends('Deportista/LayoutDeport')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		    <div class="panel panel-default">
            	<div class="panel-heading">Foto de Perfil </div>
            	    <div class="panel-body">
            	        <div class="panel-heading">Foto:</div>
                            <div class="panel-body">
                                <p>aqui pondria mi foto... SI TUVIERA UNA!!!! D:</p>
                            </div>
                    </div>
            </div>

			<div class="panel panel-default">
				<div class="panel-heading">Perfil </div>
				<div class="panel-body">
				<div class="panel-heading">Datos Personales</div>
				<div class="panel-body">

				@if($usuario)
                 {!! Form::open(array('url' => 'perfil')) !!}
                    <div class="form-group">
                        {!! Form::label('nombre', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                        {!!Form::text('nombre', $usuario[0]->nombre, ['class' => 'form-control '])!!}<br>
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('apellido', 'Apellidos', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                        {!!Form::text('apellido', $usuario[0]->apellido, ['class' => 'form-control '])!!}<br>
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('cedula', 'Cedula', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6 ">
                        {!!Form::number('cedula', $usuario[0]->cedula, ['class' => 'form-control '])!!}<br>
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('direccion', 'Dirección', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                        {!!Form::text('direccion', $usuario[1]->direccion, ['class' => 'form-control '])!!}<br>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('telefono', 'Telefono', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                        {!!Form::number('telefono', $usuario[1]->telefono, ['class' => 'form-control'])!!}<br>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('genero', 'Genero', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::select('genero', [
                                '1'=>'Masculino',
                                '2'=>'Femenino']) !!}<br><br>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('presion', 'Presion sanguinea', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                        {!!Form::number('presion',$usuario[1]->presion, ['class' => 'form-control', 'size' => '3'])!!}<br>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('peso', 'Peso (Kg)', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                        {!!Form::number('peso',$usuario[1]->peso, ['class' => 'form-control', 'size' => '3'])!!}<br>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('altura', 'Altura (cm)', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                        {!!Form::number('altura',$usuario[1]->altura, ['class' => 'form-control'])!!}<br>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Guardar
                            </button>
                        </div>
                    </div>
                    </div>
                </div>
                {!! Form::close() !!}
                @endif
                </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

