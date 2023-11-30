@extends('layouts.app')

@section('content')

<a class="btn btn-primary btn-sm mb-2" href="{{ url()->previous() }}"><i class="fa fa-arrow-left"></i> {{ __('Back')}}</a>


<div class="col-lg-12 margin-tb">

    @include('fragment.error')
    @include('fragment.success')

    <div class="card border-light mb-3 shadow">
        <div class="card-header bg-danger text-white"><i class="fa-solid fa-check-to-slot"></i> 
            Registra Nuevo Voto
        </div>
        <div class="card-body">

            {!! Form::open(array('route' => 'votante.esequibo.verificar','method'=>'POST')) !!}
                @include('votantes-registro.partials.form')
            {!! Form::close() !!}

        </div>
    </div>
</div>

@endsection