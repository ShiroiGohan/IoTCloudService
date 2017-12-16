@extends('layouts.app')

@section('title')
  Application - New
@endsection

@section('content')
  <div class="container">
    <h1>Creat new application</h1>
      <form class="form" method="post">
        <div class="row">
          <div class="col-sm-5 col-md-5" > 
            Name<input type="text" name="name" class="form-control"></input>
          </div>
        </div>  
        <div class="row">
          <div class="col-sm-5 col-md-5" > 
            Description<input type="text" name="description" class="form-control"></input>
          </div>  
        </div>
        {{ csrf_field() }}
        </br>
        <button type="submit" class="btn btn-default">OK</button>
        &nbsp;
        <a role="button" class="btn btn-default" href="{{ route('application_index') }}">Cancel</a>
      </form>
  </div>
@endsection
