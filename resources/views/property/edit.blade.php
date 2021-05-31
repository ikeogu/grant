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
					<li><a href="{{ route('admin-properties') }}" class="text-white">Properties /</a></li>
					<li class="this-page">{{ $page_title }}</li>
				</ul>
			</div>
			
		</div>
	</div>
</section>
<section>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-8">
				<form class="card" action="{{ route('update-property', $property->slug) }}" enctype="multipart/form-data" method="post">
					@csrf
			        <div class="card-body">
			          <h3 class="mb-5 text-center">Add property</h3>
			          <hr>
			          <div class="row">
			            <div class="col-12">
			              <div class="form-group">
			                <label class="form-label">Property Title <span class="text-danger">*</span></label>
			                <input type="text" name="title" class="form-control" placeholder="eg. 3 Bedroom Bungalow" value="{{ $property->title }}" required>
			              </div>
			              @error('title')
			              	<li class="text-danger">{{ $message }}</li>
			              @enderror
			            </div>
			            <div class="col-md-6">
			              <div class="form-group">
			                <label class="form-label">Listing Type <span class="text-danger">*</span></label>
			                <select class="form-control" required name="list_type">
			                	<option selected disabled>Select Type</option>
			                	<option value="sale" @if($property->list_type=='sale') selected @endif>Sales</option>
			                	<option value="rent" @if($property->list_type=='rent') selected @endif>Rent</option>
			                </select>
			              </div>
			              @error('list_type')
			              	<li class="text-danger">{{ $message }}</li>
			              @enderror
			            </div>
			            <div class="col-md-6">
			              <div class="form-group">
			                <label class="form-label">House Type <span class="text-danger">*</span></label>
			                <select class="form-control" required name="house_type">
			                	<option selected disabled>Select Type</option>
			                	<option value="bungalow" @if($property->house_type=='bungalow')selected @endif>Bungalow</option>
			                	<option value="duplex" @if($property->house_type=='duplex') selected @endif>Duplex</option>
			                	<option value="flat" @if($property->house_type=='flat') selected @endif>Flats</option>
			                </select>
			              </div>
			              @error('list_type')
			              	<li class="text-danger">{{ $message }}</li>
			              @enderror
			            </div>
			            <div class="col-md-6">
			              <div class="form-group">
			                <label class="form-label">Number of bedrooms <span class="text-danger">*</span></label>
			                <input type="number" name="bedrooms" class="form-control" placeholder="e.g 3" step="1" value="{{ $property->beds }}" required>
			              </div>
			              @error('bedrooms')
			              	<li class="text-danger">{{ $message }}</li>
			              @enderror
			            </div>
			            <div class="col-md-6">
			              <div class="form-group">
			                <label class="form-label">Number of Toilets <span class="text-danger">*</span></label>
			                <input type="number" name="toilets" class="form-control" placeholder="e.g 3" step="1" value="{{ $property->baths }}" required>
			              </div>
			              @error('toilets')
			              	<li class="text-danger">{{ $message }}</li>
			              @enderror
			            </div>
			            <div class="col-12">
			              <div class="form-group mb-0">
			                <label class="form-label">Property Description <span class="text-danger">*</span></label>
			                <textarea name="details" rows="5"class="form-control" placeholder="A Tastely Furnished 3 bedroom bungalow seated in a 100 sq ft land space with a higly raised fence and close to major road." required >{{ $property->description }}</textarea>
			              </div>
			              @error('details')
			              	<li class="text-danger">{{ $message }}</li>
			              @enderror
			            </div>
			            <div class="col-12">
			              <div class="form-group">
			                <label class="form-label">Property Address <span class="text-danger">*</span></label>
			                <textarea class="form-control" name="address" placeholder="eg. 10 Hilton Street, Off Juvenile Road, Port Harcourt" required>{{ $property->address }}</textarea>
			              </div>
			              @error('address')
			              	<li class="text-danger">{{ $message }}</li>
			              @enderror
			            </div>
			            <div class="col-md-6">
			              <div class="form-group">
			                <label class="form-label">State <span class="text-danger">*</span></label>
			               <select class="form-control" name="state" required>
			               		<option selected disabled>Select State</option>
			               		@foreach($states as $state)
			               			<option value="{{ $state->id }}" @if($state->id == $property->state) selected @endif>{{ $state->name }}</option>
			               		@endforeach
			               </select>
			              </div>
			              @error('state')
			              	<li class="text-danger">{{ $message }}</li>
			              @enderror
			            </div>
			            <div class="col-md-6">
			              <div class="form-group">
			                <label class="form-label">City <span class="text-danger">*</span></label>
			                <input type="text" name="city" class="form-control" placeholder="e.g Port Harcourt" value="{{ $property->city }}" required>
			              </div>
			              @error('city')
			              	<li class="text-danger">{{ $message }}</li>
			              @enderror
			            </div>
			            <div class="col-sm-6 col-md-6">
			              <div class="form-group">
			                <label class="form-label">Location <span class="text-danger">*</span></label>
			                <input type="text" name="location" class="form-control" placeholder="e.g Rukpoku" value="{{ $property->location }}" required>
			              </div>
			              @error('location')
			              	<li class="text-danger">{{ $message }}</li>
			              @enderror
			            </div>
			            <div class="col-md-6">
			              <div class="form-group">
			                <label class="form-label">Nearest Major Road </label>
			                <input type="text" name="major_road" class="form-control" placeholder="e.g Airport Road" value="{{ $property->major_road }}">
			              </div>
			              @error('major_road')
			              	<li class="text-danger">{{ $message }}</li>
			              @enderror
			            </div>
			            <div class="col-md-6">
			              <div class="form-group">
			                <label class="form-label">Nearest Landmark</label>
			                <input type="text" name="landmark" class="form-control" placeholder="e.g Police Station" value="{{ $property->landmark }}">
			              </div>
			              @error('landmark')
			              	<li class="text-danger">{{ $message }}</li>
			              @enderror
			            </div>
			            <div class="col-md-6">
			              <div class="form-group">
			                <label class="form-label">Price</label>
			                <input type="number" name="price" class="form-control" placeholder="e.g 600,000" value="{{ $property->price }}">
			              </div>
			              @error('price')
			              	<li class="text-danger">{{ $message }}</li>
			              @enderror
			            </div>
			            <div class="col-12">
			              <div class="form-group">
			                <label class="form-label">Cover Photo <span class="text-danger">*</span></label>
			                <input type="file" name="cover_photo" class="form-control c-img">
			                <input type="hidden" name="current_photo" value="{{ $property->cover_photo }}">
			              </div required>
			              @error('cover_photo')
			              	<li class="text-danger">{{ $message }}</li>
			              @enderror

			              <img id="blah" class="mt-2 mb-3" src="{{ asset('storage/properties/cover_images/'.$property->cover_photo) }}" alt="your image" height="130" />
			            </div>
			           <div class="col-12">
			           		<label>Other Photos</label>

                           <div class="controls1 row">
	                            <div class="input-group mb-3 col-12 entry1">
	                              <input type="file" name="other_photos[]" class="form-control" placeholder="more photo" aria-label="Recipient's username" aria-describedby="basic-addon2" style="height: 50px;">
	                              <div class="input-group-append">
	                                <span class="input-group-text add-more btn-add" id="basic-addon2" data-toggle="tooltip" data-placement="top" title="Add More Photo"><i class="fa fa-plus-circle"></i></span>
	                              </div>
	                            </div>
	                            @error('other_photos')
					              	<li class="text-danger">{{ $message }}</li>
					              @enderror
                            </div> 
                        </div>

                        <div class="col-12">
                        	<div class="row mt-3">
                                @foreach($property->otherPhotos as $gigphoto)

                                    <div class="col-4 col-sm-3 col-md-3 rounded p-3 mr-1 mb-2 photo-{{ $gigphoto->id }}" style="background-color: #003a67; height: 176px;">
                                        <div class="bg-white rounded p-1" style="background-image: url({{ asset('storage/properties/other_photos/'.$gigphoto->photo) }}); height: 100%; width: 100%; background-size: cover; background-position: center;">
                                             <i class="fa fa-times text-danger p-1" style="position: absolute; border:1px solid white;" data-toggle="modal" data-target="#delete-{{ $gigphoto->id }}"></i>
                                        {{-- <img src="{{ asset('storage/properties/other_photos/'.$gigphoto->photo) }}" style="width: 100%!important; height: 136px!important;"> --}}
                                        </div>
                                       
                                        
                                    </div>


                                    <!-- Modal -->
                                    <div class="modal fade" id="delete-{{ $gigphoto->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Remove Photo</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            By clicking proceed, you are deleting this photo
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-success confirm-delete" id="{{  $gigphoto->id }}">Proceed</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                @endforeach
                            </div>
                        </div>
			            
			            
			          </div>
			        </div>
			        <div class="card-footer">
			        	<input type="hidden" name="property_type" value="building">
			        	<button type="submit" class="btn btn-primary btn-block">Submit</button>
			        </div>
			     </form>
			</div>
			<div class="col-4">
				<div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Client card</h3>
                    
                  </div>
                  <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=200&amp;hl=en&amp;q={{ urlencode($property->address) }}+({{ urlencode($property->location) }})&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                  <div class="card-body">
                    <div class="media">
                      	
                      
                    </div>
                    
                    <div class="h6">Description</div>
                    <p>{{ $property->address }}</p>
                  </div>
                </div>
			</div>
		</div>
	</div>
</section>






	 
@endsection