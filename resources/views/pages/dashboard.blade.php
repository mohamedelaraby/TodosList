@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-primary p-2 mb-2" href="/posts/create">Create Post</a>

                    <h3>Your Posts</h3>

                    {{-- User Posts table --}}
                    @if(count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>

                        @foreach ($posts as $post )
                        <tr>
                            <td>{{$post->title}}</td>
                            <td> <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>  </td>
                            <td>
                                
                            {{-- Delete form --}}
                                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'ml-auto'])!!}
                                <div class="form-group float-right">
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete',['class' => 'float-right btn btn-danger'])}}
                                </div>
                            
                                {!!Form::close()!!}</td>
                        </tr>
                        @endforeach
                    </table>
                    @else 
                    <p class="justify-content-center">Post something Great!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
