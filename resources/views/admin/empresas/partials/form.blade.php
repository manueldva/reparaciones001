
<div class="form-group">
	{{ form::label('nombre', 'Nombre:') }}
	{{ form::text('nombre', null, ['class' => 'form-control']) }}

</div>

<div class="form-group">
	{{ form::label('direccion', 'Dirección:') }}
	{{ form::text('direccion', null, ['class' => 'form-control']) }}

</div>


<div class="form-group">
	{{ form::label('cuit', 'Cuit:') }}
	{{ form::text('cuit', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ form::label('ingresosbrutos', 'Ingresos Brutos:') }}
	{{ form::text('ingresosbrutos', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ form::label('inicioactividades', 'Inicio de Actividades:') }}
	{{ form::date('inicioactividades', null, ['class' => 'form-control']) }}
</div>




<div class="form-group">
	<button type="submit" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
</div>



@section('scripts')
	<script type="text/javascript">

		$('div.alert').not('.alert-important').delay(3000).fadeOut(350) 


	</script>
@endsection