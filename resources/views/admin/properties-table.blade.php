@extends('layouts.admin')

@section('content')

@section('title', 'Admin')
<div id="flash-message"></div>
	
	<div class="my-3 my-md-5">
          <div class="container">
            <div class="page-header">
              <h1 class="page-title">
                Properties table
              </h1>
            </div>
            
          <div class="row row-cards row-deck">
              
             
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
                        @foreach($properties as $property)
                        <tr>
                          
                          <td><span class="text-muted">{{ $property->code }}</span></td>
                          <td class="text-center">
                            <div class="avatar d-block" style="background-image: url({{ asset('storage/properties/cover_images/'.$property->cover_photo)}})">
                             
                            </div>
                          </td>
                          <td><a href="invoice.html" class="text-inherit">{{ $property->title }}</a></td>
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
                            <a href="{{ route('admin-property-view', $property->slug) }}" class="btn btn-secondary btn-sm">view <i class="fa fa-eye"></i></a>
                            <a class="icon" href="{{ route('admin-edit-property', $property->slug) }}">
                              <i class="fe fe-edit"></i>
                            </a>
                          </td>
                          <td>
                            
                            <a href="javascript:void(0)" class="btn btn-sm remove-property btn-danger" prop="{{ $property->id }}"><i class="fa fa-trash text-white"></i></a>
                          </td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>

                  </div>
                  <div class="w-100 text-center border py-3">
                    {{ $properties->links() }}
                  </div>
                </div>
              </div>
            </div>
        </div>

@endsection