@extends('layout')

@section('content')
    <h1 align="center">My gallery</h1>
    <div class="container">
        <div class="row">
            @foreach($imagesInView as $i => $image)
            <div class="col-md-3">
                <div><img src="{{$image->image}}" class="img-thumbnail"></div>
                <div class="form-group">
                    <a href="/show/{{$image->id}}" class="btn btn-info my-btn">Show</a>
                    <a href="/edit/{{$image->id}}" class="btn btn-warning my-btn">Edit</a>
                    <a href="/delete/{{$image->id}}" onclick="return confirm('are you sure?')" class="btn btn-danger my-btn">Delete</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection