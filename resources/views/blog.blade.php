@extends('layout/main')
@section('container')
   @foreach ($data as $item)
   <article class="mb-5">
       <h2>
           <a href="/blog/{{ $item->id }}">{{ $item->title }}</a>
        </h2>
       <h5>{{ $item->author }}</h5>
       <p>{{ $item->body }}</p>
   </article>
   @endforeach
@endsection
   