<?php
include "koneksi.php";
include "function.php";
$kantin = new kantin();
?>
<html>

<head>
    <title>Riwayat</title>
</head>

<body>
    <a href="riwayat_add.php">Tambah Riwayat</a> | <a href="index.php">Back</a>
    <table border="1">
        <tr>
            <td>Nama Makanan/Minuman</td>
            <td>Harga</td>
            <td>Tanggal Beli</td>
            <td>***</td>
        </tr>
        <?php 
            $riwayat = $kantin->riwayat();
            if(!empty($riwayat)){
            foreach($riwayat as $d){ ?>
        <tr>
            <td><?= $d['nama_makanan'];?></td>
            <td>Rp <?= $d['harga'];?></td>
            <td><?= $d['tanggal_beli'];?></td>
            <td><a href="riwayat_edit.php?aksi=riwayat_edit&id=<?= $d['id'];?>">Edit</a> | <a href="proses.php?aksi=riwayat_del&id=<?= $d['id'];?>">Delete</a></td>
        </tr>
        <?php } }?>
        <tr>
            <td>Total Harga</td>
            <td colspan="3">Rp <?php $kantin->total_harga();?></td>
        </tr>
        
    </table>
</body>

</html>