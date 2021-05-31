@extends('layouts.front')

@section('content')
@section('title', 'Login')

     <section class="ftco-section contact-section" style="background-color: #24a148;">
      <div class="container mt-5">
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-6 mb-md-5">

            <form method="POST" action="{{ route('login') }}" class="bg-light p-5 contact-form">
                @csrf
             <h2 class="text-center mb-5" style="font-size: 30px; font-weight: bold;">Login</h2>
              <div class="form-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
              <div class="form-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
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
                <input type="submit" value="Login" class="btn btn-primary btn-block py-3 px-5">
              </div>
              <p class="text-center"><a href="{{ route('password.request') }}">Forgot Password</a></p>
              <p class="text-center">Not registered? <a href="{{ route('register') }}">Sign up</a></p>
            </form>

          </div>
        </div>

      </div>
    </section>
@endsection
