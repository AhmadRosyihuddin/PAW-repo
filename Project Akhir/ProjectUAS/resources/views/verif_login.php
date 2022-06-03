<?php
include "../connect/koneksi.php";
session_start();
if (isset($_POST['masuk'])) {
    $nama_user = $_POST['nama_user'];
    $no_meja = $_POST['no_meja'];
    $tb_admin = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT tb_admin.id_admin, tb_admin.nama_admin, tb_admin.pass_admin FROM tb_admin WHERE nama_admin = '$nama_user' AND pass_admin = '$no_meja'"));
    $tb_kasir = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT tb_kasir.id_kasir, tb_kasir.nama_kasir, tb_kasir.pass_kasir FROM tb_kasir WHERE nama_kasir = '$nama_user' AND pass_kasir = '$no_meja'"));

    if ($tb_admin || $tb_kasir) {
        if ($tb_admin) {
            header("Location: ../admin/dashboard.php");
            $_SESSION['id_admin'] = $tb_admin['id_admin'];
        } else {
            header("Location: ../admin/kasir.php");
            $_SESSION['id_kasir'] = $tb_kasir['id_kasir'];
        }
    } else {
        $update_cus = mysqli_query($koneksi, "INSERT INTO tb_customers(nama_cus, no_meja)VALUES('$nama_user', '$no_meja')");
        if ($update_cus) {
            $dataCus = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT tb_customers.id_cus FROM tb_customers WHERE nama_cus = '$nama_user' AND no_meja = '$no_meja'"));
            $_SESSION['id_cus'] = $dataCus['id_cus'];
            header("location: ../customers/home.php");
        }
    }
}
