<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>OurNews.com</title>
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
                    </div>
                    <?php if($this->session->userdata('username')) { ?>
                    <a href="<?= base_url('auth/logout')?>" class="btn btn-light rounded-pill text-primary py-2 px-4 ms-lg-5">LogOut</a>
                    <?php } else { ?>
                    <a href="<?= base_url('auth')?>" class="btn btn-light rounded-pill text-primary py-2 px-4 ms-lg-5">LogIn</a>
                    <?php } ?>
                </div>
            </nav>

            <div class="container-xxl bg-primary hero-header">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn"></h1>
                            <h4 class="text-white pb-3 animated zoomIn"></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


<!-- About Start -->
<div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                        <img class="img-fluid" src="<?= base_url('tema/upload/konten/'.$konten->foto)?>">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="mb-4"><?= $konten->judul ?></h2>
                        <small><?= $konten->tanggal; ?></small>
                        <p></p>
                        <p class="mb-4"><?= nl2br($konten->keterangan) ?></p>
                </div>
            </div>
        </div>
        <!-- Testimonial Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-white border rounded p-4">
                <?php if (!empty($komen)): ?>
                <ul>
                    <?php foreach ($komen as $comment): ?>
                        <li>
                            <strong><?php echo htmlspecialchars($comment['username']); ?>:</strong><em><?= $comment['tgl'];?></em>
                            <p><?php echo nl2br(htmlspecialchars($comment['komen'])); ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php else: ?>
                    <p>Tidak ada komentar.</p>
                <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        
        <!-- About End -->


            <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3">
                    <h5 class="text-white mb-4"><?= $konfigurasi->judul_website; ?></h5>
                    <p><?= $konfigurasi->profil_website; ?></p>
                    <div class="position-relative w-100 mt-3">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <p><i class="bi bi-geo-alt-fill me-3"></i><?= $konfigurasi->alamat; ?></p>
                    <p><i class="bi bi-telephone-fill me-3"></i><?= $konfigurasi->no_wa; ?></p>
                    <div class="position-relative w-100 mt-3">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <p><i class="bi bi-envelope-fill me-3"></i><?= $konfigurasi->email; ?></p>
                    <p><i class="bi bi-instagram me-3"></i><?= $konfigurasi->instagram; ?></p>
                    <div class="position-relative w-100 mt-3">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                <h3>Tambahkan Komentar</h3>
                <form method="post" action="<?php echo base_url('beranda/add_komen'); ?>">
                <input type="hidden" name="id_konten" value="<?= $konten->id_konten?>">
                    <label for="username">Nama Anda:</label>
                    <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" id="username" name="username" required>
                    <br>
                    <label for="comment">Komentar Anda:</label>
                    <textarea class="form-control border-0 rounded-pill w-100 ps-4 pe-5" id="komen" name="komen" required></textarea>
                    <br>
                    <button class="btn btn-light rounded-pill text-primary py-2 px-4 ms-lg-5" type="submit">Kirim Komentar</button>
                </form>
                <div class="position-relative w-100 mt-3">
                </div>
                </div>
            </div>
        </div>
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