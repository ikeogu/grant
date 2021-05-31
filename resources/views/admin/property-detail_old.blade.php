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
            <div class="col-md-8 border py-3">
                <div class="property-details">
                    <div class="img" style="background-image: url({{ asset('storage/properties/cover_images/'.$property->cover_photo)}}); height: 450px; background-position: center; background-size: contain;background-repeat: no-repeat;">
                        {{-- <a href="https://vimeo.com/45830194" class="img-video popup-vimeo d-flex align-items-center justify-content-center"> --}}
                        {{-- <span class="fa fa-play"></span> --}}
                      </a>
                    </div>
                    
                </div>
                <div class="row">
                    @foreach($property->otherPhotos as $pic)
                    @if(!empty($pic->photo))
                    <div class="col-md-3 col-sm-4 col-6 p-1">
                        {{-- <a href="{{ asset('storage/properties/other_photos/'.$pic->photo) }}" rel="prettyPhoto[{{ $property->title }}]" title="Other pictures.">
                        <div style="background-image: url({{ asset('storage/properties/other_photos/'.$pic->photo) }});" style="width: 100%; height: 250px;">
                            
                        </div>
                        </a> --}}
                        <a href="{{ asset('storage/properties/other_photos/'.$pic->photo) }}" rel="prettyPhoto[{{ $property->title }}]" title="Other pictures."><img src="{{ asset('storage/properties/other_photos/'.$pic->photo) }}" style="width: 100%; height: 200px;"></a>
                        
                    </div>
                    @endif
                    @endforeach
                </div>

            </div>
            <div class="col-md-4 text-left px-5 py-5">
               <a href="{{ route('edit-property', $property->slug) }}" class="btn btn-primary btn-block mb-3">Edit <i class="fa fa-edit"></i></a>
               <a href="{{ route('delete-single-property', $property->slug) }}" class="btn btn-danger btn-block">Delete <i class="fa fa-trash"></i></a>
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