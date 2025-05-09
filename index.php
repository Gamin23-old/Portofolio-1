<?php
include "../koneksi.php";
?>
<!DOCTYPE php>
<php lang="zxx">

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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="icon" type="image/png" href="admin/dist/images/2.1.png">
        <title>Oxu - Libary Nations</title>
    </head>

    <body>
        <div class="preloader">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>

        <header class="top-header-area">
            <div class="container ">
                <div class="top-header header-border">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-3 col-md-4">
                            <div class="top-header-left">

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4">
                            <div class="top-header-logo">
                                <a href="index.php"><img src="../admin/dist/images/dark.png" class="top-logo1" alt="Images"></a>
                                <a href="index.php"><img src="../admin/dist/images/light.png" class="top-logo2" alt="Images"></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="top-header-right">
                                <div class="other-option">
                                    <div class="option-item option-item-color">
                                        <a href="contact.php" class="cart-btn" style="margin-right: 10px;"><i class="fas fa-phone">
                                                <h6>contact</h6>
                                            </i></a>
                                        <a href="cart.php" class="cart-btn" style="margin-left: 10px;"><i class="fas fa-shopping-cart">
                                                <h6>Cartt</h6>
                                            </i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


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


        <div class="banner-slider-area">
            <div class="banner-slider owl-carousel owl-theme">
                <div class="container">
                    <div class="banner-item">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-6">
                                <div class="banner-item-content">
                                    <h1>Libary <br> Nations</h1>
                                    <p>
                                        Libary Nations is a digital library that provides access to a wide range of books, articles, and
                                        other resources. Our mission is to make knowledge accessible to everyone, regardless of their location or
                                        financial situation.
                                    </p>
                                    <a href="shop-details.php" class="default-btn btn-bg-two">View Moore Books</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="banner-item-img">
                                    <img src="../admin/dist/images/bokk-1.png" alt="Images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="banner-item">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-6">
                                <div class="banner-item-content">
                                    <h1>Libary <br> Nations</h1>
                                    <p>
                                        Libary Nations is a digital library that provides access to a wide range of books, articles, and
                                        other resources. Our mission is to make knowledge accessible to everyone, regardless of their location or
                                        financial situation.
                                    </p>
                                    <a href="shop-details.php" class="default-btn btn-bg-two">View Moore Books</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="banner-item-img">
                                    <img src="../admin/dist/images/book-2.png" alt="Images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="banner-item">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-6">
                                <div class="banner-item-content">
                                    <h1>Libary <br> Nations</h1>
                                    <p>
                                        Libary Nations is a digital library that provides access to a wide range of books, articles, and
                                        other resources. Our mission is to make knowledge accessible to everyone, regardless of their location or
                                        financial situation.
                                    </p>
                                    <a href="shop-details.php" class="default-btn btn-bg-two">View Moore Books</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="banner-item-img">
                                    <img src="../admin/dist/images/book-3.png" alt="Images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="featured-product-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5 col-md-5">
                        <div class="section-title">
                            <h2>Our Books of Informations</h2>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <ul class="filter-menu">
                            <li class="filter active" data-filter="all">All</li>
                            <li class="filter" data-filter=".new">New</li>
                            <li class="filter" data-filter=".top">Top</li>
                            <li class="filter" data-filter=".rising">Rising</li>
                        </ul>
                    </div>
                </div>
                <div id="Container">
                    <div class="row justify-content-center">

                        <?php
                        $new = [1, 2, 6];
                        $rising = [1, 3, 4, 9];
                        $top = [1, 2, 3, 4, 6, 7, 8, 9];

                        $queryAll = "SELECT * FROM nama_buku";
                        $sqlAll = mysqli_query($koneksi, $queryAll);
                        while ($rowAll = mysqli_fetch_array($sqlAll)):
                            $valNew = '';
                            $valRising = '';
                            $valTop = '';
                            foreach ($new as $n) {
                                if ($rowAll['id_buku'] == $n) {
                                    $valNew = 'new';
                                }
                            }

                            foreach ($rising as $r) {
                                if ($rowAll['id_buku'] == $r) {
                                    $valRising = 'rising';
                                }
                            }

                            foreach ($top as $t) {
                                if ($rowAll['id_buku'] == $t) {
                                    $valTop = 'top';
                                }
                            }
                        ?>

                            <div class="col-lg-3 col-sm-6 mix <?= $valNew; ?> <?= $valRising; ?> <?= $valTop; ?> ">
                                <div class="featured-product">
                                    <div class="featured-img">
                                        <a href="#">
                                            <img src="../admin/dist/images/<?= $rowAll['gambar'] ?>" alt="Product Images">
                                        </a>
                                        <div class="featured-new-tag">
                                            <h6>New</h6>
                                        </div>
                                        <ul class="products-action">
                                            <li>
                                                <a href="shop-grid.php"><i class="bx bx-show-alt"></i></i></a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="content">
                                        <h6 style="width: 80%;"><a href="shop-details.php"><?= $rowAll['nama'] ?></a></h6>
                                        <div class="rating">
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                            <div class="price-tag">
                                                <h4><?= $rowAll['jumlah'] ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>


                    </div>
                </div>
            </div>
        </section>


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



        <footer class="footer-area-two pt-100 footer-bg">
            <?php
            include 'footer.php';
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

</php>