@extends('layouts.app')

@section('title','create')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card card-body mt-5 p-2 text-dark mx-auto">
            <h3 class="text-center">Create Post</h3>
            {!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
                {{Form::token()}}
         {{Form::bsText('text','', 'Enter your todo')}}
       
         {{Form::bsTextArea('body','', 'Enter Your todo`s content')}}
         {{Form::bsText('due','', 'Enter your deadline')}}
           {{Form::bsSubmit('Submit', ['class' => 'btn btn-primary'])}}


            {!! Form::close() !!}
        </div>
    </div>
</div>

 

    {{-- // @End of content section --}}
@endsection 
