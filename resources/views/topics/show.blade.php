@extends('layouts.main')

@section('content')
    <h1 class="text-center mb-3">{{ $topic->name }} </h1>
    <p>{{ $topic->description }}</p>
    @forelse ($posts as $post)
      @include('posts._item')  
    @empty  
        <div class="alert alert-warning">
            {{ 'No posts here' }}
        </div>
    @endforelse
    
@endsection