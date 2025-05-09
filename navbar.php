<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$loggedIn = isset($_SESSION['username']);
$currentPage = basename($_SERVER['PHP_SELF']);

if ($currentPage == "index.php") {
    if ($loggedIn) {
        include "navbar/navbar2.php"; // Jika sudah login
    } else {
        include "navbar/navbar1.php"; // Jika belum login
    }
} else {
    if ($loggedIn) {
        include "navbar/navbar4.php"; // Jika sudah login
    } else {
        include "navbar/navbar3.php"; // Jika belum login
    }
}
?>
