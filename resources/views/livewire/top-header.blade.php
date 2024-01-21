<div>

    <!-- Navbar -->
<header class="navbar navbar-expand-md d-print-none sticky-top" >
    <div class="container-xl">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
        <a href=".">
            <img src="{{ asset('./Backend/dist/Logo/logo2.svg') }}" alt="Logo" class="navbar-brand-image">
        </a>
      </h1>
      <div class="navbar-nav flex-row order-md-last">
        <div class="nav-item dropdown">
          <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
            <span class="avatar avatar-sm" style="background-image: url({{ $author->picture }})"></span>
            <div class="d-none d-xl-block ps-2">
              <div>{{ $author->name }}</div>
              <div class="mt-1 small text-muted">{{ $author->username }}</div>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <a href="{{ route('authorprofile') }}" class="dropdown-item">Profile</a>

            @if(auth()->user()->type == 1)
                <a href="{{ route('authorsettings') }}" class="dropdown-item">Settings</a>

            @endif

            @if (auth()->user()->type == 1)
                <a href="{{ route('authorauthors') }}" class="dropdown-item">Authors</a>
            @endif

            <div class="dropdown-divider"></div>

            <a href="{{ route('authorlogin') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>

            <form action="{{ route('authorlogout') }}" id="logout-form" method="post">@csrf</form>
        </div>

        </div>
      </div>
      <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('authorhome') }}" >
                <span class="nav-link-title">
                  Beranda
                </span>
              </a>
            </li>
            <li class="nav-item  dropdown">
                <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                  <span class="nav-link-title">
                    Kategori
                  </span>
                </a>
                <div class="dropdown-menu">
                  <div class="dropdown-menu-columns">
                    <div class="dropdown-menu-column">
                      <a class="dropdown-item" href="{{ route('authortechnology') }}">
                        Teknologi
                      </a>
                      <a class="dropdown-item" href="{{ route('authorbusiness') }}">
                          Bisnis
                        </a>
                        <a class="dropdown-item" href="{{ route('authorlifestyle') }}">
                            Gaya Hidup
                          </a>
                    </div>
                  </div>
                </div>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('authorpostsall_posts') }}" >
                  <span class="nav-link-title">
                    Blog Saya
                  </span>
                </a>
              </li>
              {{-- @if (auth()->user()->type == 1)
              <li class="nav-item">
                <a class="nav-link" href="{{ route('authorauthors') }}" >
                  <span class="nav-link-title">
                    Authors
                  </span>
                </a>
              </li>
              @endif --}}

              <li class="nav-item">
                <a class="nav-link" href="{{ route('authorpostsadd-posts') }}" >
                  <span class="nav-link-title">
                    Tulis
                  </span>
                  <span class="nav-link-icon d-md-none d-lg-inline-block ms-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                      </svg>
                  </span>
                </a>
              </li>
            {{-- @if (auth()->user()->type == 1)
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                  <span class="nav-link-title">
                      Settings
                  </span>
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ route('authorsettings') }}" >
                    General Setting
                  </a>
                </div>
              </li>
            @endif --}}

          </ul>
        </div>
      </div>
    </div>
  </header>



</div>
