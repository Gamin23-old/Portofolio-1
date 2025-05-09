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
    <!-- Pastikan ini di dalam <head> atau sebelum </body> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>

    <!-- <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.nice-select.min.js"></script> -->

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
                        <h2>Shop Grid</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i></li>
                            <li><a href="shop-grid.php" class="active">Shop Grid</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner-banner-img">
                        <img src="assets/images/bukutrs1.png" alt="Inner Banner">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="product-area pt-100 ">
        <div class="container">
            <div class="product-topper">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="product-topper-title">
                            <h3>All Books in OXUU | Libary </h3>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="product-kategori">
                            <div class="form-group">
                                <select class="form-control custom-kategori" id="select-kategori">
                                    <?php
                                    $optArr = ['Masakan', 'Bahasa', 'Electro', 'Programer', 'Peralatan'];
                                    echo "<option>All</option>";
                                    foreach ($optArr as $opt) {
                                        $selected = (isset($_GET['kategori']) && $opt == $_GET['kategori']) ? "selected" : "";
                                        echo "<option value='$opt' $selected>$opt</option>";
                                    }
                                    ?>
                                </select>

                                <script>
                                    $(document).ready(function() {
                                        // Pastikan Nice Select diinisialisasi ulang jika diperlukan
                                        if ($.fn.niceSelect) {
                                            $('#select-kategori').niceSelect();
                                        } else {
                                            console.error("Nice Select tidak ditemukan!");
                                        }

                                        // Tangkap event klik dari Nice Select
                                        $('.nice-select .option').on('click', function() {
                                            let selectedValue = $(this).data('value');
                                            console.log('Kategori dipilih:', selectedValue);

                                            if (selectedValue == 'All') {
                                                window.location.href = "?";
                                            } else if (selectedValue && selectedValue != 'All') {
                                                window.location.href = "?kategori=" + selectedValue;
                                            }
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <!-- bahasa -->
                    <!-- Container untuk menampilkan produk -->
                    <div class="row justify-content-center" id="product-list">
                        <?php
                        $query = "SELECT * FROM nama_buku"; // default query

                        if (isset($_GET['kategori'])) {
                            $kategori = $_GET['kategori'];

                            // Cek apakah kategori yg di pilih valid
                            $allowedKategori = ['Bahasa', 'Masakan', 'Electro', 'Programer', 'Peralatan'];

                            if (in_array($kategori, $allowedKategori)) {
                                $query = "SELECT * FROM nama_buku WHERE kategori = '$kategori'";
                            }
                        }

                        $sql = mysqli_query($koneksi, $query);
                        while ($data = mysqli_fetch_assoc($sql)) {
                        ?>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-card" id="buku<?= $data['id_buku'] ?>">
                                    <div class="product-card-img">
                                        <a href="#">
                                            <img src="../admin/dist/images/<?= $data['gambar'] ?>" alt="Product Images">
                                        </a>
                                        <div class="product-card-tag">
                                            <h3>Bagus</h3>
                                        </div>
                                        <?php
                                        $id_buku = $data['id_buku'];
                                        $queryCart = "SELECT * FROM cart WHERE buku = '$id_buku'";
                                        $sqlCart = mysqli_query($koneksi, $queryCart);
                                        $checkCart = mysqli_num_rows($sqlCart);
                                        ?>
                                        <ul class="product-card-action">
                                            <?php if ($checkCart > 0) { ?>
                                                <li><a href="cart.php"><i class="bx bx-cart" style="color: #e8b43f;"></i></a></li>
                                            <?php } else { ?>
                                                <li><a href="aksi/aksi_cart.php?id=<?= $_SESSION['username'] ?>&buku=<?= $data['id_buku'] ?>"><i class="bx bx-cart"></i></a></li>
                                            <?php } ?>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView<?= $data['id_buku'] ?>">
                                                    <i class="bx bx-show-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        <h3><a href="shop-details.php"><?= $data['nama'] ?></a></h3>
                                        <span style="color: #e8b43f;"><?= $data['jumlah'] ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade productsQuickView" id="productsQuickView<?= $data['id_buku'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-bs-label="Close">
                                            <span aria-hidden="true"><i class="bx bx-x"></i></span>
                                        </button>
                                        <div class="row justify-content-center">
                                            <div class="col-lg-5 col-md-4">
                                                <div class="products-image"><img src="../admin/dist/images/<?= $data['gambar'] ?>" alt="Product Images"></div>
                                            </div>
                                            <div class="col-lg-7 col-md-8">
                                                <div class="product-content">
                                                    <h3><?= $data['nama'] ?></h3>
                                                    <div class="product-text">
                                                        <p><?= $data['deskripsi'] ?></p>
                                                    </div>
                                                    <div class="price-status">
                                                        <div class="price">
                                                            <span class="new-price">NEW</span>
                                                            <div class="rating">
                                                                <i class="bx bxs-star"></i>
                                                                <i class="bx bxs-star"></i>
                                                                <i class="bx bxs-star"></i>
                                                                <i class="bx bxs-star"></i>
                                                                <i class="bx bxs-star"></i>
                                                            </div>
                                                        </div>
                                                        <div class="availability-status">
                                                            <ul>
                                                                <li>Stok: <span><?= $data['jumlah'] ?></span></li>
                                                                <li>Kulitas <span>Good</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="advantage-list">
                                                        <h3>Benefit Spesial Dari Kita:</h3>
                                                        <ul>
                                                            <li>Mudah Dalam Pengembalian Buku</li>
                                                            <li>Buku yang menarik dan banyak ilmu</li>
                                                            <li>Punya Banyak Cara Pengambilan Buku</li>
                                                            <li>Tanpa Biaya Pelayanan</li>
                                                        </ul>
                                                    </div>
                                                    <div class="products-share">
                                                        <ul class="social">
                                                            <li><span>Share:</span></li>
                                                            <li>
                                                                <a href="https://www.facebook.com/login/" target="_blank"><i class="bx bxl-facebook"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="https://twitter.com/login" target="_blank"><i class="bx bxl-twitter"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="https://www.instagram.com/accounts/login/" target="_blank"><i class="bx bxl-instagram"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="https://www.pinterest.com/" target="_blank"><i class="bx bxl-pinterest-alt"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="https://www.youtube.com/" target="_blank"><i class="bx bxl-youtube"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <div class="col-lg-12 col-md-12 text-center">
                            <div class="pagination-area">
                                <a href="#" class="prev page-numbers">
                                    <i class="bx bx-chevron-left"></i>
                                </a>
                                <span class="page-numbers current" aria-current="page">1</span>
                                <a href="#" class="page-numbers">2</a>
                                <a href="#" class="page-numbers">3</a>
                                <a href="#" class="next page-numbers">
                                    <i class="bx bx-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>


        <footer class="footer-area-two footer-bg pt-100" style="margin:0">
            <?php
            include "footer.php";
            ?>
        </footer>

        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>


        <script src="assets/js/bootstrap.bundle.min.js"></script>

        <script src="assets/js/jquery.magnific-popup.min.js"></script>

        <script src="assets/js/owl.carousel.min.js"></script>



        <script src="assets/js/wow.min.js"></script>

        <script src="assets/js/meanmenu.js"></script>

        <script src="assets/js/jquery.ajaxchimp.min.js"></script>

        <script src="assets/js/form-validator.min.js"></script>

        <script src="assets/js/contact-form-script.js"></script>

        <script src="assets/js/mixitup.min.js"></script>

        <script src="assets/js/custom.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>