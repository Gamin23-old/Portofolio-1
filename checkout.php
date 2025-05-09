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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

  <link rel="stylesheet" href="assets/css/animate.min.css" />

  <link rel="stylesheet" href="assets/fonts/flaticon.css" />

  <link rel="stylesheet" href="assets/css/boxicons.min.css" />

  <link rel="stylesheet" href="assets/css/magnific-popup.min.css" />

  <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />

  <link rel="stylesheet" href="assets/css/nice-select.min.css" />

  <link rel="stylesheet" href="assets/css/meanmenu.css" />

  <link rel="stylesheet" href="assets/css/style.css" />

  <link rel="stylesheet" href="assets/css/responsive.css" />

  <link rel="stylesheet" href="./assets/css/sty.css" />
  <link rel="stylesheet" href="assets/css/theme-dark.css" />

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
            <h2>Checkout</h2>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i></li>
              <li><a href="#" class="active">Checkout</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="inner-banner-img">
            <img
              src="assets/images/bukutrs1.png"
              alt="Inner Banner" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="checkout-area pt-100 pb-70">
    <div class="container">
      <div class="section-title text-center mb-5">
        <h2 class="fw-bold text-uppercase">Pilih Buku Favoritmu 📚</h2>
        <br>
        <div class="pesan-info">
          Pilih buku yang ingin kamu pinjam dengan mencentang kotak di bawah ini.
        </div>
      </div>


      <form action="aksi/aksi_checkout.php" method="POST">
        <div class="row justify-content-center">

          <?php
          $query = "SELECT cart.id_cart, nama_buku.nama, nama_buku.gambar 
          FROM cart 
          JOIN nama_buku ON cart.buku = nama_buku.id_buku 
          WHERE cart.id_pengguna = $id_user";

          $result = mysqli_query($koneksi, $query);

          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
              <div class="book-card shadow-sm border-0 h-100 position-relative">
                <div class="book-img overflow-hidden rounded-3">
                  <img src="../admin/dist/images/<?= htmlspecialchars($row['gambar']); ?>" class="card-img-top img-hover-zoom">
                </div>
                <div class="card-body text-center">
                  <h6 style="color: #DAA520 ;"><?= htmlspecialchars($row['nama']); ?></h6>
                  <div class="form-check d-flex justify-content-center align-items-center gap-2">
                    <input class="checkbox-buku" type="checkbox" name="checkout[]" value="<?= $row['id_cart'] ?>" checked>
                    <label class="form-check-label">Pilih Buku Ini</label>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>

        </div>

        <div class="text-center mt-4">
          <button type="submit" class="default-btn btn-bg-three">
            Pinjam Buku
          </button>
        </div>
      </form>

    </div>
  </div>


  <footer class="footer-area  pt-100 footer-bg">
    <?php
    include "footer.php";
    ?>
  </footer>

  <script
    data-cfasync="false"
    src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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