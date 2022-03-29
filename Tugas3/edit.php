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
    <!-- CDN untuk bisa mengakses sweetalert -->
    <script src="vendor/js/sweetalert.js"></script>
    <?php
    // cek jika terdapat POST edit maka hasil dari edit tadi akan di rubah
    if (isset($_POST['edit'])) {
        $edit = edit($_GET['id_mhs'], $_POST);
        if ($edit) { ?>
            <script language="javascript">
                Swal.fire({
                    title: 'SUKSES',
                    text: 'DATA BERHASIL DI EDIT',
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
                    text: 'DATA GAGAL DI EDIT',
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
    $row = select("SELECT * FROM tbl_126 WHERE id_mhs = '$id_mhs'");
    ?>
    <form action="" method="POST">
        <table align="center">
            <tr>
                <td><label>Nama</label></td>
                <td>: <input type="text" name="nama_mhs" placeholder="Nama" value="<?= $row['nama_mhs'] ?>"><br></td>
            </tr>
            <tr>
                <td> <label>NIM</label></td>
                <td>: <input type="text" name="nim_mhs" placeholder="NIM" value="<?= $row['nim_mhs'] ?>"><br></td>
            </tr>
            <tr>
                <td><label>Alamat</label></td>
                <td>: <input type="text" name="alamat_mhs" placeholder="Alamat" value="<?= $row['alamat_mhs'] ?>"><br></td>
            </tr>
            <tr>
                <td align="right"><a href="index.php"><button type="button" name="kembali">KEMBALI</button></a></td>
                <td align="right"><button type="submit" name="edit">UBAH</button></td>
            </tr>
        </table>
    </form>
</body>

</html>