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
					<li class="this-page">{{ $page_title }}</li>
				</ul>
			</div>
			
		</div>
	</div>
</section>
<section>
	<div class="container mt-5">
		<div class="my-3 my-md-5">
          <div class="container">
            <div class="page-header">
              <h1 class="page-title">
                Gallery
              </h1>
              <div class="page-subtitle">1 - 12 of 1713 photos</div>
              <div class="page-options d-flex">
                <select class="form-control custom-select w-auto">
                  <option value="asc">Newest</option>
                  <option value="desc">Oldest</option>
                </select>
                <div class="input-icon ml-2">
                  <span class="input-icon-addon">
                    <i class="fe fe-search"></i>
                  </span>
                  <input type="text" class="form-control w-10" placeholder="Search photo">
                </div>
              </div>
            </div>
            <div class="row row-cards">
            	@foreach($properties as $property)
	              <div class="col-sm-6 col-lg-4">
	                <div class="card p-3">
	                	<div class="card-header" style="height: 200px; background-image: url({{ asset('storage/properties/cover_images/'.$property->cover_photo) }}); background-size: cover;">
	                		
	                	</div>
	                 
	                  <div class="d-flex align-items-center px-2 row" style="height: 100px;">
	                    <div class="avatar avatar-md mr-3" style="background-image: url({{ asset('storage/properties/cover_images/'.$property->cover_photo) }})">
	                    	
	                    </div>
	                    <div class="" style="width: 60%;">
	                      <div>{{ $property->title }}</div>
	                      <small class="d-block text-muted">{{ $property->location }}, {{ $property->city }}</small>
	                    </div>
	                    <div class="ml-auto text-muted">
	                      <a href="javascript:void(0)" class="icon"><i class="fa fa-bath mr-1"></i> {{ $property->baths }}</a>
	                      <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-bed mr-1"></i>{{ $property->beds }} </a>
	                    </div>
	                    
	                  </div>

	                    <div class="row px-5" style="margin-top: -10px;">
	                    	<div class="col-6 px-5 text-center">
	                    		<a href="{{ route('admin-property-view', $property->slug) }}" class="btn btn-sm btn-primary btn-block"><i class="fa fa-eye"></i></a>
	                    	</div>
	                    	<div class="col-6 px-5 text-center">
	                    		<a  href="{{ route('admin-edit-property', $property->slug) }}" class="btn btn-sm bg-secondary btn-block text-white"><i class="fa fa-edit"></i></a>
	                    	</div>
	                    </div>

	                 {{--    <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 112</a>
	                      <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 42</a> --}}
	                </div>
	              </div>
		        @endforeach
              
              {{ $properties->links() }}
            </div>
          </div>
        </div>
	</div>
</section>


	 
@endsection