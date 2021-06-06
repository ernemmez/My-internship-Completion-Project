<?php
 session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stil/stil.css">
	<link rel="stylesheet" type="text/css" href="bootstrap5.0/css/bootstrap.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	

	<style type="text/css">
		.dropdown:hover>.dropdown-menu
			{
				display: block;
			}
			.dropdown-menu
			{
				margin-top: 10px;
				border-radius:0px;
				
			}
			.dropdown-menu a{
				color: white;
			}
			.altmenu a:hover
			{
				color: #ee6363;
			}
			.logo:hover 
			{
    		content: url('img/pembelogo.png');
			}
			
			.grsbtn:hover{
					opacity: 0.8;
			}
			.adkyt:hover{
				color:#ee6363 ;
			}

			
	</style>
</head>
<body style="background-color: #edebed;">
	<script type="text/javascript" src="bootstrap5.0/js/bootstrap.min.js"></script>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example" style="width: 100%; position: fixed;top:0;z-index: +999999;height: 62px;">
			<div class="container-fluid" style="background-color: #1c1c1c;">
			      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
			        <span class="navbar-toggler-icon" ></span>
			      </button>
			      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08" >
			        <ul class="navbar-nav">
			          <li class="nav-item nvi" style="margin-right: 35px;margin-top: 10px; box-sizing:border-box;">
			            <a class="nav-link active" aria-current="page" href="index.php">Anasayfa</a>
			          </li>
			          <li class="nav-item nvi dropdown" style="margin-right: 35px;margin-top: 10px;box-sizing: border-box;">
			            <a class="nav-link dropdown-toggle active" href="#" id="dropdown08" data-bs-toggle="dropdown" aria-expanded="false" >Kategoriler</a>
			            <ul class="dropdown-menu" aria-labelledby="dropdown08" style="background-color: #1c1c1c;">
			            <li><a class="dropdown-item nvi" href="donanim.php">Donanım</a></li>
			              <li><a class="dropdown-item nvi" href="ag.php">Ağ</a></li>
			              <li><a class="dropdown-item nvi" href="veritabaniislemleri.php">Veritabanı İşlemleri</a></li>
			               <li><a class="dropdown-item nvi" href="webtasarim.php">Web Tasarım</a></li>
			                <li><a class="dropdown-item nvi" href="ofis.php">Ofis Yazılımları</a></li>
			            </ul>
			          </li> 
			           <li class="nav-item">
			            <a class="nav-link active" href="index.php" tabindex="-1" aria-disabled="true"><img class="img-responsive logo" src="img/valorant.png"style="width: 45px;height: 45px;"></a>
			          </li>
			          <li class="nav-item nvi" style="margin-left: 35px;margin-top: 10px;box-sizing: border-box;">
			            <a class="nav-link active " href="kayitol.php" tabindex="-1" aria-disabled="true">Kayıt Ol</a>
			          </li>
			          <li class="nav-item nvi" style="margin-left: 35px;margin-top: 10px;box-sizing: border-box;">
			          	 <a  class=" nav-link active "  href="uyegrs.php">
					  		Giriş Yap
						</a>
			          </li>
			        </ul>
			      </div>      
		    </div>
	  </nav>
	 



		<?php
					include 'baglanti.php'

			 ?>

	<div class="container-fluid" style="margin-top: 31px;">
		
		<div class="row">
			<div class="col-md-4" style=" margin:auto;">
				<form method="post">
						<div class="form-group">
							<h2 class="text-center">Admin Girişine Hoşgeldiniz </h2>
							<input type="text" name="user" class="form-control" style="width: 80%; margin:auto;" placeholder="admin">
							<input type="password" name="sfr" class="form-control" style="width: 80%; margin:auto;margin-top: 13px;" placeholder="******">
						</div>
						<div class="form-group">
							<input type="submit" name="" value="Giriş Yap" class="btn grsbtn  form-control" style="background-color: #ee6363; width: 40%;margin-top: 13px;margin-left:30%;">
						</div>
						
						
				</form>
			</div>
			<?php 
				if (isset($_POST["user"])) 
				{
					$k=$_POST["user"];
					$s=$_POST["sfr"];
					$sonuc=$vt->query("select * from admin where adminuser='$k' ")->fetch();
					if ($sonuc) {
					

						if ($sonuc["adminsfr"]==$s)
						 {

						$_SESSION["admin"]=$k;
						echo "<script> alert('Giriş Başarılı')</script>";
						echo "<script> window.location.href='adminana.php'</script>";
						}
						else
						{
							echo "<h3 class='text-danger'> Şifreniz yanlış!</h3>";
						}
					}
					else{
						echo "<h3 class='text-danger'> Böyle Bir kullanici yok!</h3>";
					}
					
					


				}
				
			 ?>
		</div>




		
		<div class="row" style="background-color:#1c1c1c;margin-top: 100px;background-color:#1c1c1c;position: fixed;bottom: 0;left: 0;width: 100%;">
		  		<div class="row" style="margin-top: 35px;">
		  			<a href="#" class="text-center"><img class="img-responsive logo"  src="img/valorant.png"style="width: 90px;height: 90px;"></a>
		  		</div>
		  		<div class="row">
		  			<a href="admingrs.php" class="text-center" style="margin-top: 20px;color: white; font-size: 17px; text-decoration: none;">Admin Giriş</a>
		  			
		  		</div>
		  		<div class="row" style="margin-top: 40px;">
		  			<p style="color: #828282; font-size: 13px; text-align: bottom; box-sizing: border-box;" class="text-center text-justify">2021 Emmez Company,Eren Emmez Group ve Bu site ile ilgili tüm logoları <br> Emmez Company 'nin Ticari Markaları,Hizmet Markaları veya Tescilli <br> Ticari Markalarıdır. </p>
		  		</div>
		</div>
	</div>

</body>
</html>