@extends('layouts.app')

@section('title')
  Application Data Type - View
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
      <div class="panel panel-default">
          <div class="panel-heading">
            <div class="row">
              <div class="col-md-11">
                <h4>Data Type Detail</h4>
              </div>
              <div class="col-md-1">
                <a href="{{ route('application_data_edit', ['app_id' => $application -> id, 'id' => $application_data -> id ]) }}">
                  <h4><span class="glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span></h4>
                </a>    
              </div> 
            </div>   
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-2 col-md-offset-2">
                <b><big>Data Name</big></b>
              </div>
              <div class="col-md-4">
                {{ $application_data -> name }}
              </div>
            </div>
            <div class="row">
              <div class="col-md-2 col-md-offset-2">
                <b><big>Description</big></b>
              </div>
              <div class="col-md-4">
                {{ $application_data -> description }}
              </div>
            </div>  
            <div class="row">
              <div class="col-md-2 col-md-offset-2">
                <b><big>Pattern</big></b>
              </div>
              <div class="col-md-4">
                {{ $application_data -> pattern_array }}
              </div>
            </div>
          </div>
      </div>    
  </div>
  <div class="col-sm-12 col-md-12">
    <a href="{{ route('application_data_delete', ['app_id' => $application -> id, 'id' => $application_data -> id ]) }}"><button type="button" class="btn btn-danger btn-sm">Delete Data Structure</button></a> 
  </div>
</div>
</div>
@endsection
