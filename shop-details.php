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
            <a href="index.html" class="logo">
                <img src="assets/images/logos/logo-1.png" alt="Logo">
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
                                    <div class="language-list">
                                        <select class="language-list-item">
                                            <option>English</option>
                                            <option>العربيّة</option>
                                            <option>Deutsch</option>
                                            <option>Português</option>
                                            <option>简体中文</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="nav-other-item">
                                    <div class="cart-btn-area">
                                        <a href="cart.html" class="cart-btn"><i class="bx bx-cart"></i></a>
                                        <span>1</span>
                                    </div>
                                </div>
                                <div class="nav-other-item">
                                    <div class="option-btn">
                                        <a href="log-in.html" class="default-btn">Log In Now</a>
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
                        <h2>Shop Details</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i></li>
                            <li><a href="shop-details.html" class="active">Shop Details</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner-banner-img">
                        <img src="assets/images/inner-banner/inner-banner7.png" alt="Inner Banner">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="product-details-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <div class="product-detls-image">
                        <img src="assets/images/products/shop-details-img1.png" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="product-desc">
                        <h3>Giant Teddy Bear</h3>
                        <div class="price">
                            <span class="new-price">$20.00</span>
                            <span class="old-price">$30.00</span>
                        </div>
                        <div class="product-review">
                            <div class="rating">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star-half"></i>
                            </div>
                            <a href="#" class="rating-count">3 reviews</a>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et.
                        </p>
                        <div class="input-count-area">
                            <h3>Quantity</h3>
                            <div class="input-counter">
                                <span class="minus-btn"><i class="bx bx-minus"></i></span>
                                <input type="text" value="1">
                                <span class="plus-btn"><i class="bx bx-plus"></i></span>
                            </div>
                        </div>
                        <div class="product-add-btn">
                            <button type="submit" class="default-btn btn-bg-three">
                                <i class="fas fa-cart-plus"></i> Buy Now!
                            </button>
                            <button type="submit" class="default-btn btn-bg-three">
                                <i class="fas fa-cart-plus"></i> Add To Cart
                            </button>
                        </div>
                        <div class="product-share">
                            <ul>
                                <li>
                                    <span>Share:</span>
                                </li>
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


    <div class="product-tab pt-100 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="tab products-details-tab">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-12">
                                <ul class="tabs">
                                    <li>
                                        <a href="#">
                                            Description
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Reviews
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Shipping Information
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="tab_content current active">
                                    <div class="tabs_item current">
                                        <div class="products-tabs-decs">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu neque ut ipsum tempor varius. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam eget ligula eget sem lacinia varius. Maecenas maximus vitae ligula sit amet placerat. Suspendisse elementum porttitor erat tempus malesuada. Vestibulum lorem ipsum, congue sed risus cursus, condimentum luctus nibh. Ut convallis ultrices lorem. Donec blandit purus ac lacus finibus, nec feugiat elit auctor.</p>
                                        </div>
                                    </div>
                                    <div class="tabs_item">
                                        <div class="products-tabs-reviews">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-6">
                                                    <div class="products-review-tab">
                                                        <ul>
                                                            <li>
                                                                <img src="assets/images/blog/blog-profile1.jpg" alt="Image">
                                                                <h3>Megan Fox</h3>
                                                                <span><i class="bx bx-calendar-event"></i> Nov 02, 2024, 12:10 PM</span>
                                                                <p>
                                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                                                    Aenean massa. cu sociis natoque penatibus et magnis dis parturient montes, nascetur ridicule
                                                                    us mus. Donec quam felis, ultricies ne, pellentesque.
                                                                </p>
                                                                <div class="content">
                                                                    <h4><a href="#"> Like</a></h4>
                                                                    <h4><a href="#"> Reply</a></h4>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <img src="assets/images/blog/blog-profile2.jpg" alt="Image">
                                                                <h3>Mike Thomas</h3>
                                                                <span><i class="bx bx-calendar-event"></i> Nov 02, 2024, 11:30 PM</span>
                                                                <p>
                                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                                                    Aenean massa. cu sociis natoque penatibus et magnis dis parturient montes, nascetur ridicule
                                                                    us mus. Donec quam felis, ultricies ne, pellentesque.
                                                                </p>
                                                                <div class="content">
                                                                    <h4><a href="#"> Like</a></h4>
                                                                    <h4><a href="#"> Reply</a></h4>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="reviews-form">
                                                        <div class="contact-form">
                                                            <h3>Add Your Review</h3>
                                                            <p>Lorem ipsum dolo sit amet, consectetur adipisicing eiusmod tempor incididun </p>
                                                            <div class="rating">
                                                                <i class="bx bxs-star"></i>
                                                                <i class="bx bxs-star"></i>
                                                                <i class="bx bxs-star"></i>
                                                                <i class="bx bxs-star"></i>
                                                                <i class="bx bxs-star-half"></i>
                                                            </div>
                                                            <form id="contactForm">
                                                                <div class="row justify-content-center">
                                                                    <div class="col-lg-6 col-sm-6">
                                                                        <div class="form-group">
                                                                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name*">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-sm-6">
                                                                        <div class="form-group">
                                                                            <input type="email" name="email_address" id="email_address" required data-error="Please enter email address" class="form-control" placeholder="Email Address*">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12">
                                                                        <div class="form-group">
                                                                            <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Your Message"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12">
                                                                        <button type="submit" class="default-btn btn-bg-three">
                                                                            Send Your Message
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
                                    <div class="tabs_item">
                                        <div class="products-tabs-shipping">
                                            <ul>
                                                <li>
                                                    Address:
                                                    <span>3227 Millbrook Road, UK</span>
                                                </li>
                                                <li>
                                                    Phone:
                                                    <a href="tel:+1(123)-456-7890-3524">+1 (123) 456 7890 3524</a>
                                                </li>
                                                <li>
                                                    Email:
                                                    <a href="../../cdn-cgi/l/email-protection.html#69010c0505062906050c11470a0604"><span class="__cf_email__" data-cfemail="5038353c3c3f103f3c35287e333f3d">[email&#160;protected]</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="related-products-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Related Products</h2>
            </div>
            <div class="row pt-45">
                <div class="col-lg-3 col-sm-6">
                    <div class="product-card">
                        <div class="product-card-img">
                            <a href="shop-details.html">
                                <img src="assets/images/products/product-img1.png" alt="Product Images">
                            </a>
                            <div class="product-card-tag">
                                <h3>Sale</h3>
                            </div>
                            <ul class="product-card-action">
                                <li>
                                    <a href="cart.html"><i class="bx bx-cart"></i></a>
                                </li>
                                <li>
                                    <a href="wishlist.html"><i class="bx bx-heart"></i></a>
                                </li>
                                <li>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                        <i class="bx bx-show-alt"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3><a href="shop-details.html">Sennheiser Headphone</a></h3>
                            <span>$120.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-card">
                        <div class="product-card-img">
                            <a href="shop-details.html">
                                <img src="assets/images/products/product-img2.png" alt="Product Images">
                            </a>
                            <div class="product-card-tag">
                                <h3>Sale</h3>
                            </div>
                            <ul class="product-card-action">
                                <li>
                                    <a href="cart.html"><i class="bx bx-cart"></i></a>
                                </li>
                                <li>
                                    <a href="wishlist.html"><i class="bx bx-heart"></i></a>
                                </li>
                                <li>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                        <i class="bx bx-show-alt"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3><a href="shop-details.html">Nikkon P-1000 Product</a></h3>
                            <span>$990.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-card">
                        <div class="product-card-img">
                            <a href="shop-details.html">
                                <img src="assets/images/products/product-img3.png" alt="Product Images">
                            </a>
                            <div class="product-card-tag">
                                <h3>New</h3>
                            </div>
                            <ul class="product-card-action">
                                <li>
                                    <a href="cart.html"><i class="bx bx-cart"></i></a>
                                </li>
                                <li>
                                    <a href="wishlist.html"><i class="bx bx-heart"></i></a>
                                </li>
                                <li>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                        <i class="bx bx-show-alt"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3><a href="shop-details.html">Sennheiser Mobile</a></h3>
                            <span>$390.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-card">
                        <div class="product-card-img">
                            <a href="shop-details.html">
                                <img src="assets/images/products/product-img4.png" alt="Product Images">
                            </a>
                            <div class="product-card-tag">
                                <h3>New</h3>
                            </div>
                            <ul class="product-card-action">
                                <li>
                                    <a href="cart.html"><i class="bx bx-cart"></i></a>
                                </li>
                                <li>
                                    <a href="wishlist.html"><i class="bx bx-heart"></i></a>
                                </li>
                                <li>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                        <i class="bx bx-show-alt"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3><a href="shop-details.html">I Watch Gallery</a></h3>
                            <span>$130.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer-area-two footer-bg pt-100">
      <?php 
      include "footer.php";
      ?>
    </footer>


    <div class="modal fade productsQuickView" id="productsQuickView" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-bs-label="Close">
                    <span aria-hidden="true"><i class="bx bx-x"></i></span>
                </button>
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-4">
                        <div class="products-image"><img src="assets/images/products/shop-details-img1.png" alt="Images"></div>
                    </div>
                    <div class="col-lg-7 col-md-8">
                        <div class="product-content">
                            <h3>Giant Teddy Bear</h3>
                            <div class="product-text">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean com ligula eget dolor. Aenean massa. </p>
                            </div>
                            <div class="price-status">
                                <div class="price">
                                    <span class="new-price">$541.00</span>
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
                                        <li>Availability: <span>In Stock</span></li>
                                        <li>Expire date: <span>12 Dec, 2021</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-add-to-cart">
                                <div class="input-counter">
                                    <span class="minus-btn">
                                        <i class="bx bx-minus"></i>
                                    </span>
                                    <input type="text" value="1">
                                    <span class="plus-btn">
                                        <i class="bx bx-plus"></i>
                                    </span>
                                </div>
                                <button type="submit" class="default-btn btn-bg-three">
                                    Add to cart
                                </button>
                                <button type="submit" class="default-btn btn-bg-three">
                                    Buy it now!
                                </button>
                            </div>
                            <div class="advantage-list">
                                <h3>Specialty of This Product:</h3>
                                <ul>
                                    <li>Very Fresh and Quality Full</li>
                                    <li>Collect This From Natural Source</li>
                                    <li>Have a Good Range of Validity Date</li>
                                    <li>Free Home Delivery</li>
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