@extends('layouts.front')

@section('content')
      <section class="ftco-section contact-section" style="background-color: #24a148;">
      <div class="container mt-5">
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-6 mb-md-5">

            <form method="POST" action="{{ route('password.update') }}" class="bg-light p-5 contact-form">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <h2 class="text-center mb-5" style="font-size: 30px; font-weight: bold;">Reset Password</h2>
              <div class="form-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>

               <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
              <div class="form-group">
                <input type="submit" value="Reset Password" class="btn btn-primary btn-block py-3 px-5">
              </div>

            </form>

          </div>
        </div>

      </div>
    </section>
@endsection

