@extends('layouts.UsersHome')

@section('content')
<div class="container">
	<H2>Vendors Home</H2>
	<hr>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="col-md-6"><h4>Profile Completeness</h4></div>
						<div class="col-md-3"><h5 class="text-success">100%</h5></div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<h4>Listed items</h4>
				</div>
				<div class="col-md-3"><h5 class="text-success">1</h5></div>
			</div>

		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="col-md-6"><h4>Item Views</h4></div>
						<div class="col-md-3"><h5 class="text-success">6</h5></div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<h4>Contact enquiries</h4>
				</div>
				<div class="col-md-3"><h5 class="text-success">2</h5></div>
			</div>

		</div>
	</div>
</div>
@endsection