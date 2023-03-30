<?php 
include 'db.php';


if(isset($_GET['id'])){      
    $del = mysqli_query($conn,"DELETE FROM tb_mahasiswa WHERE ID ='".$_GET['id']."' ");
    echo '<script>window.location="index.php"</script>';
}


?>