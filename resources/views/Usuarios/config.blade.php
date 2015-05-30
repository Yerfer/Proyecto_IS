@extends('Usuarios/LayoutCrear')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
			@if($usuario)
				<div class="panel-heading">Panel de control usuario: {{$usuario->nombre}}</div>
				<div class="panel-body">
                    <div class="form-group">
                        {!! Form::label('nombre', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
                    	<div class="col-md-6">
                    		{!!Form::text('nombre', $usuario->nombre, ['class' => 'form-control', 'disabled' => 'disabled'])!!}<br>
                    	</div>
                    </div>

				    <div class="form-group">
                        {!! Form::label('apellido', 'Apellido', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                    		{!!Form::text('apellido', $usuario->apellido, ['class' => 'form-control', 'disabled' => 'disabled'])!!}<br>
                    	</div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('cedula', 'Cedula', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!!Form::text('cedula', $usuario->cedula, ['class' => 'form-control', 'disabled' => 'disabled'])!!}<br>
                        </div>
                    </div>

                    <div class="form-group">
                            {!! Form::label('email', 'E-mail', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                            {!!Form::email('email',$usuario->email, ['class' => 'form-control', 'disabled' => 'disabled'])!!}<br>
                            </div>
                        </div>

                    <div class="form-group">
                            {!! Form::label('usuario', 'Usuario', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                            {!!Form::text('usuario',$usuario->usuario, ['class' => 'form-control', 'disabled' => 'disabled'])!!}<br>
                            </div>
                    </div>

                    <div class="form-group">
                            {!! Form::label('password', 'Contraseña', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                            {!!Form::password('password', ['class' => 'form-control', 'disabled' => 'disabled'])!!}<br>
                            </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('usuario', 'Tipo', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!!Form::text('usuario',$usuario->tipo, ['class' => 'form-control', 'disabled' => 'disabled'])!!}<br>
                        </div>
                    </div>
                    <div class="form-group">
                        {!!Form::open(array('url' => 'usuario/'.$usuario->id,'method' => 'delete'))!!}
                            <input class="btn btn-danger" type="submit" value="Eliminar">
                            <a class="btn btn-success" href="/usuario/{{$usuario->id}}/edit" role="button">Editar</a>
                        {!!Form::close()!!}
                    </div>
                </div>
			</div>
			@endif
		</div>
	</div>
</div>
@endsection
