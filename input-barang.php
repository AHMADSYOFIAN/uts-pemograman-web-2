<!doctype html>
<html>
<head>
        <tittle> menampilkan hasil input form</tittle>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>
        <div class="container">
        <div class="row">
        <div class="col-md-12">

        <form action="proses-input-barang.php" method="post">
         <div class="form-group">
                <label for="kode"><b>KODE BARANG</b></label>
                <Input type="hidden" name="id_barang" value="<?php echo$row['id_barang']?>" class="form-control">
                <Input type="number" name="kode" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>NAMA</b></label>
                <Input type="text" name="nama" class="form-control">
            </div>
            <div class="form-group">
                <label for="satuan"><b>SATUAN</b></label>
                <Input type="text" name="satuan" class="form-control">
            </div>
            <div class="form-group">
                <label for="kondisi"><b>KONDISI</b></label>
                <select name="kondisi" class="form-control">
                <option value ="baik"> BAIK </option>
                <option value ="kurang_baik"> KURANG BAIK </option>
            </select>
            </div>
            <div class="form-group">
                <label for="jumlah"><b>JUMLAH</b></label>
                <input type="text" name="jumlah" class="form-control">
            </div>
            <div class="form-group">
                <label for="uraian_lokasi"><b>LOKASI</b></label>
                <Input type="text" name="uraian_lokasi" class="form-control">
            </div>
            <div class="form-group">
                <label for="tanggal_pembelian"><b>TANGGAL PEMBELIAN</b></label>
                <Input type="date" name="tanggal_pembelian" class="form-control">
            </div>

            <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
            <input type="reset" name="kosongkan" value="KOSONGKAN"class="btn btn-danger">
            
        </form>
</div></div></div>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>