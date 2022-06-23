@extends('layouts.main')

@section('content')
    <h1 class="text-center mb-3">{{ $topic->name }} </h1>
    <p>{{ $topic->description }}</p>
    @foreach ($posts as $post)
      @include('posts._item')  
    @endforeach
    
@endsection