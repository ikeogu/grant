@extends('layouts.front')

@section('content')
@section('title', 'Enter Email')
    <section class="ftco-section contact-section" style="background-color: #24a148;">
        <div class="container mt-5">
            <div class="row block-9 justify-content-center mb-5">
                <div class="col-md-6 mb-md-5">

                    <form method="POST" action="{{ route('password.email') }}" class="bg-light p-5 contact-form">
                        @csrf
                        <h2 class="text-center mb-5" style="font-size: 30px; font-weight: bold;"> Email Address</h2>
                        <div class="form-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Send Password Reset Link"
                                class="btn btn-primary btn-block py-3 px-5">
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </section>

@endsection
