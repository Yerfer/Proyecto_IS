@extends('Deportista/LayoutDeport')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Actualizar Medidas</div>
				<div class="panel-body">
				    {!! Form::open(array('url' => 'medidas')) !!}
				        <div class="form-group">
                    	    {!! Form::label('biceps', 'Biceps', ['class' => 'col-md-4 control-label']) !!}
                    	    <div class="col-md-6">
                    		{!!Form::number('biceps', null, ['class' => 'form-control'])!!}<br>
                    		</div>
                    	</div>

				        <div class="form-group">
                    	    {!! Form::label('hombros', 'Hombros', ['class' => 'col-md-4 control-label']) !!}
                    	    <div class="col-md-6">
                    		{!!Form::number('hombros', null, ['class' => 'form-control'])!!}<br>
                    		</div>
                    	</div>

                        <div class="form-group">
                            {!! Form::label('pecho', 'Pecho', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                            {!!Form::number('pecho',null, ['class' => 'form-control'])!!}<br>
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('cuadriceps', 'Cuadriceps', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                            {!!Form::number('cuadriceps',null, ['class' => 'form-control'])!!}<br>
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('pantorrilla', 'Pantorrilla', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                            {!!Form::number('pantorrilla',null, ['class' => 'form-control'])!!}<br>
                            </div>
                        </div>

                        <div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Actualizar
								</button>
							</div>
						</div>
					</div>
                    {!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
