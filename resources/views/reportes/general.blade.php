@extends('layouts.app')

@section('content')

    <h1 class="text-center">Reporte General Referendo Consultivo 3-D</h1>

    <div class="card text-center mb-4 col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="card-header bg-danger text-white">
			<i class="fa-solid fa-earth-americas"></i> <strong>Reporte General</strong>
		</div>
		<div class="card-body">
			<h5 class="card-title">Cantidad de Votantes</h5>
			<h4><strong>{{ $votantesTotal }}</strong></h4>

			<h5 class="card-title">Cantidad de Votos Jovenes Registrados</h5>
			<h4><strong>{{ $votantesJovenes }}</strong></h4>

			<h5 class="card-title">Porcentaje del Rep</h5>
			<h4><strong>{{ $porcentajeRep }}%</strong></h4>

            <h5 class="card-title">Votantes de Estructuras JPSUV</h5>
			<h4><strong>{{ $votantesEstructura }}</strong></h4>
			
			<hr>
			
			<h5 class="card-title"><strong>EPE</strong></h5>
			<h4><span class="badge bg-{{ $votantesEpe >= $epeTotal ? 'success' : 'danger' }}">{{ $votantesEpe }}</span> de <span class="badge bg-success">{{ $epeTotal }}</span></h4>

			<h5 class="card-title"><strong>EPM</strong></h5>
			<h4><span class="badge bg-{{ $votantesEpm >= $epmTotal ? 'success' : 'danger' }}">{{ $votantesEpm }}</span> de <span class="badge bg-success">{{ $epmTotal }}</span></h4>

			<h5 class="card-title"><strong>EPP</strong></h5>
			<h4><span class="badge bg-{{ $votantesEpp >= $eppTotal ? 'success' : 'danger' }}">{{ $votantesEpp }}</span> de <span class="badge bg-success">{{ $eppTotal }}</span></h4>

			<h5 class="card-title"><strong>Joven Comunidad</strong></h5>
			<h4><span class="badge bg-{{ $votantesComunidad >= $joven_comunidadTotal ? 'success' : 'danger' }}">{{ $votantesComunidad }}</span> de <span class="badge bg-success">{{ $joven_comunidadTotal }}</span></h4>

			<h5 class="card-title"><strong>Joven UBCH</strong></h5>
			<h4><span class="badge bg-{{ $votantesUbch >= $joven_ubchTotal ? 'success' : 'danger' }}">{{ $votantesUbch }}</span> de <span class="badge bg-success">{{ $joven_ubchTotal }}</span></h4>
		</div>
		<div class="card-footer text-muted">
			Actualizado: {{ $date }}
		</div>
	</div>

@endsection
