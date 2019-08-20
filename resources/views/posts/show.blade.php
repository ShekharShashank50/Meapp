@extends('layouts.app')

@section('content')  
      <a href="/posts" class="btn btn-default">Go Back</a>
      <h1>Posts</h1>
      <h2>Posts</h2>
      <p>Hi</p>
      <small>Written on{{$post->created_at}}</small>
      <div>
          {{$post->body}}
      </div>
@endsection 
