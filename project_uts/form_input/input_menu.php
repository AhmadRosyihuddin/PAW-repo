<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Dashboard</title>
    <link href="../vendor/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="images/logo.png" type="image/png">
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="../vendor/js/jquery.min.js"></script>
</head>

<body>
    <?php include "../nav/navbar_admin.php"; ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Awal Isi Konten -->
    <div class="container-fluid">
        <!-- Halaman kepala -->
        <h1 class="h3 mb-2 text-gray-800">Dashboard</h1>
        <!-- Data Tabel -->
        <div class="card shadow mb-4">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Menu</h6>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="../proses_data/tambah_menu.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="input_nama_menu" class="col-sm-2 col-form-label">Nama Menu</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="input_nama_menu" placeholder="Nama Menu" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input_des_menu" class="col-sm-2 col-form-label">Deskripsi Menu</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="input_des_menu" placeholder="Deskripsi Menu" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input_stock" class="col-sm-2 col-form-label">Stock</label>
                            <div class="col-md-3">
                                <input type="number" class="form-control" name="input_stock" Value="0" min="1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input_harga" class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-md-3">
                                <input type="number" class="form-control" name="input_harga" Value="0" min="1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input_foto" class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-md-3">
                                <input type="file" accept="image/*" class="form-control" name="foto">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary" name="tambah_menu">Tambah</button>
                                <a href="../admin/menu.php"><button type="button" class="btn btn-danger" name="batal">Batal</button></a>
                            </div>
                        </div>
                        <?php

                        if (isset($_SESSION["pesan"])) {
                            if ($_SESSION["pesan"] == "sukses") { ?>
                                <script>
                                    Swal.fire('SUKSES', 'MENU BERHASIL DI TAMBAHKAN', 'success')
                                </script>
                            <?php unset($_SESSION["pesan"]);
                            } elseif ($_SESSION["pesan"] == "gagal") { ?>
                                <script>
                                    Swal.fire('ERROR', 'MENU GAGAL DI TAMBAHKAN', 'error')
                                </script>
                        <?php
                                unset($_SESSION["pesan"]);
                            }
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Safari Hotel 2021</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</body>

</html>