@extends('layouts.user')
@section('content')
    <!--Registration form-->
    <section class="log-1">
        <div class="format-form py-5 ">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-10 offset-1  justify-content-center  format  Schchat-padding-y border-0 shadow-lg ">
                        <div class="row bg-succes d-flex justify-content-center ">
                            <i class="fas fa-home  my-3"></i>
                        </div>
                        <div class="row justify-content-center p-5">




                            <div class="col-10 mt-4 p-4 bg-card">
                                @if (session('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                @elseif(session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif
                                <div class="text-center mx-1"><strong> Add Property</strong>
                                    <div class="d-flex mb-5">
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                                            <li class="nav-item">
                                                <a class="nav-link active text-dark" id="pills-residence-tab"
                                                    data-toggle="pill" href="#pills-residence" role="tab"
                                                    aria-controls="pills-residence" aria-expanded="true">Building</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-dark " id="pills-land-tab" data-toggle="pill"
                                                    href="#pills-land" role="tab" aria-controls="pills-land"
                                                    aria-expanded="true">Land</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-residence" role="tabpanel"
                                        aria-labelledby="pills-residence-tab">
                                        <form action="{{ route('upload-property') }}" enctype="multipart/form-data"
                                            method="POST" class="p-4">
                                            @csrf
                                            <div class="form-group form-row my-3">
                                                <div class="col-md-12 mb-3">
                                                    <label class="form-label">Property Title <span
                                                            class="text-danger">*</span></label>
                                                    <div class="input-group input-group-lg mk">
                                                        <span
                                                            class="shadow-sm input-group-text Schchat-border-radius-right Schchat-form-control"
                                                            id="basic-addon1"><i class="fas fa-id-badge hk"></i></span>
                                                        <input type="text" name="title"
                                                            class="bg-light shadow-sm Schchat-form-input form-control"
                                                            placeholder="eg. 3 Bedroom Bungalow"
                                                            value="{{ old('title') }}" required
                                                            aria-label="eg. 3 Bedroom Bungalow"
                                                            aria-describedby="basic-addon1">
                                                    </div>
                                                    @error('title')
                                                        <li class="text-danger">{{ $message }}</li>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="form-group form-row mb-0">
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">List Type <span
                                                            class="text-danger">*</span></label>
                                                    <div class="input-group input-group-lg mk">
                                                        <span
                                                            class="shadow-sm input-group-text Schchat-border-radius-right Schchat-form-control"
                                                            id="basic-addon1"><i
                                                                class="fas fa-search-location hk"></i></span>
                                                        <select class="bg-light shadow-sm Schchat-form-input form-control"
                                                            id="exampleFormControlSelect1" required name="list_type">
                                                            <option selected disabled>Select Type</option>
                                                            <option value="sale" @if (old('list_type') == 'sale') selected @endif>Sales</option>
                                                            <option value="rent" @if (old('list_type') == 'rent') selected @endif>Rent</option>
                                                        </select>


                                                    </div>
                                                    @error('list_type')
                                                        <li class="text-danger">{{ $message }}</li>
                                                    @enderror

                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Property Type <span
                                                            class="text-danger">*</span></label>
                                                    <div class="input-group input-group-lg mk">
                                                        <span
                                                            class="shadow-sm input-group-text Schchat-border-radius-right Schchat-form-control"
                                                            id="basic-addon1"><i
                                                                class="fas fa-search-location hk"></i></span>
                                                        <select class="bg-light shadow-sm Schchat-form-input form-control"
                                                            id="exampleFormControlSelect1" required name="house_type">

                                                            <option selected disabled>Select Type</option>
                                                            <option value="bungalow" @if (old('list_type') == 'bungalow') selected @endif>Bungalow</option>
                                                            <option value="duplex" @if (old('list_type') == 'duplex') selected @endif>Duplex</option>
                                                            <option value="flat" @if (old('list_type') == 'flat') selected @endif>Flats</option>
                                                        </select>
                                                    </div>

                                                    @error('list_type')
                                                        <li class="text-danger">{{ $message }}</li>
                                                    @enderror
                                                </div>
                                            </div>



                                            <div class="form-group form-row mb-0">

                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Number of Bedrooms <span
                                                            class="text-danger">*</span></label>
                                                    <div class="input-group input-group-lg mk">
                                                        <span
                                                            class="shadow-sm input-group-text Schchat-border-radius-right Schchat-form-control"
                                                            id="basic-addon1"><i class="fas fa-home hk"></i></span>
                                                        <input type="number" name="bedrooms"
                                                            class="bg-light shadow-sm Schchat-form-input form-control"
                                                            placeholder="Number of bedrooms "
                                                            aria-label="Number of bedrooms " aria-describedby="basic-addon1"
                                                            step="1" value="{{ old('bedrooms') }}" required>
                                                    </div>
                                                    @error('bedrooms')
                                                        <li class="text-danger">{{ $message }}</li>
                                                    @enderror
                                                </div>




                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Number of Toilets<span
                                                            class="text-danger">*</span></label>
                                                    <div class="input-group input-group-lg mk">
                                                        <span
                                                            class="shadow-sm input-group-text Schchat-border-radius-right Schchat-form-control"
                                                            id="basic-addon1"><i class="fas fa-home hk"></i></span>
                                                        <input type="number" name="toilets"
                                                            class="bg-light shadow-sm Schchat-form-input form-control"
                                                            placeholder="Number of Toilets" aria-label="Number of Toilets "
                                                            aria-describedby="basic-addon1" step="1"
                                                            value="{{ old('toilets') }}" required>
                                                    </div>
                                                    @error('toilets')
                                                        <li class="text-danger">{{ $message }}</li>
                                                    @enderror
                                                </div>


                                            </div>

                                            <div class="form-group form-row mb-0">
                                                <div class="col-md-12 mb-3 uk">
                                                    <label for="exampleFormControlTextarea4">Property Description</label>
                                                    <textarea class="form-control mk" id="exampleFormControlTextarea4"
                                                        rows="4" name="details">
                                                                                                        {{ old('details') }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group form-row mb-0">
                                                <div class="col-md-12 mb-3 uk">
                                                    <label for="exampleFormControlTextarea4">Property Address</label>
                                                    <textarea class="form-control mk" name="address"
                                                        placeholder="eg. 10 Hilton Street, Off Juvenile Road, Port Harcourt"
                                                        requiredid="exampleFormControlTextarea4"
                                                        rows="3"> {{ old('address') }}</textarea>
                                                </div>

                                                @error('address')
                                                    <li class="text-danger">{{ $message }}</li>
                                                @enderror
                                            </div>


                                            <div class="form-group form-row mb-0">
                                                <div class="col-md-6 mb-3">
                                                     <label >City</label>
                                                    <div class="input-group input-group-lg mk">
                                                        <span
                                                            class="shadow-sm input-group-text Schchat-border-radius-right Schchat-form-control"
                                                            id="basic-addon1"><i
                                                                class="fas fa-map-marker-alt hk"></i></span>
                                                        <input type="text" name="city"
                                                            class="bg-light shadow-sm Schchat-form-input form-control"
                                                            placeholder="City" aria-label="City"
                                                            aria-describedby="basic-addon1" value="{{ old('city') }}"
                                                            required>
                                                    </div>
                                                    @error('city')
                                                        <li class="text-danger">{{ $message }}</li>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                     <label>State</label>
                                                    <div class="input-group input-group-lg mk">
                                                        <span
                                                            class="shadow-sm input-group-text Schchat-border-radius-right Schchat-form-control"
                                                            id="basic-addon1"><i
                                                                class="fas fa-search-location hk"></i></span>
                                                        <select class="bg-light shadow-sm Schchat-form-input form-control"
                                                            id="exampleFormControlSelect1" required name="state" required>
                                                            <option selected disabled>Select State</option>
                                                            @foreach ($states as $state)
                                                                <option value="{{ $state->id }}">{{ $state->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    @error('state')
                                                        <li class="text-danger">{{ $message }}</li>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="form-group form-row mb-0">
                                                <div class="col-md-6 mb-3">
                                                     <label>Nearest Major Road</label>
                                                    <div class="input-group input-group-lg mk">
                                                        <span
                                                            class="shadow-sm input-group-text Schchat-border-radius-right Schchat-form-control"
                                                            id="basic-addon1"><i
                                                                class="fas fa-map-marker-alt hk"></i></span>
                                                        <input type="text" name="major_road"
                                                            class="bg-light shadow-sm Schchat-form-input form-control"
                                                            placeholder="Nearest Major Road"
                                                            value="{{ old('major_road') }}"
                                                            aria-label="Nearest Major Road" aria-describedby="basic-addon1">
                                                    </div>
                                                    @error('major_road')
                                                        <li class="text-danger">{{ $message }}</li>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Nearest Landmark</label>
                                                    <div class="input-group input-group-lg mk">
                                                        <span
                                                            class="shadow-sm input-group-text Schchat-border-radius-right Schchat-form-control"
                                                            id="basic-addon1"><i
                                                                class="fas fa-map-marker-alt hk"></i></span>
                                                        <input type="text" name="landmark"
                                                            class="bg-light shadow-sm Schchat-form-input form-control"
                                                            placeholder="" aria-label="Nearest Landmark"
                                                            aria-describedby="basic-addon1" value="{{ old('landmark') }}"
                                                            required>
                                                    </div>

                                                    @error('landmark')
                                                        <li class="text-danger">{{ $message }}</li>
                                                    @enderror
                                                </div>

                                            </div>

                                            <div class="form-group form-row mb-0">
                                                 <div class="col-md-6 mb-3">
                                                    <label class="form-label">Location <span
                                                            class="text-danger">*</span></label>
                                                    <div class="input-group input-group-lg mk">
                                                        <span
                                                            class="shadow-sm input-group-text Schchat-border-radius-right Schchat-form-control"
                                                            id="basic-addon1"><i
                                                                class="fas fa-map-marker-alt hk"></i></span>
                                                        <input type="text" name="location"
                                                            class="bg-light shadow-sm Schchat-form-input form-control"
                                                            placeholder="Location" aria-label="Nearest Landmark"
                                                            aria-describedby="basic-addon1"
                                                            value="{{ old('location') }}">
                                                    </div>
                                                    @error('location')
                                                        <li class="text-danger">{{ $message }}</li>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label>Price</label>
                                                    <div class="input-group input-group-lg mk">
                                                        <span
                                                            class="shadow-sm input-group-text Schchat-border-radius-right Schchat-form-control"
                                                            id="basic-addon1"><i class="fas fa-money hk"></i></span>
                                                        <input type="number" name="price"
                                                            class="bg-light shadow-sm Schchat-form-input form-control"
                                                            placeholder="Price" aria-label="price"
                                                            aria-describedby="basic-addon1" value="{{ old('price') }}">
                                                    </div>
                                                    @error('price')
                                                        <li class="text-danger">{{ $message }}</li>
                                                    @enderror
                                                </div>


                                            </div>








                                            <div class="form-group form-row mb-0">
                                                <div class="col-md-6 mb-3">
                                                    <label for="userId">Property Photos</label>
                                                    <div class="input-group input-group-lg">
                                                        <input type="file" id="userId" name="cover_photo">
                                                    </div>
                                                    <i class="fas fa-image nk"></i>
                                                    @error('cover_photo')
                                                        <li class="text-danger">{{ $message }}</li>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="userId">More Photos</label>
                                                    <div class="input-group input-group-lg">
                                                        <input type="file" id="userId" name="other_photos[]" multiple>

                                                    </div>
                                                    <div class="col-md-12 p-1">
                                                        <i class="fas fa-image nk"></i>
                                                        <i class="fas fa-image nk"></i>
                                                        <i class="fas fa-image nk"></i>
                                                        <i class="fas fa-image nk"></i>
                                                    </div>
                                                    @error('other_photos')
                                                        <li class="text-danger">{{ $message }}</li>
                                                    @enderror
                                                </div>
                                            </div>

                                            <input type="hidden" name="property_type" value="building">
                                            <div class="form-group d-flex justify-content-center my-4">
                                                <button type="submit"
                                                    class="btn btn-warning Schchat-warning-btn Schchat-Ubuntu"><i
                                                        class="fas fa-upload text-white pr-2"></i>Upload Property</button>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="tab-pane fade " id="pills-land" role="tabpanel"
                                        aria-labelledby="pills-land-tab">
                                        <form action="{{ route('upload-property') }}" enctype="multipart/form-data"
                                            method="POST" class="p-4">
                                            @csrf
                                            <div class="form-group form-row my-3">
                                                <div class="col-md-12 mb-3">
                                                    <label class="form-label">Property Title <span
                                                            class="text-danger">*</span></label>
                                                    <div class="input-group input-group-lg mk">
                                                        <span
                                                            class="shadow-sm input-group-text Schchat-border-radius-right Schchat-form-control"
                                                            id="basic-addon1"><i class="fas fa-id-badge hk"></i></span>
                                                        <input type="text" name="title"
                                                            class="bg-light shadow-sm Schchat-form-input form-control"
                                                            placeholder="eg. 3 Bedroom Bungalow"
                                                            value="{{ old('title') }}" required aria-label="eg. "
                                                            aria-describedby="basic-addon1">
                                                    </div>
                                                    @error('title')
                                                        <li class="text-danger">{{ $message }}</li>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group form-row my-3">
                                                <div class="col-md-12 mb-3">
                                                    <label class="form-label">Area (Sq Ft) <span
                                                            class="text-danger">*</span></label>
                                                    <div class="input-group input-group-lg mk">
                                                        <span
                                                            class="shadow-sm input-group-text Schchat-border-radius-right Schchat-form-control"
                                                            id="basic-addon1"><i class="fas fa-id-badge hk"></i></span>
                                                        <input type="number" name="area" class="form-control"
                                                            placeholder="e.g 3" value="{{ old('area') }}" required
                                                            class="bg-light shadow-sm Schchat-form-input form-control"
                                                            aria-label="eg. Property Title" aria-describedby="basic-addon1">
                                                    </div>
                                                    @error('area')
                                                        <li class="text-danger">{{ $message }}</li>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="form-group form-row mb-0">
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Listing Type <span
                                                            class="text-danger">*</span></label>
                                                    <div class="input-group input-group-lg mk">
                                                        <span
                                                            class="shadow-sm input-group-text Schchat-border-radius-right Schchat-form-control"
                                                            id="basic-addon1"><i
                                                                class="fas fa-search-location hk"></i></span>
                                                        <select class="bg-light shadow-sm Schchat-form-input form-control"
                                                            id="exampleFormControlSelect1" required name="list_type">
                                                            <option selected disabled>Select Type</option>
                                                            <option value="sale" @if (old('list_type') == 'sale') selected @endif>Sales</option>
                                                            <option value="rent" @if (old('list_type') == 'rent') selected @endif>Rent</option>
                                                        </select>


                                                    </div>
                                                    @error('list_type')
                                                        <li class="text-danger">{{ $message }}</li>
                                                    @enderror

                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Length (Ft)</label>
                                                    <div class="input-group input-group-lg mk">
                                                        <span
                                                            class="shadow-sm input-group-text Schchat-border-radius-right Schchat-form-control"
                                                            id="basic-addon1"><i
                                                                class="fas fa-search-location hk"></i></span>

                                                        <input type="number" name="length" class="form-control"
                                                            placeholder="e.g 100" value="{{ old('length') }}" required>
                                                    </div>

                                                    @error('length')
                                                        <li class="text-danger">{{ $message }}</li>
                                                    @enderror
                                                </div>
                                            </div>



                                            <div class="form-group form-row mb-0">
                                                <div class="col-md-12 mb-3">
                                                    <label class="form-label">Width (Ft)</label>
                                                    <div class="input-group input-group-lg mk">
                                                        <span
                                                            class="shadow-sm input-group-text Schchat-border-radius-right Schchat-form-control"
                                                            id="basic-addon1"><i class="fas fa-home hk"></i></span>

                                                        <input type="number" name="width" class="form-control"
                                                            placeholder="e.g 3" value="{{ old('width') }}" required>
                                                    </div>
                                                    @error('width')
                                                        <li class="text-danger">{{ $message }}</li>
                                                    @enderror

                                                </div>






                                            </div>
                                            <div class="form-group form-row mb-0">
                                                <div class="col-md-12 mb-3 uk">
                                                    <label for="exampleFormControlTextarea4">Property Description</label>
                                                    <textarea class="form-control mk" id="exampleFormControlTextarea4"
                                                        rows="4" name="details">
                                                            {{ old('details') }}</textarea>
                                                </div>
                                            </div>


                                            <div class="form-group form-row mb-0">
                                                <div class="col-md-12 mb-3 uk">
                                                    <label for="exampleFormControlTextarea4">Property Address</label>
                                                    <textarea class="form-control mk" name="address"
                                                        placeholder="eg. 10 Hilton Street, Off Juvenile Road, Port Harcourt"
                                                        requiredid="exampleFormControlTextarea4"
                                                        rows="3"> {{ old('address') }}</textarea>
                                                </div>

                                                @error('address')
                                                    <li class="text-danger">{{ $message }}</li>
                                                @enderror
                                            </div>


                                            <div class="form-group form-row mb-0">

                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">State <span
                                                            class="text-danger">*</span></label>
                                                    <div class="input-group input-group-lg mk">
                                                        <span
                                                            class="shadow-sm input-group-text Schchat-border-radius-right Schchat-form-control"
                                                            id="basic-addon1"><i
                                                                class="fas fa-search-location hk"></i></span>
                                                        <select class="bg-light shadow-sm Schchat-form-input form-control"
                                                            id="exampleFormControlSelect1" required name="state" required>
                                                            <option selected disabled>Select State</option>
                                                            @foreach ($states as $state)
                                                                <option value="{{ $state->id }}">{{ $state->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    @error('state')
                                                        <li class="text-danger">{{ $message }}</li>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">City <span
                                                            class="text-danger">*</span></label>
                                                    <div class="input-group input-group-lg mk">
                                                        <span
                                                            class="shadow-sm input-group-text Schchat-border-radius-right Schchat-form-control"
                                                            id="basic-addon1"><i
                                                                class="fas fa-map-marker-alt hk"></i></span>
                                                        <input type="text" name="city"
                                                            class="bg-light shadow-sm Schchat-form-input form-control"
                                                            placeholder="City" aria-label="City"
                                                            aria-describedby="basic-addon1" value="{{ old('city') }}"
                                                            required>
                                                    </div>
                                                    @error('city')
                                                        <li class="text-danger">{{ $message }}</li>
                                                    @enderror
                                                </div>

                                            </div>


                                            <div class="form-group form-row mb-0">
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Nearest Major Road<span
                                                            class="text-danger">*</span></label>
                                                    <div class="input-group input-group-lg mk">
                                                        <span
                                                            class="shadow-sm input-group-text Schchat-border-radius-right Schchat-form-control"
                                                            id="basic-addon1"><i
                                                                class="fas fa-map-marker-alt hk"></i></span>
                                                        <input type="text" name="major_road"
                                                            class="bg-light shadow-sm Schchat-form-input form-control"
                                                            placeholder="Nearest Major Road"
                                                            value="{{ old('major_road') }}"
                                                            aria-label="Nearest Major Road" aria-describedby="basic-addon1">
                                                    </div>
                                                    @error('major_road')
                                                        <li class="text-danger">{{ $message }}</li>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Nearest Landmark <span
                                                            class="text-danger">*</span></label>
                                                    <div class="input-group input-group-lg mk">
                                                        <span
                                                            class="shadow-sm input-group-text Schchat-border-radius-right Schchat-form-control"
                                                            id="basic-addon1"><i
                                                                class="fas fa-map-marker-alt hk"></i></span>
                                                        <input type="text" name="landmark"
                                                            class="bg-light shadow-sm Schchat-form-input form-control"
                                                            placeholder="" aria-label="Nearest Landmark"
                                                            aria-describedby="basic-addon1" value="{{ old('landmark') }}"
                                                            required>
                                                    </div>

                                                    @error('landmark')
                                                        <li class="text-danger">{{ $message }}</li>
                                                    @enderror
                                                </div>

                                            </div>

                                            <div class="form-group form-row mb-0">
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Location <span
                                                            class="text-danger">*</span></label>
                                                    <div class="input-group input-group-lg mk">
                                                        <span
                                                            class="shadow-sm input-group-text Schchat-border-radius-right Schchat-form-control"
                                                            id="basic-addon1"><i
                                                                class="fas fa-map-marker-alt hk"></i></span>
                                                        <input type="text" name="location"
                                                            class="bg-light shadow-sm Schchat-form-input form-control"
                                                            placeholder="Location" aria-label="Nearest Landmark"
                                                            aria-describedby="basic-addon1"
                                                            value="{{ old('location') }}">
                                                    </div>
                                                    @error('location')
                                                        <li class="text-danger">{{ $message }}</li>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Price</label>
                                                    <div class="input-group input-group-lg mk">
                                                        <span
                                                            class="shadow-sm input-group-text Schchat-border-radius-right Schchat-form-control"
                                                            id="basic-addon1"><i class="fas fa-money hk"></i></span>
                                                        <input type="number" name="price"
                                                            class="bg-light shadow-sm Schchat-form-input form-control"
                                                            placeholder="Price" aria-label="price"
                                                            aria-describedby="basic-addon1" value="{{ old('price') }}">
                                                    </div>
                                                    @error('price')
                                                        <li class="text-danger">{{ $message }}</li>
                                                    @enderror
                                                </div>


                                            </div>
                                            <div class="form-group form-row mb-0">
                                                <div class="col-md-6 mb-3">
                                                    <label for="userId">Cover Photos</label>
                                                    <div class="input-group input-group-lg">
                                                        <input type="file" id="userId" name="cover_photo">
                                                    </div>
                                                    <i class="fas fa-image nk"></i>
                                                    @error('cover_photo')
                                                        <li class="text-danger">{{ $message }}</li>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="userId">More Photos</label>
                                                    <div class="input-group input-group-lg">
                                                        <input type="file" id="userId" name="other_photos[]" multiple>

                                                    </div>
                                                    <div class="col-md-12 p-1">
                                                        <i class="fas fa-image nk"></i>
                                                        <i class="fas fa-image nk"></i>
                                                        <i class="fas fa-image nk"></i>
                                                        <i class="fas fa-image nk"></i>
                                                    </div>
                                                    @error('other_photos')
                                                        <li class="text-danger">{{ $message }}</li>
                                                    @enderror
                                                </div>
                                            </div>

                                            <input type="hidden" name="property_type" value="building">
                                            <div class="form-group d-flex justify-content-center my-4">
                                                <button type="submit"
                                                    class="btn btn-warning Schchat-warning-btn Schchat-Ubuntu"><i
                                                        class="fas fa-upload text-white pr-2"></i>Upload Property</button>
                                            </div>
                                        </form>
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
