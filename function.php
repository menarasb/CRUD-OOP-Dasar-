<?php

class kantin{

    function nm_kantin($nama_kantin){
        return $nama_kantin;
    }

    function riwayat(){
        global $koneksi;
        $data = $koneksi->query("SELECT * FROM kantin ORDER BY tanggal_beli ASC");  
        if($data->num_rows){
            while ($d = mysqli_fetch_array($data)){
                $hasil[] = $d;         
            }    
            return $hasil;    
        } else {
            echo "Belum ada Riwayat";
        }    
                  
    }

    function riwayat_data($id){
        global $koneksi;
        $data = $koneksi->query("SELECT * FROM kantin WHERE id = '$id'");
        $d = mysqli_fetch_array($data);
		return $d;
    }

    function riwayat_add($nama_makanan,$harga,$tanggal_beli){
        global $koneksi;
        $koneksi->query("INSERT INTO kantin VALUES ('','$nama_makanan','$harga','$tanggal_beli')");
    }

    function riwayat_edit($id,$nama_makanan,$harga,$tanggal_beli){
        global $koneksi;
        $koneksi->query("UPDATE kantin SET nama_makanan = '$nama_makanan', harga = '$harga', tanggal_beli = '$tanggal_beli' WHERE id = '$id' ");
    }

    function riwayat_del($id){
        global $koneksi;
        $koneksi->query("DELETE  FROM kantin WHERE id = '$id'");
    }

    function total_harga(){
        global $koneksi;
        $data = $koneksi->query("SELECT sum(harga) as total_harga FROM kantin");
        $d = mysqli_fetch_array($data);
        echo $d['total_harga'];
    }

}