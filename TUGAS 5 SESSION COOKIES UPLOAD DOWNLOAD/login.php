<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page | Toko</title>
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lexend:wght@600&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Lexend:wght@300&display=swap');
*{
    margin:0;
    padding:0;
    font-family: 'Lexend', sans-serif; 
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
html, body{
    height: 100%;
    margin: 0;
    padding: 0;
    background-color: transparent;
    overflow: hidden;
}
canvas{

    background-color: whitesmoke;
}
.box-login {
    position: relative;
    padding: 25px;
    font-weight: 300;
    height: auto;
    width: 300px;
    background-color: white;
    border: solid 2px black;
    border-radius: 15px;
    text-align: center;
}
.box-pos{
    left: 50%;
    transform: translate(-50%);
    position: absolute; 
    display: flex;
    height: 100vh;
    justify-content: center;
    align-items: center;
}
.box-login h1{
    margin-bottom: 20px;
}       
.box-ask{
    margin-bottom: 20px;
    text-align: start;
}
.input-box{
    padding-left: 10px;
    margin-bottom: 15px;
    width: 100%;
    height: 40px;
    border-radius: 15px;
    border: none;
    background-color: whitesmoke;

}
.btn-submit{
    height: 30px;
    width: 50%;
    border-radius: 15px;
    border: none;
    background-color: rgb(255, 44, 44);
    color: white;
    z-index: -1;
}

.btn-submit:hover{
    background-color: black;
    cursor: pointer;
}


    </style>
    
</head>
<body>
<div class="box-pos">
            <div class="box-login">
                <h1>Login</h1>
                <form action="" method="POST">
                    <input type="text" name="user" placeholder="Username" class="input-box">
                    <input type="password" name="pass" placeholder="Password" class="input-box">
                    <p class="box-ask"><small>Belum memiliki akun? <a href="#">daftar</a></small><br></p>
                    <input type="submit" name="submit" class="btn-submit" value="Log in">
                </form><br>         
                <?php 
                    if(isset($_POST['submit'])){
                        session_start();
                        include 'db.php';
                        $user = mysqli_real_escape_string($conn,$_POST['user']);
                        $pass = mysqli_real_escape_string($conn,$_POST['pass']);

                        $cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '".$user."' AND password = '".$pass."'     ");
                        $num = mysqli_num_rows($cek);
                        if($num > 0){
                            $fetch = mysqli_fetch_object($cek);
                            $_SESSION['status_login'] = true;
                            $_SESSION['a_global'] = $fetch;
                            $_SESSION['id'] = $fetch->admin_id;


                            echo '<small>login berhasil</small>';
                            echo '<script>window.location="home.php"</script>';   
                        }else   {
                            echo "<small>Username/Password salah!</small>";
                        }

                    }
                
                ?>
            </div>
        </div>
    <canvas id="nokey" width="800" height="800">
        Your Browser Don't Support Canvas, Please Download Chrome ^_^``
    </canvas>
              
</body>
<script src="poli.js"></script>

</html>