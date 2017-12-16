@extends('layouts.app')

@section('title')
  Application Key - New
@endsection

@section('content')
  <div class="container">
    <h1>Forum goes here.</h1>
    <form class="form" method="post">
      Name<input type="text" name="name"></input>
      <input type="number" name="usage"></input>
      <span>Above is a type selection. Type : 0 for devices, 1 for messages</span>
      {{ csrf_field() }}
      <input type="submit"></input>
    </form>
  </div>
@endsection
