<?php
include 'function.php';
$id_mhs = $_GET["id_mhs"];

if (delete($id_mhs)) {
    header("Location: index.php?pesan=sukses");
} else {
    header("Location: index.php?pesan=gagal");
}
