<?php 
    session_start();
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }

?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
            height: 1060px;
		}

		/* Styling untuk sticky bar */
		.sticky-bar {
            display: flex;
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
            height: 55px;
			background-color: rgba(255, 255, 255, 0.8);
			color: #333;
			padding: 0;
			box-shadow: 0 0.3125rem 0.625rem rgb(0 0 0 / 3%);
			z-index: 100;
            justify-content:space-between;
		}

		/* Styling untuk konten di bawah sticky bar */
		.isi {
			padding-top: 50px; /* set margin top untuk konten agar tidak tertutup oleh sticky bar */
			text-align: center;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
		}
        .logo-wrap{
            display: flex;
            align-items: center;
            margin-left: 10px;
        }
        .logo{
            vertical-align: middle;
            height: 35px;
        }
        .menu{
            display: flex;
            align-items: center;
            list-style: none;
            margin: 0px 10px;
        }
        .menu li{
            margin: 0px 10px;
        }
        .menu li a{
            text-decoration: none;
            
        }

        .card {
            width: 100%;
			display: flex;
			flex-direction: column;
			background-color: #fff;
			/* border: 1px solid #ddd; */
			/* box-shadow: 0 2px 5px rgba(0,0,0,0.3); */
			padding: 20px;
			margin: 20px;
			max-width: 850px;
			min-height: 400px;
			box-sizing: border-box;
            justify-content: center;
            align-items: center;
		}

		.card .header {
			font-size: 24px;
			font-weight: bold;
			margin-bottom: 20px;
		}

		.card .content {
			flex-grow: 1;
			display: flex;
			
			justify-content: center;
			align-items: center;
            
		}

		.inner-card {
			background-color: #fefefe;
			border: 1px solid #ccc;
			padding: 10px;
			margin: 10px;
			max-width: ;
			box-sizing: border-box;
            border-radius : 25px;
            width: 390px;
            text-decoration: none;
            color : black;
		}

		.inner-card .header {
			font-size: 18px;
			font-weight: bold;
			margin-bottom: 10px;
            
		}

		.inner-card .content {
			font-size: 14px;
            
		}
        
        .banner{
            width: 800px;
            height: 150px;
            border-radius : 25px;
        }
        .inner-card:hover{
            box-shadow: 0px 2px #888888;
        }
        
	</style>
</head>
<body>
	<!-- Sticky bar -->
	<div class="sticky-bar">
        <div class="logo-wrap">

            <img class="logo" src="https://upload.wikimedia.org/wikipedia/id/4/44/Logo_PENS.png" alt="">
        </div>
		<div class="menu">
            <li><a href="profil.php">Akun</a></li>
            <li><a href="logout.php">Logout</a></li>
        </div>
	</div>

	<!-- Konten di bawah sticky bar -->
	<div class="isi">
		
        <div class="card">
            <div class="header">
                <div class="banner inner-card">
                        <div class="header"><h2>HOME PAGE ~ Dashboard Pens Lupis</h2></div>
                        <div class="content">
                        <p>Selamat datang di halaman dashboard, <?php echo $_SESSION['a_global']->admin_name?></p> 
                        <!-- Diatas sama seperti $fetch->admin_name atau object admin name melalui session global -->
                        </div>
                </div>
            </div>
            <div class="content">
                <a href="index.php" class="inner-card">
                    <div class="header">Data Mahasiswa</div>
                    <div class="content">
                    <p>Edit Data Mahasiswa</p>
                    </div>
                </a>
                <a href="#" class="inner-card">
                    <div class="header">Data Dosen</div>
                    <div class="content">
                    <p>Edit Data Dosen</p>
                     </div>
                </a>
            </div>
	    </div>
    </div>
</body>
</html>
