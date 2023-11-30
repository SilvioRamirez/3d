@extends('layouts.app')

@section('content')

    <h1 class="text-center">Reporte de Referendo Consultivo 3-D</h1>

    <div class="card-group text-center">
        @foreach ($municipios as $item)
            <x-cards.vote 
                :municipio="$item->municipio" 
                :votantes="$item->votantes"
                :epe="$item->epe"
                :epm="$item->epm"
                :epp="$item->epp"
                :joven_comunidad="$item->joven_comunidad"
                :joven_ubch="$item->joven_ubch"
                :votantes_registrados="$item->votantes_registrados" 
                :porcentaje_rep="$item->porcentaje_rep" 
                :votantes_estructura="$item->votantes_estructura"
                :date="$item->date"
                :votantes_epe="$item->votantes_epe"
                :votantes_epm="$item->votantes_epm"
                :votantes_epp="$item->votantes_epp"
                :votantes_comunidad="$item->votantes_comunidad"
                :votantes_ubch="$item->votantes_ubch"
            />
        @endforeach
    </div>

@endsection
