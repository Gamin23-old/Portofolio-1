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
                        <h2>Categories Full Width</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i></li>
                            <li><a href="categories-full-width.html" class="active">Categories Full Width</a></li>
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


    <div class="categories-area pt-100 pb-70">
        <div class="container-fluid">
            <div class="container-max">
                <div class="section-title">
                    <h2>Electronic Product</h2>
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
                                <span>$120</span>
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
                                    <h3>-18%</h3>
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
                                <span>$999.0</span>
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
                                    <h3>-44%</h3>
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
                                <span>$320.0 <del>$330.0</del></span>
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
                                <h3><a href="shop-details.html">Watch Gallery</a></h3>
                                <span>$130.0</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-title">
                    <h2>Kid Product</h2>
                </div>
                <div class="row pt-45">
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-card">
                            <div class="product-card-img">
                                <a href="shop-details.html">
                                    <img src="assets/images/featured-products/feature-product1.png" alt="Product Images">
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
                                <h3><a href="shop-details.html">Giant Teddy Bear</a></h3>
                                <span>$10</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-card">
                            <div class="product-card-img">
                                <a href="shop-details.html">
                                    <img src="assets/images/featured-products/feature-product2.png" alt="Product Images">
                                </a>
                                <div class="product-card-tag">
                                    <h3>-18%</h3>
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
                                <h3><a href="shop-details.html">Has Papis Shoes</a></h3>
                                <span>$40.0</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-card">
                            <div class="product-card-img">
                                <a href="shop-details.html">
                                    <img src="assets/images/featured-products/feature-product3.png" alt="Product Images">
                                </a>
                                <div class="product-card-tag">
                                    <h3>-44%</h3>
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
                                <h3><a href="shop-details.html">Kids Lotion</a></h3>
                                <span>$20.0 <del>$30.0</del></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-card">
                            <div class="product-card-img">
                                <a href="shop-details.html">
                                    <img src="assets/images/featured-products/feature-product4.png" alt="Product Images">
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
                                <h3><a href="shop-details.html">Octopus Toys</a></h3>
                                <span>$30.0</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-title">
                    <h2>Grocery Product</h2>
                </div>
                <div class="row pt-45">
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-card">
                            <div class="product-card-img">
                                <a href="shop-details.html">
                                    <img src="assets/images/products/propular-style1.png" alt="Product Images">
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
                                <h3><a href="shop-details.html">Perfect Rice in Bags </a></h3>
                                <span>$120</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-card">
                            <div class="product-card-img">
                                <a href="shop-details.html">
                                    <img src="assets/images/products/propular-style2.png" alt="Product Images">
                                </a>
                                <div class="product-card-tag">
                                    <h3>-18%</h3>
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
                                <h3><a href="shop-details.html">Natural Brown Sugar</a></h3>
                                <span>$22.0</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-card">
                            <div class="product-card-img">
                                <a href="shop-details.html">
                                    <img src="assets/images/products/propular-style3.png" alt="Product Images">
                                </a>
                                <div class="product-card-tag">
                                    <h3>-44%</h3>
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
                                <h3><a href="shop-details.html">Soft Drinks</a></h3>
                                <span>$0.30 <del>$0.30</del></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-card">
                            <div class="product-card-img">
                                <a href="shop-details.html">
                                    <img src="assets/images/products/propular-style4.png" alt="Product Images">
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
                                <h3><a href="shop-details.html">Hexapro Protein</a></h3>
                                <span>$1.30</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer-area-two footer-bg pt-100">
        <div class="container">
            <div class="footer-top pb-70">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html">
                                    <img src="assets/images/logos/logo-1.png" alt="Images">
                                </a>
                            </div>
                            <p>
                                We are one of the best company into the world and you can easily knock us.
                            </p>
                            <ul class="footer-list-contact">
                                <li>
                                    <i class="flaticon-placeholder"></i>
                                    <a href="#">2873 Yorkshire Circle, NC, Carolina</a>
                                </li>
                                <li>
                                    <i class="flaticon-smartphone"></i>
                                    <a href="tel:+501-529-1747">+501-529-1747</a>
                                </li>
                                <li>
                                    <i class="flaticon-messenger"></i>
                                    <a href="../../cdn-cgi/l/email-protection.html#ddb5b8b1b1b29db2b1b8a5f3beb2b0"><span class="__cf_email__" data-cfemail="1a727f7676755a75767f6234797577">[email&#160;protected]</span></a>
                                </li>
                            </ul>
                            <ul class="social-link">
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
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3>Services</h3>
                            <ul class="footer-list">
                                <li>
                                    <a href="https://templates.hibootstrap.com/olex/default/wordpress-hosting.html" target="_blank">
                                        My Account
                                    </a>
                                </li>
                                <li>
                                    <a href="tracking-order.html" target="_blank">
                                        Tracking Order
                                    </a>
                                </li>
                                <li>
                                    <a href="customer-services.html" target="_blank">
                                        Customer Services
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html" target="_blank">
                                        Compare
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" target="_blank">
                                        Wishlist
                                    </a>
                                </li>
                                <li>
                                    <a href="privacy-policy.html" target="_blank">
                                        Privacy Policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-widget">
                            <h3>Useful Link</h3>
                            <ul class="footer-list">
                                <li>
                                    <a href="index.html" target="_blank">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="about.html" target="_blank">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-details.html" target="_blank">
                                        Blog Details
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-details.html" target="_blank">
                                        Shop Details
                                    </a>
                                </li>
                                <li>
                                    <a href="testimonials.html" target="_blank">
                                        Testimonials
                                    </a>
                                </li>
                                <li>
                                    <a href="team.html" target="_blank">
                                        Team
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3>Working Hours</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat pretium volutpat. Quisque id
                            </p>
                            <ul class="footer-work-hour-list">
                                <li>
                                    <span>Monday-Friday:</span> 8:30 AM - 5:30 PM
                                </li>
                                <li>
                                    <span> Saturday:</span> 9:00 AM - 2:00 PM
                                </li>
                                <li>
                                    <span>Sunday:</span> Closed
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right-area">
                <div class="copy-right-text">
                    <p>© Olex is Proudly Owned by <a href="https://hibootstrap.com/" target="_blank">HiBootstrp</a></p>
                </div>
            </div>
        </div>
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