@extends('_layouts.master')
@section('body')
  {{$page->title}}
  <hr>
  @foreach ($page->quotes as $quote)
    {{$quote['quote']}}
  @endforeach
@endsection
