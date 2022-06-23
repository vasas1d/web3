@extends('layouts.main')

@section('content')
    <h1 class="text-center mb-3">{{ $topic->name }} </h1>
    <p>{{ $topic->description }}</p>
    <div class="row"></div>
    <div class="col-md-8 col-lg-6 mx-auto">
        @forelse ($posts as $post)
            @include('posts._item')  
        @empty  
            <div class="alert alert-warning">
                {{ 'No posts here' }}
            </div>
        @endforelse
    </div>
    </div>
@endsection