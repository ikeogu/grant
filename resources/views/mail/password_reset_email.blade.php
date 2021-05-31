<h3>Hello </h3>
<br><br>
You requested for a password reset on PowerPack Club.
<br>
kindly click the reset button to reset your password.


<p><a style="background-color: black; color:white; padding: 7px; text-decoration: none; border-radius: 5px; " href="{{ url('reset-password/'.session('email').'/'.session('token')) }}">Reset</a></p>
<p>if you are not able to click the "Reset" button, kindly copy the link below and paste it on your browser <br> <a href="{{ url('reset-password/'.session('email').'/'.session('token')) }}">{{ url('reset-password/'.session('email').'/'.session('token')) }}</a></p>
<br><br>
<P>If you did not make this request, kindly ignore this message.</P>
<br><br>
From <strong>Powerpack Team</strong>.
