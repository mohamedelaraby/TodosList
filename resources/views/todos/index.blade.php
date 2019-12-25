@extends('layouts.app')

@section('title','Todos')
@section('content')

<h1 class="display-5 text-center">Todos</h1>

@if(count($todos) > 0)
    @foreach ($todos as $todo )
       <div class="card mb-2">
           <div class="card-body">
               <h3>{{$todo->text}} <span class="text-danger">{{$todo->due}}</span> </h3>
           </div>
       </div>
    @endforeach
@endif
    
@endsection
