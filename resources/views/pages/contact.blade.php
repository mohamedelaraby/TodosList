@extends('layouts.app')

@section('title','contact')

@section('sidebar')
@parent
@endsection

@section('content')
<h1>Contact</h1>


<div class="card">
    <div class="card-header">Contact some body</div>
    <div class="card-body">
        {!!Form::open(['url' => 'contact/submit']) !!}
            <div class="form-group">
                {{Form::label('name','Name')}}
                {{Form::text('name','', ['class' => 'form-control-lg'  ,'placeholder' => 'Enter your name']) }}
            </div>
            <div class="form-group">
                {{Form::label('email','Email')}}
                {{Form::email('email', "", [ 'class' => 'form-control-lg'  ,'placeholder' => 'Enter your email']) }}
            </div>
            
            <div class="form-group">
                {{Form::label('message','Message')}}
                {{Form::textarea('message', "", [ 'class' => 'form-control', 'row' => 10, 'column' => 30,'placeholder' => 'Say Something Chearful!']) }}
            </div>

            <div class="form-group">
                {{Form::submit('Send',[ 'class' => 'btn btn-success' ])}}
            </div>
        
        {!!Form::close()!!}
        
    </div>
</div>

@endsection
