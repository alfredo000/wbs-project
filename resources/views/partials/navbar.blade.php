<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand" href="/">WBS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>   
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav px-5">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "home")? 'active' : '' }}" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "aktivitassaya")? 'active' : '' }}" href="/aktivitassaya">Aktivitas Saya</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="informasiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Informasi
            </a>
            <ul class="dropdown-menu" aria-labelledby="informasiDropdown">
                <li><a class="dropdown-item" href="tentangwbs">Tentang WBS</a></li>
                <li><a class="dropdown-item" href="alurpengaduan">Alur Pengaduan</a></li>
                <li><a class="dropdown-item" href="tatacarapengaduan">Tata Cara Pengaduan</a></li>
            </ul>
        </li>
          <li class="nav-item">
            <a class="nav-link" {{ ($active === "categories")? 'active' : '' }} href="/categories">Bantuan</a>
          </li>
        </ul>
          <ul class="navbar-nav ms-auto">
            <li>
              <div class="d-flex align-items-center">
                <a class="nav-link" {{ ($active === "signin")? 'active' : '' }} href="/categories">
                  <button class="btn btn-primary btn-sm px-3" style="border-radius: 10px;">Sign In</button></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="font-weight: bold" {{ ($active === "login")? 'active' : '' }} href="/categories">Login</a>
              </div>
            </li>
          </ul>
      </div>
    </div>
  </nav>