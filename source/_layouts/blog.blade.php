@extends('_layouts.master')
@section('body')
  <h1>{{$page->title}}</h1>
  <h2>{{$page->author}}</h2>
  @yield('content')
@endsection
