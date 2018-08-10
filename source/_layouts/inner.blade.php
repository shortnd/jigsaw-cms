@extends('_layouts.master')
@section('body')
  <h2>{{ $page->title }}</h2>
  <p>
    {{ $page->mission_statement }}
  </p>
  <img src="{{ $page->assets_prefix }}{{ $page->page_img }}" alt="{{ $page->page_img_alt }}">
@endsection
