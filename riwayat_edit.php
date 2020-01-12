<?php 
include "koneksi.php";
include "function.php";
$kantin = new kantin();
$q = $kantin->riwayat_data($_GET['id']);
?>
<html>

<head>
    <tltle></tltle>
</head>

<body>
    <h3>Edit Data</h3>
    <form action="proses.php?aksi=riwayat_edit&id=<?= $q['id'];?>" method="post">
        <table>
            <tr>
                <td>Nama Makanan</td>
                <td><input type="text" name="nama_makanan" value="<?= $q['nama_makanan'];?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" value="<?= $q['harga'];?>"></td>
            </tr>
            <tr>
                <td>Tanggal Beli</td>
                <td><input type="date" name="tanggal_beli" value="<?= $q['tanggal_beli'];?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>

</html>