@extends('layouts.admin')

@section('content')

@section('title', 'Admin')
<div id="flash-message"></div>
	
	<div class="my-3 my-md-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-profile">
                  <div class="card-header" style="background-image: url({{ asset('assets/images/place-3.jpg') }});"></div>
                  <div class="card-body text-center">
                    <img class="card-profile-img" src="{{ asset('assets/images/avatar.png') }}">
                    {{-- <i class="fa fa-user fa-2x"></i> --}}
                    <h3 class="mb-3">{{ $user->firstname }} {{ $user->lastname }}</h3>
                    <p class="mb-4">
                      {{ $user->email }}
                    </p>

                  <p class="mb-4">
                      {{ $user->phone }}
                    </p>
                    {{-- <button class="btn btn-outline-primary btn-sm">
                      <span class="fa fa-twitter"></span> Follow
                    </button> --}}
                  </div>
                </div>
                
              </div>
              <div class="col-lg-8">
                
                <form class="card" method="post" action="{{ route('update-user') }}">
                  @csrf
                  <div class="card-body">
                    <h3 class="card-title">Edit Profile</h3>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-label">Email</label>

                          <input type="text" name="email" class="form-control" disabled="" placeholder="Company" value="{{ $user->email }}">
                          @error('email')
                            <li>{{ $message }}</li>
                          @enderror
                        </div>
                      </div>
                      
                      <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class="form-label">First Name</label>
                          <input type="text" name="firstname" class="form-control" placeholder="Company" value="{{ $user->firstname }}">
                          @error('firstname')
                            <li>{{ $message }}</li>
                          @enderror
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class="form-label">Last Name</label>
                          <input type="text" name="lastname" class="form-control" placeholder="Last Name" value="{{ $user->lastname }}">
                          @error('lastname')
                            <li>{{ $message }}</li>
                          @enderror
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                          <label class="form-label">Phone</label>
                          <input type="tel" name="phone" class="form-control" placeholder="Phone number" value="{{ $user->phone }}" maxlength="11" minlength="11">
                          @error('phone')
                            <li>{{ $message }}</li>
                          @enderror
                        </div>

                      </div>
                      
                  </div>
                  <div class="card-footer text-right">
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                  </div>
                </form>
              </div>
            </div>

            <div class="row mt-3 bg-white">
                <div class="col-12">
                  <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>S/N</th>
                            <th>cover</th>
                            <th>title</th>
                            <th>location</th>
                            <th>Date</th>
                            <th>Action</th>

                          </tr>
                        </thead>
                        <tbody>
                          <?php $count = 0;?>
                          @foreach($user->interests as $interest)
                          <?php $count ++;?>
                          <tr>
                            <th>{{ $count }}</th>
                            <th><img src="{{ asset('storage/properties/cover_images/'.$interest->property->cover_photo) }}" height="50" width="50" class="rounded-circle"></th>
                            <th>{{ $interest->property->title }}</th>
                            <th>{{ $interest->property->location }} - {{ $interest->property->city }}</th>
                            <th>{{ $interest->created_at }}</th>
                            <th><a href="{{ route('admin-property-view', $interest->property->slug) }}" target="_blank">View Property</a></th>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>

@endsection