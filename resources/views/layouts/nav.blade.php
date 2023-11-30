<nav class="navbar navbar-expand-lg navbar-dark bg-danger border-bottom shadow-sm">
	<div class="container-fluid">
		<a class="navbar-brand" href="{{ url('/') }}"> JPSUV Trujillo </a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
			<span class="navbar-toggler-icon"></span>
      	</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<!-- Lado Izquierdo del Navbar -->
			<ul class="navbar-nav me-auto">
				@can('user-list')
					<li class="nav-item"><a class="nav-link {{ request()->is('users') ? 'active' : '' }}" href="{{ route('users.index') }}"><i class="fa-solid fa-user"></i> Usuarios</a></li>
				@endcan

				@can('role-list')
					<li><a class="nav-link {{ request()->is('roles') ? 'active' : '' }}" href="{{ route('roles.index') }}"><i class="fa-solid fa-users-gear"></i> Roles</a></li>
				@endcan

				@can('votante-list')
					<li><a class="nav-link {{ request()->is('votantes') ? 'active' : '' }}" href="{{ route('votantes.index') }}"><i class="fa-solid fa-users"></i> Votantes</a></li>
				@endcan

				@can('registro-list')
					<li><a class="nav-link {{ request()->is('votante-esequibo') ? 'active' : '' }}" href="{{ route('votante.esequibo') }}"><i class="fa-solid fa-check-to-slot"></i> Registro de Votos Esequibo</a></li>
				@endcan

				@can('reporte-list')
					<li><a class="nav-link {{ request()->is('cuenta-municipio') ? 'active' : '' }}" href="{{ route('cuenta.municipio') }}"><i class="fa-solid fa-map-location-dot"></i> Reporte por Municipios</a></li>
				@endcan

				@can('reporte-list')
					<li><a class="nav-link {{ request()->is('cuenta') ? 'active' : '' }}" href="{{ route('cuenta.general') }}"><i class="fa-solid fa-earth-americas"></i> Reporte General</a></li>
				@endcan

				@can('votante-list')
					<li><a class="nav-link {{ request()->is('votantes') ? 'active' : '' }}" href="{{ route('votantes.export') }}"><i class="fa-solid fa-file-excel"></i> Exportar data de Votantes</a></li>
				@endcan
		</ul>

			<!-- Right Side Of Navbar -->
			<ul class="navbar-nav ms-auto">
				<!-- Authentication Links -->
				@guest
					@if (Route::has('login'))
						<li class="nav-item"><a class="nav-link {{ request()->is('login') ? 'active' : '' }}" href="{{ route('login') }}"><i class="fa fa-right-to-bracket"></i> {{ __('Login') }}</a></li>
					@endif

					@if (Route::has('register'))
						{{-- <li class="nav-item"><a class="nav-link {{ request()->is('register') ? 'active' : '' }}" href="{{ route('register') }}"><i class="fa fa-left-to-bracket"></i> {{ __('Register') }}</a></li> --}}
					@endif
				@else
					<li class="nav-item dropdown">
						<a id="navbarDropdown" class="nav-link dropdown-toggle {{ Auth::user() ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
							<i class="fa fa-user"></i> {{ Auth::user()->name }}
						</a>

						<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="{{ route('logout') }}"
								onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
								{{ __('Logout') }}
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
								@csrf
							</form>
						</div>
					</li>
				@endguest
			</ul>
		</div>
	</div>
</nav>

<!--Main layout-->