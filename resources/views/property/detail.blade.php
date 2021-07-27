@extends('layouts.app')

@section('content')

    <section class="mht-1">
        <div class="container mt-3 ">
            <div class="row p-5 mt-3">
                <div class="col-sm-12 col-md-6 mt-3">
                    <div id="myCarousel" class="carousel slide shadow">
                        <!-- main slider carousel items -->
                        <div class="carousel-inner">
                            <div class="active carousel-item" data-slide-number="0">
                                <img src="{{ asset('storage/properties/cover_images/' . $property->cover_photo) }}"
                                    class="img-fluid">
                            </div>
                            @foreach ($property->otherPhotos as $key => $item)
                                <div class="carousel-item" data-slide-number="{{ $key }}">
                                    <img src="{{ asset('storage/properties/other_photos/' . $item->photo) }}"
                                        class="img-fluid">
                                </div>
                            @endforeach

                            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>

                        </div>
                        <!-- main slider carousel nav controls -->


                        <ul class="carousel-indicators list-inline mx-auto border px-2">
                            <li class="list-inline-item active">
                                <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                                    <img src="{{ asset('storage/properties/cover_images/' . $property->cover_photo) }}"
                                        alt="" class="img-fluid">
                                </a>
                            </li>

                            @foreach ($property->otherPhotos as $key => $item)
                                <li class="list-inline-item">
                                    <a id="carousel-selector-{{ $key + 1 }}" data-slide-to="{{ $key + 1 }}"
                                        data-target="#myCarousel">
                                        <img src="{{ asset('storage/properties/other_photos/' . $item->photo) }}" alt=""
                                            class="img-fluid" >
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6  jumbotron  ">
                    <div class=" row px-2 pt-2 pb-0 ">
                        <div class="col-6">

                           <div><span class="yht-1 text-uppercase">  {{ $property->list_type }}: N{{ number_format($property->price) }}</span></div>
                            <div><span class="yht-1">Agency: N45,000</span></div>
                            <div><span class="yht-1">Legal Fee: N22,500</span></div>
                            <div>
                                <h4 class="text-success">Total: N{{ number_format($property->price) }}</h4>
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="row ">
                                <div class="col-4">
                                    <div class="text-center font-weight-bold uvh"><span>Bedroom</span></div>
                                    <div class="text-center uvh"><strong>{{ $property->beds }}</strong></div>
                                </div>
                                <div class="col-3">
                                    <div class="text-center font-weight-bold uvh"><span>Toilet</span></div>
                                    <div class="text-center uvh "><strong>{{ $property->baths }}</strong></div>
                                </div>
                                <div class="col-3">
                                    <div class="text-center font-weight-bold uvh"><span>Baths</span></div>
                                    <div class="text-center uvh "><strong>{{ $property->baths }}</strong></div>
                                </div>
                            </div>
                            <hr class="my-2">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <span class="font-weight-bold uvh">House Code</span>
                                    <div class="badge badge-dark p-2 uvh-2 mx-3">{{ $property->code }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-2">
                    <div class="row mb-0 pt-2 pb-0">
                        <div class="col-4">
                            <div class="text-center uvh"><span class="font-weight-bold">HOME TYPE</span></div>
                            <div class="text-center uvh"><span>{{ $property->house_type }}</span></div>
                        </div>
                        <div class="col-4">
                            <div class="text-center uvh">
                                <span class="font-weight-bold"> LOCATION</span>
                            </div>
                            <div class="text-center uvh">
                                <p> N{{ $property->location }}</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="badge badge-success p-2 uvh mx-3 ">For {{ $property->list_type }}</div>
                        </div>
                    </div>
                    <hr class="my-2">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center vvh-1">
                                <h2>Description</h2>
                            </div>
                            <div class="text-center vvh-1 mb-0 pb-0">
                                <p>{{ $property->description }}</p>
                            </div>
                        </div>
                    </div>
                    <form class="form-contact-agent" action="{{ route('pay') }}" method="post">

                        <div class="form-group">
                            <input type="hidden" name="amount" class="form-control" value="{{ $property->price }}"
                                readonly>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="prop_id" value="{{ $property->id }}">
                        <p>
                            <button class="btn btn-success btn-sm btn-block" type="submit" value="Pay Now!">
                                <i class="fa  fa-sm"></i> Pay Now!
                            </button>
                        </p>
                    </form>
                </div>


            </div>
        </div>
    </section>
    <hr class="my-0 mht-1 ">

    <section class="mht-1  p-2">
        <div class="container p-1 mb-5 mt-4 vht-3">
            <div class="row p-4 m-0">
                <div class="col-lg-4">
                    <div class="row justify-content-center mt-5 mb-0">
                        <h3 class="h4 text-black">Call Agent</h3>
                    </div>
                    <div class="row justify-content-center mt-5">
                        <div class="">
                            <span class="badge badge-warning p-3">08083549952</span>
                            <span></span>
                            <span class="badge-dark badge hst-1 p-3"><a href="" class="text-white"><i
                                        class="fa fa-phone fa-faw "></i></a> </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 her p-1">
                    <div class="row justify-content-center mt-3 ">
                        <h3 class="h4 text-black">CONTACT AN AGENT</h3>
                    </div>
                    <form class="form-contact-agent" action="#" method="post">
                        <div class="row justify-content-center">
                            <div class="col-3 p-2">
                                <div class="input-group cx-prepend my-3 ">
                                    <div class="input-group-prepend cx-prepen ">
                                        <i class="fa fa-user my-2  mx-2"></i>
                                    </div>
                                    <input type="text" name="firstname" class="form-control" @auth
                                        value="{{ Auth::user()->firstname }}" @else value="{{ old('firstname') }}"
                                        @endauth placeholder="First Name">
                                    @error('firstname')
                                        <li class="text-danger">{{ $message }}</li>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-3 p-2">
                                <div class="input-group cx-prepend my-3 ">
                                    <div class="input-group-prepend cx-prepen ">
                                        <i class="fa fa-envelope my-2  mx-2"></i>
                                    </div>
                                    <input type="email" name="email" class="form-control" @auth
                                    value="{{ Auth::user()->email }}" @else value="{{ old('email') }}" @endauth
                                    placeholder="Email">

                            </div>
                            @error('email')
                                <li class="text-danger">{{ $message }}</li>
                            @enderror
                        </div>
                        <div class="col-3 p-2">
                            <div class="input-group cx-prepend my-3 ">
                                <div class="input-group-prepend cx-prepen ">
                                    <i class="fa fa-mobile my-2  mx-2"></i>
                                </div>
                                <input type="tel" name="phone" class="form-control" @auth
                                value="{{ Auth::user()->phone }}" @else value="{{ old('phone') }}" @endauth
                                placeholder="Phone">
                        </div>
                        @error('phone')
                            <li class="text-danger">{{ $message }}</li>
                        @enderror
                    </div>
                </div>

                <div class="row justify-content-center">

                    <div class="col-9">
                        <div class="input-group cx-prapend my-1 ">
                            <textarea class="form-contro" name="message" rows="3"
                                placeholder="e.g Hi Agent, I am intrested in house RKZ33" rows="3"
                                required=""></textarea>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="form-group mt-3">
                        <button id="phone" class="btn btn-primary nth-2">Send <i
                                class="fa fa-paper-plane fa-faw"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
@endsection
