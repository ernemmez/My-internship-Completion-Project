<?php 
	session_start();
	if ($_SESSION['admin']) {
		
	

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
					include 'baglanti.php';
 			?>	
 			<?php 
 				$sorgu=$vt->query(" select * from konu")-> fetchAll();
 			 ?>
	<div class="container-fluid" style="margin-top: 61px;">
		<h2 class="text-center" >Admin Hoşgeldin</h2>
			<div class="row" style="margin-top: 150px;">

				<div class="accordion" id="accordionExample" style="">
				  <div class="accordion-item">
				    <h2 class="accordion-header" id="headingOne">
				      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background-color: #ee6363;color: white;">
				       Anasayfa İçerik Yönetimi
				      </button>
				    </h2>
				    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
				      <div class="accordion-body" >
				       <table class="table table-dark table-hover" style="background-color: #1c1c1c; box-sizing: border-box;width: 100%;">
						  				<tr style="color:#ee6363 ;">
						  					<th>#İD</th>
						  					<th>#Konu</th>
						  					<th>#Baslık</th>
						  					<th>#İçerik</th>
						  					<th>#Görsel</th>
						  					<th>#Durum</th>
						  					<th>#Kategori</th>
						  					<th>#İşlem</th>
						  				</tr>
						  				<?php 
						  					foreach ($sorgu as $kayit) {

						  				 ?>
						  				<tr>
						  					<td><?php echo $kayit["konuid"]; ?></td>
						  					<td><?php echo $kayit["konu"]; ?></td>
						  					<td><?php echo $kayit["baslik"]; ?></td>
						  					<td style="box-sizing: border-box;"><?php echo $kayit["icrkmtn"]; ?></td>
						  					<td><?php echo $kayit["rsm"]; ?></td>
						  					<td>
						  						<?php 
						  								if ($kayit["durum"]==0) {
						  									
						  									echo "<p style='color:red;>Yayında Değil</p>";
						  								}
						  								else
						  								{
						  									echo "<p class='text-success'>Yayında</p>";
						  								}



						  						 ?>


						  					</td>
						  					<td><?php echo $kayit["ktgr"]; ?></td>

						  					<td>
						  						<a href="adminsil.php?id=<?php echo $kayit['konuid'];?>" class="btn btn-danger"> <i class="bi bi-trash"></i></a>
						  						<a href="adminduzenle2.php?id=<?php echo $kayit['konuid'];?>" style="margin-top: 5px;" class="btn btn-primary"> <i class="bi bi-pencil-square"></i></a>
						  						
						  						

						  					</td>
						  					
						  				</tr>
						  				<?php 
						  					}
						  				 ?>
						</table>
				      </div>
				    </div>
				  </div>

				  <div class="accordion-item" >
				    <h2 class="accordion-header" id="headingTwo">
				      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background-color: #ee6363;color: white;">
				        İçerik Ekle
				      </button>
				    </h2>
				    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
				      <div class="accordion-body" style="background-color: ">
				       	<form method="post"  enctype="multipart/form-data" >
						  <div class="mb-3">
						    <label for="konu" class="form-label">Konu</label>
						    <input type="text" class="form-control" id="konuu" aria-describedby="emailHelp" name="konu">
						  </div>
						  <div class="mb-3">
						    <label for="baslik" class="form-label">Konu Başlığı</label>
						    <input type="text" class="form-control" id="baslikk" name="baslik">
						  </div>
						  <div class="mb-3">
						     <label for="icrkmtn" class="form-label">İçerik</label>
						    	<textarea class="form-control" id="icrkmtn" name="icrkmtn" style="max-height: 400px;"></textarea>
						  </div>
						  
						  <div class="mb-3">
						     <label for="resm" class="form-label">Görsel</label>
						   <input type="file" name="rsm" id="resm" class="form-control">
						   <?php 
                            if (isset($_POST['resimyukle'])) 
                            {
                            $yukleklasor = "img/";
                            $tmp_name = $_FILES['rsm']['tmp_name'];
                            $name = $_FILES['rsm']['name'];
                            $boyut = $_FILES['rsm']['size'];
                            $tip = $_FILES['rsm']['type'];
                            $uzanti = substr($name,-4,4);
                            $rastgelesayi1 = rand(10000,50000);
                            $rastgelesayi2 = rand(10000,50000);
                            $resimad = $rastgelesayi1.$rastgelesayi2.$uzanti;

                            if (strlen($name) == 0) 
                            {
                                echo "Bir Dosya Seçiniz";
                                exit();
                            }
                            if ($boyut>(10000*10000)) 
                            {
                                echo "Dosya Boyutu Çok Fazla";
                                exit();
                            }
                            if ($tip != 'image/jpg' && $uzanti != '.jpg') 
                            {
                                echo "Yalnızca JPG Formatında Fotoğraflar Yükleyin.";
                            }
                            else{
                                move_uploaded_file($tmp_name, "$yukleklasor/$resimad");
                            }

                            }
                            else{
                            	echo "";
                            }


                            ?>









						  </div>
						  <div class="mb-3">
						  	<label class="form-check-label">Durum<p style="font-size: 13px;" style="text-info">("1" Yayında anlamına gelir."0" Yayında Değil anlamına gelir.)</p></label><br>
						    <select class="form-select" aria-label="Default select example" id="drm" name="durum">
							  <option selected>0</option>
							  <option value="1">1</option>
							</select>
						  </div>
						   <div class="mb-3">
						  	<label class="form-check-label">Kategori</label><br>
						    <select class="form-select" aria-label="Default select example" id="kategori" name="ktgr">
						    		<option  selected="">Kategori Seçiniz</option>
									<option value="donanim">donanim</option>
									<option value="ag">ag</option>
									<option value="veritabani">veritabani</option>
									<option value="web">web</option>
									<option value="ofis">ofis</option>
							</select>
						  </div>
						  <button type="submit" class="btn btn-primary" name="resimyukle">Ekle</button>
						</form>
						<?php 
							if (isset($_POST["baslik"]))
				                 {
				                     $bs=$_POST["baslik"];				                    
				                     $ic=$_POST["icrkmtn"];
				                     $rs=$_POST["rsm"];
				                     $drm=$_POST["durum"];
				                     $kn=$_POST["konu"];
				                     $kt=$_POST["ktgr"];
				                     $ekle=$vt->prepare("insert into konu(konu,baslik,icrkmtn,rsm,durum,ktgr) values(?,?,?,?,?,?)");
				                     $ekle->execute(array($kn,$bs,$ic,$resimad,$drm,$kt));
				                     echo "<script> alert('Konu Yazınız Eklenmiştir.') </script>";
				                     echo "<script> window.location.href='adminana.php' </script>";
				                 }
							

						 ?>
				      </div>
				    </div>
				  </div>
				  <div class="accordion-item">
				    <h2 class="accordion-header" id="headingThree">
				      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="background-color: #ee6363;color: white;">
				       Üye Yönetimi
				      </button>
				    </h2>
				    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
				      <div class="accordion-body">
				      			<?php 
				      				include 'baglanti.php';
 									$sorgu=$vt->query(" select * from uyeler")-> fetchAll();
 			 					?>
				      			<table class="table table-dark table-hover" style="background-color: #1c1c1c; box-sizing: border-box;width: 100%;">
						  				<tr style="color:#ee6363 ;">
						  					<th>#İD</th>
						  					<th>#Kullanıcı Adı</th>
						  					<th>#E-Posta</th>
						  					<th>#Şifre</th>
						  					<th>#Telefon</th>
						  					<th>Üye Sil</th>
						  					
						  				</tr>
						  				<?php 
						  					foreach ($sorgu as $kayit) {

						  				 ?>
						  				<tr>
						  					<td><?php echo $kayit["kulid"]; ?></td>
						  					<td><?php echo $kayit["kadi"]; ?></td>
						  					<td><?php echo $kayit["email"]; ?></td>
						  					<td><?php echo $kayit["sifre"]; ?></td>
						  					<td><?php echo $kayit["gsm"]; ?></td>
						  					<td><a href="adminsil2.php?id=<?php echo $kayit['kulid'];?>" class="btn btn-danger"> <i class="bi bi-trash"></i></a></td>
						  					

						  					
						  					
						  				</tr>
						  				<?php 
						  					}
						  				 ?>
						</table>
				      </div>
				    </div>
				  </div>
				</div>
			</div>

		
		<div class="row altmenu" style="background-color:#1c1c1c;margin-top: 240px;">
		  		<div class="row" style="margin-top: 35px;">
		  			<a href="#" class="text-center"><img class="img-responsive logo"  src="img/valorant.png"style="width: 90px;height: 90px;"></a>
		  		</div>
		  		<div class="row">
		  			
		  			<a href="admingrs.php" class="text-center" style="margin-top: 20px;color: white; font-size: 17px; text-decoration: none;"></a>
		  			
		  		</div>
		  		<div class="row">
		  			
		  				<a href="admincks.php" class="text-center" style="text-decoration: none;color: white;margin-top: 10px;"><i class="bi bi-box-arrow-right"></i>Admin Çıkış</a>
		  			
		  			
		  				
		  			
		  		</div>
		  		<div class="row" style="margin-top: 40px;">
		  			<p style="color: #828282; font-size: 13px; text-align: bottom; box-sizing: border-box;" class="text-center text-justify">2021 Emmez Company,Eren Emmez Group ve Bu site ile ilgili tüm logoları <br> Emmez Company 'nin Ticari Markaları,Hizmet Markaları veya Tescilli <br> Ticari Markalarıdır. </p>
		  		</div>
		</div>
	</div>

</body>
</html>
<?php 
	}
	else
	{	
		echo "<script>alert('Bu sayfayı görmeye yetkiniz yok!')</script>";
		echo "<script>window.location.href='admingrs.php'</script>";
	}

 ?>