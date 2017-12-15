@extends('layouts.app')

@section('title')
  Application - New
@endsection

@section('content')
  <div class="container">
    <h1> Form goes here.</h1>
    <form class="form" method="post">
      Name<input type="text" name="name"></input>
      Description<input type="text" name="description"></input>
      {{ csrf_field() }}
      <input type="submit"></input>
    </form>
  </div>
@endsection
