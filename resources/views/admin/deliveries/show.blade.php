@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					<strong>Ver Entrega</strong>
					
					<a  href="{{ route('print', $delivery->id) }}" class="btn btn-sm btn-default pull-right" target="_blank">
						<span class="glyphicon glyphicon-print"></span>
						Imprimir Detalle
					</a>

					<a  href="{{ route('printvoucher', $delivery->id) }}" class="btn btn-sm btn-default pull-right" target="_blank">
						<span class="glyphicon glyphicon-print"></span>
						Imprimir Comprobante
					</a>

				</div>
		
				<div class="panel-body">
					<p> <strong>Codigo:</strong> {{ $delivery->id }}</p>

					<p> <strong>Cliente:</strong> {{ $delivery->reception->client->name }}</p>

					<p> <strong>Equipo:</strong> {{ $delivery->reception->equipment->description }}</p>
					
					<p> <strong>Trabajo Hecho:</strong> {{ $delivery->workDone }}</p>

					<p> <strong>Precio Trabajo:</strong> {{ $delivery->workPrice }}</p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
