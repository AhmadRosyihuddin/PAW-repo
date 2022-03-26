<?php
include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PAW</title>
</head>

<body>
    <?php
    // if (isset($_GET["pesan"]) == 'sukses') {
    //     echo '<script language="javascript"> alert("Berhasil Menambah Data");</script>';
    // }
    $row = select("SELECT * FROM tb_mhs");
    if (count($row)) { ?>
        <table border="5" cellspacing="1" cellpadding="10" style="margin:auto">
            <th colspan="4">Database Mahasiswa</th>
            <th><a href="inputData.php" style="text-decoration: none; color:black;">Tambah</a></th>
            <tr style="font-weight: bold; text-align:center; color:black;">
                <td>NO</td>
                <td>Nama</td>
                <td>NIM</td>
                <td>Alamat</td>
                <td>Opsi</td>
            </tr>

            <?php $i = 1;
            foreach ($row as $data) { ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $data['nama_mhs']; ?></td>
                    <td><?= $data['nim_mhs']; ?></td>
                    <td><?= $data['alamat_mhs']; ?></td>
                    <td><a href="formEdit.php?id_mhs=<?= $data['id_mhs'] ?>" style="text-decoration: none; color:black;">Edit</a> | <a href="hapus.php?id_mhs=<?= $data['id_mhs'] ?>" style="text-decoration: none; color:black;">Hapus</a></td>
                </tr>
            <?php $i++;
            } ?>
        </table>
    <?php } else { ?>
        <table border="5" cellspacing="1" cellpadding="10" style="margin:auto">
            <th colspan="4">Database Mahasiswa</th>
            <th><a href="inputData.php" style="text-decoration: none; color:black;">Tambah</a></th>
            <tr style="font-weight: bold; text-align:center; color:black;">
                <td>NO</td>
                <td>Nama</td>
                <td>NIM</td>
                <td>Alamat</td>
                <td>Opsi</td>
            </tr>
            <tr>
                <td colspan="5" style="text-align: center;">TIDAK ADA DATA MAHASISWA</td>
            </tr>
        </table>
    <?php } ?>
</body>

</html>