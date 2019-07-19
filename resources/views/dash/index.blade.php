@extends('layouts.app')

@section('content')

@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
		<i class="fa fa-check mx-2"></i>
		{{ session('status') }} 
	</div>
@endif
<!-- Page Header -->
<div class="page-header row no-gutters py-4">
  <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
    <span class="text-uppercase page-subtitle">{{$title}}</span>
    <h3 class="page-title">Insurance Overview</h3>
  </div>
</div>
<!-- End Page Header -->
<div class="row">
	<div class="col-md-12 col-lg-4 my-2">
		<div class="card card-small" style="background-image: url({{ asset('images/bg.png') }});">
			<div class="card-header border-bottom text-center" style="background: transparent;">
				<div class="mb-3 mx-auto">
					<img width="" class="rounded-circle img-fluid" src="{{ asset('images/avatars/0.jpg') }}">
				</div>
				<h4 class="mb-" style="color: #fff;">Sierra Brooks</h4>
			</div>
			<div class="card-body" style="color: #fff;">
				<span class="lead mr-0 text-inverse">NGN 0.00</span>
				<p class="ml-0">in your wallet </p>
			</div>
		</div>
	</div>
	<div class="col-md-12 col-lg-8 my-2">
	    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
	        <div class="carousel-inner row w-100 mx-auto" role="listbox">
	            <div class="carousel-item col-md-3  active">
	               <div class="panel panel-default">
	                  <div class="panel-thumbnail">
	                    <a href="#" title="image 1" class="thumb">
	                      <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=1" alt="slide 1">
	                    </a>
	                  </div>
	                </div>
	            </div>
	            <div class="carousel-item col-md-3 ">
	               <div class="panel panel-default">
	                  <div class="panel-thumbnail">
	                    <a href="#" title="image 3" class="thumb">
	                     <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=2" alt="slide 2">
	                    </a>
	                  </div>
	                </div>
	            </div>
	            <div class="carousel-item col-md-3 ">
	               <div class="panel panel-default">
	                  <div class="panel-thumbnail">
	                    <a href="#" title="image 4" class="thumb">
	                     <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=3" alt="slide 3">
	                    </a>
	                  </div>
	                </div>
	            </div>
	            <div class="carousel-item col-md-3 ">
	                <div class="panel panel-default">
	                  <div class="panel-thumbnail">
	                    <a href="#" title="image 5" class="thumb">
	                     <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=4" alt="slide 4">
	                    </a>
	                  </div>
	                </div>
	            </div>
	            <div class="carousel-item col-md-3 ">
	              <div class="panel panel-default">
	                  <div class="panel-thumbnail">
	                    <a href="#" title="image 6" class="thumb">
	                      <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=5" alt="slide 5">
	                    </a>
	                  </div>
	                </div>
	            </div>
	            <div class="carousel-item col-md-3 ">
	               <div class="panel panel-default">
	                  <div class="panel-thumbnail">
	                    <a href="#" title="image 7" class="thumb">
	                      <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=6" alt="slide 6">
	                    </a>
	                  </div>
	                </div>
	            </div>
	            <div class="carousel-item col-md-3 ">
	               <div class="panel panel-default">
	                  <div class="panel-thumbnail">
	                    <a href="#" title="image 8" class="thumb">
	                      <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=7" alt="slide 7">
	                    </a>
	                  </div>
	                </div>
	            </div>
	             <div class="carousel-item col-md-3  ">
	                <div class="panel panel-default">
	                  <div class="panel-thumbnail">
	                    <a href="#" title="image 2" class="thumb">
	                     <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=8" alt="slide 8">
	                    </a>
	                  </div>
	                  
	                </div>
	            </div>
	        </div>
	        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
	            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	            <span class="sr-only">Previous</span>
	        </a>
	        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
	            <span class="carousel-control-next-icon" aria-hidden="true"></span>
	            <span class="sr-only">Next</span>
	        </a>
	    </div>
	</div>
	<div class="col-md-12 my-2">
		<div class="row">
			<div class="col-md-6 col-lg-3 mb-4">
				<div class="stats-small stats-small--1 card card-small">
					<div class="card-body p d-flex">
						<div class="d-flex flex-column m-auto">
							<div class="stats-small__data text-center border-bottom">
								<span class="stats-small__label text-uppercase">Premium Summary</span>
								<h6 class="stats-small__value count my-3">NGN 0.00</h6>
							</div>
							<div class="stats-small__data">
								<span class="text-uppercase"><a href="#">View </a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mb-4">
				<div class="stats-small stats-small--1 card card-small">
					<div class="card-body p d-flex">
						<div class="d-flex flex-column m-auto">
							<div class="stats-small__data text-center border-bottom">
								<span class="stats-small__label text-uppercase">Wallet Transactions</span>
								<h6 class="stats-small__value count my-3">NGN 0.00</h6>
							</div>
							<div class="stats-small__data">
								<span class="text-uppercase"><a href="#">View more</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col0-md-6 col-lg-3 mb-4">
				<div class="stats-small stats-small--1 card card-small text-muted">
					<div class="card-body p d-flex">
						<div class="d-flex flex-column m-auto">
							<div class="stats-small__data text-center border-bottom">
								<span class="stats-small__label text-uppercase">Weeks until withdrawal</span>
								<h6 class="stats-small__value count my-3">0</h6>
							</div>
							<div class="stats-small__data">
								<span class="text-uppercase"><a href="#">Withdraw now </a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mb-4">
				<div class="stats-small stats-small--1 card card-small">
					<div class="card-body p d-flex">
						<div class="d-flex flex-column m-auto">
							<div class="stats-small__data text-center border-bottom">
								<span class="stats-small__label text-uppercase">Items Insured</span>
								<h6 class="stats-small__value count my-3">0</h6>
							</div>
							<div class="stats-small__data">
								<span class="text-uppercase"><a href="#">View all</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mb-4">
				<div class="stats-small stats-small--1 card card-small">
					<div class="card-body p d-flex">
						<div class="d-flex flex-column m-auto">
							<div class="stats-small__data text-center border-bottom">
								<span class="stats-small__label text-uppercase">Insurance Claims</span>
								<h6 class="stats-small__value count my-3">0</h6>
							</div>
							<div class="stats-small__data">
								<span class="text-uppercase"><a href="#">New Claim</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
        
@endsection