<h3>Hello</h3>
<br><br>
New Property Seeker
<br>
{{-- Please click the link below to activate your account. --}}
<p>Property Request  {{ session('request')['message'] }}. </p>

<br><br>
Property Code: {{ session('request')['code'] }}
{{ $user->firstname }} {{ $user->lastname }} <br>
{{ $user->email }}<br>
{{ $user->phone}}



