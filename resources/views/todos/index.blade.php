@extends('layouts.app')

@section('title','Todos')
@section('content')

<h1 class="display-5 text-center">Todos</h1>

{{-- Display every todos in database --}}
@if(count($todos) > 0)
    @foreach ($todos as $todo )
       <div class="card mb-2">
           <div class="card-body">
               <h3> <a href="todo/{{$todo->id}}">{{$todo->text}}</a>  
                <span class="text-danger">{{$todo->due}}</span> </h3>
           </div>
       </div>
    @endforeach
@endif
    
@endsection
