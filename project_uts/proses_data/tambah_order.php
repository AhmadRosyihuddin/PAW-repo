<?php
include '../connect/koneksi.php';
session_start();
$jml_order = $_POST['jml_order'];
$id_menu = $_POST['id_menu'];
$tgl = date("Y-m-d h:m:s");
$id_cus = $_SESSION['id_cus'];
$tambahOrder = mysqli_query($koneksi, "INSERT INTO tb_orders (id_cus, tgl_order, status) VALUES ('$id_cus', '$tgl', 'Pending');");
if ($tambahOrder) {
    $idOrder = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT order_num FROM tb_orders WHERE tb_orders.id_cus = '$id_cus' ORDER BY order_num DESC LIMIT 1"));
    $order_num = $idOrder['order_num'];
    $tambahOrderDetail = mysqli_query($koneksi, "INSERT INTO tb_orderDetails(order_num, id_menu, jml_order, total_harga) VALUES('$order_num','$id_menu', '$jml_order', NULL )");

    if ($tambahOrderDetail) {
        $dataHarga = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT tb_menu.harga FROM tb_menu WHERE tb_menu.id_menu='$id_menu'"));
        $totalHarga = $dataHarga['harga'] * $jml_order;
        echo $totalHarga;
        $update = mysqli_query($koneksi, "UPDATE tb_orderDetails SET total_harga=$totalHarga");
        if ($update) {
            $_SESSION["pesan"] = 'sukses';
            header("location: ../customers/home.php");
        } else {
            $_SESSION["pesan"] = 'sukses';
            header("location: ../customers/home.php");
        }
    }
}
