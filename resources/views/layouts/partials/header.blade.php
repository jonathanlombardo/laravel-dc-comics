<header>

  <div class="aside-wrapper">
    <div class="aside container">
      <span>DC POWER™ VISA®</span>
      <select>
        <option class="d-none" selected>ADDITIONAL DC SITES</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
  </div>
  
  
  <div class="container">
        <div class="content-bar">

            <figure>
                <a href="{{route("home")}}">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo">
                </a>
            </figure>
            <nav>

                <ul class="gap-3">
                    <li @if (Route::currentRouteName() == 'characters') class="active" @endif>
                    <a class="link" href="{{route("characters")}}">characters</a>
                    </li>
                    <li @if (Route::currentRouteName() == 'comics.index') class="active" @endif>
                    <a class="link" href="{{route("comics.index")}}">comics</a>
                    </li>
                    <li @if (Route::currentRouteName() == 'movies') class="active" @endif>
                    <a class="link" href="{{route("movies")}}">movies</a>
                    </li>
                    <li @if (Route::currentRouteName() == 'games') class="active" @endif>
                    <a class="link" href="{{route("games")}}">games</a>
                    </li>
                    <li @if (Route::currentRouteName() == 'collectibles') class="active" @endif>
                    <a class="link" href="{{route("collectibles")}}">collectibles</a>
                    </li>
                    <li @if (Route::currentRouteName() == 'videos') class="active" @endif>
                    <a class="link" href="{{route("videos")}}">videos</a>
                    </li>
                    <li @if (Route::currentRouteName() == 'fans') class="active" @endif>
                    <a class="link" href="{{route("fans")}}">fans</a>
                    </li>
                    <li @if (Route::currentRouteName() == 'news') class="active" @endif>
                    <a class="link" href="{{route("news")}}">news</a>
                    </li>
                    <li @if (Route::currentRouteName() == 'shop') class="active" @endif>
                    <a class="link" href="{{route("shop")}}">shop</a>
                    </li>
                </ul>
            </nav>
            <div class="input-group header-search">
              <input type="text" class="form-control" placeholder="Search">
              <span class="input-group-text" id="basic-addon2">
                <img src="{{Vite::asset('resources/img/magnifying-glass-solid.svg')}}" alt="">
              </span>
            </div>
        </div>
    </div>
</header>
