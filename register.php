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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                            <h2>Register</h2>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><i class="bx bx-chevron-right"></i></li>
                                <li><a href="register.php" class="active">Register</a></li>
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


        <div class="user-area pt-100 pb-70">
            <div class="container">
                <div class="user-width">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6">
                            <div class="user-content">
                                <h2>Hi Visitors!</h2>
                                <p>You can easily be able to sign up to your account in any time.</p>
                                <a href="log-in.php" class="user-btn">log In Now</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="user-form">
                                <h2>Register Now</h2>
                                <form action="aksi/aksi_tambah_user.php" method="POST">
                                    <!-- Tambahkan input hidden aksi -->
                                    <input type="hidden" name="aksi" value="tambah">

                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <i class="bx bx-user"></i>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    required
                                                    data-error="Please enter your Username"
                                                    placeholder="Enter Your Username"
                                                    id="username"
                                                    name="username">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <i class="bx bx-lock"></i>
                                                <input
                                                    class="form-control"
                                                    type="password"
                                                    name="password"
                                                    placeholder="Password"
                                                    id="password"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <i class="bx bx-envelope"></i>
                                                <input
                                                    type="email"
                                                    class="form-control"
                                                    required
                                                    data-error="Please enter your Email"
                                                    placeholder="Enter Your Email"
                                                    id="email"
                                                    name="email">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <i class="fas fa-phone"></i>
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    name="no_hp"
                                                    placeholder="Enter your Phone Number"
                                                    id="no_hp"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <textarea
                                                    class="form-control"
                                                    name="alamat"
                                                    id="alamat"
                                                    placeholder="Enter your Address"
                                                    required></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <button type="submit" class="default-btn btn-bg-three">
                                                Register Now
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



        <!-- <footer class="footer-area footer-bg">
           
        </footer> -->


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