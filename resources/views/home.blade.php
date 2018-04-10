@extends('layouts.UsersHome')

@section('htmlheader_title')
	Home
@endsection


@section('content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Home</div>

					<div class="panel-body">
						@include('vendors.Postedlistings')
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
