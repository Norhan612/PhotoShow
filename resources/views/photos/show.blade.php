@extends('layouts.app')

@section('content')

<br>


<h3 class="text-center" style="font-weight:bold; color:rgb(216, 31, 31);"> {{$photo->title}} </h3>

<br><br><br>

<div class="photo">
    <div class="row text-center">


        <div class="col-md-4">

                <img class="img-fluid rounded" src="/upload/album_photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}" width="60%">

        </div>
        
        <div class="col-md-4" style="margin-top:30px; font-weight:bold;">
            <h4>{{$photo->title}}</h4>
            
            <h4>{{$photo->size}}</h4>
            <h4 style="color:#888;">{{$photo->description}}</h4>
        </div>    

        
        
        <br>

    

    
    
    </div>
    <br><br>
</div>

<hr>

<div class="container">
    <a type="button" class="btn btn-warning" href="/albums/{{$photo->album_id}}">Back To Gallery</a>
    <a type="button" class="btn btn-danger" href="/photos/delete/{{$photo->id}}">Delete Photo</a>
</div>

<br><br><br>
@stop