<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Project UTS</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="../vendor/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../vendor/css/style.css" rel="stylesheet" />
</head>

<body>
    <?php include "../nav/navHome.php" ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php
    session_start();
    if (isset($_SESSION["pesan"])) {
        if ($_SESSION["pesan"] == "sukses") { ?>
            <script>
                Swal.fire('SUKSES', 'BERHASIL ORDER', 'success')
            </script>
        <?php unset($_SESSION["pesan"]);
        } elseif ($_SESSION["pesan"] == "gagal") { ?>
            <script>
                Swal.fire('ERROR', 'GAGAL ORDER', 'error')
            </script>
    <?php
            unset($_SESSION["pesan"]);
        }
    }
    ?>

    <main id="main">
        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container">
                <div class="section-title">
                    <form class="form-inline ">
                        <div class="input-field search">
                            <span class="fas fa-search px-2"></span>
                            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                        </div>
                    </form>

                </div>
                <div class="section-title">
                    <div class="input-field kategori">
                        <a href="#"><button class="tombol-kategori">Kategori</button></a>
                        <a href="#"><button class="tombol-kategori">Seafood</button></a>
                        <a href="#"><button class="tombol-kategori">Tawarfood</button></a>
                        <a href="#"><button class="tombol-kategori">Minuman</button></a>
                    </div>
                </div>
                <div class="row">
                    <?php
                    include "../connect/koneksi.php";
                    $menu = mysqli_query($koneksi, "SELECT * FROM tb_menu");
                    while ($row = mysqli_fetch_assoc($menu)) { ?>
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <a href="#idMenu<?= $row['id_menu'] ?>" data-toggle="modal">
                                <div class=" member">
                                    <div class="member-img">
                                        <img src="../assets/menu/<?= $row['foto_menu'] ?>" class="img-fluid" alt="" />
                                    </div>
                                    <div class="row member-info">
                                        <h4><?= $row['nama_menu'] ?></h4>
                                        <span>Rp. <?= $row['harga'] ?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Tambah Modal HTML -->
                        <div id="idMenu<?= $row['id_menu'] ?>" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Silah Masukan Pesanan Anda</h4>
                                        <button type="button" class="btn btn-close" data-dismiss="modal" aria-hidden="true"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="../proses_data/tambah_order.php" method="POST">
                                            <label for="jml_order">Jumlah</label>
                                            <input type="number" class="form-control" name="jml_order">
                                            <input type="hidden" class="form-control" name="id_menu" value="<?= $row['id_menu'] ?>">
                                            <button type="submit" name="kirim" class="btn btn-primary" style="margin-top:2%; margin-bottom : 2%;">Tambah</button>
                                        </form>
                                        <div class="modal-footer">
                                            <input type="button" class="btn btn-danger" data-dismiss="modal" value="Close" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </section>
        <!-- End Team Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Join Our Newsletter</h4>
                        <p>
                            Tamen quem nulla quae legam multos aute sint culpa legam noster
                            magna
                        </p>
                        <form action="" method="post">
                            <input type="email" name="email" /><input type="submit" value="Subscribe" />
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Butterfly</h3>
                        <p>
                            A108 Adam Street <br />
                            New York, NY 535022<br />
                            United States <br /><br />
                            <strong>Phone:</strong> +1 5589 55488 55<br />
                            <strong>Email:</strong> info@example.com<br />
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">Home</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">About us</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">Services</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Terms of service</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Privacy policy</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">Web Design</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Web Development</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Product Management</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">Marketing</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Graphic Design</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>
                            Cras fermentum odio eu feugiat lide par naso tierra videa magna
                            derita valies
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Butterfly</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>