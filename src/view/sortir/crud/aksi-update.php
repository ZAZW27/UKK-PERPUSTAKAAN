<?php 

include '../../../config.php';

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$gambar = $_FILES['gambar']['name'];
$tahun_terbit = $_POST['tahun_terbit'];

echo $judul . " " . $penulis . " " . $penerbit . " " . $gambar . " " . $tahun_terbit;

?>