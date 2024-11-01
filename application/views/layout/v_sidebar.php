<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none ">
    <a class="navbar-brand me-lg-5" href="<?= base_url() ?>volt-template/html&css/index.html">
        <img class="navbar-brand-dark" src="<?= base_url() ?>bahan/pngwingsvgg.svg" height="16" width="16" alt="webgispbu Logo"/>
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

  <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
  <div class="sidebar-inner px-4 pt-3">

  <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
      <div class="d-flex align-items-center">
        <div class="avatar-lg me-4">
          <img src="<?= base_url() ?>volt-template/html&css/assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white" alt="Bonnie Green">
        </div>
        <div class="d-block">

          <?php if ($this->session->userdata('username')=="") { ?>
                <span h2 class="h5 mb-3">Guest</span>
              <?php }else{ ?>
                <span h2 class="h5 mb-3"><?= $this->session->userdata('nama_user') ?></span>
              <?php }?>
              </br></br>
              
              <?php if ($this->session->userdata('username')=="") { ?>
                <a href=<?= base_url('login') ?> class="btn btn-secondary btn-sm d-inline-flex align-items-center">
            <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>            
            Login
          </a>
                <?php }else{ ?>
                  <a href="<?= base_url('login/logout') ?>" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
            <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>            
            Logout
          </a>
                  <?php }?>
          
        </div>
      </div>
      <div class="collapse-close d-md-none">
        <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
            <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </a>
      </div>
</div>

    <ul class="nav flex-column pt-3 pt-md-0">
      <!-- LOGO -->
      <li class="nav-item">
        <a href="<?= base_url('home') ?>" class="nav-link d-flex align-items-center">
          <span class="sidebar-icon">
            <img src="<?= base_url() ?>bahan/pngwing.com.png" height="30" width="30" alt="webgispbu Logo">
          </span>
          <span class="mt-1 ms-1 sidebar-text">WebgiSpbu</span>
        </a>
      </li>
      <!-- DASHBOARD -->
      <li class="nav-item">
        <a href=<?=base_url('home') ?> class="nav-link">
          <span class="sidebar-icon">
            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
          </span> 
          <span class="sidebar-text">Dashboard</span>
        </a>
      </li>
      <?php if ($this->session->userdata('username')<>"") { ?>
          <!-- PETA -->
          <li class="nav-item">
            <span
              class="nav-link  collapsed  d-flex justify-content-between align-items-center"
              data-bs-toggle="collapse" data-bs-target="#submenu-components">
              <span>
                <span class="sidebar-icon">
                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z" clip-rule="evenodd"></path></svg>
                </span> 
                <span class="sidebar-text">Peta</span>
              </span>
              <span class="link-arrow">
                <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
              </span>
            </span>
            <div class="multi-level collapse " role="list"
              id="submenu-components" aria-expanded="false">
              <ul class="flex-column nav">
              <li class="nav-item ">
                  <a class="nav-link" href="<?= base_url('malangraya') ?>">
                    <span class="sidebar-text">Malang Raya</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="<?= base_url('kecamatan') ?>">
                    <span class="sidebar-text">Kecamatan</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="<?= base_url('jalan') ?>">
                    <span class="sidebar-text">Jalan</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="<?= base_url('pemukiman') ?>">
                    <span class="sidebar-text">Pemukiman</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="<?= base_url('slope') ?>">
                    <span class="sidebar-text">Kemiringan lereng</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="<?= base_url('lokasi') ?>">
                    <span class="sidebar-text">Kesesuian lokasi</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="<?= base_url('bencana') ?>">
                    <span class="sidebar-text">Rentan bencana</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="<?= base_url('gravity') ?>">
                    <span class="sidebar-text">interaksi spasial</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <!-- INPUT SPBU -->
          <li class="nav-item ">
            <a href="<?= base_url('spbu/input') ?>" class="nav-link">
              <span class="sidebar-icon">
              <svg class="icon icon-xs me-2" fill="currentColor" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path></svg>
              </span>
              <span class="sidebar-text">Input SPBU</span>
            </a>
          </li>
          <!-- DATA -->
          <li class="nav-item">
            <span
              class="nav-link  collapsed  d-flex justify-content-between align-items-center"
              data-bs-toggle="collapse" data-bs-target="#submenu-app">
              <span>
                <span class="sidebar-icon">
                  <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
                </span> 
                <span class="sidebar-text">Data</span>
              </span>
              <span class="link-arrow">
                <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
              </span>
            </span>
            <div class="multi-level collapse "
              role="list" id="submenu-app" aria-expanded="false">
              <ul class="flex-column nav">
                <li class="nav-item ">
                  <a class="nav-link" href="<?= base_url('spbu') ?>">
                    <span class="sidebar-text">Daftar SPBU</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="<?= base_url('penduduk') ?>">
                    <span class="sidebar-text">Daftar penduduk</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="<?= base_url('kendaraan') ?>">
                    <span class="sidebar-text">Daftar kendaraan</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="<?= base_url('kantorkec') ?>">
                    <span class="sidebar-text">Kantor kecamatan</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <!-- DAFTAR USER -->
          <li class="nav-item ">
            <a href="<?= base_url('user') ?>" class="nav-link">
              <span class="sidebar-icon">
                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path><path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path></svg>
              </span>
              <span class="sidebar-text">Daftar User</span>
            </a>
          </li>
          <!-- INPUT USER -->
          <li class="nav-item ">
            <a href="<?= base_url('user/input') ?>" class="nav-link">
              <span class="sidebar-icon">
              <svg class="icon icon-xs me-2" fill="curentColor" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z"></path></svg>
              </span>
              <span class="sidebar-text">Input User</span>
            </a>
          </li>
      <?php } ?>
      
      <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
      <li class="nav-item">
        <a href="https://themesberg.com" target="_blank" class="nav-link d-flex align-items-center">
          <span class="sidebar-icon">
            <img src="<?= base_url() ?>volt-template/html&css/assets/img/themesberg.svg" height="20" width="28" alt="Themesberg Logo">
          </span>
          <span class="sidebar-text">Themesberg</span>
        </a>
      </li>
    </ul>
  </div>
</nav>