@extends('layouts.app')

@section('title')
  Application Data Type - View
@endsection

@section('content')
  <div class="container">
    <h1>Application Data structure.</h1>
    {{ $application_data -> name }}
  </div>
@endsection
