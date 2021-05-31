@extends('layouts.front')

@section('content')
@section('title', 'Real Estate')
    <section class="hero-wrap hero-wrap-2"
        style="background-image: url({{ asset('assets/images/bg_1.jpg') }}); background-position: center;"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate pb-0 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a
                                href="{{ route('properties') }}">Properties <i class="fa fa-chevron-right"></i></a></span>
                        <span>Property detail</span>
                    </p>
                    <h1 class="mb-3 bread">Property Details</h1>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.shared.alert')
    <section class="ftco-section ftco-property-details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 border py-3">
                    <div class="property-details">
                        <div class="img"
                            style="background-image: url({{ asset('storage/properties/cover_images/' . $property->cover_photo) ?? '' }})">
                            <a href="https://vimeo.com/45830194"
                                class="img-video popup-vimeo d-flex align-items-center justify-content-center">
                                <span class="fa fa-play"></span>
                            </a>
                        </div>

                    </div>
                    <div class="row">
                        @foreach ($property->otherPhotos as $pic)
                            @if (!empty($pic->photo))
                                <div class="col-md-3 col-sm-4 col-6 p-1">
                                    {{-- <a href="{{ asset('storage/properties/other_photos/'.$pic->photo) }}" rel="prettyPhoto[{{ $property->title }}]" title="Other pictures.">
                        <div style="background-image: url({{ asset('storage/properties/other_photos/'.$pic->photo) }});" style="width: 100%; height: 250px;">

                        </div>
                        </a> --}}
                                    <a href="{{ asset('storage/properties/other_photos/' . $pic->photo) }}"
                                        rel="prettyPhoto[{{ $property->title }}]" title="Other pictures."><img
                                            src="{{ asset('storage/properties/other_photos/' . $pic->photo) }}"
                                            style="width: 100%; height: 200px;"></a>

                                </div>
                            @endif
                        @endforeach
                    </div>

                </div>
                <div class="col-md-4 text-left px-5">
                    <h4 style="font-weight: bold;">Contact Your Agent</h4>
                    <p><span><i class="fa fa-phone"></i> 090988847474</span></p>
                    <p><span><i class="fa fa-envelope"></i> contact@agency.com</span></p>

                    <form action="{{ route('pay') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="firstname" class="form-control" @auth
                            value="{{ Auth::user()->firstname }}" @else value="{{ old('firstname') }}" @endauth
                            placeholder="First Name">
                    </div>
                    @error('firstname')
                        <li class="text-danger">{{ $message }}</li>
                    @enderror
                    <div class="form-group">
                        <input type="text" name="lastname" class="form-control" @auth
                        value="{{ Auth::user()->lastname }}" @else value="{{ old('lastname') }}" @endauth
                        placeholder="Last Name">
                </div>
                @error('lastname')
                    <li class="text-danger">{{ $message }}</li>
                @enderror
                <div class="form-group">
                    <input type="email" name="email" class="form-control" @auth value="{{ Auth::user()->email }}"
                    @else value="{{ old('email') }}" @endauth placeholder="Email">
            </div>
            @error('email')
                <li class="text-danger">{{ $message }}</li>
            @enderror
            <div class="form-group">
                <input type="tel" name="phone" class="form-control" @auth value="{{ Auth::user()->phone }}"
                @else value="{{ old('phone') }}" @endauth placeholder="Phone">
        </div>
        @error('phone')
            <li class="text-danger">{{ $message }}</li>
        @enderror
        <div class="form-group">
            <input type="text" name="address" class="form-control" @auth
                value="{{ Auth::user()->address }}" @endauth placeholder="Address">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">{{ $property->code }}</span>
            </div>
            <input type="text" class="form-control" name="code" value="{{ $property->code }}"
                placeholder="Enter the code here" aria-label="Username" aria-describedby="basic-addon1"
                required>
        </div>
        @error('code')
            <li class="text-danger">{{ $message }}</li>
        @enderror
        <div class="form-group">
            <input type="number" name="amount" class="form-control" value="{{ $property->price }}"
                readonly>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="prop_id" value="{{ $property->id }}">
        @guest
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Create Password">
            </div>
            @error('password')
                <li class="text-danger">{{ $message }}</li>
            @enderror
            <div class="form-group">
                <input type="password" name="password_confirmation" class="form-control"
                    placeholder="Confirm Password">
            </div>

        @endguest
        {{-- <div class="form-group">
            @guest <small>Your message will be sent automatically after your registration @endguest</small>
            <button class="btn btn-primary btn-lg btn-block">@guest Register & @endguest Send
                message</button>
        </div> --}}
        <p>
            <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
            </button>
        </p>
    </form>


</div>
</div>
<div class="row">
<div class="col-md-12 pills">
    <div class="bd-example bd-example-tabs">
        <div class="d-flex">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                <li class="nav-item">
                    <a class="nav-link active" id="pills-description-tab" data-toggle="pill"
                        href="#pills-description" role="tab" aria-controls="pills-description"
                        aria-expanded="true">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill"
                        href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer"
                        aria-expanded="true">Description</a>
                </li>
                {{-- <li class="nav-item">
                                  <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Review</a>
                                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" id="pills-location-tab" data-toggle="pill" href="#pills-location"
                        role="tab" aria-controls="pills-location" aria-expanded="true">Location</a>
                </li>
            </ul>
        </div>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-description" role="tabpanel"
                aria-labelledby="pills-description-tab">
                <div class="row">
                    <div class="col-md-4">
                        <ul class="features">
                            <li class="check"><span class="fa fa-check-circle"></span>Lot Area:
                                @php echo (int)($property->area>0)? number_format($property->area).' SQ FT' : 'N/A' @endphp</li>

                            <li class="check"><span class="fa fa-check-circle"></span>Bed Rooms:
                                @php echo (int)($property->beds>0)? number_format($property->beds) : 'N/A' @endphp </li>
                            <li class="check"><span class="fa fa-check-circle"></span>Bath Rooms:
                                @php echo (int)($property->baths>0)? number_format($property->baths) : 'N/A' @endphp </li>
                            <li class="check"><span class="fa fa-check-circle"></span>Luggage</li>
                            <li class="check"><span class="fa fa-check-circle"></span>Garage: 2</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="features">
                            <li class="check"><span class="fa fa-check-circle"></span>Floor Area: 1,300 SQ
                                FT</li>
                            <li class="check"><span class="fa fa-check-circle"></span>Year Build:: 2019</li>
                            <li class="check"><span class="fa fa-check-circle"></span>Water</li>
                            <li class="check"><span class="fa fa-check-circle"></span>Stories: 2</li>
                            <li class="check"><span class="fa fa-check-circle"></span>Roofing: New</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="features">
                            <li class="check"><span class="fa fa-check-circle"></span>Floor Area: 1,300 SQ
                                FT</li>
                            <li class="check"><span class="fa fa-check-circle"></span>Year Build:: 2019</li>
                            <li class="check"><span class="fa fa-check-circle"></span>Water</li>
                            <li class="check"><span class="fa fa-check-circle"></span>Stories: 2</li>
                            <li class="check"><span class="fa fa-check-circle"></span>Roofing: New</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel"
                aria-labelledby="pills-manufacturer-tab">
                {{ $property->description }}
            </div>

            <div class="tab-pane fade" id="pills-location" role="tabpanel"
                aria-labelledby="pills-location-tab">
                <div class="row">
                    <div class="col-md-8 0ffset-md-2">
                        <h3 class="head">Map</h3>
                        <div class="mt-3">
                            <iframe width="100%" height="400" frameborder="0" scrolling="no"
                                marginheight="0" marginwidth="0"
                                src="https://maps.google.com/maps?width=100%25&amp;height=200&amp;hl=en&amp;q={{ urlencode($property->address) }}+({{ urlencode($property->location) }})&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                <div class="row">
                    <div class="col-md-7">
                        <h3 class="head">23 Reviews</h3>
                        <div class="review d-flex">
                            <div class="user-img"
                                style="background-image: url({{ asset('assets/images/person_1.jpg') }})">
                            </div>
                            <div class="desc">
                                <h4>
                                    <span class="text-left">Jacob Webb</span>
                                    <span class="text-right">14 March 2018</span>
                                </h4>
                                <p class="star">
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="text-right"><a href="#" class="reply"><i
                                                class="fa fa-reply"></i></a></span>
                                </p>
                                <p>When she reached the first hills of the Italic Mountains, she had a last
                                    view back on the skyline of her hometown Bookmarksgrov</p>
                            </div>
                        </div>
                        <div class="review d-flex">
                            <div class="user-img"
                                style="background-image: url({{ asset('assets/images/person_2.jpg') }})">
                            </div>
                            <div class="desc">
                                <h4>
                                    <span class="text-left">Jacob Webb</span>
                                    <span class="text-right">14 March 2018</span>
                                </h4>
                                <p class="star">
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="text-right"><a href="#" class="reply"><i
                                                class="fa fa-reply"></i></a></span>
                                </p>
                                <p>When she reached the first hills of the Italic Mountains, she had a last
                                    view back on the skyline of her hometown Bookmarksgrov</p>
                            </div>
                        </div>
                        <div class="review d-flex">
                            <div class="user-img"
                                style="background-image: url({{ asset('assets/images/person_3.jpg') }})">
                            </div>
                            <div class="desc">
                                <h4>
                                    <span class="text-left">Jacob Webb</span>
                                    <span class="text-right">14 March 2018</span>
                                </h4>
                                <p class="star">
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="text-right"><a href="#" class="reply"><i
                                                class="fa fa-reply"></i></a></span>
                                </p>
                                <p>When she reached the first hills of the Italic Mountains, she had a last
                                    view back on the skyline of her hometown Bookmarksgrov</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="rating-wrap">
                            <h3 class="head">Give a Review</h3>
                            <div class="wrap">
                                <p class="star">
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        (98%)
                                    </span>
                                    <span>20 Reviews</span>
                                </p>
                                <p class="star">
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        (85%)
                                    </span>
                                    <span>10 Reviews</span>
                                </p>
                                <p class="star">
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        (70%)
                                    </span>
                                    <span>5 Reviews</span>
                                </p>
                                <p class="star">
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        (10%)
                                    </span>
                                    <span>0 Reviews</span>
                                </p>
                                <p class="star">
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        (0%)
                                    </span>
                                    <span>0 Reviews</span>
                                </p>
                            </div>
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
