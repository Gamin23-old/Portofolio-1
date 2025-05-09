<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "../../koneksi.php";

if (isset($_POST['aksi']) && $_POST['aksi'] == 'tambah') {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email    = mysqli_real_escape_string($koneksi, $_POST['email']);
    $no_hp    = mysqli_real_escape_string($koneksi, $_POST['no_hp']);
    $alamat   = mysqli_real_escape_string($koneksi, $_POST['alamat']);

    if (!empty($username) && !empty($email) && !empty($no_hp) && !empty($alamat)) {
        $query = "INSERT INTO user_pengguna (username, password, email, no_hp, alamat) 
                  VALUES ('$username', '$password', '$email', '$no_hp', '$alamat')";

        if (mysqli_query($koneksi, $query)) {
            header("Location: ../log-in.php?status=success");
            exit;
        } else {
            echo "Error: " . mysqli_error($koneksi);
        }
    } else {
        echo "Semua field harus diisi.";
    }
}
?>
