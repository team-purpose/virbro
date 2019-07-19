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
	<div class="col-12">
		<div class="card card-small">
			<div class="card-body">
				<h3 class="card-title">Make a claim</h3>
				<form>
					<div class="form-group">
						<p class="lead">Honesty Statement</p>
						<div class="custom-control">
							<input type="checkbox" class="custom-control-input" name="honestyStatement"><label class="custom-control-label">I agree to be completely honest in my claim submission</label>
						</div>
					</div>
					<div class="form-group">
						<label class="lead">When did the incident happen?</label>
						<input type="text" class="form-control" name="dateOccured">
					</div>
					<div class="form-group">
						<p class="lead">What type of incident was it?</p>
						<div class="custom-control">
							<input type="radio" class="custom-control-input" name="incidentType"><label class="custom-control-label">theft</label>
						</div>
						<div class="custom-control">
							<input type="radio" class="custom-control-input" name="incidentType"><label class="custom-control-label">damage</label>
						</div>
					</div>
					<div class="form-group">
						<label class="lead">When did the incident happen</label>
						<input type="text" class="form-control" name="dateOccured">
					</div>
					<div class="form-group">
						<label class="lead">When did the incident happen</label>
						<input type="text" class="form-control" name="dateOccured">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
        
@endsection