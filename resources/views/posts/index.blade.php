@extends('layouts.app')

@section('content')
      <h1>Posts</h1>
      <p>Hi</p>
      @if(count($posts)>0)
         @foreach($posts as $post)
           <div class="well">
                 <h2><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
                 <small>Written on{{$post->created_at}}</small>
                 </div>
         @endforeach
      {{$posts->links()}}
      @else 
      <p>No posts found</p>
      @endif 
      
@endsection 