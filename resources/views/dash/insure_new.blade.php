@extends('layouts.dash')

@section('content')

<div class="card card-small mb-3">
	<div class="card-body">
		<form>
			<div class="row">
				<div class="col-md-4 p-3" style="border-radius: inherit;">
					<div class="card-header text-center">
						<div class="mb-3 mx-auto">
							<img width="" class="rounded-circle img-fluid" src="https://via.placeholder.com/150/3684B2/FFFFFF?text=Add+Image">
						</div>
						<button class="btn btn-primary mb-2">Take a picture</button>
						<button class="btn btn-primary mb-2">Upload image</button>
					</div>
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<div class="form-group">
							<input type="text" value="" name="" placeholder="Category" class="form-control">
						</div>
						<div class="form-group">
							<input type="text" value="" name="" placeholder="Asset Name" class="form-control">
						</div>
						<div class="form-group">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">NGN</span>
								</div>
								<input type="text" class="form-control" aria-label="Amount (to the nearest naira)" value="" placeholder="Estimated Value" >
								<div class="input-group-append">
									<span class="input-group-text">.00</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">NGN</span>
								</div>
								<input type="text" class="form-control" aria-label="Amount (to the nearest naira)" value="" placeholder="Premium" >
								<div class="input-group-append">
									<span class="input-group-text">.00</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Additional Photos</label>
							<input type="file" name="" class="form-control">
						</div>
						<details>
							<summary> Cover Details </summary>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</details>
					</div>
					<div class="d-flex">
						<button class="btn btn-primary mx-2"> Insure </button>
						<button class="btn btn-default mx-2"> Save </button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
        
@endsection