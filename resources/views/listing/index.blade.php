@extends('layouts.app')

@section('content')
<div class="">

    <h1>Listing <a href="{{ url('/listing/create') }}" class="btn btn-primary btn-xs" title="Add New Listing"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover datatables">
            <thead>
                <tr>
                    <th>S.No</th><th> Item Name </th><th> Item Picture </th><th> Item Description </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($listing as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->item_name }}</td><td><img src="{{ asset( $item->item_picture) }}" alt="Item Picture" style="
    width: 300px;
"></td><td>{{ $item->item_description }}</td>
                    <td>
                        <a href="{{ url('/listing/' . $item->id) }}" class="btn btn-success btn-xs" title="View Listing"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/listing/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Listing"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/listing', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Listing" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Listing',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $listing->render() !!} </div>
    </div>

</div>
@endsection
