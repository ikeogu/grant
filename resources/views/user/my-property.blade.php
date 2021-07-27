@extends('layouts.user')
@section('content')
    <!--Registration form-->
    <section class="log-2">
        <div class=" py-5 ">
            <div class="container ">
                <div class="row justify-content-center mb-4">
                    <h4><strong class="">My Properties</strong></h4>
                </div>

                @if (count(Auth::user()->property) > 0)
                    @foreach (Auth::user()->property as $item)
                        <div class="row p-2 justify-content-center ">
                            <div class="col-xs-6 col-sm-6 col-md-2 bg-transperent p-0 lod shadow">
                                <img class="img-radius"
                                    src="{{ asset('storage/properties/cover_images/' . $item->cover_photo) }}" alt="" >
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-7 bg-so p-0 shadow">
                                <div class=" px-2 mx-5 mt-3 justify-content-center ">
                                    <strong class="mr-auto"> {{ $item->title }} FOR
                                        {{ $item->list_type }}</strong>
                                    <div class="badge badge-success ml-5 p-2">{{ $item->code }}</div>
                                </div>
                                <div class="mx-5 you"><i class="fas fa-map-marker-alt text-success mt-4 mx-3"></i>
                                    {{ $item->location }} {{ $item->city }} {{ $item->state }}</div>
                                <div class="gun  my-3 px-3 mx-5">
                                    <div>
                                        <span class="badge badge-warning ml-1 p-2">{{ $item->beds }} bedrooms</span>
                                        <span class="badge badge-warning p-2  ">{{ $item->baths }} Toilets</span>
                                    </div>
                                    <span class=" hot mr-5">₦{{ $item->price }}</span>
                                    <a href="{{ route('showPro', [$item->id]) }}"
                                        class="btn btn-success word btn-sm mr-5 ">view <i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>

                    @endforeach

                @else
                    <p>No item has been added.</p>
                @endif




            </div>

        </div>
    </section>
@endsection
