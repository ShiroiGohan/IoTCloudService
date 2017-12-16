@extends('layouts.app')

@section('title')
  Application Key - View
@endsection

@section('content')
  <div class="container">
    <h1>This is the key.</h1>
    {{ json_encode($application_key) }}
  </div>
@endsection
