<?php
include_once('koneksi.php');

// tangkap data dari form
$nama = $_POST['nama'];
$kode = $_POST['kode'];
$email = $_POST['email'];
$tgl_lahir = $_POST['tgl_lahir'];
$tmp_lahir = $_POST['tmp_lahir'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$kelurahan_id = $_POST['kelurahan_id'];

// buat query insert
$query = "UPSATE pasien SET nama='$nama', kkode='$kode', email='$email', tgl_lahir='$tgl_lahir', tmp_lahir='$tmp_lahir', gender='$gender', alamat='$alamat', kelurahan_id='$kelurahan_id'"

// eksekusi query
if ($dbh->query($query)) {
    header('Location: pasien.php');
    exit;
} else {
    echo "Gagal menyimpan data";
}
?>
