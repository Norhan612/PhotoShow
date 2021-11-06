@extends('layouts.app')

@section('content')

    <h3 class="text-center" style="font-weight:bold; color:rgb(216, 31, 31);">Create Album </h3>

    
    <form method="post" action="{{url('/albums/store')}}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
          </div>

        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" name="description" class="form-control" id="description" placeholder="Enter Description">
        </div>

        <div class="form-group">
            <label for="image">Cover Image</label>
            <input type="file" name="cover_image" id="cover_image">
          </div>
      
        <button type="submit" class="btn btn-warning" style="color:#fff;">Add New Album</button>
      </form>


@stop