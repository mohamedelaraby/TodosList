@extends('layouts.app')

@section('title','Posts')
@section('content')

<h1 class="display-5">Posts</h1>

    
            @if(count($posts) > 0)
                @foreach ($posts as $post )
                <div class="row">
                    {{-- image upoaded --}}
                    <div class="col-sm-4 col-md-4">
                        <img   style="width:100%; border-radius:10%;" src="/storage/cover_images/{{$post->cover_image}}" alt="post image">
                    </div>

                    {{-- Active posts --}}
                    <div class="col-md-8 col-sm-8">
                        <ul class="list-group">
                            <li class="list-group-item">
                            <a href="/posts/{{$post->id}}"> {{$post->title}}</a> <br>
                                <small>  Written on: <span class="text-muted">{{$post->created_at}}</span> <br>
                                    by <em><strong>{{$post->user->name}}  </strong></em> </small>
                            </li>
                        </ul>
                    </div>
                </div>
                        
                @endforeach
                {{$posts->links()}}
            @else
                <p class="lead">No posts found</p>
            @endif
    

@endsection
