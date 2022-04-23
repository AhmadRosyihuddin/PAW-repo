<?php
include "../connect/koneksi.php";
$id_cus = $_GET['id_cus'];
$update = mysqli_query($koneksi, "UPDATE tb_orders SET tb_orders.status = 'Selesai' WHERE id_cus = '$id_cus'");
if ($update) {
    header("Location: ../admin/dashboard.php");
}
