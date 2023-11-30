@extends('layouts.app')

@section('content')

<a class="btn btn-primary btn-sm mb-2" href="{{ url()->previous() }}"><i class="fa fa-arrow-left"></i> {{ __('Back')}}</a>


<div class="col-lg-12 margin-tb">
    @include('fragment.error')
    <div class="card border-light mb-3 shadow">
        <div class="card-header bg-danger text-white"><i class="fa fa-check"></i> 
            Información del Votante
        </div>
        <div class="card-body">

            {!! Form::model($votante, ['method' => 'PATCH','route' => ['votante.esequibo.registrar.voto', $votante->id]]) !!}
                <h2 class="text-center"><i class="fa fa-check"></i> Verificación</h2>
                {!! Form::hidden('id', $votante->id ) !!}
                <div class="row">
                <h3>Información básica</h3>
                    <div class="col-xs-1 col-sm-1 col-md-1">
                        <x-showText>
                            <x-slot:label>Nac </x-slot:label>
                            <x-slot:value>{{ !empty($votante->nac) ? $votante->nac : 'N/A'}}</x-slot:value>
                        </x-showText>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2">
                        <x-showText>
                            <x-slot:label>Cedula </x-slot:label>
                            <x-slot:value>{{ !empty($votante->cedula) ? $votante->cedula : 'N/A'}}</x-slot:value>
                        </x-showText>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2">
                        <x-showText>
                            <x-slot:label>Nombres </x-slot:label>
                            <x-slot:value>{{ !empty($votante->p_nombre) ? $votante->p_nombre : 'N/A'}} {{ !empty($votante->s_nombre) ? $votante->s_nombre : 'N/A'}}</x-slot:value>
                        </x-showText>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2">
                        <x-showText>
                            <x-slot:label>Apellidos </x-slot:label>
                            <x-slot:value>{{ !empty($votante->p_apellido) ? $votante->p_apellido : 'N/A'}} {{ !empty($votante->s_apellido) ? $votante->s_apellido : 'N/A'}}</x-slot:value>
                        </x-showText>
                    </div>
                    <div class="col-xs-1 col-sm-1 col-md-1">
                        <x-showText>
                            <x-slot:label>Sexo </x-slot:label>
                            <x-slot:value>{{ !empty($votante->sexo) ? $votante->sexo : 'N/A'}}</x-slot:value>
                        </x-showText>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2">
                        <x-showText>
                            <x-slot:label>Fecha de Nacimiento </x-slot:label>
                            <x-slot:value>{{ !empty($votante->fec_nac) ? $votante->fec_nac : 'N/A'}}</x-slot:value>
                        </x-showText>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2">
                        <x-showText>
                            <x-slot:label>Edad </x-slot:label>
                            <x-slot:value>{{ !empty($votante->edad) ? $votante->edad : 'N/A'}}</x-slot:value>
                        </x-showText>
                    </div>
                </div>
                <hr>
                <div class="row">
                <h3>Centro de Votación</h3>
                    <div class="col-xs-2 col-sm-2 col-md-2">
                        <x-showText>
                            <x-slot:label>Municipio </x-slot:label>
                            <x-slot:value>{{ !empty($votante->municipio) ? $votante->municipio : 'N/A'}}</x-slot:value>
                        </x-showText>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2">
                        <x-showText>
                            <x-slot:label>Parroquia </x-slot:label>
                            <x-slot:value>{{ !empty($votante->parroquia) ? $votante->parroquia : 'N/A'}}</x-slot:value>
                        </x-showText>
                    </div>
                    <div class="col-xs-1 col-sm-1 col-md-1">
                        <x-showText>
                            <x-slot:label>Cod. CV </x-slot:label>
                            <x-slot:value>{{ !empty($votante->cod_cv) ? $votante->cod_cv : 'N/A'}}</x-slot:value>
                        </x-showText>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <x-showText>
                            <x-slot:label>Centro de Votación </x-slot:label>
                            <x-slot:value>{{ !empty($votante->centro_votacion) ? $votante->centro_votacion : 'N/A'}}</x-slot:value>
                        </x-showText>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <x-showText>
                            <x-slot:label>Dirección </x-slot:label>
                            <x-slot:value>{{ !empty($votante->direccion) ? $votante->direccion : 'N/A'}}</x-slot:value>
                        </x-showText>
                    </div>
                </div>
                <hr>
                <div class="row">
                <h3>Información de Estructura</h3>
                    <div class="col-xs-2 col-sm-2 col-md-2">
                        <x-showText>
                            <x-slot:label>Nombres y Apellidos </x-slot:label>
                            <x-slot:value>{{ !empty($votante->nombre) ? $votante->nombre : 'N/A'}}</x-slot:value>
                        </x-showText>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2">
                        <x-showText>
                            <x-slot:label>Estructura </x-slot:label>
                            <x-slot:value>{{ !empty($votante->estructura) ? $votante->estructura : 'N/A'}}</x-slot:value>
                        </x-showText>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2">
                        <x-showText>
                            <x-slot:label>Comisión </x-slot:label>
                            <x-slot:value>{{ !empty($votante->comision) ? $votante->comision : 'N/A'}}</x-slot:value>
                        </x-showText>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2">
                        <x-showText>
                            <x-slot:label>Telefono </x-slot:label>
                            <x-slot:value>{{ !empty($votante->telefono) ? $votante->telefono : 'N/A'}}</x-slot:value>
                        </x-showText>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <h4><strong>Voto Registrado 3-D</strong></h4>
                        @if($votante->voto_esequibo)
                            <h1><span class="badge bg-success">Si</span></h1>
                        @else
                            <h1><span class="badge bg-danger">No</span></h1>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>{{__('Telefono:')}}</strong>
                                    {!! Form::text('telefono_2', null, array('placeholder' => __('04121722382'),'class' => 'form-control', 'required' => 'true')) !!}
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <hr>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                        @if($votante->voto_esequibo)
                            <a type="submit" class="btn btn-light btn-sm" href="{{ route('votante.esequibo') }}"><i class="fa fa-arrow-left"></i> Regresar</a>
                        @else
                            <button type="submit" class="btn btn-success btn-lg"><i class="fa fa-hand"></i> Registrar Voto</button><br><br>
                            <a type="submit" class="btn btn-light btn-sm" href="{{ route('votante.esequibo') }}"><i class="fa fa-xmark"></i> Cancelar</a>
                        @endif                    
                </div>
            {!! Form::close() !!}

        </div>
    </div>
</div>
@endsection