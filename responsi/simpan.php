<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Simpan</title>
	<link rel="stylesheet" href="style.css">
</head>
<body class="card2">
<?php
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$kota = $_POST['kota'];
    $nohp = $_POST['nohp'];
    $prodi = $_POST['prodi'];



	echo "<head><title>Isi Form</title></head>";
	$fp = fopen("data.txt", "a+");
	fputs($fp, "$nim|$nama|$kota|$nohp|$prodi\n");
	fclose($fp);
    echo "Terima Kasih Atas Partisipasi Anda Mengisi Form<br>";
    echo "<a href=main.html> Isi Buku form </a><br>"; 
    echo "<a href=lihat.php> Lihat Daftar </a><br>"; 
?>
	
</body>
</html>