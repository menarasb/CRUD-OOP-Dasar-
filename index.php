<?php 
include "koneksi.php";
include "function.php";
$kantin = new kantin;
?>
<html>
<head>
    <title><?= $kantin->nm_kantin("Kantin Mbak Anti & Bu Misrun");?> </title>
</head>

<body>
    <h1><?= $kantin->nm_kantin("Kantin Mbak Anti & Bu Misrun");?> </h1>
    <h2>Utang yang Belum Dibayar</h2>
    <h3>Total : Rp <?php $kantin->total_harga();?></h3>
    <p><a href="riwayat.php">Riwayat Beli</a></p>
</body>

</html>