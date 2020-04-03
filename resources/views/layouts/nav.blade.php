<section id="navbar">
  <nav class="navbar navbar-expand-lg navbar-light container">
    <a class="navbar-brand" id="logo" href="/">Travel Tourism</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">  <!--ml-auto is for align the nav items right-->
      @guest
        <li class="nav-item">
          <a class="nav-link" href="/">Home</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contactus">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/weekend">Weekend Plans</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
        @endif
        @else
        <li class="nav-item">
          <a class="nav-link" href="/">Home</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contactus">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/weekend">Weekend Plans</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                  Logout
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
        </li>
        @endguest
      </ul>
    </div>
  </nav>
</section>