<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid ms-4">
      <a class="navbar-brand" href="{{ route('homehome') }}">
        <img src="{{ asset('./Backend/dist/Logo/logo2.svg') }}" alt="Logo" width="100px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('homehome') }}">Beranda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Kategori
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('authortechnology') }}">Teknologi</a></li>
              <li><a class="dropdown-item" href="{{ route('authorbusiness') }}">Bisnis</a></li>
              <li><a class="dropdown-item" href="{{ route('authorlifestyle') }}">Gaya Hidup</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('hometentang-kami') }}">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('homesyaratPrivasi') }}">Syarat Ketentuan & Privasi</a>
          </li>
        </ul>
        <div class="d-flex mx-5">
         <a href="{{ route('authorlogin') }}" class="btn" style="background:#922B21; color:white; ">Masuk</a>
        </div>
      </div>
    </div>
  </nav>
