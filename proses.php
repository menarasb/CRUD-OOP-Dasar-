<?php
include 'koneksi.php';
include 'function.php';
$kantin = new kantin();

if($_GET['aksi']=="riwayat_add"){
    $kantin->riwayat_add($_POST['nama_makanan'],$_POST['harga'],$_POST['tanggal_beli']);
    header("location:riwayat.php");
} else if($_GET['aksi']=="riwayat_edit"){
    $kantin->riwayat_edit($_GET['id'],$_POST['nama_makanan'],$_POST['harga'],$_POST['tanggal_beli']);
    header("location:riwayat.php");
} else if ($_GET['aksi']=="riwayat_del"){
    $kantin->riwayat_del($_GET['id']);
    header("location:riwayat.php");    
}