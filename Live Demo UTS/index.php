<?php
include 'function.php';
if (isset($_GET['hapus'])) {
    $hapus = delete($_GET['hapus']);
    if ($hapus) {
        echo "<script>alert('Data Berhasil Di hapus')</script>";
    }
} else if (isset($_GET['tambah'])) {
    echo "<script>alert('Data Berhasil Di Tambah')</script>";
} else if (isset($_GET['edit'])) {
    if ($_GET['edit'] == 'false') {
        echo "<script>alert('Data Gagal Di Edit')</script>";
    } else {
        echo "<script>alert('Data Berhasil Di Edit')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Demo UTS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container" style="margin-top: 20px;">
        <table class="table">
            <thead>
                <a href="tambah_data.php" class="btn btn-primary" style="margin: 10px; color: white;">Tambah Data</a>
                <th>id</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </thead>
            <tbody>
                <?php
                $data = select("SELECT * FROM tbl_rosik ");
                foreach ($data as $row) { ?>
                    <tr>
                        <td><?= $row['id_rosik'] ?></td>
                        <td><?= $row['nama_rosik'] ?></td>
                        <td><?= $row['email_rosik'] ?></td>
                        <td><?= $row['alamat_rosik'] ?></td>
                        <td>
                            <a href="edit_data.php?id_rosik=<?= $row['id_rosik'] ?>" class="btn btn-primary">Edit</a>
                            <a href="index.php?hapus=<?= $row['id_rosik'] ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>