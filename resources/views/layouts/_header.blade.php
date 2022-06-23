<div class="container">
    <header class="blog-header lh-1 py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
          <a class="link-secondary" href="#">Sport Blog</a>
        </div>
        <div class="col-4 text-center">
          <a class="blog-header-logo text-dark" href="{{ route('home') }}">{{config('app.name')}}</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
          <a class="link-secondary" href="#" aria-label="Search">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
          </a>

          @auth
            <a class="btn btn-sm btn-success" href="{{ route('post.create') }}">{{ __('Publish') }}</a>
            
            <ul class="navbar-nav ms-2">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                  <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}" width="25">  
                  {{ Auth::user()->name }}          
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><a class="dropdown-item" href="#">Change password</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="{{ route('logout') }}" method= "POST">
                      @csrf
                      <button class="dropdown-item">
                        {{ __('Sign out') }}
                      </button>
                    </form>
                </ul>
              </li>
            </ul>

          @else
            <a class="btn btn-sm btn-success" href="{{ route('register') }}">{{ __('Sign up') }}</a>
            <a class="btn btn-sm btn-outline-secondary ms-2" href="{{ route('login') }}">{{ __('Sign in') }}</a>
          @endauth

        </div>
      </div>
    </header>
  
    <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-between">

        @foreach ($topics as $topic)
        <a class="p-2 link-secondary" href="{{ route('topic.details', $topic) }}">
          {{ $topic->name }}
        </a>
        @endforeach
        


        {{--<a class="p-2 link-secondary" href="#">Football</a>
        <a class="p-2 link-secondary" href="#">Cricket</a>
        <a class="p-2 link-secondary" href="#">Basketball</a>
        <a class="p-2 link-secondary" href="#">Field Hockey</a>
        <a class="p-2 link-secondary" href="#">Tennis</a>
        <a class="p-2 link-secondary" href="#">Volleyball</a>
        <a class="p-2 link-secondary" href="#">Table Tennis</a>
        <a class="p-2 link-secondary" href="#">Baseball</a>
        <a class="p-2 link-secondary" href="#">American Football</a>
        <a class="p-2 link-secondary" href="#">Golf</a> --}}
      </nav>
    </div>
  </div>