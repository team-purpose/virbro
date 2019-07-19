@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-12 text-right">
		<a class="btn btn-primary" style="color:#fff;" href="/home/insured/new">Add Asset</a>
	</div>
</div>	

<div class="row mb-4">
	<div class="col-sm-12 col-md-6 col-lg-4 py-1">
		<div class="card card-small card-post card-post--1 px-0">
			<div class="card-post__image" style="background-image: url('{{asset('images/content-management/6.jpeg')}}');">
				<a href="#" class="card-post__category badge badge-pill badge-light">Insured</a>
			</div>
			<div class="card-body p-0">
				<ul class="list-group list-group-small list-group-flush">
					<li class="list-group-item d-flex px-3">
						<span class="text-semibold text-fiord-blue">Portable Electronics</span>
						<span class="ml-auto text-right text-semibold text-reagent-gray"><a href="#">Edit</a></span>
					</li>
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
				<a href="#" class="card-post__category badge badge-pill badge-light">Not insured</a>
			</div>
			<div class="card-body p-0">
				<ul class="list-group list-group-small list-group-flush">
					<li class="list-group-item d-flex px-3">
						<span class="text-semibold text-fiord-blue">Camera Gear</span>
						<span class="ml-auto text-right text-semibold text-reagent-gray"><a href="">Edit</a></span>
					</li>
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