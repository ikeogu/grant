<?php 

	use Illuminate\Support\Facades\Auth;
	use App\Interest;

	function myWishlist(){
	
		return Interest::where('user_id', Auth::user()->id)->get();
	}
	


 ?>