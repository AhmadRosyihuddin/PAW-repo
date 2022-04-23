<?php
// mengkoneksikan ke database
$koneksi = mysqli_connect('localhost', 'root', '', 'db_rosik1');
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
    $data = mysqli_query($koneksi, "DElETE FROM tbl_126 WHERE id_mhs=$id");

    return mysqli_affected_rows($koneksi);
}

// function untuk menambahkan data ke tabel
function tambahData($value)
{
    global $koneksi; // membuat variabel koneksi mennjadi global
    $nama_mhs = $value['nama_mhs'];
    $nim_mhs = $value['nim_mhs'];
    $alamat_mhs = $value['alamat_mhs'];
    $tambah = mysqli_query($koneksi, "INSERT INTO tbl_126(nama_mhs, nim_mhs, alamat_mhs) VALUES('$nama_mhs', '$nim_mhs', '$alamat_mhs')");
    return mysqli_affected_rows($koneksi);
}

// function untuk merubah/edit data
function edit($id_mhs, $value)
{
    global $koneksi; // membuat variabel koneksi mennjadi global
    $nama_mhs = $value['nama_mhs'];
    $nim_mhs = $value['nim_mhs'];
    $alamat_mhs = $value['alamat_mhs'];
    $update = mysqli_query($koneksi, "UPDATE tbl_126 SET nama_mhs='$nama_mhs', nim_mhs='$nim_mhs', alamat_mhs='$alamat_mhs' WHERE id_mhs = '$id_mhs'");
    return mysqli_affected_rows($koneksi);
}

function choiceDelete($pilihan)
{
    global $koneksi;
    foreach ($pilihan as $id_mhs) {
        $delete = mysqli_query($koneksi, "DElETE FROM tbl_126 WHERE id_mhs=$id_mhs");
    }
    return mysqli_affected_rows($koneksi);
}
