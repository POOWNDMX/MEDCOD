@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Lista de Evolucion (RECETARIO) <a href="evolucion/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('paciente.evolucion.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Paciente</th>
					<th>Recomendaciones</th>
					<th>Observaciones</th>
					<th>Medicacion</th>
					<th>Fecha</th>
					<th>Opciones</th>
				</thead>
               @foreach ($Evolucion as $evo)
				<tr>
					<td>{{ $evo->idEvolucion}}</td>
					<td>{{ $evo->Nombre}}   {{ $evo->Apellido}}</td>
					<td>{{ $evo->Recomendaciones}}</td>
					<td>{{ $evo->Observaciones}}</td>

					<td>{{ $evo->Medicacion}}</td>
					<td>{{ $evo->Fecha}}</td>
					<td>
						<a href="{{URL::action('RecetaController@edit',$evo->idEvolucion)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$evo->idEvolucion}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('paciente.evolucion.modal')
				@endforeach
			</table>
		</div>
		{{$Evolucion->render()}}
	</div>
</div>

@endsection