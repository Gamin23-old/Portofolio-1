<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: log-in.php");
    exit;
}

include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/animate.min.css">

    <link rel="stylesheet" href="assets/fonts/flaticon.css">

    <link rel="stylesheet" href="assets/css/boxicons.min.css">

    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="assets/css/nice-select.min.css">

    <link rel="stylesheet" href="assets/css/meanmenu.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/responsive.css">

    <link rel="stylesheet" href="assets/css/theme-dark.css">

    <link rel="stylesheet" href="assets/css/sty.css">

    <link rel="icon" type="image/png" href="../admin/dist/images/2.1.png">
    <title>Oxu - Libary Nations</title>
</head>

<body>
    <div class="preloader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>

    <div class="navbar-area">

        <div class="mobile-nav">
            <a href="index.php" class="logo">
                <img src="../admin/dist/images/light.png" alt="Logo">
            </a>
        </div>

        <?php
        include "navbar.php";
        ?>
        <div class="side-nav-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="circle-inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="side-nav-inner">
                        <div class="side-nav justify-content-center align-items-center">
                            <div class="side-item">
                                <div class="nav-other-item">
                                    <div class="cart-btn-area">
                                        <a href="cart.php" class="cart-btn"><i class="bx bx-cart"></i></a>
                                    </div>
                                </div>
                                <div class="nav-other-item">
                                    <div class="option-btn">
                                        <a href="my-account.php" class="default-btn">Akun Saya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="inner-banner-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="inner-banner-content">
                        <h2>About Us</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i></li>
                            <li><a href="about.html" class="active">About Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner-banner-img">
                        <img src="../admin/dist/images/book-3.png" alt="Inner Banner">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="about-area pt-100 pb-70 ">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="assets/images/about-library.png" alt="Tentang Perpustakaan" class="" style="border-radius: 10px;">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content elegant-box">
                        <div class="section-title">
                            <h2 class="fw-bold text-uppercase">Tentang Perpustakaan Kami 📚</h2>
                            <p>
                                Perpustakaan Digital SMK Pariwisata Triatma Jaya Badung hadir sebagai wadah pembelajaran modern yang memudahkan siswa dalam mengakses berbagai koleksi buku. Dengan sistem peminjaman online, kami mendukung semangat literasi dan kemudahan belajar di era digital.
                            </p>
                            <p>
                                Dilengkapi fitur pencarian buku, katalog koleksi, peminjaman otomatis, hingga pengingat pengembalian. Semua layanan kami rancang demi kenyamanan dan efektivitas siswa dan guru.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="choose-area-three pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Kenapa Memilih Perpustakaan Kami?</h2>
            </div>
            <div class="row pt-45">
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-card-three text-center">
                        <i class="fas fa-book-open fs-1 mb-3 text-warning"></i>
                        <h3>Koleksi Buku Lengkap</h3>
                        <p>Ribuan koleksi buku cetak dan digital dari berbagai kategori: fiksi, non-fiksi, pelajaran, referensi, dan lainnya.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-card-three text-center">
                        <i class="fas fa-laptop-code fs-1 mb-3 text-warning"></i>
                        <h3>Sistem Digital</h3>
                        <p>Proses peminjaman buku kini lebih cepat dan efisien dengan sistem digital berbasis web yang mudah digunakan.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-card-three text-center">
                        <i class="fas fa-headset fs-1 mb-3 text-warning"></i>
                        <h3>Layanan Ramah</h3>
                        <p>Didukung oleh tim pustakawan profesional yang siap membantu siswa dalam mencari dan memilih bahan bacaan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="team-area ptb-100 ">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2>Tim Pengelola Perpustakaan</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="team-item text-center shadow p-3 rounded">
                        <img src="assets/images/team/guru cewek 1.png" class="img-fluid rounded-circle mb-3" alt="Pustakawan">
                        <h5 class="fw-bold">Ibu Ni Made Sri</h5>
                        <span>Pustakawan Utama</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="team-item text-center shadow p-3 rounded">
                        <img src="assets/images/team/guru cowow 1.png" class="img-fluid rounded-circle mb-3" alt="Pustakawan">
                        <h5 class="fw-bold">Bapak I Gede Arta</h5>
                        <span>Koordinator Sistem Digital</span>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="brand-area pb-100">
        <div class="container">
            <div class="brand-slider owl-carousel owl-theme">
                <div class="brand-item">
                    <img src="assets/images/x-team.svg" alt="Images">
                </div>
                <div class="brand-item">
                    <img src="assets/images/OZU.svg" alt="Images">
                </div>
                <div class="brand-item">
                    <img src="assets/images/RED-LOgo.svg" alt="Images">
                </div>
                <div class="brand-item">
                    <img src="assets/images/red-logo-clinic.svg" alt="Images">
                </div>
                <div class="brand-item">
                    <img src="../admin/dist/images/2.1.png" alt="Images">
                </div>
            </div>
        </div>
    </div>


    <!-- <div class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Our Blog</h2>
            </div>
            <div class="row pt-45">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card blog-card-bg2">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/images/blog/blog-img4.jpg" alt="Blog Images">
                            </a>
                            <div class="blog-date">27 Oct</div>
                        </div>
                        <div class="content">
                            <h3><a href="blog-details.html">Get 25% Discount on All of The Grocery Product</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fringilla </p>
                            <a href="blog-details.html" class="read-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card blog-card-bg2">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/images/blog/blog-img5.jpg" alt="Blog Images">
                            </a>
                            <div class="blog-date">29 Oct</div>
                        </div>
                        <div class="content">
                            <h3><a href="blog-details.html">Grocery Items Can Buy in a Suitable Price Range</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fringilla </p>
                            <a href="blog-details.html" class="read-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  ">
                    <div class="blog-card blog-card-bg2">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/images/blog/blog-img6.jpg" alt="Blog Images">
                            </a>
                            <div class="blog-date">25 Oct</div>
                        </div>
                        <div class="content">
                            <h3><a href="blog-details.html">Let's Meet Up With Our a New Brand Stores</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fringilla </p>
                            <a href="blog-details.html" class="read-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <footer class="footer-area-two pt-100 footer-bg">
        <?php
        include "footer.php";
        ?>
    </footer>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/jquery.nice-select.min.js"></script>

    <script src="assets/js/wow.min.js"></script>

    <script src="assets/js/meanmenu.js"></script>

    <script src="assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="assets/js/form-validator.min.js"></script>

    <script src="assets/js/contact-form-script.js"></script>

    <script src="assets/js/mixitup.min.js"></script>

    <script src="assets/js/custom.js"></script>
</body>

</html>