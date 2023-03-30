<?php 
include "db.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masukkan Data</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;600&display=swap" rel="stylesheet">
    
    <style>
        *{
            background-color: var(--bgBlack);
            color: var(--hitam);
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
        }
        .main{
            display: flex;
            justify-content: center;
            align-items:center;
            margin-top: 20px;
            margin-bottom: 20px;
            
        }
        .daftar{
            width: 40%;
        }
        .daftar label{
            font-weight: 400;
            
        }
        .daftar select{
            border: 1px solid #C0CCDA;
            border-radius: 5px;
            height: 30px;
        }
        .daftar input{
            border: 1px solid #C0CCDA;
            border-radius: 5px;
            height: 30px;
            width: 100%;
        }
        .btn{
            background-color: #0162EC;
            color: white
        }
    </style>
<body>
</head>
    <div class="main">
        <form action="" method="POST" class="daftar">
            <h1>TAMBAH DATA</h1>
            <small>Masukkan Data Dengan Benar</small><br><br>
            
                <label for="nama">Nama Lengkap</label><br><br>
                <input type="text" name="nama" placeholder="" value="" required><br><br>
                <label for="nro">NRP</label><br><br>
                <input type="text" name="nrp" placeholder="" value="" required><br><br>
                <label for="gen">Jenis Kelamin</label><br><br>
                <select name="gen" id="gender"><br><br>
                    <option value="1">LAKI-LAKI</option>
                    <option value="0">PEREMPUAN</option>
                </select><br><br>
                <label for="email">Email</label><br><br>
                <input type="email" name="email" placeholder="" value="" required><br><br>
                <label for="jur">Jurusan</label><br><br>
                <input type="text" name="jur" placeholder="" value="" required><br><br>
                <label for="hp">NO HP</label><br><br>
                <input type="text" name="hp" placeholder="" value="" required><br><br>
                <label for="sma">ASAL SMA</label><br><br>
            <input type="text" name="sma" placeholder="" value="" required><br><br>
            <label for="mk">MATA KULIAH FAVORIT</label><br><br>
            <input type="text" name="mk" placeholder="" value="" required><br><br>
            <label for="alamat">ALAMAT </label><br><br>
            <input type="text" name="alamat" placeholder="" value="" required><br><br>
            <br>
            <input class="btn" type="submit" name="submitted" value="TAMBAH">
        
        </form>
        
    </div>
    <?php 

    if(isset($_POST['submitted'])){
        $nama = ucwords($_POST['nama']);
        $nrp = $_POST['nrp'];
        $alamat = $_POST['alamat'];
        $gen =$_POST['gen'];
        $jur = $_POST['jur'];
        $email = $_POST['email'];
        $sma = $_POST['sma'];
        $mk = $_POST['mk'];
        $hp = $_POST['hp'];

        $insert = mysqli_query($conn, "INSERT INTO `tb_mahasiswa` VALUES (
        null,
        '".$nrp."',
        '".$nama."',
        '".$gen."',
        '".$jur."',
        '".$email."',
        '".$alamat."',
        '".$hp."',
        '".$sma."',
        '".$mk."'
        )");
        if($insert){
            echo "<script>let timerInterval
            Swal.fire({
              icon: 'success',
              title: 'Success!',
              timer: 2000,
            }).then(function(){window.location='index.php';})
            </script>";
        }else{
            echo "<script>Swal.fire({
                icon: 'error',
                title: 'Error!',
              })</script>";
            echo mysqli_error($conn);
        }
    }
    ?>

    
</body>
</html>