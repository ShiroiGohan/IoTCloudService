@extends('layouts.app')

@section('title')
  Application Data Type - Edit
@endsection

@section('content')
  <div class="container">
    <h1>Forum goes here.</h1>
    <form class="form" method="post">
      <input name="_method" type="hidden" value="put">
      Name<input type="text" name="name" value="{{ $application_data -> name }}"></input>
      Description<input type="text" name="description" value="{{ $application_data -> description }}"></input>
      Pattern<input type="text" name="pattern_array" value="{{ $application_data -> pattern_array }}"></input>
      {{ csrf_field() }}
      <input type="submit"></input>
    </form>
  </div>
@endsection
