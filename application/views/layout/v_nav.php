<div class="container-fluid">
<main class="content">

<nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
  <div class="container-fluid px-0">
    <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
      <div class="d-flex align-items-center">
      </div>
      <!-- PROFILE -->
      <ul class="navbar-nav align-items-center">
        <li class="nav-item dropdown ms-lg-3">
          <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="media d-flex align-items-center">
              <img class="avatar rounded-circle" alt="Image placeholder" src="<?= base_url() ?>volt-template/html&css/assets/img/team/profile-picture-3.jpg">
              <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
              <?php if ($this->session->userdata('username')=="") { ?>
                <span class="mb-0 font-small fw-bold text-gray-900">Guest</span>
              <?php }else{ ?>
                <span class="mb-0 font-small fw-bold text-gray-900"><?= $this->session->userdata('nama_user') ?></span>
              <?php }?>
              </div>
            </div>
          </a>
          <?php if ($this->session->userdata('username')=="") { ?>
            <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
            <a class="dropdown-item d-flex align-items-center" href="<?= base_url('login') ?>">
              <svg class="dropdown-icon text-success me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>                
              Login
            </a>
          </div>
          <?php }else{ ?>
            <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
            <a class="dropdown-item d-flex align-items-center" href="<?= base_url('login/logout') ?>">
              <svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>                
              Logout
            </a>
          </div>
            <?php }?>
          
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="py-4">
  <div class="">
    <h1><?= $title ?></h1> 
  </div>
</div>

