@extends('layouts.dash')

@section('content')

<div class="row">
	<div class="col-12">
		<div class="card card-small">
			<div class="card-body mx-auto">
				<form>
					<div class="form-group">
						<div class="custom-control">
							<input type="checkbox" class="custom-control-input" name="honestyStatement"><label class="custom-control-label">I agree to be completely honest in my claim submission</label>
						</div>
						<small class="text-primary"></small>
					</div>
					<div class="form-group">
						<label class="lead">When did the incident happen?</label>
						<input type="text" class="form-control" name="dateOccured">
						<small class="text-primary"></small>
					</div>
					<div class="form-group">
						<p class="lead">What type of incident was it?</p>
						<div class="custom-control">
							<input type="radio" class="custom-control-input" name="incidentType"><label class="custom-control-label">theft</label>
						</div>
						<div class="custom-control">
							<input type="radio" class="custom-control-input" name="incidentType"><label class="custom-control-label">damage</label>
						</div>
						<small class="text-primary"></small>
					</div>
					<div class="form-group">
						<label class="lead">Item(s) affected</label>
						<select class="form-control" multiple name="itemsAffected">
							<option value=""> Car </option>
							<option value=""> My Nokia 2 </option>
							<option value=""> My Tablet </option>
						</select>
						<small class="text-primary"></small>
					</div>
					<div class="form-group">
						<label class="lead">Total value of loss</label>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">NGN</span>
							</div>
							<input type="text" class="form-control" aria-label="Amount (to the nearest naira)" value="" placeholder="0" >
							<div class="input-group-append">
								<span class="input-group-text">.00</span>
							</div>
						</div>
						<small class="text-primary"></small>
					</div>
					<div class="form-group">
						<label class="lead">Describe what happened</label>
						<textarea type="text" class="form-control" name="description"></textarea> 
					</div>
					<div class="form-group">
						<label class="lead">Supporting media</label>
						<small class="text-primary"></small>
					</div>
					<button class="btn btn-primary btn-block"> Submit Claim </button>
				</form>
			</div>
		</div>
	</div>
</div>
        
@endsection