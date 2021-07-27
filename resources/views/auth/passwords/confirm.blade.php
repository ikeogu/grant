@extends('layouts.login')

@section('content')

<section>

    <div class="container-fluid overbg">

        <div class="row justify-content-center log-1 ">
            <div class="overlay ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#020749" fill-opacity="0.5" d="M0,128L80,154.7C160,181,320,235,480,266.7C640,299,800,309,960,277.3C1120,245,1280,171,1360,133.3L1440,96L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>
                <div class="col-xs-4 col-sm-8 col-md-7 col-lg-5 bg-light mx-auto pt-0 pb-3 px-0 m-0">
                    <div class="row bg-succes mx-auto">
                        <img src="./Img/team-2.jpg" class="rounded-circle mx-auto p-3" alt="">
                    </div>
                    <div class="row bg-light mx-auto mt-3 mb-3">
                        <div class="col-md-7 mx-auto mt-4 p-4 bg-card">
                            <div class="text-center mx-1"><strong>Confirm Password </strong></div>
                            <strong>Please confirm your password before continuing.</strong>
                            <form method="POST" action="{{ route('password.confirm') }}">
                              @csrf

                                <div class="input-group cx-prepend my-3">
                                    <div class="input-group-prepend cx-prepen ">
                                        <i class="fa fa-lock-open my-2  mx-2"></i>
                                    </div>

                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" >

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="row justify-content-center cx-preped">
                                    <button type="submit" class="btn btn-primary">
                                        Confirm Password<i class="fa fa-sign-in-alt ml-1"></i></button>
                                </div>
                                 @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </form>
                        </div>

                </div>
                    </div>



                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#28a745" fill-opacity="0.5" d="M0,192L80,176C160,160,320,128,480,133.3C640,139,800,181,960,170.7C1120,160,1280,96,1360,64L1440,32L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
            </div>
        </div>
    </div>
</section>
@endsection
