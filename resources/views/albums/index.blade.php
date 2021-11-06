@extends('layouts.app')

@section('content')

<br>
<div class="container">
    @if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-warning') }}">{{ Session::get('message') }}</p>
    @endif
  </div>

  <br>

    <h3 class="text-center" style="font-weight:bold; color:rgb(216, 31, 31);"> Albums </h3>

    <br><br>
    
    <div class="albums">
      <div class="row text-center">

        @foreach ($albums as $album)

        <div class="col-md-4">

          <a href="/albums/{{$album->id}}">
            <img class="img-fluid rounded" src="upload/album_covers/{{$album->cover_image}}" alt="{{$album->name}}" width="60%">
          </a>

          <br><br>

          <h4>{{$album->name}}</h4>
          
          <br>

        </div>

        @endforeach  
        
      </div>

  

    </div>
@stop


