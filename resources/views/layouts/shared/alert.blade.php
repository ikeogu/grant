@if (Session::has('success'))
    <div class="container my-2">
	   <div class="alert text-center alert-success alert-dismissible fade show mt-3" role="alert">
	    <strong>Alert!</strong> {{ Session::get('success') }}
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	      <span aria-hidden="true">&times;</span>
	    </button>
	  </div>
    </div>
@endif

@if (Session::has('error'))

<div class="container my-2">
	<div class="alert text-center alert-danger alert-dismissible fade show mt-3" role="alert">
	    <strong>Alert!</strong> {{ Session::get('error') }}
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	      <span aria-hidden="true">&times;</span>
	    </button>
	 </div>

</div>
@endif