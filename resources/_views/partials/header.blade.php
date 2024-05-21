<header>
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'characters.index' ? 'active' : '' }}"
              href="{{ route('characters.index') }}" aria-current="page">Characters
              <span class="visually-hidden">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}"
              href="{{ route('home') }}">Items</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

</header>