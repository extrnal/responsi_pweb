<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body class="card2">
<div class="wf">
<?php
echo "<center><h1>Daftar yang Mengisi</h1></center>";
echo "<center><a href=main.html> Kembali Isi Form	 </a></center>"; 
echo "<hr></hr>";
$fp = fopen("data.txt","r"); 
echo "<center><table border=1>"; 
$tanggal = date("Y-m-D");
while ($isi = fgets($fp)) 
{ 
	$pisah = explode("|",$isi); 
	echo "<tr><td> $tanggal</td>"; 
	echo "<td>   $pisah[0]      </td>"; 
	echo "<td>   $pisah[1]      </td>"; 
	echo "<td>   $pisah[2]      </td>";
    echo "<td>   $pisah[3]      </td>";
    echo "<td>   $pisah[4]      </td></tr>";
} 
echo "</table></center>"; 

?>
</div>
	
</body>
</html>

