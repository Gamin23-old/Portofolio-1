<?php
session_start();
include "../../koneksi.php"; // Koneksi ke database

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Gunakan Prepared Statement untuk keamanan
$query = "SELECT * FROM user_pengguna WHERE username = ? AND password = ?";
$stmt = mysqli_prepare($koneksi, $query);
mysqli_stmt_bind_param($stmt, "ss", $username, $password);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Cek apakah username dan password cocok
if ($row = mysqli_fetch_assoc($result)) {
    $_SESSION['username'] = $row['username'];
    $_SESSION['id_user'] = $row['id_user'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['no_hp'] = $row['no_hp'];
    $_SESSION['alamat'] = $row['alamat'];

    $_SESSION['success'] = "Anda berhasil login!";
    header('location: ../index.php');
    exit();
}

// Jika login gagal
$_SESSION['error'] = "Username atau password salah!";
header('location: ../log-in.php');
exit();
?>
