@extends('layouts.app')

@section('title')
  Application - Edit
@endsection

@section('content')<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-12"> 
        <ol class="breadcrumb">
          <li><a href="{{ route('application_index') }}">Applications</a></li>
          <li><a href="{{ $application -> id }}">{{ $application -> name }}</a></li>
        </ol>
    </div>
    <div class="col-sm-12 col-md-12">
      <form class="form" method="post">
        <div class="panel panel-default">
            <div class="panel-heading">
              <div class="row">
                <div class="col-md-11">
                  <h4>Edit Application Brief</h4>
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
                  <b><big>Application Name</big></b>
                </div>
                <div class="col-md-3">
                  <input type="text" class="form-control input-sm" name="name" value="{{ $application -> name }}"></input>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-md-offset-2">
                  <b><big> Description</big></b>
                </div>
                <div class="col-md-3">
                  <input type="text" class="form-control input-sm" name="description" value="{{ $application -> description }}"></input>
                </div>
              </div>
            </div>   
        </div>   
      </form>   
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
