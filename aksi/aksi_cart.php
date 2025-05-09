<?php
session_start();
include '../../koneksi.php';

// Cek jika belum login
if (!isset($_SESSION['id_user'])) {
    header("Location: ../log-in.php");
    exit;
}

$id_user = $_SESSION['id_user'];

// Proses tambah ke cart
if (isset($_GET['id']) && isset($_GET['buku'])) {
    $username = $_GET['id'];
    $id_buku  = $_GET['buku'];

    $sql  = mysqli_query($koneksi, "SELECT * FROM user_pengguna WHERE username='$username'");
    $data = mysqli_fetch_assoc($sql);

    if ($data) {
        $query_insert = "INSERT INTO cart VALUES (NULL, '{$data['id_user']}', '$id_buku')";
        mysqli_query($koneksi, $query_insert);

        header("Location: ../shop-grid.php#buku$id_buku");
        exit;
    }
}

// Proses hapus dari cart
if (isset($_GET['hapus'])) {
    $id_cart = intval($_GET['hapus']);

    $query = "DELETE FROM cart WHERE id_cart = ? AND id_pengguna = ?";
    $stmt  = mysqli_prepare($koneksi, $query);
    mysqli_stmt_bind_param($stmt, "ii", $id_cart, $id_user);
    mysqli_stmt_execute($stmt);

    header("Location: ../cart.php");
    exit;
}
?>
