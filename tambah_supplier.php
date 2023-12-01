<?php 
require "function.php";


if (isset($_POST['tambah'])){
    if(tambah_supplier($_POST) > 0){
        echo  "<script>
        alert('Data berhasil ditambah');
        document.location.href='supplier.php';
        </script>";

    }else {
        echo  "<script>
        alert('Data gagal ditambah');
        document.location.href='supplier.php';
        </script>";

    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        form{
            width: 300px;
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <h1>Tambah Supplier baru</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="nama">Nama supplier :</label>
            <input name="nama_supplier" type="text" class="form-control" id="nama" placeholder="masukan nama">
        </div>
        <div class="form-group">
            <label for="stok">Telephon :</label>
            <input name="no_telp" type="number" class="form-control" id="stok" placeholder="masukan telephon">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat :</label>
            <input name="alamat" type="text" class="form-control" id="alamat" placeholder="masukan alamat">
        </div>
        <button class="btn btn-primary my-2" type="submit" name="tambah">
            Tambah
        </button>
    </form>
</body>

</html>