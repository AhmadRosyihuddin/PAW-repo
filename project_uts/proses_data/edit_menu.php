<?php
include "../connect/koneksi.php";
session_start();
$id_menu = $_GET['id_menu'];
$foto_lama = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT foto_menu FROM tb_menu WHERE id_menu = '$id_menu'"));


$nama_menu = $_POST["input_nama_menu"];
$up = ucfirst($nama_menu); //merubah huruf pertama menjadi kapital
$stock = $_POST["input_stock"];
$des_menu = $_POST["input_des_menu"];
$harga = $_POST["input_harga"];
$nama_file_foto = $_FILES["foto"]["name"];

if ($nama_file_foto) {
    $nama_file_foto = $_FILES["foto"]["name"];
    $lokasi_foto = $_FILES["foto"]["tmp_name"];
    $pemisah_foto = explode('.', $nama_file_foto);
    $ekstention_foto = strtolower(end($pemisah_foto));
    $foto = $nama_menu . '.' . $ekstention_foto;
    $hapus_foto = "../assets/menu/" . $foto_lama['foto_menu'];
    echo '$_FILE DI temukan';

    if (unlink($hapus_foto)) {
        if ((move_uploaded_file($lokasi_foto, "../assets/menu/" . $foto))) {
            $update = mysqli_query($koneksi, "UPDATE tb_menu SET nama_menu='$up', des_menu = '$des_menu', jml_stock='$stock', harga= '$harga', foto_menu='$foto' WHERE id_menu='$id_menu'");
            if ($update) {
                \header("location: ../form_input/input_edit.php?id_menu=$id_menu");
                $_SESSION["pesan"] = "sukses";
            } else {
                $_SESSION["pesan"] = "gagal";
            }
        } else {
            $_SESSION["pesan"] = "gagal";
        }
    }
} else {
    $update = mysqli_query($koneksi, "UPDATE tb_menu SET nama_menu='$up', des_menu = '$des_menu', jml_stock='$stock', harga= '$harga' WHERE id_menu='$id_menu'");
    if ($update) {
        header("location: ../form_input/input_edit.php?id_menu=$id_menu");
        $_SESSION["pesan"] = "sukses";
    } else {
        $_SESSION["pesan"] = "gagal";
    }
}
