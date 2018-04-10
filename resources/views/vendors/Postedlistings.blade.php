@extends('layouts.UsersHome')

@section('content')
<div class="container">
	@if(Auth::user())
	<a href="{{ url('vendor/create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Create a Listing</a>
	
	@endif

	<hr>
	@foreach($VendorsListings as $listing)
	{{-- <a href=""> --}}
		<div class="row row listing">
			<div class="col-md-6"><img src="{{asset($listing->item_picture) }}" alt="" class="listing-image" ></div>
			<div class="col-md-6">
				<h3>{{ $listing->item_name }}</h3>
				<h4>Location: {{ $listing->item_location }}</h4>
				<h4>Cost: {{ $listing->hiring_cost }}</h4>
				<h4>Rate: {{ $listing->PricingRate->name }}</h4>
				<h4>Available: {{ $listing->available_quantity }}</h4>
				
				@if(Auth::user())
				<div><a href="" class="btn btn-info btn-lg"><i class="fa fa-pen"></i> Edit</a> <a href="" class="btn btn-danger btn-lg"><i class="fa fa-delete"></i> Delete</a></div>
				@endif
			</div>
		</div>
	{{-- </a> --}}
	@endforeach

</div>
@endsection