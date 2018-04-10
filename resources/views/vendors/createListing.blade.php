@extends('layouts.UsersHome')

@section('content')
<div class="container">
	

    <h1>Create New Listing</h1>
    <hr/>
<div class="panel panel-success">
    <div class="panel-heading">Machinery Detail</div>
    <div class="panel-body">

    {!! Form::open(['url' => '/vendor/create', 'class' => 'form-horizontal','enctype'=>'multipart/form-data']) !!}

            <div class="form-group {{ $errors->has('item_name') ? 'has-error' : ''}}">
	            {!! Form::label('item_name', 'Item Name', ['class' => 'col-sm-3 control-label']) !!}
	            <div class="col-sm-6">
	                {!! Form::text('item_name', null, ['class' => 'form-control']) !!}
	                {!! $errors->first('item_name', '<p class="help-block">:message</p>') !!}
	            </div>
            </div>
            <div class="form-group {{ $errors->has('item_picture') ? 'has-error' : ''}}">
                {!! Form::label('picture', 'Item Picture', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::file('item_picture', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('item_picture', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
                {!! Form::label('category_id', 'Category', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('category_id',$categories, null, ['class' => 'form-control']) !!}
                    {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

			
            <div class="form-group {{ $errors->has('item_location') ? 'has-error' : ''}}">
                {!! Form::label('item_location', 'Location', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('item_location', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('item_location', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('available_quantity') ? 'has-error' : ''}}">
                {!! Form::label('available_quantity', 'Available Quantity', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('available_quantity', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('available_quantity', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('item_contact') ? 'has-error' : ''}}">
                {!! Form::label('item_contact', 'Contact', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('item_contact', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('item_contact', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            
			<div class="form-group {{ $errors->has('item_description') ? 'has-error' : ''}}">
                {!! Form::label('item_description', 'Item Description', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('item_description', null, ['class' => 'form-control','rows'=>'3']) !!}
                    {!! $errors->first('item_description', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            </div>
            </div>


            {{-- Pricing --}}
			<div class="">
			<div class="panel panel-success ">
			    <div class="panel-heading">Pricing</div>
			    <div class="panel-body">
			    <div class="row">
			    <div class="col-md-6">
			    	<div class="form-group">
			    	{{-- <input type="hidden" name="supplier_id" value="{{ Auth::user()->id }}"> --}}
				    	<label for="pricingModel">Pricing Model</label>
				    	<select name="" id="pricingModel" class="form-control">
				    	
				    		@foreach($pricingModels as $model)
				    			<option value="{{$model->id}}">{{ $model->name}}</option>
				    		@endforeach
				    	</select>
			    	</div>
			    </div>
			    <div class="col-md-6">
		            <div class="form-group {{ $errors->has('pricing_rate_id') ? 'has-error' : ''}}">
		                {!! Form::label('pricing_rate_id', 'Pricing Rate ', ['class' => 'control-label']) !!}
		                <div>
		                    {!! Form::select('pricing_rate_id',$pricingRates, null, ['class' => 'form-control input-inline']) !!}
		                    {!! $errors->first('pricing_rate_id', '<p class="help-block">:message</p>') !!}
		                </div>
		            </div>
		            </div>
			    <div class="col-md-6">
		            <div class="form-group {{ $errors->has('hiring_cost') ? 'has-error' : ''}}">
		                {!! Form::label('hiring_cost', 'Hiring Cost', ['class' => ' control-label']) !!}
		                
		                    {!! Form::number('hiring_cost', null, ['class' => 'form-control']) !!}
		                    {!! $errors->first('hiring_cost', '<p class="help-block">:message</p>') !!}
		                
		            </div>
				</div>
			    <div class="col-md-6">
		            <div class="form-group {{ $errors->has('hiring_cost_with_expert') ? 'has-error' : ''}}">
		                {!! Form::label('hiring_cost_with_expert', 'Hiring Cost With Expert', ['class' => ' control-label']) !!}
		                
		                    {!! Form::number('hiring_cost_with_expert', null, ['class' => 'form-control']) !!}
		                    {!! $errors->first('hiring_cost_with_expert', '<p class="help-block">:message</p>') !!}
		                
		            </div>
		        </div>
			   </div>
	            </div>
            </div>
           </div>

            {{-- EndPricing --}}

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-success form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

	</div>
	</div>
</div>



</div>
@endsection