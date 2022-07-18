<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/pengajar*') ? 'active' : '' }}" href="/dashboard/pengajar">
            <span data-feather="user"></span>
           Pengajar
          </a>
        </li> 
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/mapel*') ? 'active' : '' }}" href="/dashboard/mapel">
            <span data-feather="book-open"></span>
           Mata Pelajaran
          </a>
        </li> 
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/gallery*') ? 'active' : '' }}" href="/dashboard/gallery">
            <span data-feather="image"></span>
           Gallery Post
          </a>
        </li> 
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/pendaftar*') ? 'active' : '' }}" href="/dashboard/pendaftar">
            <span data-feather="file"></span>
           Daftar Pendaftar
          </a>
        </li> 
      </ul>

    </div>
  </nav>