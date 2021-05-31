@extends('layouts.front')

@section('content')
@section('title', 'sign up')



 <section class="ftco-section contact-section" style="background-color: #24a148;">
      <div class="container mt-5">
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-6 mb-md-5">
            
            <form method="POST" action="{{ route('register') }}" class="bg-light p-5 contact-form">
                @csrf
             <h2 class="text-center mb-5" style="font-size: 30px; font-weight: bold;">Sign up</h2>
             <div class="form-group">
                <label>First name</label>
                  <input id="firstname" name="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                    @error('firstname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
             </div>
             <div class="form-group">
                <label>Last name</label>
                  <input id="lastname" name="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror"  value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                    @error('lastname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
             </div>
              <div class="form-group">
                <label>Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
              <div class="form-group">
                <label>Phone</label>
                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" maxlength="11" minlength="11" autofocus>

                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
              <div class="form-group">
                <label>Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
              <div class="form-group">
                <label>Confirm Password</label>
                   <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                    @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
              <div class="form-group form-check">
                
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
              </div>
              <div class="form-group">
                <input type="submit" value="Register" class="btn btn-primary btn-block py-3 px-5">
              </div>
              <p class="text-center"><a href="">Forgot Password</a></p>
              <p class="text-center">Not registered? <a href="{{ route('register') }}">Sign up</a></p>
            </form>
          
          </div>
        </div>
        
      </div>
    </section>
@endsection
