<?php
include '../../koneksi.php';

session_start();

$id_user = $_SESSION['id_user'];
$avatar = $_POST['avatar'];

// Update gambar_profile
mysqli_query($koneksi, "UPDATE user_pengguna SET gambar_profile='$avatar' WHERE id_user='$id_user'");

header("Location: ../my-account.php?status=avatar_success");
?>
