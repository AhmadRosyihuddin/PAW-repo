<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Index1</title>
	<link rel="stylesheet" href="vendor/css/bootstrap.min.css" />
	<link rel="stylesheet" href="vendor/css/style.css" />
	<link rel="stylesheet" href="vendor/css/material.css" />
	<script src="vendor/js/popper.min.js"></script>
	<script src="vendor/js/jquery.min.js"></script>
</head>

<body>
	<?php include 'alert.php'; ?>
	<div class="container-xl">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-sm-6">
							<h2>Tugas PAW 3 <b>Database Mahasiswa</b></h2>
						</div>
						<div class="col-sm-6">
							<a href="#tambahData" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Tambah Data</span></a>
							<a href="#hapusData" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Hapus</span></a>
						</div>
					</div>
				</div>
				<?php $row = select("SELECT * FROM tbl_126");
				if (count($row)) { ?>
					<form method="POST">
						<table class="table table-striped table-hover table-bordered">
							<thead>
								<tr>
									<th>
										<span class="custom-checkbox">
											<input type="checkbox" id="selectAll" />
											<label for="selectAll"></label>
										</span>
									</th>
									<th>Nama</th>
									<th>NIM</th>
									<th>Alamat</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($row as $data) { ?>
									<tr>
										<td>
											<span class="custom-checkbox">
												<input type="checkbox" id="<?= $data['id_mhs'] ?>" name="pilihan[]" value="<?= $data['id_mhs'] ?>" />
												<label for="<?= $data['id_mhs'] ?>"></label>
											</span>
										</td>
										<td><?= $data['nama_mhs']; ?></td>
										<td><?= $data['nim_mhs']; ?></td>
										<td><?= $data['alamat_mhs']; ?></td>
										<td>
											<a href="#editData<?= $data['id_mhs'] ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
											<a href="index.php?id_mhs=<?= $data['id_mhs'] ?>&hapus=''"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>

											<!-- Edit Modal HTML -->
											<div id="editData<?= $data['id_mhs'] ?>" class="modal fade">
												<div class="modal-dialog">
													<div class="modal-content">
														<form method="POST">
															<div class="modal-header">
																<h4 class="modal-title">Edit Data</h4>
																<button type="button" class="btn-close" data-dismiss="modal" aria-hidden="true"></button>
															</div>
															<div class="modal-body">
																<input type="hidden" name="id_mhs" value="<?= $data['id_mhs'] ?>">
																<div class="form-group">
																	<label>Name</label>
																	<input type="text" class="form-control" name="nama_mhs" value="<?= $data['nama_mhs']; ?>" required />
																</div>
																<div class="form-group">
																	<label>NIM</label>
																	<input type="text" class="form-control" name="nim_mhs" value="<?= $data['nim_mhs']; ?>" required />
																</div>
																<div class="form-group">
																	<label>Alamat</label>
																	<textarea class="form-control" name="alamat_mhs" required><?= $data['alamat_mhs']; ?></textarea>
																</div>
															</div>
															<div class="modal-footer">
																<input type="button" class="btn btn-default" data-dismiss="modal" value="Batal" />
																<input type="submit" class="btn btn-success" value="edit" name="edit" />
															</div>
														</form>
													</div>
												</div>
											</div>
											<!-- End Of Modal Edit -->
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					<?php } else { ?>
						<table class="table table-striped table-hover table-bordered">
							<thead>
								<tr>
									<th>
										<span class="custom-checkbox">
											<input type="checkbox" id="selectAll" />
											<label for="selectAll"></label>
										</span>
									</th>
									<th>Nama</th>
									<th>NIM</th>
									<th>Alamat</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td colspan="5" style="text-align: center;">TIDAK ADA DATA MAHASISWA</td>
								</tr>
							</tbody>
						</table>
					<?php } ?>

					<div class="clearfix">
						<div class="hint-text">
							Showing <b>5</b> out of <b>25</b> entries
						</div>
						<ul class="pagination">
							<li class="page-item disabled"><a href="#">Previous</a></li>
							<li class="page-item"><a href="#" class="page-link">1</a></li>
							<li class="page-item"><a href="#" class="page-link">2</a></li>
							<li class="page-item active">
								<a href="#" class="page-link">3</a>
							</li>
							<li class="page-item"><a href="#" class="page-link">4</a></li>
							<li class="page-item"><a href="#" class="page-link">5</a></li>
							<li class="page-item"><a href="#" class="page-link">Next</a></li>
						</ul>
					</div>
					<!-- Delete Modal HTML -->
					<div id="hapusData" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Delete Data</h4>
									<button type="button" class="btn-close" data-dismiss="modal" aria-hidden="true"></button>
								</div>
								<div class="modal-body">
									<p>Apakah Kamu Yakin Mau menghapus Data ini?</p>
									<p class="text-warning">
										<small>Jika anda menghapus data ini maka anda tidak dapat mengembalikan nya</small>
									</p>
								</div>
								<div class="modal-footer">
									<input type="button" class="btn btn-default" data-dismiss="modal" value="Batal" />
									<input type="submit" class="btn btn-danger" value="Hapus" name="choiceHapus" />
								</div>
							</div>
						</div>
					</div>
					</form>
			</div>
		</div>
	</div>
	<!-- Tambah Modal HTML -->
	<div id="tambahData" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST">
					<div class="modal-header">
						<h4 class="modal-title">Tambah Data</h4>
						<button type="button" class="btn-close" data-dismiss="modal" aria-hidden="true"></button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" name="nama_mhs" required />
						</div>
						<div class="form-group">
							<label>NIM</label>
							<input type="text" class="form-control" name="nim_mhs" required />
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<textarea class="form-control" name="alamat_mhs" required></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Batal" />
						<input type="submit" class="btn btn-success" value="Tambah" name="submit" />
					</div>
				</form>
			</div>
		</div>
	</div>



	<script src="vendor/js/main.js"></script>
	<script src="vendor/js/bootstrap.min.js"></script>
</body>

</html>