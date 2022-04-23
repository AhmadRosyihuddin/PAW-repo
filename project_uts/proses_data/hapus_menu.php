<?php
include "../connect/koneksi.php";
session_start();
$id_menu = $_GET["id_menu"];
$foto = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT foto_menu FROM tb_menu WHERE id_menu= '$id_menu'"));
$hapus_foto = "../assets/menu/" . $foto['foto_menu'];
if (unlink($hapus_foto)) {
    $_SESSION["pesan"] = "sukses";
    $delete = mysqli_query($koneksi, "DELETE from tb_menu where tb_menu.id_menu='$id_menu'");
    header("location: ../admin/menu.php");
} else {
    $_SESSION["pesan"] = "gagal";
    header("location: ../admin/menu.php");
}
