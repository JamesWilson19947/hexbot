@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

<center>
  <h1>Colour:  {{ $data['hex'] }} </h1>
  <h1>Name: {{ $data['colour'] }}</h1>
    <img src="{{ $data['image']}}" alt="Smiley face" height="42" width="42">


</center>



<style>
  body{
    background-color: {{ $data['hex'] }};
  }

  h1 {
    color: #fff;
    -webkit-text-stroke-width: 1px;
    -webkit-text-stroke-color: black;
  }

  
@endsection


	




