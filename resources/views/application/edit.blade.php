@extends('layouts.app')

@section('title')
  Application - Edit
@endsection

@section('content')
  <div class="container">
    <h1> Form goes here.</h1>
    <form class="form" method="post">
      Name<input type="text" name="name" value="{{ $app -> name }}"></input>
      Description<input type="text" name="description" value="{{ $app -> description }}"></input>
      {{ csrf_field() }}
      <input type="submit"></input>
    </form>
  </div>
@endsection
