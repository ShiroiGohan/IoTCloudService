@extends('layouts.app')

@section('title')
  Application List
@endsection

@section('content')
  <div class="container">
    <a class="btn btn-default" href="{{ route('application_new') }}">New Application</a>
    <h1> Application list goes here.</h1>
    @foreach ($applications as $app)
      {{ $app -> name() }}
    @endforeach
  </div>
@endsection
