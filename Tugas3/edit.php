<?php
include "function.php";
$edit = edit($_GET['id_mhs'], $_POST);
if ($edit) {
    header("Location: index.php?pesan=sukses");
} else {
    header("Location: index.php?pesan=sukses");
}
