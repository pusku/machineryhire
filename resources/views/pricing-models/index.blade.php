@extends('layouts.app')

@section('content')
<div class="">

    <h1>Pricing Models <a href="{{ url('/pricing-models/create') }}" class="btn btn-primary btn-xs" title="Add New PricingModel"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover datatables">
            <thead>
                <tr>
                    <th>S.No</th><th> Name </th><th> Description </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($pricingmodels as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->name }}</td><td>{{ $item->description }}</td>
                    <td>
                        <a href="{{ url('/pricing-models/' . $item->id) }}" class="btn btn-success btn-xs" title="View PricingModel"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/pricing-models/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit PricingModel"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/pricing-models', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete PricingModel" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete PricingModel',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $pricingmodels->render() !!} </div>
    </div>

</div>
@endsection
