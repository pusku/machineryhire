@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Category {{ $category->id }}
        <a href="{{ url('categories/' . $category->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Category"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['categories', $category->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Delete Category',
                    'onclick'=>'return confirm("Confirm delete?")'
            ));!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $category->id }}</td>
                </tr>
                <tr><th> Name </th><td> {{ $category->name }} </td></tr><tr><th> Parent </th><td> {{ $category->parent }} </td></tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
