@extends('layouts.app')

@section('title','show')
@section('content')

<a href="/posts" class="btn btn-outline-dark mt-3">Go Back</a>

<div class="row mb-4">
    <div class="col-sm-8 col-md-8">

        <h1 class="display-4">{{$post->title}}</h1>

        <div>{!!$post->body!!}</div>
        <hr>
        <small>Written on <span class="text-secondary">{{$post->created_at}}</span> <br>
            by <em> <strong>{{$post->user->name}}</strong></em>  </small>
        <hr>
        
    </div>
    
     {{-- image upoaded --}}
     <div class="col-sm-4 col-md-4">
        <img   style="width:100%; border-radius:55 %;" src="/storage/cover_images/{{$post->cover_image}}" alt="post image">
    </div>


        
</div>

    {{-- if user is auth show him the delte and edit button otherwise hidden --}}
    @if(!Auth::guest())
        {{-- if user is auth and === post_user_id then show him edit and delete otherwise no --}}
        @if(Auth::user()->id == $post->user_id)
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
            </div>
        
            {{-- Delete form --}}
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'ml-auto'])!!}
            <div class="form-group float-right">
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete',['class' => 'float-right btn btn-danger'])}}
            </div>

            {!!Form::close()!!}
        </div>
        @endif
    @endif
@endsection
