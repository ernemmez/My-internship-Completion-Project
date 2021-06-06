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
			.konul
			{
				
				width: 30%;
				box-sizing: border-box;
				position: relative;
				overflow:hidden;
				transition: 0.5s;
				height: 250px;
				margin: auto;
				margin-top: 20px;
				
			}
			.konul:hover{
				
				z-index: +2;
				transform: scale(1.1);
				box-shadow: 0px 25px 40px rgba(0,0,0,.5);
				

			}
			.konul .rsm{
				position: absolute;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
			}
			.konul .rsm:before
			{
				content: '';
				position: absolute;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				z-index: +3;
				background:linear-gradient(180deg,#000);
				mix-blend-mode: multiply;
				opacity: 0;
				transition: 0.5s;
			}
			.konul:hover .rsm:before
			{
				opacity: 1;
			}
			.konul .rsm img{
				position: absolute;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				object-fit: cover;
			}


			.konul .icrk{
				position: absolute;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				display: flex;
				padding: 20px;
				align-items: flex-end;
			}
			.konul .icrk h2 {
				color: white;
				transition: 0.5s;
				text-transform: uppercase;
				margin-bottom: 5px;
				font-size: 20px;
				transform: translateY(200px);
			}
			.konul:hover .icrk h2{
				transform: translateY(0px);
				transition-delay: 0.3s;
			

			}
			.konul .icrk p{
				
				transform: translateY(200px);
				transition: 0.3s;
				font-size: 14px;
				
			}
			.konul:hover .icrk p{
				transform: translateY(0px);
				transition-delay: 0.3s;
				
			}


			
	</style>
</head>
<body >
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
			          <?php  

			          if (isset($_SESSION["uyeoturumu"])) {
			          	?>
			          	 
			          	 <li class="nav-item nvi" style="margin-left: 35px;margin-top: 10px;box-sizing: border-box;">
					            <a class="nav-link active " href="#" tabindex="-1" aria-disabled="true" style="color:white;">
					            <i class="bi bi-person-circle"></i> 
					             <?php echo $_SESSION['uyeoturumu'] ?>
					            </a>
					          </li>
					          <li class="nav-item nvi" style="margin-left: 35px;margin-top: 10px;box-sizing: border-box;">
					          	<a  class=" nav-link active "  href="uyecks.php">
							  		<i class="bi bi-box-arrow-right"> </i>Çıkış Yap
								</a>
					          </li>
			          	<?php
				          }
			          else
			         	{
			         	?>
					          <li class="nav-item nvi" style="margin-left: 35px;margin-top: 10px;box-sizing: border-box;">
			            <a class="nav-link active " href="kayitol.php" tabindex="-1" aria-disabled="true">Kayıt Ol</a>
			          </li>
			          <li class="nav-item nvi" style="margin-left: 35px;margin-top: 10px;box-sizing: border-box;">
			          	<a  class=" nav-link active "  href="uyegrs.php">
					  		Giriş Yap
						</a>
			          </li>
			          <?php 
			      	}
			      ?>
			         			         
			        </ul>
			      </div>      
		    </div>
	  </nav>
	 

	<div class="container-fluid" style="margin-top: 61px;">
		


			<?php
					include 'baglanti.php'

			 ?>

			 
			 <h2 class="text-center" style="color: #ee6363;"> Ms Ofis Programları</h2>
		<div class="row" style="margin-top: 25px; position: relative;display: flex;flex-wrap: wrap;">
				 	<?php 

				 		$sorgu=$vt->query(" select * from konu where durum=1 and ktgr='ofis'")-> fetchAll();
				 		
				 		foreach ($sorgu as $kayit) {
				 			
				 			
				 		
				 	 ?>
			 
						<div class="konul">
							<a href="konuozel.php?id=<?php echo $kayit['konuid'];   ?>">
								<div class="rsm">
									<img src="img/<?php echo $kayit['rsm']; ?>" class="img-responsive">
								</div>
								<div class="icrk">
									<div>
										<h2 class="baslik" style="color: #ee6363;font-weight: bold;"><?php echo $kayit["baslik"]; ?></h2>
										<p class="konu" style="color: #ee6363; font-size: 11px;opacity: 0.8;"><?php echo $kayit["konu"]; ?></p>
										
										<?php 
											$metin=$kayit["icrkmtn"];
											$uzunluk=strlen($metin);
											if ($uzunluk > 202) {
												$kisalt=substr($metin,0,202);
												
											}

										 ?>
										 <p style="color: white; font-weight:normal;" class="icrkmtn" name="icrkmtn"><?php echo $kisalt; ?>.. </p>
									</div>
									
								</div>
							</a>
						</div>
			

			<?php 
			}
			 ?>
			
		</div>

		
		<div class="row altmenu" style="background-color:#1c1c1c;margin-top: 225px;">
		  		<div class="row" style="margin-top: 35px;">
		  			<a href="#" class="text-center"><img class="img-responsive logo"  src="img/valorant.png"style="width: 90px;height: 90px;"></a>
		  		</div>
		  		<div class="row">
		  			<a href="admingrs.php" class="text-center" style="margin-top: 20px;color: white; font-size: 17px; text-decoration: none;">Admin Giriş</a>
		  			
		  		</div>
		  		<div class="row">
		  			
		  				<a href="index.php" class="text-center" style="text-decoration: none;color: white;margin-top: 10px;">Anasayfa</a>
		  			
		  			
		  				<a href="iletisim.php" class="text-center" style="text-decoration: none;color: white;margin-top: 10px;">İletişim</a>
		  		
		  			
		  				<a href="hakkimizda.php" class="text-center" style="text-decoration: none;color: white;margin-top: 10px;">Hakkımızda</a>
		  			
		  		</div>
		  		<div class="row" style="margin-top: 40px;">
		  			<p style="color: #828282; font-size: 13px; text-align: bottom; box-sizing: border-box;" class="text-center text-justify">2021 Emmez Company,Eren Emmez Group ve Bu site ile ilgili tüm logoları <br> Emmez Company 'nin Ticari Markaları,Hizmet Markaları veya Tescilli <br> Ticari Markalarıdır. </p>
		  		</div>
		</div>
	</div>

</body>
</html>