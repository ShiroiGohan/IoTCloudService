@extends('layouts.app')

@section('title')
  Application - View
@endsection

@section('content')
  {{ $application -> name }}
@endsection
