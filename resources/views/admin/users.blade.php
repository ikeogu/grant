@extends('layouts.admin')

@section('content')

@section('title', 'Admin')
<div id="flash-message"></div>
	
	<div class="my-3 my-md-5">
          <div class="container">
            <div class="page-header">
              <h1 class="page-title">
               Users
              </h1>
            </div>
            
          <div class="row row-cards row-deck">
              <div class="col-12">
                <div class="card">
                  <div class="table-responsive">
                    <table class="table table-hover table-outline table-vcenter text-nowrap card-table">
                      <thead>
                        <tr>
                          <th class="text-center w-1"><i class="icon-people"></i></th>
                          <th>User</th>
                          <th>Phone</th>
                          <th class="text-center">Email</th>
                          <th>Activity</th>
                          
                          <th class="text-center">Interested properties</th>
                          <th>Action</th>
                          <th class="text-center"><i class="icon-settings"></i></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($users as $user)
                        <tr id="{{ $user->id }}">
                          <td class="text-center">
                            <div class="avatar d-block" style="background-image: url({{ asset('admin/demo/faces/female/21.jpg')}})">
                              <span class="avatar-status bg-green"></span>
                            </div>
                          </td>
                          <td>
                            <div>{{ $user->firstname }} {{ $user->lastname }}</div>
                            <div class="small text-muted">
                              Registered: Mar 28, 2018
                            </div>
                          </td>
                          <td>
                            <div class="clearfix">
                              {{ $user->phone }}
                            </div>
                          </td>
                          <td class="text-center">
                            {{ $user->email }}
                          </td>
                          <td>
                            <div class="small text-muted">Last login</div>
                            <div>a minute ago</div>
                          </td>
                          <td class="text-center">
                            {{ $user->interests->count() }}
                          </td>
                          <td>
                            <button class="btn  btn-sm btn-danger remove-user" user-id="{{ $user->id }}"><i class="fa fa-trash"></i></button>
                            <a class="btn  btn-sm btn-primary" href="{{ route('user-detail', $user->id) }}"><i class="fa fa-eye"></i></a>
                          </td>
                          <td class="text-center">
                            <div class="item-action dropdown">
                              <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        @endforeach

                      </tbody>
                    </table>
                  </div>
                  <div class="w-100 text-center border py-3">
                    {{ $users->links() }}
                  </div>
                </div>
              </div>
             
              
            </div>
        </div>

@endsection