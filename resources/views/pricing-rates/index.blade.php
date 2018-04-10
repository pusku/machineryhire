@extends('layouts.app')

@section('content')
<div class="">

    <h1>Pricing Rates <a href="{{ url('/pricing-rates/create') }}" class="btn btn-primary btn-xs" title="Add New Pricing Rate"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover datatables">
            <thead>
                <tr>
                    <th>S.No</th><th> Name </th><th> Pricing Model</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($pricingrates as $item)
                {{-- */$x++;/* --}}

                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->name }}</td><td>{{ $item->PricingModel['name'] }}</td>
                    <td>
                        <a href="{{ url('/pricing-rates/' . $item->id) }}" class="btn btn-success btn-xs" title="View PricingRate"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/pricing-rates/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit PricingRate"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/pricing-rates', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete PricingRate" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete PricingRate',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $pricingrates->render() !!} </div>
    </div>

</div>
@endsection
