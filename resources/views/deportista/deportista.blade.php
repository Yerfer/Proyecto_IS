

@extends('Deportista/LayoutDeport')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Bienvenido {{Session::get('usuario')}} </div>
				<div class="panel-body">

				</div>
			</div>
		</div>
	</div>
</div>
@endsection

