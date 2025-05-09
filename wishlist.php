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

<link rel="stylesheet" href="assets/css/sty.css">

<link rel="icon" type="image/png" href="assets/images/favicon.png">
<title>Olex - Multipurpose eCommerce HTML Template</title>
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

<div class="main-nav nav-three">
<div class="container">
<nav class="navbar navbar-expand-md navbar-light ">
<a class="navbar-brand" href="index.html">
<img src="assets/images/logos/logo-3.png" class="logo-one" alt="Logo">
<img src="assets/images/logos/logo-1.png" class="logo-two" alt="Logo">
</a>
<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
<ul class="navbar-nav m-auto">
<li class="nav-item">
<a href="#" class="nav-link">
Home
<i class="bx bx-chevron-down"></i>
</a>
<ul class="dropdown-menu">
<li class="nav-item">
<a href="index.html" class="nav-link">
Home One
</a>
</li>
<li class="nav-item">
<a href="index-2.html" class="nav-link">
Home Two
</a>
</li>
<li class="nav-item">
<a href="index-3.html" class="nav-link">
Home Three
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link active">
Pages
<i class="bx bx-chevron-down"></i>
</a>
<ul class="dropdown-menu">
<li class="nav-item">
<a href="about.html" class="nav-link">
About
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link active">
Shop
<i class="bx bx-chevron-down"></i>
</a>
<ul class="dropdown-menu">
<li class="nav-item">
<a href="shop-details.html" class="nav-link">
Shop Details
</a>
</li>
<li class="nav-item">
<a href="shop-details-left-sidebar.html" class="nav-link">
Shop Details Left Sidebar
</a>
</li>
<li class="nav-item">
<a href="shop-details-right-sidebar.html" class="nav-link">
Shop Details Right Sidebar
</a>
</li>
<li class="nav-item">
<a href="tracking-order.html" class="nav-link">
Tracking Order
</a>
</li>
<li class="nav-item">
<a href="size-guides.html" class="nav-link">
Size Guides
</a>
</li>
<li class="nav-item">
<a href="customer-services.html" class="nav-link">
Customer Services
</a>
</li>
<li class="nav-item">
<a href="compare.html" class="nav-link">
Compare
</a>
</li>
<li class="nav-item">
<a href="cart.html" class="nav-link">
Cart
</a>
</li>
<li class="nav-item">
<a href="checkout.html" class="nav-link">
Checkout
</a>
</li>
<li class="nav-item">
<a href="wishlist.html" class="nav-link active">
Wishlist
</a>
</li>
<li class="nav-item">
<a href="my-account.html" class="nav-link">
My Account
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="faq.html" class="nav-link">
FAQ
</a>
</li>
<li class="nav-item">
<a href="team.html" class="nav-link">
Team
</a>
</li>
<li class="nav-item">
<a href="testimonials.html" class="nav-link">
Testimonials
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
User
<i class="bx bx-chevron-down"></i>
</a>
<ul class="dropdown-menu">
<li class="nav-item">
<a href="log-in.html" class="nav-link">
Log In
</a>
</li>
<li class="nav-item">
<a href="register.html" class="nav-link">
Registration
</a>
</li>
<li class="nav-item">
<a href="forget-password.html" class="nav-link">
Forget Password
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="terms-condition.html" class="nav-link">
Terms & Conditions
</a>
</li>
<li class="nav-item">
<a href="privacy-policy.html" class="nav-link">
Privacy Policy
</a>
</li>
<li class="nav-item">
<a href="404.html" class="nav-link">
404 page
</a>
</li>
<li class="nav-item">
<a href="search-page.html" class="nav-link">
Search Page
</a>
</li>
<li class="nav-item">
<a href="coming-soon.html" class="nav-link">
Coming Soon
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
Shop
<i class="bx bx-chevron-down"></i>
</a>
<ul class="dropdown-menu">
<li class="nav-item">
<a href="shop-left-sidebar.html" class="nav-link">
Shop Left Sidebar
</a>
</li>
<li class="nav-item">
<a href="shop-right-sidebar.html" class="nav-link">
Shop Right Sidebar
</a>
</li>
<li class="nav-item">
<a href="shop-grid.html" class="nav-link">
Shop Grid
</a>
</li>
<li class="nav-item">
<a href="shop-full-width-sidebar.html" class="nav-link">
Shop Full Width Sidebar
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
Categories
<i class="bx bx-chevron-down"></i>
</a>
<ul class="dropdown-menu">
<li class="nav-item">
<a href="categories-1.html" class="nav-link">
Categories (2 In Row)
</a>
</li>
<li class="nav-item">
<a href="categories-2.html" class="nav-link">
Categories (3 In Row)
</a>
</li>
<li class="nav-item">
<a href="categories-full-width.html" class="nav-link">
Categories Full Width
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
Blog
<i class="bx bx-chevron-down"></i>
</a>
<ul class="dropdown-menu">
<li class="nav-item">
<a href="blog-1.html" class="nav-link">
Blog Style One
</a>
</li>
<li class="nav-item">
<a href="blog-2.html" class="nav-link">
Blog Style Two
</a>
</li>
<li class="nav-item">
<a href="blog-details.html" class="nav-link">
Blog Details
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="contact.html" class="nav-link">
Contact
</a>
</li>
</ul>
<div class="nav-other">
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
</div>
<div class="nav-btn nav-other-btn">
<a href="log-in.html" class="default-btn btn-bg-three">Log In Now</a>
</div>
</div>
</nav>
</div>
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
<h2>Wishlist</h2>
<ul>
<li><a href="index.html">Home</a></li>
<li><i class="bx bx-chevron-right"></i></li>
<li><a href="wishlist.html" class="active">Wishlist</a></li>
</ul>
</div>
</div>
<div class="col-lg-6">
<div class="inner-banner-img">
<img src="assets/images/inner-banner/inner-banner4.png" alt="Inner Banner">
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
<th scope="col">Product</th>
<th scope="col">Name</th>
<th scope="col">Unit Price</th>
<th scope="col">Add Cart</th>
<th scope="col">Total</th>
</tr>
</thead>
<tbody>
<tr>
<td class="product-thumbnail">
<a href="#">
<img src="assets/images/products/propular-style1.png" alt="Image">
</a>
</td>
<td class="product-name">
<a href="#">Perfect Rice</a>
</td>
<td class="product-price">
<span class="unit-amount">$120.00</span>
</td>
<td class="product-quantity">
<a href="#" class="default-btn btn-bg-three">Add to Cart</a>
</td>
<td class="product-subtotal">
<span class="subtotal-amount">$120.00</span>
<a href="#" class="remove">
<i class="bx bx-x-circle"></i>
</a>
</td>
</tr>
<tr>
<td class="product-thumbnail">
<a href="#">
<img src="assets/images/products/propular-style2.png" alt="Image">
</a>
</td>
<td class="product-name">
<a href="#">Brown Sugar</a>
</td>
<td class="product-price">
<span class="unit-amount">$20.00</span>
</td>
<td class="product-quantity">
<a href="#" class="default-btn btn-bg-three">Add to Cart</a>
</td>
<td class="product-subtotal">
<span class="subtotal-amount">$20.00</span>
<a href="#" class="remove">
<i class="bx bx-x-circle"></i>
</a>
</td>
</tr>
<tr>
<td class="product-thumbnail">
<a href="#">
<img src="assets/images/products/propular-style3.png" alt="Image">
</a>
</td>
<td class="product-name">
<a href="#">Soft Drinks</a>
</td>
<td class="product-price">
<span class="unit-amount">$10.00</span>
</td>
<td class="product-quantity">
<a href="#" class="default-btn btn-bg-three">Add to Cart</a>
</td>
<td class="product-subtotal">
<span class="subtotal-amount">$10.00</span>
<a href="#" class="remove">
<i class="bx bx-x-circle"></i>
</a>
</td>
</tr>
<tr>
<td class="product-thumbnail">
<a href="#">
<img src="assets/images/products/propular-style4.png" alt="Image">
</a>
</td>
<td class="product-name">
<a href="#">Hexapro Protein</a>
</td>
<td class="product-price">
<span class="unit-amount">$15.00</span>
</td>
<td class="product-quantity">
<a href="#" class="default-btn btn-bg-three">Add to Cart</a>
</td>
<td class="product-subtotal">
<span class="subtotal-amount">$15.00</span>
<a href="#" class="remove">
<i class="bx bx-x-circle"></i>
</a>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</form>
</div>
</div>
</div>
</section>


<footer class="footer-area footer-bg">
<div class="container">
<div class="footer-newsletter ptb-100">
<div class="newsletter-max-width">
<div class="row justify-content-center">
<div class="col-lg-4">
<div class="newsletter-title">
<h2>Join to Newsletter</h2>
</div>
</div>
<div class="col-lg-8">
<div class="newsletter-area">
<form class="newsletter-form" data-toggle="validator" method="POST">
<input type="email" class="form-control" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
<button class="subscribe-btn" type="submit">
Subscribe
</button>
<div id="validator-newsletter" class="form-result"></div>
</form>
</div>
</div>
</div>
</div>
</div>
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
<a href="../../cdn-cgi/l/email-protection.html#c4aca1a8a8ab84aba8a1bceaa7aba9"><span class="__cf_email__" data-cfemail="d7bfb2bbbbb897b8bbb2aff9b4b8ba">[email&#160;protected]</span></a>
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


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>

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