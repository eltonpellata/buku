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
    include"phpqrcode/qrlib.php";
    global $conn;
    $nama = htmlspecialchars($data["id_nama"]);
    $jk = htmlspecialchars($data["jk"]);
    $jabatan = htmlspecialchars($data["jabatan"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $notlp = htmlspecialchars($data["notlp"]);
     $keperluan = htmlspecialchars($data["keperluan"]);
    $id_tglb = htmlspecialchars($data["id_tglb"]);
   
    $folderTemp = "el/";
    $dio = $nama;
    $elton = $nama.".png";
    $qual = 'H';
    $ukuran = 6;
    $padding = 0;
    QRCode :: png($dio, $folderTemp.$elton,$qual,$ukuran,$padding);
    // query buat tambah data
    $query = "INSERT INTO tbbuku
            VALUES
                ('','$dio','$jk','$jabatan','$alamat','$notlp','$keperluan','$elton','$id_tglb') 
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
