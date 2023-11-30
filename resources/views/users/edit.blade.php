@extends('layouts.app')

@section('content')

<a class="btn btn-primary btn-sm mb-2" href="{{ url()->previous() }}"><i class="fa fa-arrow-left"></i> {{ __('Back')}}</a>

<div class="col-lg-12 margin-tb">
    @include('fragment.error')
    <div class="card border-light mb-3 shadow">
        <div class="card-header bg-danger text-white"><i class="fa fa-user-edit"></i> 
            {{ __('Edit User')}}
        </div>
        <div class="card-body">

                @include('users.partials.form-edit')

        </div>
    </div>
</div>


@endsection