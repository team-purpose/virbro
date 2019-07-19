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

<div class="card card-small">
	<div class="card-body p-0">
		<form>
			<div class="row">
				<div class="col-md-4 p-3" style="background-image: url({{ asset('images/bg.png') }}); border-radius: inherit;">
					<img class="img-fluid rounded-circle" src="{{asset('images/avatar-2.jpeg')}}">
						
					</img>
				</div>
				<div class="col-md-8">
					
				</div>
			</div>
		</form>
	</div>
</div>
        
@endsection