<?php
include "../connect/koneksi.php";
$data_cus = mysqli_query($koneksi, "SELECT * FROM DisplayOrder");
while ($row = mysqli_fetch_assoc($data_cus)) : ?>
    <tr>
        <td><?= $row["nama_cus"] ?></td>
        <td><?= $row["no_meja"] ?></td>
        <td>
            <a href="#detailPesanan<?= $row['id_cus'] ?>" data-toggle="modal">Lihat Detail Pesanan</a>
            <!-- Tambah Modal HTML -->
            <div id="detailPesanan<?= $row['id_cus'] ?>" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Detail Pesanan</h4>
                            <button type="button" class="btn btn-close" data-dismiss="modal" aria-hidden="true">X</button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped table-bordered">
                                <th>Nama Makanan</th>
                                <th>Jumlah Order</th>
                                <?php
                                $id_cus = $row['id_cus'];
                                $data_order = mysqli_query($koneksi, "SELECT * FROM DisOrderDetail WHERE id_cus = '$id_cus'");
                                while ($order = mysqli_fetch_assoc($data_order)) { ?>
                                    <tr>
                                        <td>
                                            <?= $order['nama_menu'] ?>
                                        </td>
                                        <td>
                                            <?= $order['jml_order'] ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-danger" data-dismiss="modal" value="Close" />
                            </div>
                        </div>
                    </div>
                </div>
        </td>
    </tr>
<?php
endwhile;
?>