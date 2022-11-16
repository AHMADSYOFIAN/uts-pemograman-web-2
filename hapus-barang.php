<?php
$id=$_GET['id'];

include "koneksi.php";
$hapus=$koneksi->query("delete from inventaris_barang where id_barang='$id'");

if($hapus==true){

    header("location:tampil-barang.php?pesan=hapusBerhasil");

}else{
    echo"Error"; 
}


?>