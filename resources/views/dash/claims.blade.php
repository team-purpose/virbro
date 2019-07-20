@extends('layouts.dash')

@section('content')

<div class="row">
	<div class="col-12 text-right">
		<a class="btn btn-primary mb-3" style="color:#fff;" href="/home/claims/new">New Claim</a>
	</div>
</div>	

<div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Claims</h6>
                  </div>
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">S/N</th>
                          <th scope="col" class="border-0">Item(s)</th>
                          <th scope="col" class="border-0">Incident</th>
                          <th scope="col" class="border-0">Date</th>
                          <th scope="col" class="border-0">Loss Value</th>
                          <th scope="col" class="border-0">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Ali</td>
                          <td>Kerry</td>
                          <td>Kerry</td>
                          <td>Russian Federation</td>
                          <td><span class="badge badge-success">Paid</span></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Clark</td>
                          <td>Angela</td>
                          <td>Angela</td>
                          <td>Estonia</td>
                          <td><span class="badge badge-success">Paid</span></td>
                      	</tr>
                        <tr>
                          <td>3</td>
                          <td>Jerry</td>
                          <td>Nathan</td>
                          <td>Nathan</td>
                          <td>Cyprus</td>
                          <td><span class="badge badge-success">Paid</span></td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Colt</td>
                          <td>Angela</td>
                          <td>Angela</td>
                          <td>Liberia</td>
                          <td><span class="badge badge-info">pending</span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>	
        
@endsection