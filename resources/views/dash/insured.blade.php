@extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="page-header row no-gutters py-4">
  <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
    <span class="text-uppercase page-subtitle">{{$title}}</span>
  </div>
</div>
<!-- End Page Header -->
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<div class="row">
	<div class="col-sm-12 col-md-6 col-lg-4 py-1">
		<div class="card card-small card-post card-post--1 px-0">
			<div class="card-post__image" style="background-image: url('{{asset('images/content-management/6.jpeg')}}');">
				<a href="#" class="card-post__category badge badge-pill badge-primary">Portable Electronics</a>
			</div>
			<div class="card-body p-0">
				<ul class="list-group list-group-small list-group-flush">
					<li class="list-group-item d-flex px-3">
						<span class="text-semibold text-fiord-blue">Insured value</span>
						<span class="ml-auto text-right text-semibold text-reagent-gray">NGN 19,291.00</span>
					</li>
					<li class="list-group-item d-flex px-3">
						<span class="text-semibold text-fiord-blue">Premium</span>
						<span class="ml-auto text-right text-semibold text-reagent-gray">NGN 336.25</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-6 col-lg-4 py-1">
		<div class="card card-small card-post card-post--1 px-0">
			<div class="card-post__image" style="background-image: url('{{asset('images/content-management/6.jpeg')}}');">
				<a href="#" class="card-post__category badge badge-pill badge-primary">Camera Gear</a>
			</div>
			<div class="card-body p-0">
				<ul class="list-group list-group-small list-group-flush">
					<li class="list-group-item d-flex px-3">
						<span class="text-semibold text-fiord-blue">Insured value</span>
						<span class="ml-auto text-right text-semibold text-reagent-gray">NGN 19,291.00</span>
					</li>
					<li class="list-group-item d-flex px-3">
						<span class="text-semibold text-fiord-blue">Premium</span>
						<span class="ml-auto text-right text-semibold text-reagent-gray">NGN 336.25</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
        
@endsection