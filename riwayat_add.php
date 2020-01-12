<html>

<head>
    <tltle></tltle>
</head>

<body>
    <h3>Tambah Data</h3>

    <form action="proses.php?aksi=riwayat_add" method="post">

        <table>
            <tr>
                <td>Nama Makanan</td>
                <td><input type="text" name="nama_makanan"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Tanggal Beli</td>
                <td><input type="date" name="tanggal_beli"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>

</html>