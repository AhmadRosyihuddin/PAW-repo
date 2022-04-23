<?php
include "../connect/koneksi.php";
session_start();
$nama_menu = $_POST["input_nama_menu"];
$up = ucfirst($nama_menu); //merubah huruf pertama menjadi kapital
$stock = $_POST["input_stock"];
$des_menu = $_POST["input_des_menu"];
$harga = $_POST["input_harga"];

$nama_file_foto = $_FILES["foto"]["name"];
$lokasi_foto = $_FILES["foto"]["tmp_name"];
$pemisah_foto = explode('.', $nama_file_foto);
$ekstention_foto = strtolower(end($pemisah_foto));
$foto = $nama_menu . '.' . $ekstention_foto;
$id_admin = $_SESSION['id_admin'];

if (move_uploaded_file($lokasi_foto, "../assets/menu/" . $foto)) {
    $inp_data = mysqli_query($koneksi, "INSERT INTO tb_menu (id_admin ,nama_menu, des_menu, jml_stock, harga, foto_menu) 
    VALUES ($id_admin, '$up', '$des_menu', '$stock', '$harga', '$foto')");
    if ($inp_data) {
        header("location: ../form_input/input_menu.php");
        $_SESSION["pesan"] = "sukses";
    }
} else {
    echo "Gagal";
}
