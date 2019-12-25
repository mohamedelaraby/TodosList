@extends('layouts.app')
@section('title','Home')
@section('content')
<h1>Home</h1>
<p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.
     Ut laboriosam blanditiis accusamus molestiae ad itaque ipsam mollitia
      ipsa reiciendis perspiciatis illum, eos iste, architecto facilis. Sit maxime beatae,
     labore amet ullam saepe architecto facilis ut eum? Sed officiis natus dolorum.</p>
@endsection 


@section('sidebar')

@parent 
  
<p>this os appended to the side bar</p>
@endsection