@extends("layouts.app")
@section("content")
<h1>Hello world</h1>
       {{$nom}}
      <a href="{{route('home')}}"> Allez sur main</a>
@endsection