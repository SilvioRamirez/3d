@if (count($errors) > 0)
    <div class="alert alert-dismissible alert-danger">
		<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <i class="fa fa-circle-xmark"></i> <strong>{{ __('Whoops!')}}</strong> {{ __('There were some problems with your input')}}<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <i class="fa fa-circle-xmark"></i> <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(Session::has('error'))
	<div class="alert alert-dismissible alert-danger">
		<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
		<i class="fa fa-circle-xmark"></i> {{ Session::get('error')}}
	</div>
@endif

