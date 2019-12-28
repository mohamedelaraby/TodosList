@extends('layouts.app')

@section('title','show')
@section('content')

<a href="/" class="btn btn-outline-dark mt-3">Back</a>

<div class="row mb-4">
    <div class="col-sm-8 col-md-8">
        <h1 class="display-4">{{$todo->text}}</h1>
        <hr>
        <div class="lead mt-2">{{$todo->body}}</div>
        <small>Written on <span class="text-secondary">{{$todo->created_at}}</span>> </small>  <br>
        <hr><br><br>
        <a href="{{$todo->id}}/edit" class="btn btn-outline-info">Edit</a>

        
    </div>
      
</div>

    {{-- if user is auth show him the delte and edit button otherwise hidden
    @if(!Auth::guest())
        {{-- if user is auth and === post_user_id then show him edit and delete otherwise no --}}
        {{-- @if(Auth::user()->id == $post->user_id)
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
            </div>
        
            {{-- Delete form --}}
            {{-- {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'ml-auto'])!!}
            <div class="form-group float-right">
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete',['class' => 'float-right btn btn-danger'])}}
            </div>

            {!!Form::close()!!}
        </div> --}}
        {{-- @endif --}}
    {{-- @endif --}} 
@endsection
