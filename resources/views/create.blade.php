@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <h1>Add Image</h1>
            <form action="/store" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-control">
                    <input type="file" name="image">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection