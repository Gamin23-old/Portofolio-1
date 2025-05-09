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

</head>

<body>
    <!-- <div class="preloader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div> -->

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
                        <h2>My Account </h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i></li>
                            <li><a href="my-account.html" class="active">My Account</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner-banner-img">
                        <img src="../admin/dist/images/bokk-1.png" alt="Inner Banner">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="my-account-area ptb-100">
        <div class="container">
            <div class="tab account-tab">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <ul class="tabs">
                            <li>
                                <a href="#">
                                    My Account
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    My Order
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Quit
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-lg-8">
                        <div class="tab_content current active">
                            <div class="tabs_item current">
                                <div class="account-tab-item">
                                    <div class="account-details">
                                        <h2 class="text-center mb-4 fw-bold" style="color:#e8b43f;">Profile Saya</h2>

                                        <?php
                                        $sqlProfile = mysqli_query($koneksi, "SELECT * FROM tb_profile");
                                        ?>

                                        <div class="account-profile text-center mb-4">

                                            <?php
                                            $id_user = $_SESSION['id_user'];
                                            $user = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM user_pengguna WHERE id_user='$id_user'"));
                                            ?>

                                            <img src="../admin/dist/images/<?= ($user['gambar_profile']) ? $user['gambar_profile'] : 'default.png' ?>"
                                                style="border-radius:50%; width:130px; height:130px; object-fit:cover; border:3px solid #e8b43f; ">

                                            <br>
                                            <button type="button" class="btn btn-warning mt-2" data-bs-toggle="modal" data-bs-target="#modalAvatar">
                                                Pilih Avatar
                                            </button>

                                        </div>

                                        <div class="account-form">
                                            <div class="row justify-content-center g-3">

                                                <div class="col-md-6">
                                                    <div class="profile-info">
                                                        <h6>Username :</h6>
                                                        <div class="form-control text-center fw-semibold">
                                                            <?= $_SESSION['username'] ?>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="profile-info">
                                                        <h6>Email :</h6>
                                                        <div class="form-control text-center fw-semibold">
                                                            <?= $_SESSION['email'] ?>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="profile-info">
                                                        <h6>No HP :</h6>
                                                        <div class="form-control text-center fw-semibold">
                                                            <?= $_SESSION['no_hp'] ?>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="profile-info">
                                                        <h6>Alamat :</h6>
                                                        <div class="form-control text-center fw-semibold">
                                                            <?= $_SESSION['alamat'] ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs_item">
                                <div class="account-tab-item">
                                    <div class="checkout-order">
                                        <h2 class="text-center fw-bold mb-4" style="color:#e8b43f;">Riwayat Pinjam Buku</h2>

                                        <?php
                                        $id_user = $_SESSION['id_user'];

                                        $query = "SELECT pinjam.*, nama_buku.nama, nama_buku.gambar FROM pinjam JOIN nama_buku ON pinjam.buku = nama_buku.id_buku WHERE pinjam.id_pengguna = '$id_user'
                                        ORDER BY pinjam.id_pinjam DESC";

                                        $sql = mysqli_query($koneksi, $query);

                                        if (mysqli_num_rows($sql) > 0) {
                                            echo '<ul class="checkout-product">';
                                            while ($row = mysqli_fetch_assoc($sql)) {
                                        ?>
                                                <li>
                                                    <img src="../admin/dist/images/<?= $row['gambar'] ?>" alt="<?= $row['nama'] ?>" style="border-radius:8px; width:70px; height:100px; object-fit:cover;">
                                                    <div>
                                                        <h4 class="fw-bold mb-1"><?= $row['nama'] ?></h4>
                                                        <small>Status : <span style="color:<?= ($row['status'] == 'Dipinjam') ? 'red' : 'green' ?>; font-weight:600;"><?= $row['status'] ?></span></small><br>
                                                        <small>Pinjam : <?= date('d-m-Y', strtotime($row['tanggal_pinjam'])) ?></small><br>
                                                        <small>Kembali : <?= date('d-m-Y', strtotime($row['tanggal_kembali'])) ?></small>
                                                    </div>
                                                </li>
                                        <?php
                                            }
                                            echo '</ul>';
                                        } else {
                                            echo "<p class='text-center fw-semibold' style='color:#e8b43f;'>Belum ada buku yang dipinjam.</p>";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="tabs_item">
                                <div class="account-tab-item">
                                    <div class="address-details">
                                        <h1><a href="log-out.php">LOGOUT</a></h1>
                                        <span></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--modal avatar  -->
    <div class="modal fade" id="modalAvatar" tabindex="-1" aria-labelledby="modalAvatarLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <form action="aksi/aksi_ganti_avatar.php" method="POST">
                    <input type="hidden" name="id_user" value="<?= $id_user; ?>">

                    <div class="modal-header">
                        <h5 class="modal-title fw-bold" id="modalAvatarLabel">Pilih Avatar Profile</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <?php while ($profile = mysqli_fetch_assoc($sqlProfile)) { ?>
                                <div class="col-4 mb-3 text-center">
                                    <label style="cursor: pointer;">
                                        <input type="radio" name="avatar" value="<?= $profile['gambar_profile'] ?>"
                                            <?= ($user['gambar_profile'] == $profile['gambar_profile']) ? 'checked' : '' ?>
                                            style="display:none;">

                                        <img src="../admin/dist/images/<?= $profile['gambar_profile'] ?>"
                                            class="avatar-img <?= ($user['gambar_profile'] == $profile['gambar_profile']) ? 'avatar-checked' : '' ?>"
                                            style="border-radius:50%; width:100px; height:100px; border:3px solid #ccc; object-fit:cover; transition:0.3s;">
                                    </label>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning">Simpan Avatar</button>
                    </div>

                </form>

            </div>
        </div>
    </div>



    <footer class="footer-area pt-100 footer-bg">
        <?php
        include "footer.php";
        ?>
    </footer>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

    <script src="assets/js/custom-script.js"></script>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <?php if (isset($_GET['status']) && $_GET['status'] == 'avatar_success'): ?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
                title: 'Berhasil!',
                text: 'Avatar berhasil diperbarui! 🎉',
                icon: 'success',
                confirmButtonColor: '#e8b43f',
                confirmButtonText: 'Mantap'
            });
        </script>
    <?php endif; ?>

</body>

</html>