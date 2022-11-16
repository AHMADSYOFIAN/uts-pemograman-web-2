<?php

$id_barang=$_POST['id_barang'];
$kode=$_POST['kode'];
$nama=$_POST['nama'];
$satuan=$_POST['satuan'];
$kondisi=$_POST['kondisi'];
$jumlah=$_POST['jumlah'];
$uraian_lokasi=$_POST['uraian_lokasi'];
$tanggal_pembelian=$_POST['tanggal_pembelian'];

include "koneksi.php";

$simpan=$koneksi->query("insert into inventaris_barang(kode,nama,satuan,kondisi,jumlah,uraian_lokasi,tanggal_pembelian) 
                        values('$kode','$nama','$satuan','$kondisi','$jumlah','$uraian_lokasi','$tanggal_pembelian')");

if($simpan==true){

    header("location:tampil-barang.php?pesan=inputBerhasil");
} else {
    echo "Error";
}


?>