@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Pricing Rate {{ $pricingrate->name }}
        <a href="{{ url('pricing-rates/' . $pricingrate->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit PricingRate"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['pricingrates', $pricingrate->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Delete PricingRate',
                    'onclick'=>'return confirm("Confirm delete?")'
            ));!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr><th> Name </th><td> {{ $pricingrate->name }} </td></tr><tr><th> Pricing Model</th><td> {{ $pricingrate->PricingModel->name }} </td></tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
