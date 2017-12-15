@extends('layouts.app')

@section('content')
  <div class="container">
    <h1> Form goes here.</h1>
    <form class="form" method="post">
      <input type="text" name="name"></input>
      <input type="text" name="description"></input>
      {{ csrf_field() }}
      <input type="submit">Submit</input>
    </form>
  </div>
@endsection
