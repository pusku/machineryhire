@extends('layouts.app')

@section('content')
<div class="container">

    <h1>PricingModel {{ $pricingmodel->id }}
        <a href="{{ url('pricing-models/' . $pricingmodel->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit PricingModel"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['pricingmodels', $pricingmodel->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Delete PricingModel',
                    'onclick'=>'return confirm("Confirm delete?")'
            ));!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $pricingmodel->id }}</td>
                </tr>
                <tr><th> Name </th><td> {{ $pricingmodel->name }} </td></tr><tr><th> Description </th><td> {{ $pricingmodel->description }} </td></tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
