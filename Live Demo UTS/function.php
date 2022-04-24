<?php
// mengkoneksikan ke database
$koneksi = mysqli_connect('localhost', 'root', '', 'db_126');
// if ($koneksi) {
//     echo "Koneksi Berhasil";
// } else {
//     echo "Koneksi Gagal";
// }

//fungsion select
function select($query)
{
    global $koneksi; // membuat variabel koneksi mennjadi global
    $data = mysqli_query($koneksi, $query);
    $rows = []; // menyimpan semua data ke dalam array
    while ($row = mysqli_fetch_assoc($data)) {
        $rows[] = $row;
    }
    return $rows;
}

// function delete data
function delete($id)
{
    global $koneksi; // membuat variabel koneksi mennjadi global
    $data = mysqli_query($koneksi, "DElETE FROM tbl_rosik WHERE id_rosik=$id");

    return mysqli_affected_rows($koneksi);
}

// function untuk menambahkan data ke tabel
function tambahData($value)
{
    global $koneksi; // membuat variabel koneksi mennjadi global
    $nama = $value['nama'];
    $email = $value['email'];
    $alamat = $value['alamat'];
    $tambah = mysqli_query($koneksi, "INSERT INTO tbl_rosik(nama_rosik, email_rosik, alamat_rosik) VALUES('$nama', '$email', '$alamat')");
    return mysqli_affected_rows($koneksi);
}

// function untuk merubah/edit data
function edit($id_rosik, $value)
{
    global $koneksi; // membuat variabel koneksi mennjadi global
    $id = $value['id'];
    $nama = $value['nama'];
    $email = $value['email'];
    $alamat = $value['alamat'];
    if ($id == $id_rosik) {
        $update = mysqli_query($koneksi, "UPDATE tbl_rosik SET nama_rosik='$nama', email_rosik='$email', alamat_rosik='$alamat' WHERE id_rosik = '$id_rosik'");
    } else {
        if (mysqli_num_rows(mysqli_query($koneksi, "SELECT id_rosik FROM tbl_rosik WHERE id_rosik = '$id'"))) {
            return False;
        } else {
            $update = mysqli_query($koneksi, "UPDATE tbl_rosik SET id_rosik=$id, nama_rosik='$nama', email_rosik='$email', alamat_rosik='$alamat' WHERE id_rosik = '$id_rosik'");
        }
    }
    return mysqli_affected_rows($koneksi);
}
