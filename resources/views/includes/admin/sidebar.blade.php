<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <p class="sidebar-brand brand-logo mt-3">SE-TRAVEL</p>
    <p class="sidebar-brand brand-logo-mini mt-3">S</p>
    {{-- <a class="sidebar-brand brand-logo" href="index.html"><img src="{{url('backend/template/assets/images/logo.svg')}}" alt="logo" /></a>
  <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{url('backend/template/assets/images/logo-mini.svg')}}" alt="logo" /></a> --}}
  </div>
  <ul class="nav">

    <li class="nav-item nav-category">
      <span class="nav-link">Navigation</span>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{route('dashboard')}}">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{route('travel-package.index')}}">
        <span class="menu-icon">
          <i class="mdi mdi-houzz"></i>
        </span>
        <span class="menu-title">Paket Travel</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{route('gallery.index')}}">
        <span class="menu-icon">
          <i class="mdi mdi-playlist-play"></i>
        </span>
        <span class="menu-title">Galeri Travel</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{route('transaction.index')}}">
        <span class="menu-icon">
          <i class="mdi mdi-library-books"></i>
        </span>
        <span class="menu-title">Transaksi</span>
      </a>
    </li>
  </ul>
</nav>