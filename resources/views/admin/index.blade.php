@extends('layouts.admin')

@section('content')

@section('title', 'Admin')
    <div id="flash-message"></div>

    <div class="my-3 my-md-5">
        <div class="container">
            <div class="page-header">
                <h1 class="page-title">
                    Dashboard
                </h1>
            </div>
            <div class="row row-cards">
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="card">
                        <div class="card-body p-3 text-center">
                            <div class="text-right text-green">
                                {{-- -3% --}}
                                {{-- <i class="fe fe-chevron-up"></i> --}}
                            </div>
                            <div class="h1 m-0">{{ $property_count }}</div>
                            <div class="text-muted mb-4">All Properties</div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="card">
                        <div class="card-body p-3 text-center">
                            <div class="text-right text-red">
                                @if ($property_count !== 0 && $available_properties_count !== 0)
                                    {{ number_format(($available_properties_count / $property_count) * 100, 2) }}%

                                @endif
                                {{-- <i class="fe fe-chevron-down"></i> --}}
                            </div>
                            <div class="h1 m-0">{{ $available_properties_count }}</div>
                            <div class="text-muted mb-4">Available Properties</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="card">
                        <div class="card-body p-3 text-center">
                            <div class="text-right text-red">
                                {{-- -3% --}}
                                {{-- <i class="fe fe-chevron-down"></i> --}}
                            </div>
                            <div class="h1 m-0">{{ $user_count }}</div>
                            <div class="text-muted mb-4">Users</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="card">
                        <div class="card-body p-3 text-center">
                            <div class="text-right text-green">

                                {{-- <i class="fe fe-chevron-up"></i> --}}
                            </div>
                            <div class="h1 m-0">{{ $interest_count }}</div>
                            <div class="text-muted mb-4">Total Interests</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="card">
                        <div class="card-body p-3 text-center">
                            <div class="text-right text-green">
                                @if ($property_count !== 0 && $properties_with_interest !== 0)
                                    {{ number_format((count($properties_with_interest) / $property_count) * 100, 2) }}%
                                    {{-- <i class="fe fe-chevron-up"></i> --}}
                                @endif
                            </div>
                            <div class="h1 m-0">{{ count($properties_with_interest) }}</div>
                            <div class="text-muted mb-4">Interested Properties</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="card">
                        <div class="card-body p-3 text-center">
                            <div class="text-right text-red">
                                @if ($user_count !== 0 && $users_with_interest !== 0)
                                    {{ number_format((count($users_with_interest) / $user_count) * 100, 2) }}%
                                @endif

                                {{-- <i class="fe fe-chevron-down"></i> --}}
                            </div>
                            <div class="h1 m-0">{{ count($users_with_interest) }}</div>
                            <div class="text-muted mb-4">Users With Interests</div>
                        </div>
                    </div>
                </div>




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
                                        {{-- <th>Activity</th>
                          <th class="text-center">Satisfaction</th>
                          <th class="text-center"><i class="icon-settings"></i></th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="text-center">
                                                <div class="avatar d-block"
                                                    style="background-image: url({{ asset('admin/demo/faces/female/21.jpg') }})">
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
                                            {{-- <td>
                            <div class="small text-muted">Last login</div>
                            <div>a minute ago</div>
                          </td>
                          <td class="text-center">
                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.96" data-thickness="3" data-color="blue">
                              <div class="chart-circle-value">96%</div>
                            </div>
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
                          </td> --}}
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="w-100 text-center border py-3">
                            <a href="{{ route('users') }}" class="btn btn-success">More</a>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Properties</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="w-1">Code</th>
                                        <th>Cover</th>
                                        <th>Title</th>
                                        <th>Location</th>
                                        <th>Price</th>
                                        <th>Created</th>
                                        <th>Status</th>
                                        <th>Interests</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($properties as $property)
                                        <tr>

                                            <td><span class="text-muted">{{ $property->code }}</span></td>
                                            <td class="text-center">
                                                <div class="avatar d-block"
                                                    style="background-image: url({{ asset('storage/properties/cover_images/' . $property->cover_photo) }})">

                                                </div>
                                            </td>
                                            <td><a href="{{ route('admin-property-view', $property->slug) }}"
                                                    class="text-inherit">{{ $property->title }}</a></td>
                                            <td>
                                                {{ $property->location }} -{{ $property->city }}
                                            </td>
                                            <td>
                                                &#x20A6;{{ number_format($property->price) }}
                                            </td>
                                            <td>
                                                {{ $property->created_at }}
                                            </td>
                                            <td>
                                                <span class="status-icon bg-success"></span> {{ $property->status }}
                                            </td>
                                            <td>{{ $property->interests->count() }}</td>
                                            <td class="text-right">
                                                <a href="{{ route('admin-property-view', $property->slug) }}"
                                                    class="btn btn-secondary btn-sm">view <i class="fa fa-eye"></i></a>
                                                <a class="icon"
                                                    href="{{ route('admin-edit-property', $property->slug) }}">
                                                    <i class="fe fe-edit"></i>
                                                </a>
                                            </td>
                                            <td>

                                                <a href="javascript:void(0)" class="btn btn-sm remove-property btn-danger"
                                                    prop="{{ $property->id }}"><i class="fa fa-trash text-white"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                        <div class="w-100 text-center border py-3">
                            <a href="{{ route('admin-properties-table') }}" class="btn btn-success">More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
