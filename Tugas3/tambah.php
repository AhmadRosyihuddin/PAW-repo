<?php include 'function.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>

<body>
    <!-- CDN untuk bisa mengakses sweetalert -->
    <script src="vendor/js/sweetalert.js"></script>

    <?php
    // cek jika terdapat POST submit maka akan di lakukan penambahan data
    if (isset($_POST['submit'])) {
        $tambah = tambahData($_POST);
        if ($tambah) { ?>
            <script language="javascript">
                Swal.fire({
                    title: 'SUKSES',
                    text: 'DATA BERHASIL DI TAMBAHKAN',
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
                    text: 'DATA GAGAL DI TAMBAHKAN',
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
    ?>
    <form action="" method="POST">
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
                <td align="right"><a href="index.php"><button type="button" name="kembali">KEMBALI</button></a></td>
                <td align="right"><button type="submit" name="submit">Tambah</button></td>
            </tr>
        </table>
    </form>
</body>

</html>