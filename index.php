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
			               <li><a class="dropdown-item nvi" href="donanim.php">Donan??m</a></li>
			              <li><a class="dropdown-item nvi" href="ag.php">A??</a></li>
			              <li><a class="dropdown-item nvi" href="veritabaniislemleri.php">Veritaban?? ????lemleri</a></li>
			               <li><a class="dropdown-item nvi" href="webtasarim.php">Web Tasar??m</a></li>
			                <li><a class="dropdown-item nvi" href="ofis.php">Ofis Yaz??l??mlar??</a></li>
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
							  		<i class="bi bi-box-arrow-right"> </i>????k???? Yap
								</a>
					          </li>
			          	<?php
				          }
			          else
			         	{
			         	?>
					          <li class="nav-item nvi" style="margin-left: 35px;margin-top: 10px;box-sizing: border-box;">
			            <a class="nav-link active " href="kayitol.php" tabindex="-1" aria-disabled="true">Kay??t Ol</a>
			          </li>
			          <li class="nav-item nvi" style="margin-left: 35px;margin-top: 10px;box-sizing: border-box;">
			          	<a  class=" nav-link active "  href="uyegrs.php">
					  		Giri?? Yap
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
				        <h5 style="color: #ee6363;">Bili??im d??nyas??na sende bir ad??m at!</h5>
				        
				      </div>
				    </div>
				    <div class="carousel-item" data-bs-interval="2000">
				      <img src="img/cr1.jpg" class="d-block w-100" alt="..." style="width: 100%;">
				      <div class="carousel-caption d-none d-md-block">
				        <h5 style="color: #ee6363;">Bizimle Kodlamaya Ba??la!</h5>
				       
				      </div>
				    </div>
				    <div class="carousel-item">
				      <img src="img/cr2.jpg" class="d-block w-100" alt="..." style="width: 100%;">
				      <div class="carousel-caption d-none d-md-block">
				        <h5 style="color: #ee6363;">Sistem ve a?? sorunlar??na an??nda ????z??m bul!</h5>
				        
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

			 <h1 style="font-weight: bold;color: #010b1c;" class="text-center">Konular??m??za G??z At??n</h1>

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
							   <h4 style="color: black;">Ziyaret??imize Mesaj</h4>
							  </div>
							  <div class="card-body">
							    <h5 class="card-title" style="color: #ee6363;">Bili??im ??a???? Nedir?</h5>
							    <p class="card-text">Bili??im ??a???? bili??im ve ileti??im teknolojilerindeki geli??imin insanl??k tarihinde toplumsal, ekonomik, ve bilimsel de??i??imin y??n??n?? yeniden belirledi??i ve giderek a?? toplumunun ortaya ????kt?????? d??neme verilen ad d??r.</p>
							    <img src="img/bilisim.png" class="" style="width: 50%;margin-bottom: 10px;">
							    <h5 class="card-title" style="color: #ee6363;">Peki Bili??im ??a????'n??n ??nemi Nedir?</h5>
							    <p class="card-text">Bili??im ??a????'n??n hayat??m??zdaki ??nemine de??inmek istedi??imizde ??u ger??e??i g??r??r??z ki: bili??im
								teknolojisi ile ger??ekle??tirilen bir de??i??im, ??lkeler i??in devrim niteli??i ta????maktad??r. Bir ??lkenin bili??im teknolojisi
								geli??mi?? ise o ??lke birinci s??n??f olabilece??i gibi, bili??im teknolojileri geli??memi?? bir ??lke de ??????nc?? s??n??f ??lkeler
								kategorisine girebilmektedir. Ayn?? ??ekilde teknolojiyi ??reten ve kullanan ??lkeler, g??c?? elinde tutan ve g??c?? y??neten
								??lke olma tan??m??na da sahip ????kmaktad??r.</p>
								<p>Teknoloji, kas g??c??n??n tamamen, beyin g??c??n??n de k??smen yerini tutmaya ba??lam????, di??er ??retim
								fakt??rlerini ??nemli ??l????de de??i??ime u??ratan bir konuma gelmi??tir. Bundan dolay?? teknolojinin savunma sanayinden,
								t??p bilimine, haberle??meden ula????ma, bilimden ??retime, e??itimden ticarete kadar her alandaki ??nemi de giderek
								artmaktad??r. Bili??im Teknolojileri, g??n ge??tik??e hayat??m??z??n her alan??nda yerini al??yor. E??itim ortam??nda, i?? yerlerinde,
								otomasyonda, sa??l??k kurumlar??nda, devlet dairelerinde, bilim merkezlerinde, ofislerde??? Mikro elektronik teknolojisi
								ile t??ketici elektroni??ine ??rnek onlarca ev aleti ile evlerimizde??? ??htiyac??n??z olan t??m bilgileri bilgisayar??n??zdan an??nda
								bulunmakta, cep telefonuyla g??r????meler nerede ve hangi ??artlarda olursa olsun rahatl??kla yap??lmaktad??r. Art??k
								g??nlerce aylarca postac?? yolu g??zlemeye gerek yok. E-posta ve sosyal a?? kullanarak an??nda haberle??ilmekte ve bili??im
								teknolojilerinin hayat??m??za getirdi??i kolayl??klardan vazge??mek neredeyse imk??ns??z bir hal almaktad??r. Fakat bu
								teknolojilerin hayat??m??zda olumlu y??nleri oldu??u gibi olumsuz y??nleri de bulunmakta.
								</p>
								<p>
									Herkes??e bilinen bir ger??ek sudur ki ??a?? ilerledi??i s??rece teknolojinin ya??am??m??zdaki yeri b??y??yor ve teknoloji
								bizle daha fazla birlikte oluyor. Bu da hem bizim hayat??m??z?? kolayla??t??r??yor, hem de bizi de bu teknolojik aletlerle
								birlikte pratik zek??ya sahip birer birey yap??yor. Yaln??z unutmamak gerekir ki teknoloji bir ara??t??r. Kendi ba????na bir
								mant?????? yoktur, onu kullanan ki??ilerin ama??lar??na hizmet eder. Bir buldozerle maden de aranabilir, bir ev de y??k??labilir.
								Bili??im teknolojileri ve yaz??l??m dersinin temel amac??; bu teknolojilerin kullan??m??n?? olumlu y??nde geli??tirmek, e??itim
								??a????ndaki nesli bilin??lendirmek ve ??retime y??nlendirmektir.
								</p>
								<div class="row list">
									<div class="col-md-6">
										<ul style="border-right: 1px solid black;padding: 2px;">
											<h5 style="color: #ee6363;">Bilgi ve ileti??im teknolojilerinin e??itimde yarar ve ama??lar?? nelerdir?</h5>
											<b>Bilgi teknolojisi ????renme ortam??nda ????rencilere;</b>
											<li>Mesleklerine y??nelik yeni beceriler kazanmalar??nda</li>
											<li>????renciyi pasif ????renme ortamlar??ndan kurtararak
											kendi kendine aktif bir ??ekilde ????renmelerinde</li>
											<li> ????rencilerin, interneti, kelime i??lemcileri, elektronik
											tablolamay?? ve sunum yaz??l??mlar??n?? kullanmalar??nda</li>
											<li>Bilgi teknolojisi ara??lar?? ile bilgiye ula??ma, problem
											????zme, bilginin i??lenmesi ve sunulmas?? becerilerini
											b??t??n ????rencilere kazand??rmada </li>
											<li>Onlara g??nl??k hayatta bilgi teknolojisi ara??lar??n??
											nas??l kullanabileceklerini ????retmede</li>
											<li>Do??ru zamanda ve do??ru yerde, do??ru bilgi
											teknolojisi arac?? kullan??m yetene??ini b??t??n ????rencilere
											kazand??rmada
											</li>
											<li> ????renme ortamlar??nda, e??itimsel yaz??l??mlar,
											elektronik referanslar, uygulama yaz??l??mlar?? ve e??itsel
											oyunlarla desteklemede; b??ylece e??itimin kalitesini
											artt??rmada
											</li>
											<b>Ve ayr??ca e??itimin de??i??ik birimlerinde;
											</b>
											<li>????retmenlerin, ders planlar??n?? haz??rlama, derslerini
											uygulama, ??l??me-de??erlendirme ara??lar??n?? geli??tirme,
											not verme, e??itsel materyallerini haz??rlama</li>
										</ul>
									</div>
									<div class="col-md-6">
										<ul >
											<li>Veli, okul, ????retmenler ve ????renciler aras??ndaki
											i??birli??ini ve ileti??imi sa??lamak.</li>
											<li>Bilgi teknolojisi ara??lar??n?? her kademedeki ????renme
											ortamlar??na entegre etmede</li>
											<li>????retmenlerin kendilerini geli??tirme ama??l?? olarak
											kullanmalar??nda</li>
											<li>Okul y??ntemlerinin idari i??lerinde</li>
											<li>??l ve il??e Milli E??itim M??d??rl??klerinin i??levlerinde
											bili??im teknolojileri aktif olarak kullan??lmaktad??r.
											</li>
											<h5 style="color: #ee6363;">Bilgisayar ve ileti??im teknolojisindeki h??zl??
											geli??menin, ??retime sa??lad?????? avantajlar nelerdir?</h5>
											<li>Her t??rl?? bilgi ak??????n?? h??zland??r??p kolayla??t??r??r,
											</li>
											<li> Zaman kullan??m??nda avantajlar sa??lar,
											</li>
											<li>??retimde etkinlik ve verimlili??i artt??r??r.</li>
											<h5 style="color: #ee6363;">Bili??im teknolojilerinin yaz??l?? ileti??ime sa??lad?????? b??y??k
											kolayl??klar nelerdir?</h5>
											<li>Maliyetleri azalt??r ve verimlili??i art??r??rlar</li>
											<li>Tekrar?? azalt??r, veri giri??ini kolayla??t??r??r ve zaman
											t??ketimini azalt??rlar.</li>
											<li>K??????t kullan??m??n??n gerektirdi??i fiziksel alan
											kullan??m??n?? daralt??rlar</li>
											<li>Dok??man y??netiminde etkinlik sa??larlar.</li>
											<li>Ofislerde g??r??len i??lerin maliyetlerini ??nemli ??l????de
											azalt??rlar.</li>
										</ul>
									</div>
									<p style="margin-top: 10px;">??zletle;<br>Bili??im Teknolojileri ??lkemizin gelece??i ad??na ??ok ??nemlidir.??lkemiz parlak bir gelece??e sahip olmas?? i??in Bilgi ??a????'n?? asla ka????rmamal??d??r.Bunun i??in gerekli ad??mlar??n at??lmas?? altyap??lar??n g????lendirilmesi devlet g??revlileri taraf??ndan h??zl?? bir ??ekilde sa??lanmal??d??r.Gen?? beyinlerimizin Bilgi ??a????'n?? ve ??lkeyi ??ekillendirece??inin fark??na varmal?? ve onlar??n geli??imi a????s??ndan biz elimizden geleni yapmal??y??z.Bu web sitesi bu ama??la yap??lm????t??r.</p>
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
		  			<a href="admingrs.php" class="text-center" style="margin-top: 20px;color: white; font-size: 17px; text-decoration: none;">Admin Giri??</a>
		  			
		  		</div>
		  		<div class="row">
		  			
		  				<a href="index.php" class="text-center" style="text-decoration: none;color: white;margin-top: 10px;">Anasayfa</a>
		  			
		  			
		  				<a href="iletisim.php" class="text-center" style="text-decoration: none;color: white;margin-top: 10px;">??leti??im</a>
		  		
		  			
		  				<a href="hakkimizda.php" class="text-center" style="text-decoration: none;color: white;margin-top: 10px;">Hakk??m??zda</a>
		  			
		  		</div>
		  		<div class="row" style="margin-top: 40px;">
		  			<p style="color: #828282; font-size: 13px; text-align: bottom; box-sizing: border-box;" class="text-center text-justify">2021 Emmez Company,Eren Emmez Group ve Bu site ile ilgili t??m logolar?? <br> Emmez Company 'nin Ticari Markalar??,Hizmet Markalar?? veya Tescilli <br> Ticari Markalar??d??r. </p>
		  		</div>
		</div>
		</div>
		</div>
	

</body>
</html>