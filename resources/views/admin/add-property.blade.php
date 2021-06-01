@extends('layouts.admin')

@section('content')

@section('title', 'Admin')
<section class="pager-sec bfr widget_edit_enabled">
	<div class="container">
		<div class="pager-sec-details text-center">
			<h3 class="text-center">Quick add listing</h3>
			<div>
				<ul class="breadcrumb-ul">
					<li><a href="{{ route('admin') }}" class="text-white">Home /</a></li>
					<li class="this-page">Add property</li>
				</ul>
			</div>

		</div>
	</div>
</section>
<section>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-8 card">

			        <div class="card-body">
			          <h3 class="mb-5 text-center">Add property</h3>
			          <hr>
			          <div class="d-flex mb-5">
                          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                            <li class="nav-item">
                              <a class="nav-link active" id="pills-residence-tab" data-toggle="pill" href="#pills-residence" role="tab" aria-controls="pills-residence" aria-expanded="true">Building</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-land-tab" data-toggle="pill" href="#pills-land" role="tab" aria-controls="pills-land" aria-expanded="true">Land</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Review</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-location-tab" data-toggle="pill" href="#pills-location" role="tab" aria-controls="pills-location" aria-expanded="true">Location</a>
                            </li>
                          </ul>
                       </div>
                       <hr>

                       <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-residence" role="tabpanel" aria-labelledby="pills-residence-tab">
                            	<form action="{{ route('upload-property') }}" enctype="multipart/form-data" method="post">
													@csrf
						            <div class="row">

							            <div class="col-12">
							              <div class="form-group">
							                <label class="form-label">Property Title <span class="text-danger">*</span></label>
							                <input type="text" name="title" class="form-control" placeholder="eg. 3 Bedroom Bungalow" value="{{ old('title') }}" required>
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
							                	<option value="sale" @if(old('list_type')=='sale') selected @endif>Sales</option>
							                	<option value="rent" @if(old('list_type')=='rent') selected @endif>Rent</option>
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
							                	<option value="bungalow" @if(old('list_type')=='bungalow') selected @endif>Bungalow</option>
							                	<option value="duplex" @if(old('list_type')=='duplex') selected @endif>Duplex</option>
							                	<option value="flat" @if(old('list_type')=='flat') selected @endif>Flats</option>
							                </select>
							              </div>
							              @error('list_type')
							              	<li class="text-danger">{{ $message }}</li>
							              @enderror
							            </div>
							            <div class="col-md-6">
							              <div class="form-group">
							                <label class="form-label">Number of bedrooms <span class="text-danger">*</span></label>
							                <input type="number" name="bedrooms" class="form-control" placeholder="e.g 3" step="1" value="{{ old('bedrooms') }}" required>
							              </div>
							              @error('bedrooms')
							              	<li class="text-danger">{{ $message }}</li>
							              @enderror
							            </div>
							            <div class="col-md-6">
							              <div class="form-group">
							                <label class="form-label">Number of Toilets <span class="text-danger">*</span></label>
							                <input type="number" name="toilets" class="form-control" placeholder="e.g 3" step="1" value="{{ old('toilets') }}" required>
							              </div>
							              @error('toilets')
							              	<li class="text-danger">{{ $message }}</li>
							              @enderror
							            </div>
							            <div class="col-12">
							              <div class="form-group mb-0">
							                <label class="form-label">Property Description <span class="text-danger">*</span></label>
							                <textarea name="details" rows="5"class="form-control" placeholder="A Tastely Furnished 3 bedroom bungalow seated in a 100 sq ft land space with a higly raised fence and close to major road." required >{{ old('details')}}</textarea>
							              </div>
							              @error('details')
							              	<li class="text-danger">{{ $message }}</li>
							              @enderror
							            </div>
							            <div class="col-12">
							              <div class="form-group">
							                <label class="form-label">Property Address <span class="text-danger">*</span></label>
							                <textarea class="form-control" name="address" placeholder="eg. 10 Hilton Street, Off Juvenile Road, Port Harcourt" required>{{ old('address') }}</textarea>
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
							               			<option value="{{ $state->id }}">{{ $state->name }}</option>
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
							                <input type="text" name="city" class="form-control" placeholder="e.g Port Harcourt" value="{{ old('city') }}" required>
							              </div>
							              @error('city')
							              	<li class="text-danger">{{ $message }}</li>
							              @enderror
							            </div>
							            <div class="col-sm-6 col-md-6">
							              <div class="form-group">
							                <label class="form-label">Location <span class="text-danger">*</span></label>
							                <input type="text" name="location" class="form-control" placeholder="e.g Rukpoku" value="{{ old('location') }}" required>
							              </div>
							              @error('location')
							              	<li class="text-danger">{{ $message }}</li>
							              @enderror
							            </div>
							            <div class="col-md-6">
							              <div class="form-group">
							                <label class="form-label">Nearest Major Road </label>
							                <input type="text" name="major_road" class="form-control" placeholder="e.g Airport Road" value="{{ old('major_road') }}">
							              </div>
							              @error('major_road')
							              	<li class="text-danger">{{ $message }}</li>
							              @enderror
							            </div>
							            <div class="col-md-6">
							              <div class="form-group">
							                <label class="form-label">Nearest Landmark</label>
							                <input type="text" name="landmark" class="form-control" placeholder="e.g Police Station" value="{{ old('landmark') }}">
							              </div>
							              @error('landmark')
							              	<li class="text-danger">{{ $message }}</li>
							              @enderror
							            </div>
							            <div class="col-md-6">
							              <div class="form-group">
							                <label class="form-label">Price</label>
							                <input type="number" name="price" class="form-control" placeholder="e.g 600,000" value="{{ old('price') }}">
							              </div>
							              @error('price')
							              	<li class="text-danger">{{ $message }}</li>
							              @enderror
							            </div>
							            <div class="col-12">
							              <div class="form-group">
							                <label class="form-label">Cover Photo <span class="text-danger">*</span></label>
							                <input type="file" name="cover_photo" class="form-control">
							              </div required>
							              @error('cover_photo')
							              	<li class="text-danger">{{ $message }}</li>
							              @enderror
							            </div>
							           <div class="col-12">
							           		<label>Other Photos</label>

				                           <div class="controls1 row">
					                            <div class="input-group mb-3 col-12 entry1">
					                              <input type="file" name="other_photos[]" class="form-control" placeholder="more photo" aria-label="Recipient's username" aria-describedby="basic-addon2" style="height: 50px;" required>
					                              <div class="input-group-append">
					                                <span class="input-group-text add-more btn-add" id="basic-addon2" data-toggle="tooltip" data-placement="top" title="Add More Photo"><i class="fa fa-plus-circle"></i></span>
					                              </div>
					                            </div>
					                            @error('other_photos')
									              	<li class="text-danger">{{ $message }}</li>
									              @enderror
				                            </div>
				                        </div>


						            </div>
						            <div class="col-12">
						            	<input type="hidden" name="property_type" value="building">
			        					<button type="submit" class="btn btn-primary btn-block">Submit</button>
			        				</div>
						        </form>
					      </div>




					      <div class="tab-pane fade " id="pills-land" role="tabpanel" aria-labelledby="pills-land-tab">
					      		<form action="{{ route('upload-property') }}" enctype="multipart/form-data" method="post">
											@csrf
						        	<div class="row">
							            <div class="col-12">
							              <div class="form-group">
							                <label class="form-label">Property Title <span class="text-danger">*</span></label>
							                <input type="text" name="title" class="form-control" placeholder="eg. 3 Plts of Land" value="{{ old('title') }}" required>
							              </div>
							              @error('title')
							              	<li class="text-danger">{{ $message }}</li>
							              @enderror
							            </div>
					            	<form action="{{ route('upload-property') }}" enctype="multipart/form-data" method="post">
								       	@csrf
						            <div class="row">

							            <div class="col-12">
							              <div class="form-group">
							                <label class="form-label">Property Title <span class="text-danger">*</span></label>
							                <input type="text" name="title" class="form-control" placeholder="eg. 3 Bedroom Bungalow" value="{{ old('title') }}" required>
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
							                	<option value="sale" @if(old('list_type')=='sale') selected @endif>Sales</option>
							                	<option value="rent" @if(old('list_type')=='rent') selected @endif>Rent</option>
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
							                	<option value="bungalow" @if(old('list_type')=='bungalow') selected @endif>Bungalow</option>
							                	<option value="duplex" @if(old('list_type')=='duplex') selected @endif>Duplex</option>
							                	<option value="flat" @if(old('list_type')=='flat') selected @endif>Flats</option>
							                </select>
							              </div>
							              @error('list_type')
							              	<li class="text-danger">{{ $message }}</li>
							              @enderror
							            </div>
							            <div class="col-md-6">
							              <div class="form-group">
							                <label class="form-label">Number of bedrooms <span class="text-danger">*</span></label>
							                <input type="number" name="bedrooms" class="form-control" placeholder="e.g 3" step="1" value="{{ old('bedrooms') }}" required>
							              </div>
							              @error('bedrooms')
							              	<li class="text-danger">{{ $message }}</li>
							              @enderror
							            </div>
							            <div class="col-md-6">
							              <div class="form-group">
							                <label class="form-label">Number of Toilets <span class="text-danger">*</span></label>
							                <input type="number" name="toilets" class="form-control" placeholder="e.g 3" step="1" value="{{ old('toilets') }}" required>
							              </div>
							              @error('toilets')
							              	<li class="text-danger">{{ $message }}</li>
							              @enderror
							            </div>
							            <div class="col-12">
							              <div class="form-group mb-0">
							                <label class="form-label">Property Description <span class="text-danger">*</span></label>
							                <textarea name="details" rows="5"class="form-control" placeholder="A Tastely Furnished 3 bedroom bungalow seated in a 100 sq ft land space with a higly raised fence and close to major road." required >{{ old('details')}}</textarea>
							              </div>
							              @error('details')
							              	<li class="text-danger">{{ $message }}</li>
							              @enderror
							            </div>
							            <div class="col-12">
							              <div class="form-group">
							                <label class="form-label">Property Address <span class="text-danger">*</span></label>
							                <textarea class="form-control" name="address" placeholder="eg. 10 Hilton Street, Off Juvenile Road, Port Harcourt" required>{{ old('address') }}</textarea>
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
							               			<option value="{{ $state->id }}">{{ $state->name }}</option>
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
							                <input type="text" name="city" class="form-control" placeholder="e.g Port Harcourt" value="{{ old('city') }}" required>
							              </div>
							              @error('city')
							              	<li class="text-danger">{{ $message }}</li>
							              @enderror
							            </div>
							            <div class="col-sm-6 col-md-6">
							              <div class="form-group">
							                <label class="form-label">Location <span class="text-danger">*</span></label>
							                <input type="text" name="location" class="form-control" placeholder="e.g Rukpoku" value="{{ old('location') }}" required>
							              </div>
							              @error('location')
							              	<li class="text-danger">{{ $message }}</li>
							              @enderror
							            </div>
							            <div class="col-md-6">
							              <div class="form-group">
							                <label class="form-label">Nearest Major Road </label>
							                <input type="text" name="major_road" class="form-control" placeholder="e.g Airport Road" value="{{ old('major_road') }}">
							              </div>
							              @error('major_road')
							              	<li class="text-danger">{{ $message }}</li>
							              @enderror
							            </div>
							            <div class="col-md-6">
							              <div class="form-group">
							                <label class="form-label">Nearest Landmark</label>
							                <input type="text" name="landmark" class="form-control" placeholder="e.g Police Station" value="{{ old('landmark') }}">
							              </div>
							              @error('landmark')
							              	<li class="text-danger">{{ $message }}</li>
							              @enderror
							            </div>
							            <div class="col-md-6">
							              <div class="form-group">
							                <label class="form-label">Price</label>
							                <input type="number" name="price" class="form-control" placeholder="e.g 600,000" value="{{ old('price') }}">
							              </div>
							              @error('price')
							              	<li class="text-danger">{{ $message }}</li>
							              @enderror
							            </div>
							            <div class="col-12">
							              <div class="form-group">
							                <label class="form-label">Cover Photo <span class="text-danger">*</span></label>
							                <input type="file" name="cover_photo" class="form-control">
							              </div required>
							              @error('cover_photo')
							              	<li class="text-danger">{{ $message }}</li>
							              @enderror
							            </div>
							           <div class="col-12">
							           		<label>Other Photos</label>

				                           <div class="controls1 row">
					                            <div class="input-group mb-3 col-12 entry1">
					                              <input type="file" name="other_photos[]" class="form-control" placeholder="more photo" aria-label="Recipient's username" aria-describedby="basic-addon2" style="height: 50px;" required>
					                              <div class="input-group-append">
					                                <span class="input-group-text add-more btn-add" id="basic-addon2" data-toggle="tooltip" data-placement="top" title="Add More Photo"><i class="fa fa-plus-circle"></i></span>
					                              </div>
					                            </div>
					                            @error('other_photos')
									              	<li class="text-danger">{{ $message }}</li>
									              @enderror
				                            </div>
				                        </div>


						            </div>
						            <div class="col-12">
						            	<input type="hidden" name="property_type" value="building">
			        					<button type="submit" class="btn btn-primary btn-block">Submit</button>
			        				</div>
						        </form>
										 <div class="col-md-6">
												<div class="form-group">
													<label class="form-label">Area (Sq Ft) <span class="text-danger">*</span></label>
													<input type="number" name="area" class="form-control" placeholder="e.g 3" value="{{ old('area') }}" required>
												</div>
												@error('area')
													<li class="text-danger">{{ $message }}</li>
												@enderror
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">Listing Type <span class="text-danger">*</span></label>
													<select class="form-control" required name="list_type">
														<option selected disabled>Select Type</option>
														<option value="sale" @if(old('list_type')=='sale') selected @endif>Sales</option>
														<option value="rent" @if(old('list_type')=='rent') selected @endif>Rent</option>
													</select>
												</div>
												@error('list_type')
													<li class="text-danger">{{ $message }}</li>
												@enderror
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">Length (Ft)</label>
													<input type="number" name="length" class="form-control" placeholder="e.g 100" value="{{ old('length') }}" required>
												</div>
												@error('length')
													<li class="text-danger">{{ $message }}</li>
												@enderror
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">Width (Ft)</label>
													<input type="number" name="width" class="form-control" placeholder="e.g 3" value="{{ old('width') }}" required>
												</div>
												@error('width')
													<li class="text-danger">{{ $message }}</li>
												@enderror
											</div>
											<div class="col-12">
												<div class="form-group mb-0">
													<label class="form-label">Property Description <span class="text-danger">*</span></label>
													<textarea name="detail" rows="5"class="form-control" placeholder="A Tastely Furnished 3 bedroom bungalow seated in a 100 sq ft land space with a higly raised fence and close to major road." required >{{ old('details')}}</textarea>
												</div>
												@error('details')
													<li class="text-danger">{{ $message }}</li>
												@enderror
											</div>
											<div class="col-12">
												<div class="form-group">
													<label class="form-label">Property Address <span class="text-danger">*</span></label>
													<textarea class="form-control" name="address" placeholder="eg. 10 Hilton Street, Off Juvenile Road, Port Harcourt" required>{{ old('address') }}</textarea>
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
															<option value="{{ $state->id }}">{{ $state->name }}</option>
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
													<input type="text" name="city" class="form-control" placeholder="e.g Port Harcourt" value="{{ old('city') }}" required>
												</div>
												@error('city')
													<li class="text-danger">{{ $message }}</li>
												@enderror
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Location <span class="text-danger">*</span></label>
													<input type="text" name="location" class="form-control" placeholder="e.g Rukpoku" value="{{ old('location') }}" required>
												</div>
												@error('location')
													<li class="text-danger">{{ $message }}</li>
												@enderror
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">Nearest Major Road </label>
													<input type="text" name="major_road" class="form-control" placeholder="e.g Airport Road" value="{{ old('major_road') }}">
												</div>
												@error('major_road')
													<li class="text-danger">{{ $message }}</li>
												@enderror
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">Nearest Landmark</label>
													<input type="text" name="landmark" class="form-control" placeholder="e.g Police Station" value="{{ old('landmark') }}">
												</div>
												@error('landmark')
													<li class="text-danger">{{ $message }}</li>
												@enderror
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">Price</label>
													<input type="number" name="price" class="form-control" placeholder="e.g 600,000" value="{{ old('price') }}">
												</div>
												@error('price')
													<li class="text-danger">{{ $message }}</li>
												@enderror
											</div>
											<div class="col-12">
												<div class="form-group">
													<label class="form-label">Cover Photo <span class="text-danger">*</span></label>
													<input type="file" name="cover_photo" class="form-control">
												</div required>
												@error('cover_photo')
													<li class="text-danger">{{ $message }}</li>
												@enderror
											</div>
											<div class="col-12">
												<label>Other Photos</label>

																<div class="controls2 row">
																	<div class="input-group mb-3 col-12 entry2">
																		<input type="file" name="other_photos[]" class="form-control" placeholder="more photo" aria-label="Recipient's username" aria-describedby="basic-addon3" style="height: 50px;" required>
																		<div class="input-group-append">
																			<span class="input-group-text add-more btn-plus" id="basic-addon3" data-toggle="tooltip" data-placement="top" title="Add More Photo"><i class="fa fa-plus-circle"></i></span>
																		</div>
																	</div>
																	@error('other_photos')
															<li class="text-danger">{{ $message }}</li>
														@enderror
																</div>
														</div>

										</div>
										<div class="col-12">
											<input type="hidden" name="property_type" value="land">
										<button type="submit" class="btn btn-primary btn-block">Submit</button>
									</div>
								</form>
						</div>



					  </div>
			        </div>
			</div>
			<div class="col-4">
				<div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Client card</h3>
                    <div class="card-options">
                      <button type="button" class="btn btn-option" data-toggle="tooltip" title="Edit">
                        <i class="si si-pencil"></i>
                      </button>
                      <div class="dropdown card-options-dropdown">
                        <button type="button" class="btn btn-option dropdown-toggle" data-toggle="dropdown"><i class="si si-options"></i></button>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="javascript:void(0)">
                            <i class="si si-bell mr-3"></i>News
                          </a>
                          <a class="dropdown-item" href="javascript:void(0)">
                            <i class="si si-envelope mr-3"></i>Messages
                          </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="javascript:void(0)">
                            <i class="si si-pencil mr-3"></i>Edit Profile
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-map card-map-placeholder" style="background-image: url(./demo/staticmap.png)"></div>
                  <div class="card-body">
                    <div class="media mb-5">
                      <img class="d-flex mr-5 rounded" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15ec911398e%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15ec911398e%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213.84375%22%20y%3D%2236.65%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Generic placeholder image">
                      <div class="media-body">
                        <h5>Axa Global Group</h5>
                        <address class="text-muted small">
                          1290 Avenua of The Americas<br>
                          New York, NY 101040105
                        </address>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <div class="h6">Relationship</div>
                        <p>Client</p>
                      </div>
                      <div class="col-6">
                        <div class="h6">Business Type</div>
                        <p>Insurance Company</p>
                      </div>
                      <div class="col-6">
                        <div class="h6">Website</div>
                        <p><a href="javascript:void(0)">http://www.axa.com</a></p>
                      </div>
                      <div class="col-6">
                        <div class="h6">Office Phone</div>
                        <p>+123456789</p>
                      </div>
                    </div>
                    <div class="h6">Description</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dignissimos doloribus eum fugiat itaque laboriosam maiores nisi nostrum perspiciatis vero.</p>
                  </div>
                </div>
			</div>
		</div>
	</div>
</section>


<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('details');
    CKEDITOR.replace('detail');
</script>
@endsection
