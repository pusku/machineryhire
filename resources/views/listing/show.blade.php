@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Listing {{ $listing->id }}
        <a href="{{ url('listing/' . $listing->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Listing"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['listing', $listing->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Delete Listing',
                    'onclick'=>'return confirm("Confirm delete?")'
            ));!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $listing->id }}</td>
                </tr>
                <tr><th> Item Name </th><td> {{ $listing->item_name }} </td></tr><tr><th> Item Picture </th><td> {{ $listing->item_picture }} </td></tr><tr><th> Item Description </th><td> {{ $listing->item_description }} </td></tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
