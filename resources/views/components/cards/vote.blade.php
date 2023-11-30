<div>
    <div class="card text-center mb-4 col-xs-11 col-sm-11 col-md-11 col-lg-11">
		<div class="card-header bg-danger text-white">
			<i class="fa-solid fa-map-location-dot"></i> <strong>{{ $municipio }}</strong>
		</div>
		<div class="card-body">
			<h5 class="card-title">Cantidad de Votantes</h5>
			<h4><strong>{{ $votantes }}</strong></h4>

			<h5 class="card-title">Cantidad de Votos Jovenes Registrados</h5>
			<h4><strong>{{ $votantesRegistrados }}</strong></h4>

			<h5 class="card-title">Porcentaje del Rep</h5>
			<h4><strong>{{ $porcentajeRep }}%</strong></h4>

            <h5 class="card-title">Votantes de Estructuras JPSUV</h5>
			<h4><strong>{{ $votantesEstructura }}</strong></h4>
			
			<hr>
			
			<h5 class="card-title"><strong>EPE</strong></h5>
			<h4><span class="badge bg-{{ $votantesEpe>=$epe ? 'success' : 'danger' }}">{{ $votantesEpe }}</span> de <span class="badge bg-success">{{ $epe }}</span></h4>


			<h5 class="card-title"><strong>EPM</strong></h5>
			<h4><span class="badge bg-{{ $votantesEpm>=$epm ? 'success' : 'danger' }}">{{ $votantesEpm }}</span> de <span class="badge bg-success">{{ $epm }}</span></h4>

			<h5 class="card-title"><strong>EPP</strong></h5>
			<h4><span class="badge bg-{{ $votantesEpp>=$epp ? 'success' : 'danger' }}">{{ $votantesEpp }}</span> de <span class="badge bg-success">{{ $epp }}</span></h4>

			<h5 class="card-title"><strong>Joven Comunidad</strong></h5>
			<h4><span class="badge bg-{{ $votantesComunidad>=$jovenComunidad ? 'success' : 'danger' }}">{{ $votantesComunidad }}</span> de <span class="badge bg-success">{{ $jovenComunidad }}</span></h4>

			<h5 class="card-title"><strong>Joven UBCH</strong></h5>
			<h4><span class="badge bg-{{ $votantesUbch>=$jovenUbch ? 'success' : 'danger' }}">{{ $votantesUbch }}</span> de <span class="badge bg-success">{{ $jovenUbch }}</span></h4>
			
		</div>
		<div class="card-footer text-muted">
			Actualizado: {{ $date }}
		</div>

	</div>
</div>