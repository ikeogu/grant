@extends('layouts.front')

@section('content')
@section('title', 'Real Estate')
    <section class="hero-wrap" style="background-image: url({{ asset('assets/images/bg_1.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center">
                <div class="col-lg-7 col-md-6 ftco-animate d-flex align-items-end">
                    <div class="text">
                        <h1 class="mb-4">Find Perfect <br>House From Your Area.</h1>
                        <p style="font-size: 18px;">From as low as $20 A small river named Duden flows by their place and
                            supplies it with the necessary regelialia.</p>
                        <p><a href="#" class="btn btn-primary py-3 px-4">View all properties</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt search-bg">
        @include('layouts.shared.search-area')
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-primary">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                    <div class="media block-6 services services-bg d-block text-center px-4 py-5">
                        <div class="icon d-flex justify-content-center align-items-center"><span
                                class="flaticon-business"></span></div>
                        <div class="media-body py-md-4">
                            <h3>Trusted by Thousands</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                    <div class="media block-6 services services-bg services-darken d-block text-center px-4 py-5">
                        <div class="icon d-flex justify-content-center align-items-center"><span
                                class="flaticon-home"></span></div>
                        <div class="media-body py-md-4">
                            <h3>Wide Range of Properties</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                    <div class="media block-6 services services-bg services-lighten d-block text-center px-4 py-5">
                        <div class="icon d-flex justify-content-center align-items-center"><span
                                class="flaticon-stats"></span></div>
                        <div class="media-body py-md-4">
                            <h3>Financing Made Easy</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                    <div class="media block-6 services services-bg d-block text-center px-4 py-5">
                        <div class="icon d-flex justify-content-center align-items-center"><span
                                class="flaticon-quarantine"></span></div>
                        <div class="media-body py-md-4">
                            <h3>Locked in Pricing</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">What we offer</span>
                    <h2 class="mb-2">Featured Properties</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12 text-center">
                    <div class="carousel-properties owl-carousel">
                        @foreach ($properties as $property)

                            @auth
                                @php
                                    // dd($interestArr);

                                    $prop_id = '';

                                @endphp
                            @endauth
                            <div class="item">
                                <div class="property-wrap ftco-animate">
                                    <a href="#" class="img"
                                        style="background-image: url({{ asset('storage/properties/cover_images/' . $property->cover_photo) }});">
                                        <div class="rent-sale">
                                            <span class="sale">Sale</span>
                                        </div>
                                        <p class="price"><span class="orig-price">&#x20A6;
                                                {{ number_format($property->price) }}</span></p>
                                    </a>
                                    <div class="text text-center">
                                        <ul class="property_list">
                                            <ul class="property_list">
                                                @if ($property->property_type == 'building')
                                                    <li><span class="fa fa-bed"></span>{{ $property->beds }}</li>
                                                    <li><span class="fa fa-bath"></span>{{ $property->baths }}</li>
                                                @else

                                                    <li><span class="flaticon-floor-plan"></span>{{ $property->area }}sqft
                                                    </li>
                                                @endif
                                            </ul>
                                        </ul>
                                        <h3><a href="#">{{ $property->title }}</a></h3>
                                        <span class="location">{{ $property->location }}, {{ $property->city }}</span>
                                        <a href="#" class="d-flex align-items-center justify-content-center btn-custom">
                                            <span class="fa fa-link"></span>
                                        </a>
                                        <div class="list-team d-flex align-items-center mt-2 pt-2 border-top row">
                                            <div class="col-6 text-center ">
                                                @guest
                                                    <button type="button" data-toggle="modal"
                                                        data-target="#like-prop-{{ $property->id }}" href="#"
                                                        class="btn btn-primary curve-btn">Like <i
                                                            class="fa fa-heart"></i></button>
                                                @else
                                                    {{-- <button id="unlike-{{ $property->id }}" code="{{ $property->code }}" prop-id="{{ $property->id }}" type="button" class="btn btn-primary curve-btn unlike-prop d-none">unlike <i class="fa fa-thumbs-down"></i></button> --}}
                                                    @if ($prop_id > 0)
                                                        <button type="button"
                                                            class="btn btn-primary curve-btn property-actions"><span
                                                                class="unlike-prop text-white" id="like-{{ $property->id }}"
                                                                code="{{ $property->code }}"
                                                                prop-id="{{ $prop_id }}">Unlike <i
                                                                    class="fa fa-thumbs-down"></i></span></button>
                                                    @else
                                                        <button type="button"
                                                            class="btn btn-primary curve-btn property-actions"><span
                                                                class="like-prop text-white" id="like-{{ $property->id }}"
                                                                code="{{ $property->code }}"
                                                                prop-id="{{ $prop_id }}">Like <i
                                                                    class="fa fa-heart"></i></span></button>
                                                    @endif
                                                @endguest
                                            </div>
                                            <div class="col-6 text-center">
                                                <a href="{{ route('property-detail', $property->slug) }}"
                                                    class="btn btn-success curve-btn">View <i class="fa fa-eye"></i></a>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <a href="{{ route('properties') }}" class="btn btn-primary mt-2">More</a>
                </div>
            </div>
        </div>
    </section>
    {{-- Modal --}}
    @foreach ($properties as $property)
        <!-- Modal -->
        <div class="modal fade" id="like-prop-{{ $property->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">

                <div class="modal-content">
                    <div class="modal-header">

                        <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <h5 class="text-center">Fill in your details. </h5><small class="text-center">Or <a
                                href="{{ route('login') }}" style="font-weight: bold;">Login</a> for a better
                            experience</small>
                        <form action="{{ route('send-message') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="firstname" class="form-control" @auth
                                    value="{{ Auth::user()->firstname }}" @else value="{{ old('firstname') }}"
                                    @endauth placeholder="First Name" required>
                            </div>
                            @error('firstname')
                                <li class="text-danger">{{ $message }}</li>
                            @enderror
                            <div class="form-group">
                                <input type="text" name="lastname" class="form-control" @auth
                                value="{{ Auth::user()->lastname }}" @else value="{{ old('lastname') }}" @endauth
                                placeholder="Last Name" required>
                        </div>
                        @error('lastname')
                            <li class="text-danger">{{ $message }}</li>
                        @enderror
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" @auth
                            value="{{ Auth::user()->email }}" @else value="{{ old('email') }}" @endauth
                            placeholder="Email" required>
                    </div>
                    @error('email')
                        <li class="text-danger">{{ $message }}</li>
                    @enderror
                    <div class="form-group">
                        <input type="tel" name="phone" class="form-control" @auth
                        value="{{ Auth::user()->phone }}" @else value="{{ old('phone') }}" @endauth
                        placeholder="Phone" required>
                </div>
                @error('phone')
                    <li class="text-danger">{{ $message }}</li>
                @enderror

                <input type="hidden" class="form-control" name="code" value="{{ $property->code }}"
                    placeholder="Enter the code here" aria-label="Username" aria-describedby="basic-addon1">
                @error('code')
                    <li class="text-danger">{{ $message }}</li>
                @enderror

                <div class="form-group">
                    @guest <small>Your message will be sent automatically after your registration
                        @endguest</small>
                    <button class="btn btn-primary btn-lg btn-block">@guest Register & @endguest Send
                        message</button>
                </div>
            </form>
        </div>


        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

        </div>
    </div>


</div>
</div>
@endforeach
{{-- End Modal --}}


<section class="ftco-section services-section bg-darken">
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-12 text-center heading-section heading-section-white ftco-animate">
        <span class="subheading">Work flow</span>
        <h2 class="mb-3">How it works</h2>
    </div>
</div>
<div class="row">
    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services services-2">
            <div class="media-body py-md-4 text-center">
                <div class="icon mb-1 d-flex align-items-center justify-content-center"><span>01</span>
                    <img src="{{ asset('assets/images/blob.svg') }}" alt="">
                </div>
                <h3>Evaluate Property</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services services-2">
            <div class="media-body py-md-4 text-center">
                <div class="icon mb-1 d-flex align-items-center justify-content-center"><span>02</span>
                    <img src="{{ asset('assets/images/blob.svg') }}" alt="">
                </div>
                <h3>Meet Your Agent</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services services-2">
            <div class="media-body py-md-4 text-center">
                <div class="icon mb-1 d-flex align-items-center justify-content-center"><span>03</span>
                    <img src="{{ asset('assets/images/blob.svg') }}" alt="">
                </div>
                <h3>Close the Deal</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services services-2">
            <div class="media-body py-md-4 text-center">
                <div class="icon mb-1 d-flex align-items-center justify-content-center"><span>04</span>
                    <img src="{{ asset('assets/images/blob.svg') }}" alt="">
                </div>
                <h3>Have Your Property</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                </p>
            </div>
        </div>
    </div>
</div>
</div>
</section>

<section class="ftco-section ftco-no-pb ftco-no-pt">
<div class="container">
<div class="row">
    <div class="col-md-7 order-md-last d-flex align-items-stretch">
        <div class="img w-100 img-2 mr-md-2"
            style="background-image: url({{ asset('assets/images/about.jpg') }});"></div>
        <div class="img w-100 img-2 ml-md-2"
            style="background-image: url({{ asset('assets/images/about-2.jpg') }});"></div>
    </div>
    <div class="col-md-5 wrap-about py-md-5 ftco-animate">
        <div class="heading-section pr-md-5">
            <h2 class="mb-4">Ecoverde Real Estate</h2>

            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It
                is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it
                would have been rewritten a thousand times and everything that was left from its origin would be
                the word "and" and the Little Blind Text should turn around and return to its own, safe country.
                But nothing the copy said could convince her and so it didn’t take long until a few insidious
                Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their
                agency, where they abused her for their.</p>
        </div>
    </div>
</div>
</div>
</section>

<section class="ftco-counter img" id="section-counter">
<div class="container">
<div class="row pt-md-5">
    <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
        <div class="block-18 py-5 mb-4">
            <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="1000">0</strong>
                <span>Area <br>Population</span>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
        <div class="block-18 py-5 mb-4">
            <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="2500">0</strong>
                <span>Total <br>Properties</span>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
        <div class="block-18 py-5 mb-4">
            <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="500">0</strong>
                <span>Average <br>House</span>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
        <div class="block-18 py-5 mb-4">
            <div class="text d-flex align-items-center">
                <strong class="number" data-number="67">0</strong>
                <span>Total <br>Branches</span>
            </div>
        </div>
    </div>
</div>
</div>
</section>

<section class="ftco-section testimony-section bg-light">
<div class="container">
<div class="row justify-content-center mb-5">
    <div class="col-md-7 text-center heading-section ftco-animate">
        <span class="subheading">Testimonial</span>
        <h2 class="mb-3">Happy Clients</h2>
    </div>
</div>
<div class="row ftco-animate">
    <div class="col-md-12">
        <div class="carousel-testimony owl-carousel">
            <div class="item">
                <div class="testimony-wrap py-4">
                    <div class="text">
                        <span class="fa fa-quote-left"></span>
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                            and Consonantia, there live the blind texts.</p>
                        <div class="d-flex align-items-center">
                            <div class="user-img"
                                style="background-image: url({{ asset('assets/images/person_1.jpg)') }}">
                            </div>
                            <div class="pl-3">
                                <p class="name">Roger Scott</p>
                                <span class="position">Marketing Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimony-wrap py-4">
                    <div class="text">
                        <span class="fa fa-quote-left"></span>
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                            and Consonantia, there live the blind texts.</p>
                        <div class="d-flex align-items-center">
                            <div class="user-img"
                                style="background-image: url({{ asset('assets/images/person_2.jpg') }})">
                            </div>
                            <div class="pl-3">
                                <p class="name">Roger Scott</p>
                                <span class="position">Marketing Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimony-wrap py-4">
                    <div class="text">
                        <span class="fa fa-quote-left"></span>
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                            and Consonantia, there live the blind texts.</p>
                        <div class="d-flex align-items-center">
                            <div class="user-img"
                                style="background-image: url({{ asset('assets/images/person_3.jpg') }})">
                            </div>
                            <div class="pl-3">
                                <p class="name">Roger Scott</p>
                                <span class="position">Marketing Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimony-wrap py-4">
                    <div class="text">
                        <span class="fa fa-quote-left"></span>
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                            and Consonantia, there live the blind texts.</p>
                        <div class="d-flex align-items-center">
                            <div class="user-img"
                                style="background-image: url({{ asset('assets/images/person_1.jpg') }})">
                            </div>
                            <div class="pl-3">
                                <p class="name">Roger Scott</p>
                                <span class="position">Marketing Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimony-wrap py-4">
                    <div class="text">
                        <span class="fa fa-quote-left"></span>
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                            and Consonantia, there live the blind texts.</p>
                        <div class="d-flex align-items-center">
                            <div class="user-img"
                                style="background-image: url({{ asset('assets/images/person_2.jpg') }})">
                            </div>
                            <div class="pl-3">
                                <p class="name">Roger Scott</p>
                                <span class="position">Marketing Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
@endsection
