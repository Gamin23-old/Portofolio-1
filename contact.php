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
                        <h2>Kontak Kami</h2>
                        <ul>
                            <li><a href="index.phpl">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i></li>
                            <li><a href="contact.php" class="active">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner-banner-img">
                        <img src="../admin/dist/images/book-2.png" alt="Inner Banner">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="contact-area pt-100 pb-70">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-4 col-md-6">
                    <div class="contact-card text-center p-4 shadow-sm ">
                        <i class="bx bxs-map fs-1 text-warning mb-3"></i>
                        <h3 >Address</h3>
                        <span >Jalan Angkasa Abadi jaya no 39b ,IND</span>
                        <span >Sunsent Road , IND</span>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="contact-card text-center p-4 shadow-sm rounded">
                        <i class="bx bx-phone-call fs-1 text-warning mb-3"></i>
                        <h3 >Call Number</h3>
                        <span ><a href="tel:62895368768372">+6289 536 876 8372</a></span>
                        <span ><a href="tel:62895368768372">+6289 586 876 8370</a></span>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="contact-card text-center p-4 shadow-sm rounded">
                        <i class="bx bx-envelope fs-1 text-warning mb-3"></i>
                        <h3 >Contact Info</h3>
                        <span ><a href="#">info@perpusdigital.com</a></span>
                        <span ><a href="#">support@perpusdigital.com</a></span>
                    </div>
                </div>

            </div>
        </div>
    </div>






    <div class="map-area">
        <div class="container-fluid m-0 p-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4125.8240829893875!2d115.22718606828478!3d-8.685625687905247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd241dbe63425fb%3A0xb48dba84d530add9!2sPerpustakaan%20Provinsi%20Bali!5e0!3m2!1sid!2sid!4v1744353979676!5m2!1sid!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <footer class="footer-area-two footer-bg pt-100">
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