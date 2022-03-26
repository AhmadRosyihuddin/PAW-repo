<?php
include 'function.php';
$id_mhs = $_GET["id_mhs"];
if (delete($id_mhs)) { ?>
    <script language="javascript">
        alert('Data Berhasi Di Hapus');
        document.location = 'index.php';
    </script>
<?php } else { ?>
    <script language="javascript">
        alert('Data Gagal Di Hapus');
        document.location = 'index.php';
    </script>
<?php } ?>