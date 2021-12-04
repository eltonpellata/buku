<?php 
	
	include"koneksi.php";
	include"phpqrcode/qrlib.php";
	$folderTemp = "el/";
	$a = $_POST['id_nama'];
	$b = $_POST['jk'];
	$c = $a;
	$d = $a.".png";
	$qual = 'H';
	$ukuran = 6;
	$padding = 0;
	QRCode :: png($c, $folderTemp.$d,$qual,$ukuran,$padding);
	$sql = $conn->query("INSERT INTO tbbuku VALUES('$a','$b','$d')");
	if($sql){

		echo "Berhasil";
	}else{
		echo "Gagal";
		die($conn->error);
	}


 ?> 