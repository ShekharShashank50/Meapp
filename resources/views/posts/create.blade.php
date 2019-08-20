@extends('layouts.app')

@section('content')
      <h1>Create Posts</h1>
      <h2>Create Posts</h2>
      {{ Form::open(array('url'=>route('posts.create'))) }}
           <div class="form-group">
               {{Form::label('title','Title')}}
               {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
           </div>
           <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'Body Text'])}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
      {!! Form::close() !!}
      
@endsection 
