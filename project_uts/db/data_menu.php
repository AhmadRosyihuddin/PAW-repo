<?php
include "../connect/koneksi.php";
$tb_menu = mysqli_query($koneksi, "SELECT * FROM tb_menu");
while ($row = mysqli_fetch_assoc($tb_menu)) : ?>
    <tr>
        <td class="d-flex justify-content-center"><img src="../assets/menu/<?= $row['foto_menu'] ?>" style="width: 200px; height: 200px;"></td>
        <td><?= $row["nama_menu"] ?></td>
        <td><?= $row["des_menu"] ?></td>
        <td><?= $row["jml_stock"] ?></td>
        <td><?= $row["harga"] ?></td>
        <td>
            <a href="../proses_data/hapus_menu.php?id_menu=<?= $row['id_menu'] ?>" class=" btn btn-danger">Hapus</a>
            <a href="../form_input/input_edit.php?id_menu=<?= $row['id_menu'] ?>" class="btn btn-primary">Edit</a>
        </td>
    </tr>
<?php
endwhile;
?>