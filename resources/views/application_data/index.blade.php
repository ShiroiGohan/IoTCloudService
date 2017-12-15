@extends('layouts.app')

@section('title')
  Application Data Type - Index
@endsection

@section('content')
  <div class="container">
    <h1>Defined Data Types.</h1>
    @foreach ($application_data as $data)
      {{ $data -> name }}
    @endforeach
  </div>
@endsection
