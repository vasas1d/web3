@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-md-8 col-lg-6 mx-auto">
        <div class="card">
            <div class="card-body">
                <h3 class="display-3">
                    {{ __('Sign up') }}
                </h3>
                <form action="{{ route('register') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="name">{{ __('Name') }}</label>
                        <input type="text" class="form-control{{ $errors->has('name') ?   : '' }}" name="name" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <p class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </p>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="email">{{ __('E-mail address') }}</label>
                        <input type="email" class="form-control{{ $errors->has('email') ?   : '' }}" name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <p class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </p>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="password">{{ __('Password') }}</label>
                        <input type="password" class="form-control{{ $errors->has('password') ?   : '' }}" name="password" value="{{ old('password') }}">
                        @if ($errors->has('password'))
                            <p class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </p>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation">{{ __('Password confirmation') }}</label>
                        <input type="password" class="form-control{{ $errors->has('password_confirmation') ?   : '' }}" name="password_confirmation" value="{{ old('password_confirmation') }}">
                        @if ($errors->has('password_confirmation'))
                            <p class="invalid-feedback">
                                {{ $errors->first('password_confirmation') }}
                            </p>
                        @endif
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg">
                            {{ __('Sign up') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

