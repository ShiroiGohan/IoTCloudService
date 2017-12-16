@extends('layouts.app')

@section('title')
  Application - View
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-12"> 
        <ol class="breadcrumb">
          <li><a href="{{ route('application_index') }}">Applications</a></li>
          <li><a href="{{ $application -> id }}">{{ $application -> name }}</a></li>
        </ol>
    </div>
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
              <div class="row">
                <div class="col-md-11">
                  <h4>Application Brief</h4>
                </div>
                <div class="col-md-1">
                  <a href="{{ route('application_edit', ['id' => $application -> id ]) }}">
                    <h4><span class="glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span></h4>
                  </a>    
                </div> 
              </div>   
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-2 col-md-offset-2">
                  <b><big>Application Name</big></b>
                </div>
                <div class="col-md-4">
                  {{ $application -> name }}
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-md-offset-2">
                  <b><big> Description</big></b>
                </div>
                <div class="col-md-4">
                  {{ $application -> description }}
                </div>
              </div>  
            </div>
        </div>    
    </div>
    <div class="col-sm-12 col-md-12">    
      <div class="panel panel-default">
        <div class="panel-heading"><h4>Details</h4></div>
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Value</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>id</th>
              <th>{{ $application -> id }}</th>
            </tr>
            <tr>
              <th>Owner</th>
              <th>{{ $application -> owner -> name }}</th>
            </tr> 
            <tr>
              <th>Application eui</th>
              <th>{{ $application -> application_eui }}</th>
            </tr>
            <tr>
              <th>Created Time</th>
              <th>{{ $application -> created_at }}</th>
            </tr>
            <tr>
              <th>Updated Time</th>
              <th>{{ $application -> updated_at }}</th>
            </tr>   
          </tbody>  
        </table>
      </div>
    </div>
    <div class="col-sm-12 col-md-12">
        <a href="{{ route('application_delete', ['id' => $application -> id ]) }}"><button type="button" class="btn btn-danger btn-sm">Delete Application</button></a> 
    </div>
  </div>
</div>
@endsection
