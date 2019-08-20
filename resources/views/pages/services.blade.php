@extends('layouts.app')

@section('content')
  <h1>{{$title}}</h1>
  @if(count($services)>0)
   <ul class="list-group">
    @foreach($services as $service)
        <li class="list-group-item">{{$service}}</li>
        @endforeach
   </ul>



  @endif
    
  <p>This is the Truckerzz Services page.
<br>Truckerzz is the platform we created in order to address the problems of the truck drivers' community.</p>
@endsection
