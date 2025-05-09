<?php
include '../../koneksi.php';
include '../config_wa.php';
session_start();

$id_user = $_SESSION['id_user'];
$tanggal_pinjam   = date('Y-m-d');
$tanggal_kembali  = date('Y-m-d', strtotime('+7 days'));

// Ambil data user
$user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user_pengguna WHERE id_user='$id_user'"));

$nama_user  = $user['username'];
$no_wa_user = $user['no_hp'];

// Awal Pesan WA
$pesan_wa  = "Halo Admin, saya $nama_user 👋%0A";
$pesan_wa .= "Saya ingin memberitahukan bahwa saya baru saja melakukan peminjaman buku sebagai berikut:%0A%0A";
$pesan_wa .= "Buku yang saya pinjam:%0A";

if (isset($_POST['checkout'])) {

    foreach ($_POST['checkout'] as $id_cart) {

        $sqlBuku = mysqli_query($conn, "SELECT nama_buku.nama, nama_buku.id_buku 
                                         FROM cart 
                                         JOIN nama_buku ON cart.buku = nama_buku.id_buku 
                                         WHERE cart.id_cart='$id_cart'");

        if ($dataBuku = mysqli_fetch_assoc($sqlBuku)) {
            
            $pesan_wa .= "- " . $dataBuku['nama'] . "%0A";

            mysqli_query($conn, "INSERT INTO pinjam (id_pengguna, buku, tanggal_pinjam, tanggal_kembali, status) 
                                 VALUES ('$id_user', '".$dataBuku['id_buku']."', '$tanggal_pinjam', '$tanggal_kembali', 'Dipinjam')");

            mysqli_query($conn, "UPDATE nama_buku SET jumlah=jumlah-1 WHERE id_buku='".$dataBuku['id_buku']."'");

            mysqli_query($conn, "DELETE FROM cart WHERE id_cart='$id_cart'");
        }
    }

    $pesan_wa .= "%0A";
    $pesan_wa .= "Tanggal Pinjam : ".date('d-m-Y', strtotime($tanggal_pinjam))."%0A";
    $pesan_wa .= "Tanggal Kembali : ".date('d-m-Y', strtotime($tanggal_kembali))."%0A";
    $pesan_wa .= "Berikut No HP saya : $no_wa_user%0A%0A";
    $pesan_wa .= "Terima kasih 🙏";

    echo "<script>
        alert('Checkout Berhasil! Mengarahkan ke WhatsApp...');
        window.location.href='https://api.whatsapp.com/send?phone=$no_wa_admin&text=$pesan_wa';
    </script>";
}


// ========== HAPUS PINJAM ==========

if (isset($_GET['aksi']) && $_GET['aksi'] == 'hapus' && isset($_GET['id'])) {
    
    $id_pinjam = $_GET['id'];

    // Balikin stok buku
    $data_pinjam = mysqli_fetch_assoc(mysqli_query($conn, "SELECT buku FROM pinjam WHERE id_pinjam='$id_pinjam'"));
    mysqli_query($conn, "UPDATE nama_buku SET jumlah=jumlah+1 WHERE id_buku='".$data_pinjam['buku']."'");

    // Hapus data pinjam
    mysqli_query($conn, "DELETE FROM pinjam WHERE id_pinjam='$id_pinjam'");

    echo "<script>
        alert('Data berhasil dihapus!');
        location.href='../index.php?p=pinjam';
    </script>";
}


// ========== EDIT PINJAM ==========

if (isset($_GET['aksi']) && $_GET['aksi'] == 'edit' && isset($_POST['id_pinjam'])) {
    
    $id_pinjam = $_POST['id_pinjam'];
    $status    = $_POST['status'];

    // Kalau status selesai, balikin stok
    if($status == 'Selesai') {
        $data_pinjam = mysqli_fetch_assoc(mysqli_query($conn, "SELECT buku FROM pinjam WHERE id_pinjam='$id_pinjam'"));
        mysqli_query($conn, "UPDATE nama_buku SET jumlah=jumlah+1 WHERE id_buku='".$data_pinjam['buku']."'");
    }

    mysqli_query($conn, "UPDATE pinjam SET status='$status' WHERE id_pinjam='$id_pinjam'");

    echo "<script>
        alert('Status berhasil diubah!');
        location.href='../index.php?p=pinjam';
    </script>";
}
?>
