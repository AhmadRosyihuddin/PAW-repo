<?php
// mengkoneksikan ke database
$koneksi = mysqli_connect('localhost', 'root', '', 'db_mahasiswa');
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
    // mengambil data satu persatu dan di tambah kan ke array
    if ($a = mysqli_num_rows($data) > 1) {
        while ($row = mysqli_fetch_assoc($data)) {
            $rows[] = $row;
        }
        return $rows;
    } else {
        return mysqli_fetch_assoc($data);
    }
}

// function delete data
function delete($id)
{
    global $koneksi; // membuat variabel koneksi mennjadi global
    $data = mysqli_query($koneksi, "DElETE FROM tb_mhs WHERE id_mhs=$id");

    return mysqli_affected_rows($koneksi);
}


function tambahData($value)
{
    global $koneksi; // membuat variabel koneksi mennjadi global
    $nama_mhs = $value['nama_mhs'];
    $nim_mhs = $value['nim_mhs'];
    $alamat_mhs = $value['alamat_mhs'];
    $tambah = mysqli_query($koneksi, "INSERT INTO tb_mhs(nama_mhs, nim_mhs, alamat_mhs) VALUES('$nama_mhs', '$nim_mhs', '$alamat_mhs')");
    return mysqli_affected_rows($koneksi);
}
function edit($id_mhs, $value)
{
    global $koneksi; // membuat variabel koneksi mennjadi global
    $nama_mhs = $value['nama_mhs'];
    $nim_mhs = $value['nim_mhs'];
    $alamat_mhs = $value['alamat_mhs'];
    $update = mysqli_query($koneksi, "UPDATE tb_mhs SET nama_mhs='$nama_mhs', nim_mhs='$nim_mhs', alamat_mhs='$alamat_mhs' WHERE id_mhs = '$id_mhs'");
    return mysqli_affected_rows($koneksi);
}
