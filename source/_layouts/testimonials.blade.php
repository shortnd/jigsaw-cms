@extends('_layouts.master')
@section('body')
  <blockquote>
    {{ $page->quote}}
  </blockquote>
  {{-- @foreach ($page->author as $author)
    <p> {{$author}} </p>
  @endforeach --}}
  <div class="" style="background:green">
  </div>
  {{-- @json($page) --}}
  {{ $page->author['name'] }}
  <img src="{{ $page->author['avatar']}}" alt="something" />
@endsection
