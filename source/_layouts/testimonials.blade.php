@extends('_layouts.master')
@section('body')
  <blockquote>
    {{ $page->quote}}
  </blockquote>
  {{-- @foreach ($page->author as $author)
    <p> {{$author}} </p>
  @endforeach --}}
  <div class="" style="background:green">
    {{$page->$author[1]}}
  </div>
@endsection
