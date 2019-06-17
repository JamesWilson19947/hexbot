@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

<center>
  <h1>Colour:  {{ $data['hex'] }} </h1>
  <h1>Name: {{ $data['colour'] }}</h1>
    <a href="{{ $data['links']['html'] }}"><img src="{{ $data['images']['regular'] }}" width="500" height="auto"></a> </a>
    <p> Image by : <a href="{{ $data['user']['links']['html'] }}">{{ $data['user']['name'] }}</a> on <a href="https://unsplash.com/?utm_source=Colour_Picker&utm_medium=referral">Unsplash</a></p>
</center>


<style>
  body{
    background-color: {{ $data['image_colour'] }};
  }

  h1 {
    color: #fff;
    -webkit-text-stroke-width: 1px;
    -webkit-text-stroke-color: black;
  }
</style>
  
@endsection


	




