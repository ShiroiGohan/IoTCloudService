@extends('layouts.app')

@section('title')
  Type - Delete
@endsection

@section('content')
<div class="container">
    <h1>Confirmation</h1>
    <h2>Data Stucture {{ $application_data -> name }} for {{ $application -> name}} will be deleted. Sure?</h2>
    </br>
    <form class="form" method="post">
      <input name="_method" type="hidden" value="delete">
      {{ csrf_field() }}
      <button type="submit" class="btn btn-danger">Delete</button>
      &nbsp;
      <a href="{{ route('application_data_view', ['app_id' => $application -> id, 'id' => $application_data -> id ]) }}"><button type="button" class="btn btn-success">Cancel</button></a> 
    </form>
 </div>
  
@endsection
