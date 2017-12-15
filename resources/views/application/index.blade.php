@extends('layouts.app')

@section('title')
  Application - Index
@endsection

@section('content')
  <div class="container">
    <a class="btn btn-default" href="{{ route('application_new') }}">New Application</a>
    <h1> Application list goes here.</h1>
    {{ json_encode($applications) }}
    @foreach ($applications as $app)
      {{ $app -> name }}
    @endforeach
  </div>
@endsection
