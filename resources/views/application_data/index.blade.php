@extends('layouts.app')

@section('title')
  Application Data Type - Index
@endsection

@section('content')
<div class="container">
  <div class="row">
  <div class="col-sm-12 col-md-12"> 
        <ol class="breadcrumb">
          <li><a href="{{ route('application_index') }}">Applications</a></li>
          <li><a href="{{ route('application_view', ['id' => $application -> id ]) }}">{{ $application -> name }}</a></li>
          <li><a href="{{ route('application_data_index', ['app_id' => $application -> id ]) }}">Data Structure</a></li>
        </ol>
    </div>
<h2>Data Structure for {{ $application -> name }}<a class="btn btn-link btn-lg" href="{{ route('application_data_new', ['app_id' => $application -> id ]) }}"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></h2>
@foreach ($application_data as $data)
<div class="col-sm-6 col-md-4">
  <div class="thumbnail">
   <div class="caption">
     <h3>{{ $data -> name }}</h3>
     <p>{{ $data -> description }}</p>
    <p><a class="btn btn-primary" role="button" href="{{ route('application_data_view', ['app_id' => $application -> id, 'id' => $data -> id ]) }}">Detail</a> 
   </div>
  </div>
 </div>
@endforeach
</div>
</div>
@endsection
