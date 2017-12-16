@extends('layouts.app')

@section('title')
  Application Keys - Index
@endsection

@section('content')
  <div class="container">
    <h1>Current keys</h1>
    @foreach ($application_keys as $key)
      {{ $key -> name }}
    @endforeach
  </div>
@endsection
