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

    
    <div class="inner-banner-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="inner-banner-content">
                        <h2>Forget Password</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i></li>
                            <li><a href="forget-password.html" class="active">Forget Password</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner-banner-img">
                        <img src="assets/images/inner-banner/inner-banner10.png" alt="Inner Banner">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="user-area pt-100 pb-70">
        <div class="container">
            <div class="user-width">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="forget-form">
                            <div class="user-form">
                                <h2>Forget Password</h2>
                                <form>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12 ">
                                            <div class="form-group">
                                                <i class="bx bx-user"></i>
                                                <input type="text" class="form-control" required data-error="Please enter username or email" placeholder="Username or Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 ">
                                            <button type="submit" class="default-btn btn-bg-three">
                                                Reset Now
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer-area footer-bg">
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