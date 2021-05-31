@extends('layouts.front')

@section('content')
@section('title', 'Real Estate')
    <section class="hero-wrap hero-wrap-2"
        style="background-image: url({{ asset('assets/images/bg_1.jpg') }}); background-position: center; height: 200px!important;"
        data-stellar-background-ratio="0.5">
        <div class="overlay" style="height: 200px!important;"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                style="height: 200px!important;">
                <div class="col-md-9 ftco-animate pb-0 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><span>Wish list</span>
                    </p>
                    <h2 class="mb-3 bread text-white">Wish list</h2>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.shared.alert')
    <div id="flash-msg"></div>

    <section>

        <div class="container-fluid overbg">

            <div class="row  justify-content-center log-1 "
                style="background-image: url({{ asset('assets/images/bg_1.jpg') }});">
                <div class="overlay  ">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#020749" fill-opacity="0.5" d="M0,128L80,154.7C160,181,320,235,480,266.7C640,299,800,309,960,277.3C1120,245,1280,171,1360,133.3L1440,96L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg> -->
                    <div class="col-md-10 bg-light mx-auto pt-0 pb-3 px-0 mt-5">
                        <div class="row bg-succes mx-auto">
                            <i class="fa fa-cart-arrow-down mx-auto my-auto text-light"></i>
                        </div>


                        <div class="row">
                            <div class="col-12 p-4 table-responsive">
                                <table class="table table-striped p-5">
                                    {{-- <thead class="">
                                        <tr class="thead-text ">

                                            <th scope="col">Cover Photo</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead> --}}
                                    <tbody>
                                        @if (!is_null($list))
                                            @foreach ($list as $item)
                                                <tr>

                                                    <td class="tuo-1 align-middle">
                                                        <img src="{{ asset('storage/properties/cover_images/' . $item->property->cover_photo) }}"
                                                            alt="">
                                                    </td>
                                                    <td class="align-middle">
                                                        <strong class="mt-2 p-title">{{ $item->property->title }}</strong>
                                                    </td>
                                                    <td class="align-middle p-location">
                                                        <strong>
                                                            {{ $item->property->location }}/{{ $item->property->city }}</strong>
                                                    </td>
                                                    <td class="align-middle">
                                                        <span class="badge badge-success dht-3 p-2">
                                                            &#x20A6;{{ number_format($item->property->price) }}</span>
                                                    </td>
                                                    <td class="align-middle">
                                                        <a href="{{ route('property-detail', $item->property->slug) }}"
                                                            class="btn btn-success btn-sm mb-1"><i
                                                                class="fa fa-eye"></i></a>
                                                        <button type="button" prop="{{ $item->id }}"
                                                            class="btn btn-danger btn-sm mb-1 remove-property"><i
                                                                class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <p class="text-danger text-center">No property in wishlist</p>
                                        @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="#28a745" fill-opacity="0.5"
                            d="M0,192L80,176C160,160,320,128,480,133.3C640,139,800,181,960,170.7C1120,160,1280,96,1360,64L1440,32L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
    </section>


@endsection
