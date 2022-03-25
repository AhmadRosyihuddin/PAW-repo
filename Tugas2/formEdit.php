<?php
include 'function.php';
$id_mhs = $_GET['id_mhs'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UBAH DATA</title>
</head>

<body>
    <form action="edit.php?id_mhs=<?= $id_mhs ?>" method="POST">
        <table align="center">
            <tr>
                <td><label>Nama</label></td>
                <td>: <input type="text" name="nama_mhs" placeholder="Nama"><br></td>
            </tr>
            <tr>
                <td> <label>NIM</label></td>
                <td>: <input type="text" name="nim_mhs" placeholder="NIM"><br></td>
            </tr>
            <tr>
                <td><label>Alamat</label></td>
                <td>: <input type="text" name="alamat_mhs" placeholder="Alamat"><br></td>
            </tr>
            <tr>
                <td align="right"><a href="index.php"><button type="button" name="ubah">KEMBALI</button></a></td>
                <td align="right"><button type="submit" name="ubah">UBAH</button></td>
            </tr>
        </table>
    </form>
</body>

</html>