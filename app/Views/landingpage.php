<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Selamat Datang Di Website Kami</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url(); ?>/landingpage/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url(); ?>/landingpage/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/landingpage/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url(); ?>/landingpage/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url(); ?>/landingpage/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0" id="home">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0">TIKET KAPAL FERRY</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="#home" class="nav-item nav-link active">Beranda</a>
                        <?php if (session()->get('log_in') == true) { ?>
                            <a href="<?= base_url() ?>/Home" class="nav-item nav-link">Dashboard</a>
                        <?php } ?>
                        <?php if (session()->get('log_in') == true) { ?>
                            <a href="<?= base_url() ?>/pesantiket" class="nav-item nav-link">Pesan Tiket</a>
                        <?php } else { ?>
                            <a href="<?= base_url() ?>/Login" onclick="return confirm('Anda belum login, silahkan login terlebih dahulu')" class="nav-item nav-link">Pesan Tiket</a>
                        <?php } ?>
                        
                        <a href="#contact" target="_blank" class="nav-item nav-link">Kontak</a>
                        <a href="https://www.instagram.com/" target="_blank" class="nav-item nav-link">Intagram</a>
                        <a href="https://www.facebook.com/" target="_blank" class="nav-item nav-link">Facebook</a>
                        <a href="" class="nav-item nav-link">Whatsapp</a>
                        
                    </div>
                    <?php

                    use CodeIgniter\Database\Query;

                    if (session()->get('log_in') == true) { ?>
                        <a href="<?= base_url(); ?>/Login/logout" class="btn btn-light rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Keluar</a>
                    <?php } else { ?>
                        <a href="<?= base_url(); ?>/Login" class="btn btn-light rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Masuk</a>
                    <?php } ?>
                </div>
            </nav>

            <div class="container-xxl bg-primary hero-header">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <?php if (session()->get('log_in') == true) { ?>
                                <h4 class="text-white mb-4 animated slideInDown">Selamat datang <?= session()->get('nama'); ?></h4>
                            <?php } ?>
                            <h1 class="text-white mb-4 animated slideInDown">Selamat datang di website kami</h1>
                            <p class="text-white pb-3 animated slideInDown">Silahkan melakukan pemesanan tiket anda melalui tombol dibawah ini.</p>
                            
                            <?php if (session()->get('log_in') == true) { ?>
                                <a href="<?= base_url() ?>/pesantiket" class="btn btn-light rounded-pill btn-lg">Pesan Tiket</a>
                            <?php } else { ?>
                                <a href="<?= base_url() ?>/login" onclick="return confirm('Anda belum login, silahkan login terlebih dahulu')" class="btn btn-light rounded-pill btn-lg">Pesan Tiket</a>
                            <?php } ?>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid rounded animated zoomIn" src="<?= base_url(); ?>/img/awal.png" alt="kapal" width="80%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Testimonial Start -->
        <div class="container-xxl py-6" id="testimonial">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Data Data Kapal</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">

                    <?php
                    $db = \Config\Database::connect();
                    $query = $db->query("SELECT * FROM kapal")->getResult();
                    foreach ($query as $kpl) {
                        ?>
                        <div class="testimonial-item rounded my-4">
                            <div class="advanced-feature-item text-center rounded py-2 px-2">
                                <img src="<?= base_url(); ?>/img/<?= $kpl->gambar; ?>" alt="kapal" width="100%">
                                <h5 class="mb-3 mt-3"><?= $kpl->nm_kapal; ?></h5>
                                <p class="m-0"><?= $kpl->deskripsi; ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        
        <!-- Contact Start -->
        <div class="container-xxl py-6" id="contact">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Hubungi Kami</h1>
                </div>
                <div class="row g-5">

                    <!-- Telpon -->
                    <div class="col-md-4">
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Whatsapp</p>
                                <a href="" target="_blank" class="button">Whatsapp Sekarang<i class=''></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="col-md-4">
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Email</p>
                                <h5 class="mb-0">info@gmail.com</h5>
                            </div>
                        </div>
                    </div>

                    <!-- Alamat -->
                    <div class="col-md-4">
                        <div class="d-flex mb-0">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Alamat</p>
                                <h5 class="mb-0">Jln. Jederal Sudirman</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="container-fluid text-light py-3">
            <div class="container">
                <div class="row">
                    <center><a href="" target="_blank" class="no-underline">Copyright &copy; 2024 Tiket Kapal</a></center>
                </div>
            </div>
        </footer>



        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/landingpage/lib/wow/wow.min.js"></script>
    <script src="<?= base_url(); ?>/landingpage/lib/easing/easing.min.js"></script>
    <script src="<?= base_url(); ?>/landingpage/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url(); ?>/landingpage/lib/counterup/counterup.min.js"></script>
    <script src="<?= base_url(); ?>/landingpage/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url(); ?>/landingpage/js/main.js"></script>
</body>

</html>