@extends('layouts.main')

@section('content')
<div>
    <h1 class="display-1">
        {{ $post->title }}
    </h1>

    <div class="d-flex">

        <span class="ms-3">{{ "Published by: " }}</span>
        <a href="#">
            <img class="rounded-circle" width="25" src="{{ $post->author->avatar }}" alt="{{ $post->author->name }}">
            {{ $post->author->name }}
        </a>
        <span class="ms-3">{{ "Posted:" }}</span>
        <span class="ms-3">{{ $post->created_at->diffForHumans() }}</span>

        <span class="ms-3">{{ "Theme:" }}</span>
        <span class="fw-bold ms-3">{{ $post->topic->name }}</span>
    </div>
        <div class="fw-bold my-5">
            {{ $post->description }}
        </div>
        <div class="">
            {!! $post->content !!} {{-- Editorhoz kell a dupla !-es utasítás--}}
        </div>

</div>
@endsection