@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					<strong> Editar Empresa </strong>
				</div>
		
				<div class="panel-body">

					{!! Form::model($empresa, ['route' => ['empresas.update', $empresa->id], 'method' => 'PUT']) !!}
                        
                        @include('admin.empresas.partials.form')

                    {!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>

@endsection