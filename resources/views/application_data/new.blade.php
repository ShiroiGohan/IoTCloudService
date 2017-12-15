@extends('layouts.app')

@section('title')
  Application Data Type - Index
@endsection

@section('content')
  <div class="container">
    <h1>Forum goes here.</h1>
    <form class="form" method="post">
      Name<input type="text" name="name"></input>
      Description<input type="text" name="description"></input>
      Pattern<input type="text" name="pattern_array"></input>
      {{ csrf_field() }}
      <input type="submit"></input>
    </form>
  </div>
@endsection
