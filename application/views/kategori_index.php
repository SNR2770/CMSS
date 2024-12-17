<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BizConsult - Consulting HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo base_url('');?>theme/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url('');?>theme/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url('');?>theme/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url('');?>theme/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url('');?>theme/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
       

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.html" class="navbar-brand p-0">
                    <h1 class="m-0"><?= $konfigurasi->judul_website; ?></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="<?= base_url() ?>" class="nav-item nav-link">Home</a>
                        <?php foreach ($kategori as $kate){?>
                        <a href="<?= base_url('welcome/kategori/'.$kate['id_kategori']) ?>" class="nav-item nav-link"><?= $kate['nama_kategori']?></a>
                        <?php } ?>
                    </div>
                    <div class="navbar-nav ms-auto py-0 mt-3">
                    <form action="<?= base_url('welcome/search') ?>" method="get" class="mb-4">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Cari konten..." value="<?= isset($search_query) ? $search_query : ''; ?>">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </div>
                    </form>
                </div>
                    <a href="<?= base_url('auth')?>" class="btn btn-light rounded-pill text-primary py-2 px-4 ms-lg-5">LogIn</a>
                </div>
            </nav>

            <div class="container-xxl bg-primary hero-header">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">Welcome To OurNews.com</h1>
                            <h4 class="text-white pb-3 animated zoomIn">Kami menyajikan berita terbaru dan menarik.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


<!-- Testimonial Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h2 class="mb-5">Latest News</h2>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <?php foreach ($konten as $aa) { ?>
            <div class="testimonial-item rounded p-4">
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="<?= base_url('tema/upload/konten/'.$aa['foto'])?>">
                    <div class="ps-3">
                        <h6 class="mb-1"><?= $aa['judul'] ?></h6>
                        <?php if (!empty($aa['keterangan'])): ?>
                    <p>
                        <?= htmlspecialchars(mb_substr($aa['keterangan'], 0, 100), ENT_QUOTES, 'UTF-8'); ?>
                        <?php if (mb_strlen($aa['keterangan']) > 100): ?>
                            ... <a href="<?= base_url('welcome/artikel/'.htmlspecialchars($aa['slug'], ENT_QUOTES, 'UTF-8')) ?>">Baca Selengkapnya</a>
                        <?php endif; ?>
                    </p>
                <?php else: ?>
                    <p>Keterangan tidak tersedia.</p>
                <?php endif; ?>
                        <small><?= $aa['nama_kategori'] ?></small>
                    </div>
                </div>
                
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Testimonial End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">OurNews.com</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('');?>theme/lib/wow/wow.min.js"></script>
    <script src="<?php echo base_url('');?>theme/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url('');?>theme/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url('');?>theme/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url('');?>theme/js/main.js"></script>
</body>

</html>