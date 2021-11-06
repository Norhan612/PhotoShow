@extends('layouts.app')

@section('content')

<br>
<div class="container">
    @if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-warning') }}">{{ Session::get('message') }}</p>
    @endif
  </div>

  <br>

  <h3 class="text-center" style="font-weight:bold; color:rgb(216, 31, 31);"> {{$album->name}} </h3>

  <br><br><br>

  <div class="photos">
    <div class="row text-center">

      @foreach ($album->photos as $photo)

      <div class="col-md-4">

        <a href="/photos/{{$photo->id}}">
          <img class="img-fluid rounded" src="/upload/album_photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}" width="60%">
        </a>

        <br><br>

        <h4>{{$photo->title}}</h4>
        <!--
        <h4>{{$photo->size}}</h4>
        <h4>{{$photo->description}}</h4>

        -->
        
        <br>

      </div>

      @endforeach  
      
    </div>

  </div>

  <hr>

  <div class="container">
    <a class="button btn-danger" href="/">Go Back</a>
    <a class="button btn-warning" href="/photos/create/{{$album->id}}">Upload Photo To Album</a>
  </div>

  <br><br><br>
@stop