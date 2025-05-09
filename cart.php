<?php
include "session.php"; // Harus sudah ada session_start dan validasi login
include "../koneksi.php";

// Ambil data dari session
$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
$id_user  = isset($_SESSION['id_user']) ? $_SESSION['id_user'] : '';

// Jika id_user kosong (misalnya session expired), redirect
if (empty($id_user)) {
    header("Location: log-in.php");
    exit;
}
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

            <div class="main-nav nav-three">
                <?php
                include "navbar.php";
                ?>
            </div>
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
                            <h2>Keranjang Buku </h2>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><i class="bx bx-chevron-right"></i></li>
                                <li><a href="cart.php" class="active">Keranjang</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="inner-banner-img">
                            <img src="assets/images/bukutrs4.png" alt="Inner Banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="cart-wraps-area ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <form>
                            <div class="cart-wraps">
                                <div class="cart-table table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $query = "SELECT cart.id_cart, nama_buku.nama, nama_buku.gambar, nama_buku.id_buku
                                             FROM cart 
                                             JOIN nama_buku ON cart.buku = nama_buku.id_buku 
                                             WHERE cart.id_pengguna = ?";

                                            $stmt = mysqli_prepare($koneksi, $query);
                                            mysqli_stmt_bind_param($stmt, "i", $id_user);
                                            mysqli_stmt_execute($stmt);
                                            $result = mysqli_stmt_get_result($stmt);

                                            while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                <tr>
                                                    <td class="text-center">
                                                        <span class="cart-number"><?= $no++; ?></span>
                                                    </td>


                                                    <td class="product-thumbnail">
                                                        <a href="shop-details.php">
                                                            <img src="../admin/dist/images/<?= htmlspecialchars($row['gambar']); ?>" alt="Image">
                                                        </a>
                                                    </td>

                                                    <td class="product-name">
                                                        <span class="unit-amount"><?= htmlspecialchars($row['nama']); ?></span>
                                                    </td>

                                                    <td class="product-subtotal">
                                                        <a href="aksi/aksi_cart.php?hapus=<?= $row['id_cart'] ?>" class="remove" onclick="return confirm('Hapus item ini?');">
                                                            <i class="bx bx-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>

                                    </table>
                                </div>
                                <div class="cart-buttons">
                                    <div class="row align-items-center justify-content-center">
                                        <div class="col-lg-7 col-sm-7 col-md-7">
                                            <div class="continue-shopping-box">
                                                <a href="shop-grid.php" class="default-btn btn-bg-three">
                                                    Continue See Books
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-sm-5 col-md-5 text-end">
                                            <a href="checkout.php" class="default-btn btn-bg-three">
                                                Checkout
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


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

</php>