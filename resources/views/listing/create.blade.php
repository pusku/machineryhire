@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Create New Listing</h1>
    <hr/>

    {!! Form::open(['url' => '/listing', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('item_name') ? 'has-error' : ''}}">
                {!! Form::label('item_name', 'Item Name', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('item_name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('item_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('item_picture') ? 'has-error' : ''}}">
                {!! Form::label('item_picture', 'Item Picture', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::file('item_picture', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('item_picture', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('item_description') ? 'has-error' : ''}}">
                {!! Form::label('item_description', 'Item Description', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('item_description', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('item_description', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
                {!! Form::label('category_id', 'Category Id', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('category_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('pricing_rate_id') ? 'has-error' : ''}}">
                {!! Form::label('pricing_rate_id', 'Pricing Rate Id', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('pricing_rate_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('pricing_rate_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('hiring_cost') ? 'has-error' : ''}}">
                {!! Form::label('hiring_cost', 'Hiring Cost', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('hiring_cost', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('hiring_cost', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('hiring_cost_with_expert') ? 'has-error' : ''}}">
                {!! Form::label('hiring_cost_with_expert', 'Hiring Cost With Expert', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('hiring_cost_with_expert', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('hiring_cost_with_expert', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('item_location') ? 'has-error' : ''}}">
                {!! Form::label('item_location', 'Item Location', ['class' => 'col-sm-3 control-label']) !!}
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
                {!! Form::label('item_contact', 'Item Contact', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('item_contact', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('item_contact', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('supplier_id') ? 'has-error' : ''}}">
                {!! Form::label('supplier_id', 'Supplier Id', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('supplier_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('supplier_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
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
@endsection