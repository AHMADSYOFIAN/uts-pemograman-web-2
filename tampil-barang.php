<!doctype html>
<html>
<head>
    <tittle></tittle>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="DataTables/datatables.min.css" rel="stylesheet">

</head>
    <body>
        <div class="container">
        <div class="row">
        <div clas="col-md-12">
        <h1> DATA BARANG</h1>
<?php

if(@$_GET['pesan']=="inputBerhasil"){


?>
<div class="alert alert-success">
    Penyimpanan Berhasil!
</div>

<?php
}
?>
        <?php

        if(@$_GET['pesan']=="hapusBerhasil"){


        ?>
        <div class="alert alert-success">
            Data Berhasil DiHapus!
        </div>

        <?php
        }
        ?>
        
                <?php

                if(@$_GET['pesan']=="editBerhasil"){


                ?>
                <div class="alert alert-success">
                    Perubahan Berhasil!
                </div>

                <?php
                }
                ?>

<table id="datatables" class="table table-bordered">
    <thead>
    <tr>    <td> <center><b> KODE </center></td> <td> <center><b> NAMA </center></td>
        <td><center><b> SATUAN </center></td> <td> <center><b> KONDISI </center></td>
        <td> <center><b> JUMLAH </center></td>
        <td> <center><b> URAIAN LOKASI </center></td>
        <td> <center><b> TANGGAL PEMBELIAN </center></td>
        <th> 
            <a href="input-barang.php">
                <button class="btn btn-info glyphicon glyphicon-plus"></button>
            </a>
        </th>
    </tr>
</thead>
<tbody>
<?php  
   include "koneksi.php";
   $sql=$koneksi->query("select * from inventaris_barang order by kode ASC");

   while($row= $sql->fetch_assoc()){
?>
   <tr>
   <td> <center> <?php echo $row['kode'] ?> </center> </td>
         <td> <center> <?php echo $row['nama'] ?> </center> </td>
         <td> <center> <?php echo $row['satuan'] ?> </center> </td>
         <td> <center> <?php echo $row['kondisi'] ?> </center> </td>
         <td> <center> <?php echo $row['jumlah'] ?> </center> </td>
         <td> <center> <?php echo $row['uraian_lokasi'] ?> </center> </td>
         <td> <center> <?php echo $row['tanggal_pembelian'] ?> </center> </td>
         <td>
         <a href="edit-barang.php?id=<?php echo $row['id_barang']?>">
                <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
            </a>
        <a href="hapus-barang.php?id=<?php echo $row['id_barang']?>" onclick="return confirm('anda yakin ingin menghapus data?')">
        <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
            </a>

   </td>
   </tr>
<?php
 }
?>
</tbody>
</table>
</div> </div></div>
        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <script src="DataTables/datatables.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('#datatables').DataTable();
            });
        </script>
    
</body>
</html>