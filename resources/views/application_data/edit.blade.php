@extends('layouts.app')

@section('title')
  Application Data Type - Edit
@endsection

@section('content')
<div class="container">
<div class="row">
  <div class="col-sm-12 col-md-12"> 
      <ol class="breadcrumb">
      <li><a href="{{ route('application_index') }}">Applications</a></li>
      <li><a href="{{ route('application_view', ['id' => $application -> id ]) }}">{{ $application -> name }}</a></li>
      <li><a href="{{ route('application_data_index', ['app_id' => $application -> id ]) }}">Data Structure</a></li>
      <li><a href="{{ route('application_data_view', ['app_id' => $application -> id, 'id' => $application_data -> id ]) }}">{{ $application_data -> name }}</a></li>
      </ol>
  </div>
  <div class="col-sm-12 col-md-12">
  <form class="form" method="post">
    <div class="panel panel-default">
        <div class="panel-heading">
          <div class="row">
            <div class="col-md-11">
              <h4>Edit Data Type</h4>
            </div>
            <div class="col-md-1">
              <button type="submit" class="btn btn-link btn-lg"><span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span></button>
            </div>  
          </div>     
        </div>
        <div class="panel-body">
          {{ csrf_field() }}
          <input name="_method" type="hidden" value="put">
          <div class="row">
            <div class="col-md-2 col-md-offset-2">
              <b><big>Data Name</big></b>
            </div>
            <div class="col-md-3">
              <input type="text" class="form-control input-sm" name="name" value="{{ $application_data -> name }}"></input>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2 col-md-offset-2">
              <b><big>Description</big></b>
            </div>
            <div class="col-md-3">
              <input type="text" class="form-control input-sm" name="description" value="{{ $application_data -> description }}"></input>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2 col-md-offset-2">
              <b><big>Pattern</big></b>
            </div>
            <div class="col-md-3">
              <input type="text" class="form-control input-sm" name="pattern_array" value="{{ $application_data -> pattern_array }}"></input>
            </div>
          </div>
        </div>   
    </div>   
  </form>   
</div>
  <div class="col-sm-12 col-md-12">
    <a href="{{ route('application_data_delete', ['app_id' => $application -> id, 'id' => $application_data -> id ]) }}"><button type="button" class="btn btn-danger btn-sm">Delete Data Structure</button></a> 
  </div>
</div>
</div>
  
@endsection
