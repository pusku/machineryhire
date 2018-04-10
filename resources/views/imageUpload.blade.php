@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Upload</div>

                <div class="panel-body">
                    <form action="upload" method="POST" files=true enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <input type="file" name="image" id="image">
                        <input type="submit" value="Uploadx" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
