@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

<center>
  <h1>Colour:  {{ $data['hex'] }} </h1>
  <h1>Name: {{ $data['colour'] }}</h1>
    <a href="{{ $data['links']['self'] }}"><img src="{{ $data['images']['regular'] }}" width="500" height="auto"></a>
    <p> Image by : {{ $data['user']['name'] }} </a>
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


	




