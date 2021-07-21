<header class="sticky-top bg-dark">
    <div class="container">
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('home') }}">
          <img src="{{asset('img/dc-logo.png')}}" alt="Logo" width="30" height="30">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
            <a class="nav-link {{ Route::currentRouteName() == 'comic.index' ? 'active' : '' }}" href="{{ route("comic.index") }}">Comic</a>
            <a class="nav-link {{ Route::currentRouteName() == 'comic.create' ? 'active' : '' }}" href="{{ route("comic.create") }}">New Comic</a>
          </div>
        </div>
      </nav> 
    </div>
</header>