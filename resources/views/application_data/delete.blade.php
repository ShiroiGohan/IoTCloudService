@extends('layouts.app')

@section('title')
  Type - Delete
@endsection

@section('content')
  <div class="container">
    <h1> Form goes here.</h1>
    <form class="form" method="post">
      <input name="_method" type="hidden" value="delete">
      {{ csrf_field() }}
      <input type="submit"></input>
    </form>
  </div>
@endsection
