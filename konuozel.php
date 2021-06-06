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
				
				width: 25%;
				box-sizing: border-box;
				position: relative;
				overflow:hidden;
				transition: 0.5s;
				margin-left: 20px;
				height: 250px;
				
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
			.page-heading{
			  font-size:32px;
			  font-family:'Roboto Condensed', sans-serif;
			  border-left:3px solid black;
			  border-right:3px solid black;
			  transition: all 0.4s;
			  display:inline-block;
			  padding:4px 32px;
			  margin-top: 120px;
			}
			.page-heading:hover{
			  padding:4px 48px;
			  background:#ee6363;
			}
			#post-container{
			  display: flex;
			}

			#blogpost{
			  display: flex;
			  flex-direction:column;
			  width:70%;
			  border-left:1px solid #999;
			}

			#blogpost .card{
			  width:100%;
			}

			#blogpost .card-image:hover{
			  box-shadow: none;
			}
			.card-image img{
				width: 70%;
				box-sizing: border-box;
			}
			.ozelimg{
				width: 100%;
				box-sizing: border-box;
				overflow: hidden;
				height: 100%;
			}
			.sgk:hover{
				box-shadow: 0px 25px 40px lightgray;
				transition: 0.8s;
			}
			


			
	</style>
</head>
<body style="background-color: #edebed;" >
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
								
				 				if (isset($_GET["id"])) {
					 				$id=$_GET["id"];
					 				include 'baglanti.php';
					 				$sonuc=$vt->query("select * from konu where konuid=$id")->fetch();
					 				?>
					 					<main style="margin:0 auto;">

								    <h2 class="page-heading" style="color: black;">
								    	<?php echo $sonuc['baslik']; ?>
								    </h2>
								    <div id="post-container">
								      <section id="blogpost">
								        <div class="card" style="padding: 8px;">
								          <div class="card-meta-blogpost" style="padding: 8px;">
								          <b><?php echo $sonuc['tarih']; ?></b> 
								            <p><b>Konu:</b> <?php echo $sonuc['konu']; ?></p>
								          </div>
								          <div class="card-image">
								            <img src="img/<?php echo $sonuc['rsm']; ?>" class="img-responsive "  style="width: 100%;height: 600px;">
								          </div>
								          <div class="card-description" style="padding: 8px;">
								          		<b><?php echo $sonuc['baslik']; ?></b>
								          		<p style="font-size: 16px;color: black;"> <?php echo $sonuc['icrkmtn']; ?></p>
								          </div>
								        </div>

								      
								      </section>

								      <aside id="sidebar">
								        <h4 style="margin-left: 25%;margin-top: -35px;" >Bunlar da ilgini çekebilir</h4>
								        <?php 
								        	$sorgu=$vt->query(" select * from konu")-> fetchAll();
								        	$sayac=0;
								        	foreach ($sorgu as $kayit) {
								        		if ($sayac==4) {
								        			break;
								        		}
								        		$sayac++;

								         ?>
								    <a href="konuozel.php?id=<?php echo $kayit['konuid'];   ?>" style="text-decoration: none;color: black;">
								        <div class="card mb-3 sgk" style="max-width: 540px; margin-left: 10px;">
										  <div class="row g-0">
										    <div class="col-md-4">
										      <img src="img/<?php echo $kayit['rsm']; ?>" class="img-responsive ozelimg" >
										    </div>
										    <div class="col-md-8">
										      <div class="card-body">
										        <h5 class="card-title" style="color: black;"><?php echo $kayit['baslik']; ?></h5>
										        <?php 
										        	include 'baglanti.php';
													$metin=$kayit["icrkmtn"];
													$uzunluk=strlen($metin);
													if ($uzunluk > 202) {
														$kisalt=substr($metin,0,202);
														
													}

												 ?>
										        <p class="card-text" style="color: black;">
										        	<?php echo $kisalt; ?>..									 
										        </p>

										        <p class="card-text"><small class="text-muted"><?php echo $kayit['tarih']; ?></small></p>
										      </div>
										    </div>
										  </div>
										</div>
									</a>	
											<?php 

												}

											 ?>
								      </aside>
								    </div>

					    

					  </main>

					 				<?php
					 			}
					 			else
					 				echo "<script>alert('Sayfa yüklenirken bir sorun oluştu!')</script>";
					 				


				 				?>

					 		

				 				



				 				
		
					 
					




		
	
		<div id="alt" style="margin-top: 200px;">
		<div class="row altmenu" style="background-color:#1c1c1c;">
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
	</div>
	

</body>
</html>