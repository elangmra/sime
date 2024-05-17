<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$host = 'localhost';
$username = 'root';
$password = 'rizki121';
$database = 'employees_db';

$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$id = $_POST['id'];
$kegiatan = $_POST['kegiatan'];
$tanggal = $_POST['tanggal'];
$tingkat = $_POST['tingkat'];
$deskripsi = $_POST['deskripsi'];

$query = "UPDATE tb_prestasi SET kegiatan_prestasi = ?, tanggal_prestasi = ?, tingkat = ?, deskripsi_prestasi = ? WHERE id = ?";
$stmt = $koneksi->prepare($query);
$stmt->bind_param("ssssi", $kegiatan, $tanggal, $tingkat, $deskripsi, $id);

if ($stmt->execute()) {
    header("Location: prestasi.php");
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

$stmt->close();
$koneksi->close();
?>
