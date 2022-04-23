<!-- CDN untuk bisa mengakses sweetalert -->
<script src="vendor/js/sweetalert.js"></script>
<?php
include 'function.php';
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
} else if (isset($_GET['hapus'])) {
    $id_mhs = $_GET["id_mhs"];
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
} else if (isset($_POST['choiceHapus'])) {
    if (choiceDelete($_POST['pilihan'])) { ?>
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
} else if (isset($_POST['edit'])) {
    if (edit($_POST['id_mhs'], $_POST)) { ?>
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
} ?>