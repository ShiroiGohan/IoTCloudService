@extends('layouts.app')

@section('title')
  Application - Edit
@endsection

@section('content')
  <div class="container">
    <h1>Confirmation</h1>
    <h2>{{ $application -> name }} will be deleted. Sure?</h2>
    </br>
    <form class="form" method="post">
      <input name="_method" type="hidden" value="delete">
      {{ csrf_field() }}
      <button type="submit" class="btn btn-danger">Delete</button>
      &nbsp;
      <a href="{{ route('application_view', ['id' => $application -> id ]) }}"><button type="button" class="btn btn-success">Cancel</button></a> 
    </form>
  </div>
@endsection
