<?php

include "koneksi.php";
$id_barang=$_POST['id_barang'];
$kode=$_POST['kode'];
$nama=$_POST['nama'];
$satuan=$_POST['satuan'];
$kondisi=$_POST['kondisi'];
$jumlah=$_POST['jumlah'];
$uraian_lokasi=$_POST['uraian_lokasi'];
$tanggal_pembelian=$_POST['tanggal_pembelian'];


$ubah=$koneksi->query("update inventaris_barang set kode='$kode', nama='$nama', satuan='$satuan', kondisi='$kondisi', jumlah='$jumlah', uraian_lokasi='$uraian_lokasi', tanggal_pembelian='$tanggal_pembelian' where id_barang='$id_barang'");

if($ubah==true){

    header("location:tampil-barang.php?pesan=editBerhasil");
} else{
    echo"Error";
}



?>