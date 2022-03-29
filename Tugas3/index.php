<?php
include 'function.php';
$id_mhs = $_GET["id_mhs"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PAW</title>
    <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
    <script type="text/javascript" src="vendor/js/awesome.js"></script>
    <script type="text/javascript" src="vendor/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- CDN untuk bisa mengakses sweetalert -->
    <script src="vendor/js/sweetalert.js"></script>

    <?php
    // cek di url jika ada hapus maka akan di lakukan penghapusan
    if (isset($_GET['hapus'])) {
        if (delete($id_mhs)) { ?>
            <script language="javascript">
                Swal.fire({
                    title: 'SUKSES',
                    text: 'DATA BERHASIL DI HAPUS',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.location = "index.php"
                    }
                })
            </script>
        <?php } else { ?>
            <script language="javascript">
                document.location = 'index.php';
                Swal.fire({
                    title: 'GAGAL',
                    text: 'DATA GAGAL DI HAPUS',
                    icon: 'error',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.location = "index.php"
                    }
                })
            </script>
        <?php }
    }
    $row = select("SELECT * FROM tbl_126");
    if (count($row)) { ?>
        <table class="table table-hover table-primary" style="text-align:center;">
            <th colspan="4">Database Mahasiswa</th>
            <th>
                <a href="tambah.php" style="text-decoration: none; color:black; ">
                    <button type="button" class="btn btn-primary">
                        <i class="fa-solid fa-file-circle-plus"></i>
                    </button>
                </a>
            </th>
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
                    <td>
                        <a href="edit.php?id_mhs=<?= $data['id_mhs'] ?>" style="text-decoration: none; color:black;">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>|
                        <a href="index.php?id_mhs=<?= $data['id_mhs'] ?>&hapus=''" style="text-decoration: none; color:black;">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </td>
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