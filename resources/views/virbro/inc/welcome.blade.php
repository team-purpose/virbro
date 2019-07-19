<div style="background-image:url({{ asset('images/welcome-cover.jpg') }});" class="welcome d-flex justify-content-center flex-column">
    <div class="container">
      <!-- Navigation -->
      @include('inc.navbar')
      <!-- / Navigation -->
    </div> <!-- .container -->

    <!-- Inner Wrapper -->
    <div class="inner-wrapper mt-auto mb-auto container">
      <div class="row">
        <div class="col-md-7">
            <h1 class="welcome-heading display-4 text-white">Your Virtual Broker</h1>
            <p class="text-white">I'll help you choose an insurance premium that suits you.</p>
            <a href="#our-services" class="btn btn-lg btn-outline-white btn-pill align-self-center">Start now</a>
        </div>
        <div class="col-md-3">
        <!-- <img class="side-image" src="{{asset('images/undraw_progress_tracking.svg')}}" alt=""> -->
        </div>
      </div>
    </div>
    <!-- / Inner Wrapper -->
  </div>
