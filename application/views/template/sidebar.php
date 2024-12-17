 <!-- Navbar Start -->
 <div class="container-fluid nav-bar bg-transparent">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
        <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
            <div class="icon p-2 me-2">
                <img class="img-fluid" src="<?php echo base_url('');?>tema/img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
            </div>
                <h1 class="m-0 text-primary">OurNews</h1>
        </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto">
    <?php $menu = $this->uri->segment(3); ?>
    
    <li class="nav-item <?php if($menu == 'home') { echo 'active'; } ?>">
        <a href="<?= site_url('home') ?>" class="nav-link">Home</a>
    </li>
    
    <li class="nav-item <?php if($menu == 'user') { echo 'active'; } ?>">
        <a href="<?= site_url('user') ?>" class="nav-link">User </a>
    </li>
    
    <li class="nav-item <?php if($menu == 'kategori') { echo 'active'; } ?>">
        <a href="<?= site_url('kategori') ?>" class="nav-link">Kategori</a>
    </li>
    
    <li class="nav-item <?php if($menu == 'konten') { echo 'active'; } ?>">
        <a href="<?= site_url('konten') ?>" class="nav-link">Konten</a>
    </li>
    
    <li class="nav-item <?php if($menu == 'konfigurasi') { echo 'active'; } ?>">
        <a href="<?= site_url('konfigurasi') ?>" class="nav-link">Konfigurasi</a>
    </li>
    
    <li class="nav-item <?php if($menu == 'caraousel') { echo 'active'; } ?>">
        <a href="<?= site_url('caraousel') ?>" class="nav-link">Caraousel</a>
    </li>
    <li>
    <a href="<?= site_url('auth/logout') ?>" class="btn btn-light rounded-pill text-primary py-2 px-4 mt-lg-3">LogOut</a> 
    </li>
</div>
        </div>
    </nav>
</div>

        <!-- Navbar End -->