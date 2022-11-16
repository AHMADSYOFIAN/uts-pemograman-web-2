<!doctype html>
<html>
<head>
        <tittle></tittle>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>
        <div class="container">
        <div class="row">
        <div class="col-md-12">

         <form action="proses-edit-barang.php" method="post">
             <?php
             $id=$_GET['id'];
                include "koneksi.php";
                $tampil=$koneksi->query("select * from inventaris_barang where id_barang='$id'");
                $row=$tampil->fetch_assoc();
             ?>
            <div class="form-group">
                <label for="kode"><b>KODE</b></label>
                <Input type="hidden" name="id_barang" value="<?php echo$row['id-barang']?>" class="form-control">
                <Input type="number" name="kode" value="<?php echo$row['kode']?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>NAMA</b></label>
                <Input type="text" name="nama" value="<?php echo$row['nama']?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="satuan"><b>SATUAN</b></label>
                <Input type="text" name="satuan" value="<?php echo$row['satuan']?>" class="form-control">
            </div>
        
            <div class="form-group">
                <label for="kondisi"><b>KONDISI</b></label>
                <select name="kondisi" class="form-control">
                <option value ="<?php echo$row['kondisi']?>" selected><?php echo$row['kondisi']?></option>
                <option value ="BAIK"> BAIK</option>
                <option value ="KURANG_BAIK"> KURANG BAIK</option>
            </select>
            </div>
            <div class="form-group">
                <label for="jumlah"><b>JUMLAH</b></label>
                <textarea name="jumlah" class="form-control"><?php echo$row['jumlah']?></textarea>
            </div>
            <div class="form-group">
                <label for="uraian_lokasi"><b>LOKASI</b></label>
                <textarea name="uraian_lokasi" class="form-control"><?php echo$row['uraian_lokasi']?></textarea>
            </div>
            <div class="form-group">
                <label for="tanggal_pembelian"><b>TANGGAL</b></label>
                <textarea name="tanggal_pembelian" class="form-control"><?php echo$row['tanggal_pembelian']?></textarea>
            </div>

            <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
            <input type="reset" name="kosongkan" value="KOSONGKAN"class="btn btn-danger">
            
        </form>
</div></div></div>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>