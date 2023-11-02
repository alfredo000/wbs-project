<nav class="navbar navbar-expand-lg bg-light">
    <div class="container" style="color: #2C89BE">
      <a class="navbar-brand" style="margin-left:-25px;" href="/">WBS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>   
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav px-5">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/pelapor/aktivitassaya*') ? 'active' : '' }}" href="/pelapor/aktivitassaya">Aktivitas Saya</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="informasiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Informasi
            </a>
            <ul class="dropdown-menu" aria-labelledby="informasiDropdown">
                <li><a class="dropdown-item" href="/pelapor/tentangwbs">Tentang WBS</a></li>
                <li><a class="dropdown-item" href="/pelapor/alurpengaduan">Alur Pengaduan</a></li>
                <li><a class="dropdown-item" href="/pelapor/tatacarapengaduan">Tata Cara Pengaduan</a></li>
            </ul>
        </li>
          <li class="nav-item">
            <a class="nav-link"  href="#">Bantuan</a>
          </li>
        </ul>

          <ul class="navbar-nav ms-auto" style="margin-right:-25px">
            @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/pelapor/dashboard" {{ Request::is('/myprofil') ? 'active' : '' }}><i class="bi bi-layout-text-window-reverse"></i> My Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
                </li>
              </ul>
            </li>
            {{-- <li>
              <div class="d-flex align-items-center">
                <a class="nav-link" {{ ($active === "signin")? 'active' : '' }} href="/register">
                  <button class="btn btn-primary btn-sm px-3" style="border-radius: 10px;">Sign In</button></a>
            </li> --}}
            @else
            <li class="nav-item">
                <a class="nav-link" style="font-weight: bold" {{ Request::is('/login') ? 'active' : '' }} href="/login"><i class="bi bi-box-arrow-in-right"></i>Login</a>
              </div>
            </li>      
            @endauth
          </ul>
      </div>
    </div>
  </nav>