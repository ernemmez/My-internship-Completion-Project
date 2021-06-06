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
			.card p{
				color: #363738;
			}
			.card ul{
				color: #363738;
			}


			
	</style>
</head>
<body  style="background-color: #edebed;">
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
		<div class="row" >
			<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" >
				  <div class="carousel-indicators">
				    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
				    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
				  </div>
				  <div class="carousel-inner">
				    <div class="carousel-item active" data-bs-interval="10000">
				      <img src="img/banner.png" class="d-block w-100" alt="..." style="width: 100%;">
				      <div class="carousel-caption d-none d-md-block">
				        <h5 style="color: #ee6363;">Bilişim dünyasına sende bir adım at!</h5>
				        
				      </div>
				    </div>
				    <div class="carousel-item" data-bs-interval="2000">
				      <img src="img/cr1.jpg" class="d-block w-100" alt="..." style="width: 100%;">
				      <div class="carousel-caption d-none d-md-block">
				        <h5 style="color: #ee6363;">Bizimle Kodlamaya Başla!</h5>
				       
				      </div>
				    </div>
				    <div class="carousel-item">
				      <img src="img/cr2.jpg" class="d-block w-100" alt="..." style="width: 100%;">
				      <div class="carousel-caption d-none d-md-block">
				        <h5 style="color: #ee6363;">Sistem ve ağ sorunlarına anında çözüm bul!</h5>
				        
				      </div>
				    </div>
				  </div>
				  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="visually-hidden">Previous</span>
				  </button>
				  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="visually-hidden">Next</span>
				  </button>
			</div>
		</div>


			<?php
					include 'baglanti.php'

			 ?>

			 <h1 style="font-weight: bold;color: #010b1c;" class="text-center">Konularımıza Göz Atın</h1>

		<div class="row" style="margin-top: 5px; position: relative;display: flex;flex-wrap: wrap;">
				 	<?php 

				 		$sorgu=$vt->query(" select * from konu where durum=1")-> fetchAll();
				 		$sayac=0;
				 		foreach ($sorgu as $kayit) {
				 			if ($sayac==3) {
							    			break;
							 		}
								    		$sayac++;
				 			
				 		
				 	 ?>
			
			<div class="konul">
				<a href="konuozel.php?id=<?php echo $kayit['konuid'];   ?>">
					<div class="rsm">
						<img src="img/<?php echo $kayit['rsm']; ?>" class="img-responsive">
					</div>
					<div class="icrk">
						<div>
							<h2 class="baslik" style="color: white;font-weight: bold;"><?php echo $kayit["baslik"]; ?></h2>
							<p class="konu" style="color:white; font-size: 11px;opacity: 0.8;"><?php echo $kayit["konu"]; ?></p>
							
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
			include 'baglanti.php';
			 ?>
			
		</div>
		<div class="row" style="margin-top: 20px; ">
					<div class="card" style="background-color:#edebed; width: 90%;margin: auto;border:0px;">
							  <div class="card-header" style="background-color:#edebed;">
							   <h4 style="color: black;">Ziyaretçimize Mesaj</h4>
							  </div>
							  <div class="card-body">
							    <h5 class="card-title" style="color: #ee6363;">Bilişim Çağı Nedir?</h5>
							    <p class="card-text">Bilişim Çağı bilişim ve iletişim teknolojilerindeki gelişimin insanlık tarihinde toplumsal, ekonomik, ve bilimsel değişimin yönünü yeniden belirlediği ve giderek ağ toplumunun ortaya çıktığı döneme verilen ad dır.</p>
							    <img src="img/bilisim.png" class="" style="width: 50%;margin-bottom: 10px;">
							    <h5 class="card-title" style="color: #ee6363;">Peki Bilişim Çağı'nın Önemi Nedir?</h5>
							    <p class="card-text">Bilişim Çağı'nın hayatımızdaki önemine değinmek istediğimizde şu gerçeği görürüz ki: bilişim
								teknolojisi ile gerçekleştirilen bir değişim, ülkeler için devrim niteliği taşımaktadır. Bir ülkenin bilişim teknolojisi
								gelişmiş ise o ülke birinci sınıf olabileceği gibi, bilişim teknolojileri gelişmemiş bir ülke de üçüncü sınıf ülkeler
								kategorisine girebilmektedir. Aynı şekilde teknolojiyi üreten ve kullanan ülkeler, gücü elinde tutan ve gücü yöneten
								ülke olma tanımına da sahip çıkmaktadır.</p>
								<p>Teknoloji, kas gücünün tamamen, beyin gücünün de kısmen yerini tutmaya başlamış, diğer üretim
								faktörlerini önemli ölçüde değişime uğratan bir konuma gelmiştir. Bundan dolayı teknolojinin savunma sanayinden,
								tıp bilimine, haberleşmeden ulaşıma, bilimden üretime, eğitimden ticarete kadar her alandaki önemi de giderek
								artmaktadır. Bilişim Teknolojileri, gün geçtikçe hayatımızın her alanında yerini alıyor. Eğitim ortamında, iş yerlerinde,
								otomasyonda, sağlık kurumlarında, devlet dairelerinde, bilim merkezlerinde, ofislerde… Mikro elektronik teknolojisi
								ile tüketici elektroniğine örnek onlarca ev aleti ile evlerimizde… İhtiyacınız olan tüm bilgileri bilgisayarınızdan anında
								bulunmakta, cep telefonuyla görüşmeler nerede ve hangi şartlarda olursa olsun rahatlıkla yapılmaktadır. Artık
								günlerce aylarca postacı yolu gözlemeye gerek yok. E-posta ve sosyal ağ kullanarak anında haberleşilmekte ve bilişim
								teknolojilerinin hayatımıza getirdiği kolaylıklardan vazgeçmek neredeyse imkânsız bir hal almaktadır. Fakat bu
								teknolojilerin hayatımızda olumlu yönleri olduğu gibi olumsuz yönleri de bulunmakta.
								</p>
								<p>
									Herkesçe bilinen bir gerçek sudur ki çağ ilerlediği sürece teknolojinin yaşamımızdaki yeri büyüyor ve teknoloji
								bizle daha fazla birlikte oluyor. Bu da hem bizim hayatımızı kolaylaştırıyor, hem de bizi de bu teknolojik aletlerle
								birlikte pratik zekâya sahip birer birey yapıyor. Yalnız unutmamak gerekir ki teknoloji bir araçtır. Kendi başına bir
								mantığı yoktur, onu kullanan kişilerin amaçlarına hizmet eder. Bir buldozerle maden de aranabilir, bir ev de yıkılabilir.
								Bilişim teknolojileri ve yazılım dersinin temel amacı; bu teknolojilerin kullanımını olumlu yönde geliştirmek, eğitim
								çağındaki nesli bilinçlendirmek ve üretime yönlendirmektir.
								</p>
								<div class="row list">
									<div class="col-md-6">
										<ul style="border-right: 1px solid black;padding: 2px;">
											<h5 style="color: #ee6363;">Bilgi ve iletişim teknolojilerinin eğitimde yarar ve amaçları nelerdir?</h5>
											<b>Bilgi teknolojisi öğrenme ortamında öğrencilere;</b>
											<li>Mesleklerine yönelik yeni beceriler kazanmalarında</li>
											<li>Öğrenciyi pasif öğrenme ortamlarından kurtararak
											kendi kendine aktif bir şekilde öğrenmelerinde</li>
											<li> Öğrencilerin, interneti, kelime işlemcileri, elektronik
											tablolamayı ve sunum yazılımlarını kullanmalarında</li>
											<li>Bilgi teknolojisi araçları ile bilgiye ulaşma, problem
											çözme, bilginin işlenmesi ve sunulması becerilerini
											bütün öğrencilere kazandırmada </li>
											<li>Onlara günlük hayatta bilgi teknolojisi araçlarını
											nasıl kullanabileceklerini öğretmede</li>
											<li>Doğru zamanda ve doğru yerde, doğru bilgi
											teknolojisi aracı kullanım yeteneğini bütün öğrencilere
											kazandırmada
											</li>
											<li> Öğrenme ortamlarında, eğitimsel yazılımlar,
											elektronik referanslar, uygulama yazılımları ve eğitsel
											oyunlarla desteklemede; böylece eğitimin kalitesini
											arttırmada
											</li>
											<b>Ve ayrıca eğitimin değişik birimlerinde;
											</b>
											<li>Öğretmenlerin, ders planlarını hazırlama, derslerini
											uygulama, ölçme-değerlendirme araçlarını geliştirme,
											not verme, eğitsel materyallerini hazırlama</li>
										</ul>
									</div>
									<div class="col-md-6">
										<ul >
											<li>Veli, okul, öğretmenler ve öğrenciler arasındaki
											işbirliğini ve iletişimi sağlamak.</li>
											<li>Bilgi teknolojisi araçlarını her kademedeki öğrenme
											ortamlarına entegre etmede</li>
											<li>Öğretmenlerin kendilerini geliştirme amaçlı olarak
											kullanmalarında</li>
											<li>Okul yöntemlerinin idari işlerinde</li>
											<li>İl ve ilçe Milli Eğitim Müdürlüklerinin işlevlerinde
											bilişim teknolojileri aktif olarak kullanılmaktadır.
											</li>
											<h5 style="color: #ee6363;">Bilgisayar ve iletişim teknolojisindeki hızlı
											gelişmenin, üretime sağladığı avantajlar nelerdir?</h5>
											<li>Her türlü bilgi akışını hızlandırıp kolaylaştırır,
											</li>
											<li> Zaman kullanımında avantajlar sağlar,
											</li>
											<li>Üretimde etkinlik ve verimliliği arttırır.</li>
											<h5 style="color: #ee6363;">Bilişim teknolojilerinin yazılı iletişime sağladığı büyük
											kolaylıklar nelerdir?</h5>
											<li>Maliyetleri azaltır ve verimliliği artırırlar</li>
											<li>Tekrarı azaltır, veri girişini kolaylaştırır ve zaman
											tüketimini azaltırlar.</li>
											<li>Kâğıt kullanımının gerektirdiği fiziksel alan
											kullanımını daraltırlar</li>
											<li>Doküman yönetiminde etkinlik sağlarlar.</li>
											<li>Ofislerde görülen işlerin maliyetlerini önemli ölçüde
											azaltırlar.</li>
										</ul>
									</div>
									<p style="margin-top: 10px;">Özletle;<br>Bilişim Teknolojileri ülkemizin geleceği adına çok önemlidir.Ülkemiz parlak bir geleceğe sahip olması için Bilgi Çağı'nı asla kaçırmamalıdır.Bunun için gerekli adımların atılması altyapıların güçlendirilmesi devlet görevlileri tarafından hızlı bir şekilde sağlanmalıdır.Genç beyinlerimizin Bilgi Çağı'nı ve ülkeyi şekillendireceğinin farkına varmalı ve onların gelişimi açısından biz elimizden geleni yapmalıyız.Bu web sitesi bu amaçla yapılmıştır.</p>
								</div>
								

							    
							  </div>
					</div>
		</div>
		<div class="row" style=" margin-top: 40px;">
						<div id="carouselExample" class="carousel  slide" data-bs-ride="carousel" style="width: 100%;height: 200px; margin: auto;">
								  <div class="carousel-inner">
								    <div class="carousel-item active" data-bs-interval="10000">
								     	<div class="row">
								     		<?php 

										 		$sorgu=$vt->query(" select * from konu")-> fetchAll();
										 		$sayac=0;
										 		foreach ($sorgu as $kayit) {
										 			if ($sayac==3) {
													    			break;
													 		}
														    		$sayac++;
										 			
										 		
										 	 ?>
								     		<div class="col-md-3">
								     			<div class="card" style="width: 18rem; box-sizing: border-box;overflow: hidden;margin-left: 240px;">
 													 <a href="konuozel.php?id=<?php echo $kayit['konuid'];   ?>"><img src="img/<?php echo $kayit['rsm']; ?>" class="img-responsive" style="width: 18rem;min-height:200px; "></a>
													  <div class="card-body">
													  	<?php 
															$metin=$kayit["icrkmtn"];
															$uzunluk=strlen($metin);
															if ($uzunluk > 120) {
																$kisalt=substr($metin,0,120);
																
															}

														 ?>
														 <b><?php echo $kayit["baslik"]; ?></b>
													    <p class="card-text"><?php echo $kisalt; ?>..</p>
													  </div>
												</div>
								     		</div>

								     		<?php 
								     			}
								     		?>


								     		
								   		</div>
								    </div>
								     <div class="carousel-item" data-bs-interval="10000">
								     	<div class="row">
								     		<<?php 

										 		$sorgu=$vt->query(" select * from konu")-> fetchAll();
										 		$sayac=0;
										 		foreach ($sorgu as $kayit) {
										 			if ($sayac==3) {
													    			break;
													 		}
														    		$sayac++;
										 			
										 		
										 	 ?>
								     		<div class="col-md-3">
								     			<div class="card" style="width: 18rem; box-sizing: border-box;overflow: hidden; margin-left: 240px;">
 													 <a href="konuozel.php?id=<?php echo $kayit['konuid'];   ?>"><img src="img/<?php echo $kayit['rsm']; ?>" class="img-responsive" style="width: 18rem;min-height:200px; "></a>
													  <div class="card-body">
													  	<?php 
															$metin=$kayit["icrkmtn"];
															$uzunluk=strlen($metin);
															if ($uzunluk > 120) {
																$kisalt=substr($metin,0,120);
																
															}

														 ?>
														 <b><?php echo $kayit["baslik"]; ?></b>
													    <p class="card-text"><?php echo $kisalt; ?>..</p>
													  </div>
												</div>
								     		</div>
								     		<?php 
								     			
								     			}
								     		 ?>


								     		
								   		</div>
								    </div>
								  
								    
								    
								   
								  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
								    <span class="carousel-control-prev-icon" aria-hidden="true" style="color: black;"></span>
								    <span class="visually-hidden">Previous</span>
								  </button>
								  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next" style="margin-left: 300px;">
								    <span class="carousel-control-next-icon" aria-hidden="true" style="color: black;"></span>
								    <span class="visually-hidden">Next</span>
								  </button>
						</div>
		</div>
		</div>



		<div class="altmenu">
		<div class="row altmenu" style="background-color:#1c1c1c;margin-top: 250px;">
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