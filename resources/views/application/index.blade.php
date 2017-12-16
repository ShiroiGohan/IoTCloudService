@extends('layouts.app')

@section('title')
  Application - Index
@endsection

@section('content')
  <div class="container">
    <h1>Applications<a class="btn btn-link btn-lg" href="{{ route('application_new') }}"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></h1>
    <div class="row">
    @foreach ($applications as $app)
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
       <div class="caption">
         <h3>{{ $app -> name }}</h3>
         <p>{{ $app -> description }}</p>
        <p><a class="btn btn-primary" role="button" href="{{ route('application_view', ['id' => $app -> id ]) }}">Detail</a> 
       </div>
      </div>
     </div>
    @endforeach
</div>
  </div>
@endsection
