@extends('layouts.app')

@section('content')

    <h3 class="text-center" style="font-weight:bold; color:rgb(216, 31, 31);">Create Photo</h3>

    
    <form method="post" action="{{url('/photos/store/'.$album_id)}}" enctype="multipart/form-data">
        @csrf

    
        <div class="form-group">
            <label for="name">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
        </div>

        <div class="form-group">
            <label for="size">Size</label>
            <input type="text" name="size" class="form-control" id="size" placeholder="Enter Size">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" id="description" placeholder="Enter Description">
        </div>

        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" name="photo" id="photo">
        </div>

    
        <button type="submit" class="btn btn-warning" style="color:#fff;">Add New Photo</button>
    </form>


@stop