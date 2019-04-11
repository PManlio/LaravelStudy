@extends('layout')

@section('title m-b-md', 'Laracasts')

@section('content')

  <h1>My {!! $foo !!} Website</h1>

  <ul>
    <li><a href="/contact">Contact page</a> just for the route.</li>
    <li><a href="/about">About page</a> tryin' again the route.</li>
  </ul>

  <ul>
    @foreach ($tasks as $task)
      <li>{{ $task }}</li>
    @endforeach
  </ul>

@endsection
