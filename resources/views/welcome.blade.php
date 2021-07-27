@extends('layouts.app')
@section('content')

    <!--PAGE ONE-->
    <section>
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block" src="{{ asset('user/Img/architecture-1836070_1920.jpg') }}" alt="First slide">
                    <div class="carousel-caption  d-md-block">
                        <div class="col-xs-10 col-md-5 ml-auto">
                            <div class="card my-5">
                                <div class="col-12">
                                    <div class="mx-3 pt-4 dell"><strong>4 Bedroom Bungalow </strong></div>
                                    <div>Trans Amadi Odili Road PHC</div>
                                    <div>₦400,000</div>
                                    <div class="row button-1 justify-content-center my-4 mx-2 float-right">
                                        <a href="{{ route('properties') }}"><button type="button" class="btn btn-navy">View
                                                Property</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block " src="{{ asset('user/Img/image_5.jpg') }}" alt="Second slide">
                    <div class="carousel-caption  d-md-block">
                        <div class="col-xs-10 col-md-5 ml-auto">
                            <div class="card my-5">
                                <div class="col-12">
                                    <div class="mx-3 pt-4 dell"><strong>4 Bedroom Bungalow </strong></div>
                                    <div>Trans Amadi Odili Road PHC</div>
                                    <div>₦400,000</div>
                                    <div class="row button-1 justify-content-center my-4 mx-2 float-right">
                                        <a href="{{ route('properties') }}"><button type="button" class="btn">View
                                                Property</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="{{ asset('user/Img/image_6.jpg') }}" alt="Third slide">
                    <div class="carousel-caption  d-md-block">
                        <div class="col-xs-10 col-md-5 ml-auto">
                            <div class="card my-5">
                                <div class="col-12">
                                    <div class="mx-3 pt-4 dell"><strong>4 Bedroom Bungalow </strong></div>
                                    <div>Trans Amadi Odili Road PHC</div>
                                    <div>₦400,000</div>
                                    <div class="row button-1 justify-content-center my-4 mx-2 float-right">
                                        <a href="{{ route('properties') }}"><button type="button" class="btn">View
                                                Property</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!--DIV ONE-->
    <section>
        @include('layouts.shared.search-area')
    </section>

    <!--CARD ONE-->
    <section>
        <div class="container" style="padding: -50px;">
            <div class="row vow ">
                <div class="col-xs-6 col-sm-6 col-md-3 p-0 m-0 card-2 ">
                    <div class="row mav3 justify-content-center mt-5 mb-3 ">
                        <a href="# "><i class="fa fa-hand-holding-usd "></i></a>
                    </div>
                    <div class="row mav2 justify-content-center mt-3 ">
                        <h4 class="card-title ">Rent/Buy a House</h4>
                    </div>
                    <div class="row mav1 justify-content-center mr-1 ml-4 pl-2 pr-2 mt-3 mb-3 ">
                        <ul>
                            <li>Lorem ipsum dolor sit amet </li>
                            <li>Lorem ipsum dolor sit amet </li>
                            <li>Lorem ipsum dolor sit amet </li>
                            <li>Lorem ipsum dolor sit amet </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 p-0 m-0 card-3 ">
                    <div class="row mav3 justify-content-center mt-5 mb-3 ">
                        <a href="# "><i class="fa fa-home "></i></a>
                    </div>
                    <div class="row mav2 justify-content-center mt-3 ">
                        <h4 class="card-title ">List your Houses</h4>
                    </div>
                    <div class="row mav1 justify-content-center mr-1 ml-4 pl-2 pr-2 mt-3 mb-3 ">
                        <ul>
                            <li>Lorem ipsum dolor sit amet </li>
                            <li>Lorem ipsum dolor sit amet </li>
                            <li>Lorem ipsum dolor sit amet </li>
                            <li>Lorem ipsum dolor sit amet </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 card-4 p-0 m-0 ">

                    <div class="row mav3 justify-content-center mt-5 mb-3 ">
                        <a href="# "><i class="fa fa-camera "></i></a>
                    </div>
                    <div class="row mav2 justify-content-center mt-3 ">
                        <h4 class="card-title ">Property Photograph</h4>
                    </div>
                    <div class="row mav1 justify-content-center mr-1 ml-4 pl-2 pr-2 mt-3 mb-3 ">
                        <ul>
                            <li>Lorem ipsum dolor sit amet </li>
                            <li>Lorem ipsum dolor sit amet </li>
                            <li>Lorem ipsum dolor sit amet </li>
                            <li>Lorem ipsum dolor sit amet </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 card-5 p-0 m-0 ">
                    <div class="row mav3 justify-content-center mt-5 mb-3 ">
                        <a href="# "><i class="fa fa-house-damage "></i></a>
                    </div>
                    <div class="row mav2 justify-content-center mt-3 ">
                        <h4 class="card-title ">House Cleaning</h4>
                    </div>
                    <div class="row mav1 justify-content-center mr-1 ml-4 pl-2 pr-2 mt-3 mb-3 ">
                        <ul>
                            <li>Lorem ipsum dolor sit amet </li>
                            <li>Lorem ipsum dolor sit amet </li>
                            <li>Lorem ipsum dolor sit amet </li>
                            <li>Lorem ipsum dolor sit amet </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--CARD THREE-->
    <section class="ftco-section goto-here">
        <div class="container-fluid">
            <div class="row p-3 ">
                <div class="col-md-12 mt-5 mb-5 ">
                    <div class="line"><span>Recent Listings</span></div>
                </div>
            </div>


            <div class="row px-md-5 px-2 px-sm-0 pt-3 ">

                @foreach ($properties as $property)

                    @auth
                        @php
                            // dd($interestArr);

                            $prop_id = '';

                        @endphp
                    @endauth
                    <div class="col-md-4 col-sm-6 col-12 px-4">
                        <div class="card card-p">
                            <div class="row joop "
                                style="background-image: url({{ asset('storage/properties/cover_images/' . $property->cover_photo) }});">
                                <div class="col-12 ">
                                    <div class="row joop-1 mt-3 ml-3 ">
                                        @if ($property->list_type == 'rent')
                                            <span
                                                class="badge badge-danger mb-4">{{ ucfirst($property->list_type) }}</span>
                                        @else
                                            <span
                                                class="badge badge-success mb-4">{{ ucfirst($property->list_type) }}</span>
                                        @endif
                                    </div>
                                    <div class="row joop-2 ml-3 ">
                                        <span
                                            class="badge badge-success mb-4 ">₦{{ number_format($property->price) }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="background-color: white;">
                                <div class="col-12 ">
                                    <div class="row joop-7 justify-content-center">
                                        <!-- <i class="fa fa-comment"></i> -->
                                    </div>
                                    <div class="row joop-3 justify-content-center">
                                        @if ($property->property_type == 'building')


                                            <div class="col-4 pt-3 text-left">
                                                <i class="fa fa-bed text-dark"></i> <span class="text-dark">
                                                    {{ $property->beds }}beds</span>
                                            </div>
                                            <div class="col-4 pt-3 text-left">
                                                <i class="fa fa-bath text-dark"></i> <span
                                                    class="text-dark">{{ $property->baths }} baths</span>
                                            </div>
                                            <div class="col-4 pt-3 text-left">
                                                <i class="fa fa-bath text-dark"></i> <span
                                                    class="text-dark">{{ $property->baths }} toilets</span>
                                            </div>
                                        @else
                                            <div class="col-4 pt-3 text-left">
                                                <i class="fa fa-floor text-dark"></i> <span
                                                    class="text-dark flaticon-floor-plan">{{ $property->area }}
                                                    sqft</span>
                                            </div>

                                        @endif
                                        <div class="col-12 text-center">
                                            <h4 class="mt-3">{{ $property->beds }} Bedroom {{ $property->house_type }}
                                            </h4>

                                        </div>

                                    </div>
                                    <div class="row joop-4 justify-content-center">
                                        <div class="col-12 py-2">
                                            <p><i class="fa fa-map-marker-alt text-dark"></i> {{ $property->location }}
                                                {{ $property->city }}</p>
                                        </div>

                                    </div>

                                    <div class="row joop-6 mt-2 mb-3">
                                        <div class="col-6 text-center">
                                            @guest
                                                <button class="btn btn-navy" type="button " data-toggle="modal"
                                                    data-target="#like-prop-{{ $property->id }}">Like <i
                                                        class="fa fa-heart"></i>
                                                </button>
                                            @else
                                                @if ($prop_id > 0)
                                                    <button type="button"
                                                        class="btn btn-danger curve-btn property-actions"><span
                                                            class="unlike-prop text-white" id="like-{{ $property->id }}"
                                                            code="{{ $property->code }}"
                                                            prop-id="{{ $prop_id }}">Unlike <i
                                                                class="fa fa-thumbs-down"></i></span>
                                                    </button>
                                                @else
                                                    <button type="button"
                                                        class="btn btn-warning curve-btn property-actions"><span
                                                            class="like-prop text-white" id="like-{{ $property->id }}"
                                                            code="{{ $property->code }}" prop-id="{{ $prop_id }}">Like
                                                            <i class="fa fa-heart"></i></span>
                                                    </button>
                                                @endif
                                            @endguest
                                        </div>
                                        <div class="col-6 text-center button-2">
                                            <a href="{{ route('property-detail', $property->slug) }}"
                                                class="btn btn-success" type="button">View</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>

        </div>

        @foreach ($properties as $property)
            {{-- Modal --}}
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
                                        value="{{ Auth::user()->lastname }}" @else value="{{ old('lastname') }}"
                                        @endauth placeholder="Last Name" required>
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
    {{-- End of Modal --}}
@endforeach
</section>

<!--PAGE-->
<section>
<div class="container-fluid">
    <div class="row pt-3 px-md-5 px-2 pb-5" style="min-height: 200px;">
        <div class="col-xs-12 col-sm-6 col-md-6 look-1 p-0 m-0">
            <div class="row look-4 pl-5">
                <h1>ABOUT US</h1>
            </div>
            <div class="row look-5  justify-content-center ">
                <div class="col-12">
                    <p class="pl-5 pr-5 pb-3 pt-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id
                        possimus saepe vel accusantium fugit recusandae ea ab illo, consectetur nesciunt, eligendi
                        velit animi perspiciatis laudantium dicta quibusdam eaque, quo nisi.</p>
                    <p class="pl-5 pr-5 pb-3 pt-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id
                        possimus saepe vel accusantium fugit recusandae ea ab illo, consectetur nesciunt, eligendi
                        velit animi perspiciatis laudantium dicta quibusdam eaque, quo nisi.</p>
                </div>

            </div>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-3 look-2 pl-5 justify-content-center about-pix"
            style="background-image: url({{ asset('user/Img/condominium-690086_1920.jpg') }}); background-size: cover;">
            <!-- <img src="./Img/condominium-690086_1920.jpg" alt=""> -->
        </div>
        <div class="col-xs-6 col-sm-3 col-md-3 look-3 justify-content-center about-pix"
            style="background-image: url({{ asset('user/Img/architecture-1867187_1920.jpg') }}); background-size: cover;">
            <!-- <img src="./Img/architecture-1867187_1920.jpg" alt=""> -->
        </div>
    </div>
</div>


<!--CAROUSEL CARD-->
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators carousel-indicators-2">
        <li data-target="#multi-item-example" data-slide-to="0" class="active "></li>
        <li data-target="#multi-item-example" data-slide-to="1" class=""></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="carousel-item active p-4">

            <div class="col-md-6 col-lg-4 col-sm-10 offset-sm-1 offset-md-0" style="float:left">
                <div class="card card-body-0 mt-4">
                    <div class="row vow-1 ml-5 mt-0 mb-0">
                        <i class="fa fa-quote-left text-success"></i>
                    </div>
                    <div class="card-body card-body-1 ml-1 mr-1">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicin aerat eaque veniam dolorum voluptatem,
                            id aliquam</p>
                    </div>
                    <div class="row ">
                        <div class="col-6 card-body-2 ">
                            <img src="{{ asset('user/Img/photo_2021-01-30_06-54-53.jpg') }}"
                                style="height: 80px; width: 80px;" class="rounded-circle z-depth-2 ml-5 mb-3"
                                alt="100x100" data-holder-rendered="true">
                        </div>
                        <div class="col-6 card-body-3 ">
                            <div class="row mr-3">
                                <h4 class="text-dark font-weight-bold">Rick Scott</h4>
                                <h6 class="text-dark font-weight-bold">Technical Manager</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-sm-10 offset-sm-1 offset-md-0" style="float:left">
                <div class="card card-body-0 mt-4">
                    <div class="row vow-1 ml-5 mt-0 mb-0">
                        <i class="fa fa-quote-left text-success"></i>
                    </div>
                    <div class="card-body card-body-1 ml-1 mr-1">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicin aerat eaque veniam dolorum voluptatem,
                            id aliquam</p>
                    </div>
                    <div class="row ">
                        <div class="col-6 card-body-2 ">
                            <img src="{{ asset('user/Img/photo_2021-01-30_06-53-34.jpg') }}"
                                style="height: 80px; width: 80px;" class="rounded-circle z-depth-2 ml-5 mb-3"
                                alt="100x100" data-holder-rendered="true">
                        </div>
                        <div class="col-6 card-body-3 ">
                            <div class="row mr-3">
                                <h4 class="text-dark font-weight-bold">Roger Scott</h4>
                                <h6 class="text-dark font-weight-bold">Market Manager</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-sm-10 offset-sm-1 offset-md-0" style="float:left">
                <div class="card card-body-0 mt-4">
                    <div class="row vow-1 ml-5 mt-0 mb-0">
                        <i class="fa fa-quote-left text-success"></i>
                    </div>
                    <div class="card-body card-body-1 ml-1 mr-1">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicin aerat eaque veniam dolorum voluptatem,
                            id aliquam</p>
                    </div>
                    <div class="row ">
                        <div class="col-6 card-body-2 ">
                            <img src="{{ asset('user/Img/photo_2021-01-30_06-54-37.jpg') }}"
                                style="height: 80px; width: 80px;" class="rounded-circle z-depth-2 ml-5 mb-3"
                                alt="100x100" data-holder-rendered="true">
                        </div>
                        <div class="col-6 card-body-3 ">
                            <div class="row mr-3">
                                <h4 class="text-dark font-weight-bold">Roll Vicks</h4>
                                <h6 class="text-dark font-weight-bold">Digital Manager</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item p-4">

            <div class="col-md-6 col-lg-4 col-sm-10 offset-sm-1 offset-md-0" style="float:left">
                <div class="card card-body-0 mt-4">
                    <div class="row vow-1 ml-5 mt-0 mb-0">
                        <i class="fa fa-quote-left text-success"></i>
                    </div>
                    <div class="card-body card-body-1 ml-1 mr-1">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicin aerat eaque veniam dolorum voluptatem,
                            id aliquam</p>
                    </div>
                    <div class="row ">
                        <div class="col-6 card-body-2 ">
                            <img src="{{ asset('user/Img/photo_2021-01-30_06-54-37.jpg') }}"
                                style="height: 80px; width: 80px;" class="rounded-circle z-depth-2 ml-5 mb-3"
                                alt="100x100" data-holder-rendered="true">
                        </div>
                        <div class="col-6 card-body-3 ">
                            <div class="row mr-3">
                                <h4 class="text-dark font-weight-bold">Roll Vicks</h4>
                                <h6 class="text-dark font-weight-bold">Digital Manager</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-sm-10 offset-sm-1 offset-md-0" style="float:left">
                <div class="card card-body-0 mt-4">
                    <div class="row vow-1 ml-5 mt-0 mb-0">
                        <i class="fa fa-quote-left text-success"></i>
                    </div>
                    <div class="card-body card-body-1 ml-1 mr-1">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicin aerat eaque veniam dolorum voluptatem,
                            id aliquam</p>
                    </div>
                    <div class="row ">
                        <div class="col-6 card-body-2 ">
                            <img src="{{ asset('user/Img/photo_2021-01-30_06-53-34.jpg') }}"
                                style="height: 80px; width: 80px;" class="rounded-circle z-depth-2 ml-5 mb-3"
                                alt="100x100" data-holder-rendered="true">
                        </div>
                        <div class="col-6 card-body-3 ">
                            <div class="row mr-3">
                                <h4 class="text-dark font-weight-bold">Roger Scott</h4>
                                <h6 class="text-dark font-weight-bold">Market Manager</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-sm-10 offset-sm-1 offset-md-0" style="float:left">
                <div class="card card-body-0 mt-4">
                    <div class="row vow-1 ml-5 mt-0 mb-0">
                        <i class="fa fa-quote-left text-success"></i>
                    </div>
                    <div class="card-body card-body-1 ml-1 mr-1">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicin aerat eaque veniam dolorum voluptatem,
                            id aliquam</p>
                    </div>
                    <div class="row ">
                        <div class="col-6 card-body-2 ">
                            <img src="{{ asset('user/Img/photo_2021-01-30_06-54-53.jpg') }}"
                                style="height: 80px; width: 80px;" class="rounded-circle z-depth-2 ml-5 mb-3"
                                alt="100x100" data-holder-rendered="true">
                        </div>
                        <div class="col-6 card-body-3 ">
                            <div class="row mr-3">
                                <h4 class="text-dark font-weight-bold">Rick Scott</h4>
                                <h6 class="text-dark font-weight-bold">Technical Manager</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.Second slide-->
    </div>
    <!--/.Slides-->
</div>

<!--Carousel Wrapper-->
</section>

@endsection
