@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 class="card-header">{{ __('Dashboard') }}</h3>
                <div class="card-body">
                   	@if(auth()->user()->is_admin == 1)
						<a href="{{url('admin/routes')}}">Admin</a>
				   	@else
						<h4 class="text-primary">Normal user</h4>
				   	@endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
