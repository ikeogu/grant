@extends('layouts.user')
@section('css')
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
@endsection
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
                                            class="img-fluid">
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6  jumbotron  ">
                    <div class=" row px-2 pt-2 pb-0 ">
                        <div class="col-6">
                            <div><span class="yht-1"> {{ $property->list_type }}:
                                    N{{ number_format($property->price) }}</span></div>
                            {{-- <div><span class="yht-1">Agency: N45,000</span></div>
                            <div><span class="yht-1">Legal Fee: N22,500</span></div>
                            <div>
                                <h4 class="text-success">Total: N517,500</h4>
                            </div> --}}

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
                </div>


            </div>
        </div>
    </section>

@endsection
