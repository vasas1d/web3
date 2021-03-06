@extends('layouts.main')

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script> {{--hibája, h js-t is letárolhat az adatbázisban.--}}
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endpush

@section('content')
    <div class="row">
        <div class="col-md-6 col-lg-4 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h3 class="display-3">{{ __('Publish') }}</h3>                   
                    {{-- @if ($errors->count())
                    <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error )
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif --}}
                    <form action="{{ route('post.create') }}"method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title">{{ __('Title') }}</label>
                            <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" type="text" name="title" value="{{ old('title') }}">
                            @if ($errors->has('title'))
                            <p class="invalid-feedback">
                                    {{ $errors->first('title') }}
                            </p>                          
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="topic_id">{{ __('Topic') }}</label>
                            <select class="form-control{{ $errors->has('topic_id') ? ' is-invalid' : '' }}" name="topic_id">
                                <option>{{ __('Please choose one') }}</option>
                                @foreach ($topics as $topic)
                                    <option value="{{ $topic->id }}" {{ $topic->id == old('topic_id') ? 'selected' : '' }}>
                                        {{ $topic->name }}
                                    </option>                                   
                                @endforeach
                            </select>  
                            @if ($errors->has('topic_id'))
                            <p class="invalid-feedback">
                                    {{ $errors->first('topic_id') }}
                            </p>                          
                            @endif  
                        </div>
                        <div class="mb-3">
                            <label for="description">{{ __('Description') }}</label>
                            <textarea  class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description">{{ old('description') }}</textarea>
                            @if ($errors->has('description'))
                            <p class="invalid-feedback">
                                    {{ $errors->first('description') }}
                            </p>                          
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="content">{{ __('Content') }}</label>
                            <textarea id="editor" name="content">{{ old('content') }}</textarea>
                            @if ($errors->has('content'))
                            <p class="d-block invalid-feedback">
                                    {{ $errors->first('content') }}
                            </p>                          
                            @endif
                        </div>
                        <div class="d-grid"> 
                            <button type="submit" class="btn btn-primary btn-lg">
                                {{ __('Publish') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>    
        </div>
    </div>

@endsection  