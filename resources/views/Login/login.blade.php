@extends('Login/Layout')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Inicio de sesión</div>
				<div class="panel-body">

					{!! Form::open(array('url' => 'login')) !!}
                        <div class="form-group">
                    	    {!! Form::label('usuario', 'Usuario', ['class' => 'col-md-4 control-label']) !!}
                    	    <div class="col-md-6">
                    		{!!Form::text('usuario', null, ['class' => 'form-control'])!!}<br>
                    		</div>
                    	</div>

                        <div class="form-group">
                    	    {!! Form::label('password', 'Contraseña', ['class' => 'col-md-4 control-label']) !!}
                    	    <div class="col-md-6">
                    		{!!Form::password('password', ['class' => 'form-control'])!!}<br>
                    		</div>
                    	</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Iniciar Sesión</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@stop

