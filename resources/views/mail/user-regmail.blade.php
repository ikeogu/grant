<h3>Hello {{$user->name}}</h3>
<br><br>
Welcome To Consult!
<br>
{{-- Please click the link below to activate your account. --}}
<p>Your email has brrn registered, kindly click the link below to complete your registration</p>
@php
	$email = session('email');
	$verification_code = session('verification_code');
@endphp
<p><a class="btn" href="{{ url('verify-email/'.$email.'/'.$verification_code) }}"> Click here
	{{-- {{ route('verify',$user->verification_code) }} --}}
	
</a></p>
<br><br>

<br><br>
Thank You.