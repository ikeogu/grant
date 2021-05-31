@extends('layouts.admin')

@section('content')

@section('title', 'Admin')
<section class="pager-sec bfr widget_edit_enabled">
	<div class="container">
		<div class="pager-sec-details text-center">
			<h3 class="text-center">{{ $page_title }}</h3>
			<div>
				<ul class="breadcrumb-ul">
					<li><a href="{{ route('admin') }}" class="text-white">Home /</a></li>
					<li><a href="{{ route('admin-properties') }}" class="text-white">Properties/</a></li>
					<li class="this-page">{{ $page_title }}</li>
				</ul>
			</div>

		</div>
	</div>
</section>

@include('layouts.shared.alert')
    <section class="ftco-section ftco-property-details py-5">
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 text-left px-5 py-5 ">
                <div class="bg-white p-3">
                    <h3>{{ $property->title }}</h3>
                    <h6>{{ $property->address }}</h6>
                    <h4><span class="badge badge-success">Location:</span> {{ $property->location }}</h4>
                    <h4><span class="badge badge-success">City:</span> {{ $property->city }}</h4>
                    <h4><span class="badge badge-success">Major Road:</span>  {{ $property->major_road }}</h4>
                    <h4><span class="badge badge-success">Land Mark:</span>  {{ $property->landmark }}</h4>
                    <h4><span class="badge badge-success">Listed For:</span>  {{ $property->list_type }}</h4>
                    <h4><span class="badge badge-success">Interests:</span>  {{ $property->interests->count() }}</h4>
                   <a href="{{ route('edit-property', $property->slug) }}" class="btn btn-primary btn-block mb-3">Edit <i class="fa fa-edit"></i></a>
                   <a href="{{ route('delete-single-property', $property->slug) }}" class="btn btn-danger btn-block">Delete <i class="fa fa-trash"></i></a>



                </div>

            </div>
            <div class="col-md-8 border py-3 bg-dark rounded px-auto">

                    <div id="myCarousel" class="carousel slide shadow">
                        <!-- main slider carousel items -->
                        <div class="carousel-inner">
                            <div class="active carousel-item" data-slide-number="0">
                                <img src="{{ asset('storage/properties/cover_images/'.$property->cover_photo) }}" class="img-fluid">
                            </div>
                            {{-- @php $pcount = 1; @endphp --}}
                            @foreach($property->otherPhotos as  $key=> $pic)
                            <div class="carousel-item" data-slide-number="{{ $key + 1 }}">
                                <img src="{{ asset('storage/properties/other_photos/'.$pic->photo) }}" class="img-fluid" style="">
                            </div>
                            {{-- @php $pcount++; @endphp --}}
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


                        <ul class="carousel-indicators list-inline mx-auto border px-2 mt-2" style="height: 150px;">
                            <li class="list-inline-item active">
                                <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                                    <img src="{{ asset('storage/properties/cover_images/'.$property->cover_photo) }}" class="img-fluid">
                                </a>
                            </li>
                            {{-- @php $count = 1; @endphp --}}
                            @foreach($property->otherPhotos as $key=> $pic)
                            <li class="list-inline-item">
                                <a id="carousel-selector-{{ $key + 1 }}" data-slide-to="{{ $key + 1 }}" data-target="#myCarousel">
                                    <img src="{{ asset('storage/properties/other_photos/'.$pic->photo) }}" class="img-fluid">
                                </a>
                            </li>
                            {{-- @php $count ++; @endphp --}}
                            @endforeach
                        </ul>
                    </div>


            </div>

        </div>
        <div class="row py-5">
            <div class="col-md-12 pills">
                        <div class="bd-example bd-example-tabs">
                            <div class="d-flex">
                              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                                <li class="nav-item">
                                  <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Features</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
                                </li>
                                {{-- <li class="nav-item">
                                  <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Review</a>
                                </li> --}}
                                <li class="nav-item">
                                  <a class="nav-link" id="pills-location-tab" data-toggle="pill" href="#pills-location" role="tab" aria-controls="pills-location" aria-expanded="true">Location</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="pills-interest-tab" data-toggle="pill" href="#pills-interest" role="tab" aria-controls="pills-interest" aria-expanded="true">Interests</a>
                                </li>
                              </ul>
                            </div>

                          <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="features">
                                            <li class="check"><span class="fa fa-check-circle"></span>Lot Area: @php echo (int)($property->area>0)? number_format($property->area).' SQ FT' : 'N/A' @endphp</li>

                                            <li class="check"><span class="fa fa-check-circle"></span>Bed Rooms:  @php echo (int)($property->beds>0)? number_format($property->beds) : 'N/A' @endphp </li>
                                            <li class="check"><span class="fa fa-check-circle"></span>Bath Rooms:  @php echo (int)($property->baths>0)? number_format($property->baths) : 'N/A' @endphp </li>
                                            <li class="check"><span class="fa fa-check-circle"></span>Luggage</li>
                                            <li class="check"><span class="fa fa-check-circle"></span>Garage: 2</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="features">
                                            <li class="check"><span class="fa fa-check-circle"></span>Floor Area: 1,300 SQ FT</li>
                                            <li class="check"><span class="fa fa-check-circle"></span>Year Build:: 2019</li>
                                            <li class="check"><span class="fa fa-check-circle"></span>Water</li>
                                            <li class="check"><span class="fa fa-check-circle"></span>Stories: 2</li>
                                            <li class="check"><span class="fa fa-check-circle"></span>Roofing: New</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="features">
                                            <li class="check"><span class="fa fa-check-circle"></span>Floor Area: 1,300 SQ FT</li>
                                            <li class="check"><span class="fa fa-check-circle"></span>Year Build:: 2019</li>
                                            <li class="check"><span class="fa fa-check-circle"></span>Water</li>
                                            <li class="check"><span class="fa fa-check-circle"></span>Stories: 2</li>
                                            <li class="check"><span class="fa fa-check-circle"></span>Roofing: New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
                              {{$property->description}}
                            </div>

                            <div class="tab-pane fade" id="pills-location" role="tabpanel" aria-labelledby="pills-location-tab">
                              <div class="row">
                                    <div class="col-md-8 0ffset-md-2">
                                        <h3 class="head">Map</h3>
                                        <div class="mt-3">
                                            <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=200&amp;hl=en&amp;q={{ urlencode($property->address) }}+({{ urlencode($property->location) }})&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-interest" role="tabpanel" aria-labelledby="pills-interest-tab">
                              <div class="row">
                                    <div class="col-md-12 bg-white p-5">
                                        <div class="table-responsive">
                                            <table class="table">
                                               <thead>
                                                   <tr>
                                                       <th>S/N</th>
                                                       <th>Name</th>
                                                       <th>Email</th>
                                                       <th>Phone</th>
                                                       <th>Date</th>
                                                   </tr>
                                               </thead>
                                               <tbody>
                                                @php $icount = 0; @endphp
                                                    @foreach($property->interests as $interest)
                                                    @php $icount  ++; @endphp
                                                   <tr>
                                                        <td>{{ $icount }}</td>
                                                       <td>{{ $interest->user->firstname }} {{ $interest->user->lastname }}</td>
                                                       <td>{{ $interest->user->email }}</td>
                                                       <td>{{ $interest->user->phone }}</td>
                                                       <td>{{ $interest->created_at  }}</td>
                                                   </tr>

                                                   @endforeach

                                               </tbody>
                                           </table>
                                       </div>
                                    </div>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                              <div class="row">
                                    <div class="col-md-7">
                                        <h3 class="head">23 Reviews</h3>
                                        <div class="review d-flex">
                                            <div class="user-img" style="background-image: url({{ asset('assets/images/person_1.jpg') }})"></div>
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
                                                    <span class="text-right"><a href="#" class="reply"><i class="fa fa-reply"></i></a></span>
                                                </p>
                                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                            </div>
                                        </div>
                                        <div class="review d-flex">
                                            <div class="user-img" style="background-image: url({{ asset('assets/images/person_2.jpg') }})"></div>
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
                                                    <span class="text-right"><a href="#" class="reply"><i class="fa fa-reply"></i></a></span>
                                                </p>
                                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                            </div>
                                        </div>
                                        <div class="review d-flex">
                                            <div class="user-img" style="background-image: url({{ asset('assets/images/person_3.jpg') }})"></div>
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
                                                    <span class="text-right"><a href="#" class="reply"><i class="fa fa-reply"></i></a></span>
                                                </p>
                                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
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
