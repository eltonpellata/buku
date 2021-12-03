<?php
// koneksi data base
$conn = mysqli_connect("localhost", "root", "", "buku");

// cara munculkan data base ke tabel dengan cara meluping

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

//cara buat tambah data
function tambah($data)
{
    global $conn;
    $nama = htmlspecialchars($data["id_nama"]);
    $jk = htmlspecialchars($data["jk"]);
    $jabatan = htmlspecialchars($data["jabatan"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $notlp = htmlspecialchars($data["notlp"]);
    $id_tglb = htmlspecialchars($data["id_tglb"]);
    $keperluan = htmlspecialchars($data["keperluan"]);


    // query buat tambah data
    $query = "INSERT INTO tbbuku
            VALUES
                ('','$nama','$jk','$jabatan','$alamat','$notlp','$keperluan','$id_tglb') 
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tbbuku WHERE id = $id");
    return mysqli_affected_rows($conn);
}
