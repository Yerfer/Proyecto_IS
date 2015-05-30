@extends('Usuarios/LayoutCrear')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
			@if($usuario)
				<div class="panel-heading">Editar Datos Usuario: {{$usuario->nombre}}</div>
				<div class="panel-body">
				{!!Form::open(array('url' => 'usuario/' . $usuario->id , 'method'=>'put' ))!!}
                    <div class="form-group">
                        {!! Form::label('nombre', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
                    	<div class="col-md-6">
                    		{!!Form::text('nombre', $usuario->nombre, ['class' => 'form-control'])!!}<br>
                    	</div>
                    </div>

				    <div class="form-group">
                        {!! Form::label('apellido', 'Apellido', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                    		{!!Form::text('apellido', $usuario->apellido, ['class' => 'form-control'])!!}<br>
                    	</div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('cedula', 'Cedula', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!!Form::text('cedula', $usuario->cedula, ['class' => 'form-control'])!!}<br>
                        </div>
                    </div>

                    <div class="form-group">
                            {!! Form::label('email', 'E-mail', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                            {!!Form::email('email',$usuario->email, ['class' => 'form-control'])!!}<br>
                            </div>
                        </div>

                    <div class="form-group">
                            {!! Form::label('usuario', 'Usuario', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                            {!!Form::text('usuario',$usuario->usuario, ['class' => 'form-control'])!!}<br>
                            </div>
                    </div>

                    <div class="form-group">
                            {!! Form::label('password', 'Contraseña', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                            {!!Form::text('password',$usuario->password, ['class' => 'form-control'])!!}<br>
                            </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('tipo', 'Tipo', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                            {!! Form::select('tipo', [
                            '1'=>'Deportista',
                            '3'=>'Entrenador',
                            '2'=>'Administrador']) !!}<br><br>
                            </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-success">
                        	    Guardar cambios
                        	</button>
                        </div>
                    </div>
                </div>
                @endif
			</div>
		</div>
	</div>
</div>
@endsection