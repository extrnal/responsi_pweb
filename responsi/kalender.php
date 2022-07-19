
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tanggal</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
<?php
    $hari = date("d");
    $bulan = date("m");
    $tahun = date("Y");
    $jumlahH = date("t", mktime(0,0,0,$bulan,$hari,$tahun));
?>

<?php
switch ($bulan)
{
    case 1 : $nmbulan = "Jan"; break;
    case 2 : $nmbulan = "Feb"; break;
    case 3 : $nmbulan = "Mar"; break;
    case 4 : $nmbulan = "Apr"; break;
    case 5 : $nmbulan = "Mei"; break;
    case 6 : $nmbulan = "Jun"; break;
    case 7 : $nmbulan = "Jul"; break;
    case 8 : $nmbulan = "Agu"; break;
    case 9 : $nmbulan = "Sep"; break;
    case 10 : $nmbulan = "Okt"; break;
    case 11 : $nmbulan = "Nov"; break;
    case 12 : $nmbulan = "Des"; break;
}

echo "<center><h1>$nmbulan $tahun </h1></center>";
?>

<br>
<div class="wf">
<table style="border:1px solid black" align="center" cellpadding = "10">
<tr style="background-color: #ADD8E6;">
    <td align="center"><font color = "FF0000">Min</font></td>   
    <td align="center">Sen</td>
    <td align="center">Sel</td>
    <td align="center">Rab</td>
    <td align="center">Kam</td>
    <td align="center">Jum</td>
    <td align="center">Sab</td>
</tr>
</div>

<?php 
$hariini = date("d");
$s=date ("w", mktime(0,0,0,$bulan,1,$tahun));
for ($ds=1; $ds<=$s;$ds++)
{
    echo"<td></td>";
}

for ($d=1; $d <= $jumlahH; $d++)
{
    if (date("w", mktime(0,0,0,$bulan,$d,$tahun))==0)
    {
        echo"<tr>";
    }
        $warna = "#000000";
        $sel = "#ffffff";
    if(date ("l",mktime(0,0,0,$bulan,$d,$tahun))=="Sunday")
    {
        $warna = "#FF0000";
    }
    if($hariini == $d)
    {
        $warna = "blue";
        $sel = "coral";
    }
    echo"<td align=center valign=middle bgcolor=$sel> <span style=\"color:$warna\">$d</span></td>";

    if (date("w",mktime(0,0,0,$bulan,$d,$tahun))==6)
    {
        echo "</tr>";
    }
}

echo "</table>";
echo "<center><a href=index.html>Kembali</a></center>";
?>
    
</body>
</html>