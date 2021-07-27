@extends('layouts.app')

@section('content')
@section('title', 'Zamella')
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
                                        <a href="#"><button type="button" class="btn">View Property</button></a>
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
                                        <a href="#"><button type="button" class="btn">View Property</button></a>
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
                                        <a href="#"><button type="button" class="btn">View Property</button></a>
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
    <section>
        <div class="container-fluid ">
            <div class="row p-3 ">
                <div class="col-md-12 mt-5 mb-3 ">
                    <div class="line"><span>Available Properties</span></div>
                </div>
            </div>
            <div class="row px-md-5 px-2 px-sm-0 pt-3 ">
                @foreach ($properties as $key => $property)
                    @auth
                        @php
                            // dd($interestArr);
                            if (in_array($property->id, $interestArr)) {
                                $prop_id = array_search($property->id, $interestArr);
                                // dd($prop_id);
                            } else {
                                $prop_id = '';
                            }
                        @endphp
                    @endauth
                    <div class="col-md-3 col-sm-6 col-12 px-4">
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
                                                <i class="fa fa-bed text-dark"></i> <span
                                                    class="text-dark">{{ $property->beds }} beds</span>
                                            </div>
                                            <div class="col-4 pt-3 text-left">
                                                <i class="fa fa-bath text-dark"></i> <span
                                                    class="text-dark">{{ $property->baths }} baths</span>
                                            </div>
                                            <div class="col-4 pt-3 text-left">
                                                <i class="fa fa-bath text-dark"></i> <span
                                                    class="text-dark">{{ $property->baths }}toilets</span>
                                            </div>

                                        @else

                                            <div>
                                                <i class="fa fa-floor text-dark"></i> <span
                                                    class="text-dark"></span>{{ $property->area }}sqft
                                            </div>
                                        @endif

                                        <div class="col-12 text-center">
                                            <h4 class="mt-3">{{ $property->title }}</h4>
                                        </div>

                                    </div>
                                    <div class="row joop-4 justify-content-center">
                                        <div class="col-12 py-2">
                                            <p><i class="fa fa-map-marker-alt text-dark"></i> {{ $property->location }},
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
                                    <h5 class="text-center">Fill in your details. </h5>
                                    <small class="text-center">Or <a href="{{ route('login') }}"
                                            style="font-weight: bold;">Login</a> for a better
                                        experience</small>
                                    <form action="{{ route('send-message') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="firstname" class="form-control" @auth
                                                value="{{ Auth::user()->firstname }}" @else
                                                value="{{ old('firstname') }}" @endauth placeholder="First Name"
                                                required>
                                        </div>
                                        @error('firstname')
                                            <li class="text-danger">{{ $message }}</li>
                                        @enderror
                                        <div class="form-group">
                                            <input type="text" name="lastname" class="form-control" @auth
                                                value="{{ Auth::user()->lastname }}" @else
                                                value="{{ old('lastname') }}" @endauth placeholder="Last Name" required>
                                        </div>
                                        @error('lastname')
                                            <li class="text-danger">{{ $message }}</li>
                                        @enderror
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" @auth
                                                value="{{ Auth::user()->email }}" @else value="{{ old('email') }}"
                                                @endauth placeholder="Email" required>
                                        </div>
                                        @error('email')
                                            <li class="text-danger">{{ $message }}</li>
                                        @enderror
                                        <div class="form-group">
                                            <input type="tel" name="phone" class="form-control" @auth
                                                value="{{ Auth::user()->phone }}" @else value="{{ old('phone') }}"
                                                @endauth placeholder="Phone" required>
                                        </div>
                                        @error('phone')
                                            <li class="text-danger">{{ $message }}</li>
                                        @enderror

                                        <input type="hidden" class="form-control" name="code"
                                            value="{{ $property->code }}" placeholder="Enter the code here"
                                            aria-label="Username" aria-describedby="basic-addon1">
                                        @error('code')
                                            <li class="text-danger">{{ $message }}</li>
                                        @enderror

                                        <div class="form-group">
                                            @guest <small>Your message will be sent automatically after your registration
                                                @endguest</small>
                                            <button class="btn btn-primary btn-lg btn-block">@guest Register & @endguest
                                                Send
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
                    {{-- End Modal --}}
                @endforeach


            </div>
            <div class="text-center col-12 justify-content-center">
                {{ $properties->links() }}
            </div>

        </div>
    </section>
@endsection
