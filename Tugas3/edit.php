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
    <?php
    $row = select("SELECT * FROM tb_mhs WHERE id_mhs = '$id_mhs'");
    if (isset($_POST['ubah'])) {
        $edit = edit($_GET['id_mhs'], $_POST);
        if ($edit) { ?>
            <script language="javascript">
                alert('Data Berhasil Di Ubah');
                document.location = 'index.php';
            </script>
        <?php } else { ?>
            <script language="javascript">
                alert('Data Gagal Di Ubah');
                document.location = 'index.php';
            </script>
    <?php }
    }
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
                <td align="right"><button type="submit" name="ubah">UBAH</button></td>
            </tr>
        </table>
    </form>
</body>

</html>