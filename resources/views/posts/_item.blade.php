<div class="card mb-3">
    <div class="card-body">
        <h5 class="display-5">{{ $post->title }}</h5>
        <div class="d-flex">
            <a href="#">
                <img class="rounded-circle" width="25" src="{{ $post->author->avatar }}" alt="{{ $post->author->name }}">
                {{ $post->author->name }}
            </a>
            <span class="ms-3">{{ "Posted:" }}</span>
            <span class="ms-3">{{ $post->created_at->diffForHumans() }}</span>

            <span class="ms-3">{{ "Theme:" }}</span>
            <span class="fw-bold ms-3">{{ $post->topic->name }}</span>
        </div>
        <p>{{ $post->description }}</p>
        <div class="text-end">
            <a href="{{ route('post.details', $post)}}">
                {{ __('Read more') }}
            </a>
        </div>
    </div>
</div>