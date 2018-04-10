@extends('layouts.app')

@section('content')
<div class="">

    <h1>Categories <a href="{{ url('/categories/create') }}" class="btn btn-primary btn-xs" title="Add New Category"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="">
        <table class="table table-bordered table-striped table-hover datatables">
            <thead>
                <tr>
                    <th>S.No</th><th> Name </th><th> Parent </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($categories as $item)
                {{-- */$x++;/* --}}

                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->name }}</td><td>{{ ($item->Parent)?$item->Parent->name:'None' }}</td>
                    <td>
                        <a href="{{ url('/categories/' . $item->id) }}" class="btn btn-success btn-xs" title="View Category"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/categories/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Category"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/categories', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Category" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Category',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $categories->render() !!} </div>
    </div>

</div>
@endsection
