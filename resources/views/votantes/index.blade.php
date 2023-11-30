@extends('layouts.app')

@section('content')

<div class="row">
    @include('fragment.error')
    @include('fragment.success')
        
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="text-center">
                    <h1><i class="fa fa-users"></i> Votantes</h1>
                </div>
            </div>
        </div>
    
        <div class="card border-light mb-3 shadow">
            <div class="card-header bg-danger text-white">
                Votantes
            </div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>


@endsection

@push('scripts')

    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}

@endpush