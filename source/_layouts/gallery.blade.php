@extends('_layouts.master')
@section('body')
  @foreach ($page->slides as $slide)
    <img src="{{$slide}}" alt="slide" />
  @endforeach
@endsection
