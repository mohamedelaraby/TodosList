@extends('layouts.app')

@section('title','create')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card card-body mt-5 p-2 text-dark mx-auto">
            <h3 class="text-center">Create Post</h3>
            {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            
            <div class="form-group">
                {{-- label --}}
                {{Form::label('title','Title', ['class' => 'awesome'])}}
                {{Form::text('title','', ['class' => 'form-control', 'placeholder' => 'Title' ])}}
            </div>

           <div class="form-group">
               {{Form::label('body','Body', ['class' => 'awesome'])}}
               {{Form::textarea('body', '', ['class' => 'form-control ckeditor', 'placeholder' => 'Body Text '])}}
           </div>

           <div class="form-group">
               {{Form::file('cover_image')}}
           </div>

           {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}


            {!! Form::close() !!}
        </div>
    </div>
</div>

 

    {{-- // @End of content section --}}
@endsection 
