<?php 
session_start();
if (isset($_SESSION["user"])) {
	
	echo "<script>window.location.href='index.php'</script>";
	die();

}

	
	
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
			.list li{

			}
			.vlg:hover{
				content: url('img/valorant.png');
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
							<div class="col-md-4" style="margin: auto;margin-top: 50px;border-right:1px solid lightgray;height: 400px;">
								<img src="img/pembelogo.png" class="vlg img-fluid" style="margin-left: 25%;width: 35%;">
							<p>Sitemizdeki web sayfalar?? ve ona ba??l?? t??m sayfalar erenemmez.online  firmas??n??n mal??d??r ve onun taraf??ndan i??letilir. Sizler (???Kullan??c?????) sitede sunulan t??m hizmetleri kullan??rken a??a????daki ??artlara tabi oldu??unuzu, sitedeki hizmetten yararlanmakla ve kullanmaya devam etmekle; Ba??l?? oldu??unuz yasalara g??re s??zle??me imzalama hakk??na, yetkisine ve hukuki ehliyetine sahip oldu??unuzu, bu s??zle??meyi okudu??unuzu, anlad??????n??z?? ve s??zle??mede yazan ??artlarla ba??l?? oldu??unuzu kabul etmi?? say??l??rs??n??z.<br><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2">??yelik S??zle??mesi</a></p>
								 <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: +999999; color:white;" style="border:0px; " >
									  <div class="modal-dialog" style="box-shadow: 0px 0px 0px 0px black;margin-top: 200px; ">
									    <div class="modal-content" style="background-color: #1c1c1c; ">
									      <div class="modal-header" style="border-bottom: 0px;">
									        <h5 class="modal-title" id="exampleModalLabel">??yelik S??zle??mesi</h5>
									        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
									      </div>
									      <div class="modal-body" style="border-bottom: 0px;">
									      			<b>S??TE KULLANIM VE ??YEL??K ??ARTLARI</b><br>
									       			<p>L??tfen sitemize ??ye olmadan evvel bu ???site kullan??m ??artlar?????n?? dikkatlice okuyunuz.
Bu al????veri?? sitesini kullanan ve al????veri?? yapan m????terilerimiz a??a????daki ??artlar?? kabul etmi?? varsay??lmaktad??r:</p>
									       			<p>Sitemizdeki web sayfalar?? ve ona ba??l?? t??m sayfalar (???site???) erenemmez.online  firmas??n??n mal??d??r ve onun taraf??ndan i??letilir. Sizler (???Kullan??c?????) sitede sunulan t??m hizmetleri kullan??rken a??a????daki ??artlara tabi oldu??unuzu, sitedeki hizmetten yararlanmakla ve kullanmaya devam etmekle; Ba??l?? oldu??unuz yasalara g??re s??zle??me imzalama hakk??na, yetkisine ve hukuki ehliyetine sahip oldu??unuzu, bu s??zle??meyi okudu??unuzu, anlad??????n??z?? ve s??zle??mede yazan ??artlarla ba??l?? oldu??unuzu kabul etmi?? say??l??rs??n??z.</p>
									       			<p>????bu s??zle??me taraflara s??zle??me konusu site ile ilgili hak ve y??k??ml??l??kler y??kler ve taraflar i??bu s??zle??meyi kabul ettiklerinde bahsi ge??en hak ve y??k??ml??l??kleri eksiksiz, do??ru, zaman??nda, i??bu s??zle??mede talep edilen ??artlar d??hilinde yerine getireceklerini beyan ederler.</p>
									       			<b>1. SORUMLULUKLAR</b><br>
									       			<p>a.Firma, fiyatlar ve sunulan ??r??n ve hizmetler ??zerinde de??i??iklik yapma hakk??n?? her zaman sakl?? tutar.</p>
									       			
									       			<p>
									       				b.Firma, ??yenin s??zle??me konusu hizmetlerden, teknik ar??zalar d??????nda yararland??r??laca????n?? kabul ve taahh??t eder.
									       			</p>
									       			
									       			<p>c.Kullan??c??, sitenin kullan??m??nda tersine m??hendislik yapmayaca????n?? ya da bunlar??n kaynak kodunu bulmak veya elde etmek amac??na y??nelik herhangi bir ba??ka i??lemde bulunmayaca????n?? aksi halde ve 3. Ki??iler nezdinde do??acak zararlardan sorumlu olaca????n??, hakk??nda hukuki ve cezai i??lem yap??laca????n?? pe??inen kabul eder.</p>
									       			
									       			<p>d.Kullan??c??, site i??indeki faaliyetlerinde, sitenin herhangi bir b??l??m??nde veya ileti??imlerinde genel ahlaka ve adaba ayk??r??, kanuna ayk??r??, 3. Ki??ilerin haklar??n?? zedeleyen, yan??lt??c??, sald??rgan, m??stehcen, pornografik, ki??ilik haklar??n?? zedeleyen, telif haklar??na ayk??r??, yasa d?????? faaliyetleri te??vik eden i??erikler ??retmeyece??ini, payla??mayaca????n?? kabul eder. Aksi halde olu??acak zarardan tamamen kendisi sorumludur ve bu durumda ???Site??? yetkilileri, bu t??r hesaplar?? ask??ya alabilir, sona erdirebilir, yasal s??re?? ba??latma hakk??n?? sakl?? tutar. Bu sebeple yarg?? mercilerinden etkinlik veya kullan??c?? hesaplar?? ile ilgili bilgi talepleri gelirse payla??ma hakk??n?? sakl?? tutar.</p>
									       			
									       			<p>e.Sitenin ??yelerinin birbirleri veya ??????nc?? ??ah??slarla olan ili??kileri kendi sorumlulu??undad??r.</p>
									       			<b>2. Fikri M??lkiyet Haklar??</b><br>
									       			<p>2.1. ????bu Site???de yer alan ??nvan, i??letme ad??, marka, patent, logo, tasar??m, bilgi ve y??ntem gibi tescilli veya tescilsiz t??m fikri m??lkiyet haklar?? site i??leteni ve sahibi firmaya veya belirtilen ilgilisine ait olup, ulusal ve uluslararas?? hukukun korumas?? alt??ndad??r. ????bu Site???nin ziyaret edilmesi veya bu Site???deki hizmetlerden yararlan??lmas?? s??z konusu fikri m??lkiyet haklar?? konusunda hi??bir hak vermez.</p>
									       			
									       			<p>2.2. Site???de yer alan bilgiler hi??bir ??ekilde ??o??alt??lamaz, yay??nlanamaz, kopyalanamaz, sunulamaz ve/veya aktar??lamaz. Site???nin b??t??n?? veya bir k??sm?? di??er bir internet sitesinde izinsiz olarak kullan??lamaz.</p>
									       			<b>3. Gizli Bilgi</b><br>
									       			<p>3.1. Firma, site ??zerinden kullan??c??lar??n iletti??i ki??isel bilgileri 3. Ki??ilere a????klamayacakt??r. Bu ki??isel bilgiler; ki??i ad??-soyad??, adresi, telefon numaras??, cep telefonu, e-posta adresi gibi Kullan??c?????y?? tan??mlamaya y??nelik her t??rl?? di??er bilgiyi i??ermekte olup, k??saca ???Gizli Bilgiler??? olarak an??lacakt??r.</p>
									       			
									       			<p>3.2. Kullan??c??, sadece tan??t??m, reklam, kampanya, promosyon, duyuru vb. pazarlama faaliyetleri kapsam??nda kullan??lmas?? ile s??n??rl?? olmak ??zere, Site???nin sahibi olan firman??n kendisine ait ileti??im, portf??y durumu ve demografik bilgilerini i??tirakleri ya da ba??l?? bulundu??u grup ??irketleri ile payla??mas??na muvafakat etti??ini kabul ve beyan eder. Bu ki??isel bilgiler firma b??nyesinde m????teri profili belirlemek, m????teri profiline uygun promosyon ve kampanyalar sunmak ve istatistiksel ??al????malar yapmak amac??yla kullan??labilecektir.</p>
									       			
									       			<p>3.3. Gizli Bilgiler, ancak resmi makamlarca usul?? dairesinde bu bilgilerin talep edilmesi halinde ve y??r??rl??kteki emredici mevzuat h??k??mleri gere??ince resmi makamlara a????klama yap??lmas??n??n zorunlu oldu??u durumlarda resmi makamlara a????klanabilecektir.</p>
									       			<b>4. Garanti Vermeme</b><br>
									       			<p>????BU S??ZLE??ME MADDES?? UYGULANAB??L??R KANUNUN ??Z??N VERD?????? AZAM?? ??L????DE GE??ERL?? OLACAKTIR. F??RMA TARAFINDAN SUNULAN H??ZMETLER "OLDU??U G??B????? VE "M??MK??N OLDU??U??? TEMELDE SUNULMAKTA VE PAZARLANAB??L??RL??K, BEL??RL?? B??R AMACA UYGUNLUK VEYA ??HLAL ETMEME KONUSUNDA T??M ZIMN?? GARANT??LER DE D??H??L OLMAK ??ZERE H??ZMETLER VEYA UYGULAMA ??LE ??LG??L?? OLARAK (BUNLARDA YER ALAN T??M B??LG??LER D??H??L) SAR??H VEYA ZIMN??, KANUN?? VEYA BA??KA B??R N??TEL??KTE H????B??R GARANT??DE BULUNMAMAKTADIR.</p>
									       			<b>5. Kay??t ve G??venlik</b><br>
									       			<p>Kullan??c??, do??ru, eksiksiz ve g??ncel kay??t bilgilerini vermek zorundad??r. Aksi halde bu S??zle??me ihlal edilmi?? say??lacak ve Kullan??c?? bilgilendirilmeksizin hesap kapat??labilecektir.
Kullan??c??, site ve ??????nc?? taraf sitelerdeki ??ifre ve hesap g??venli??inden kendisi sorumludur. Aksi halde olu??acak veri kay??plar??ndan ve g??venlik ihlallerinden veya donan??m ve cihazlar??n zarar g??rmesinden Firma sorumlu tutulamaz.</p>
									       			<b>6. M??cbir Sebep</b><br>
									       			<p>Taraflar??n kontrol??nde olmayan; tabii afetler, yang??n, patlamalar, i?? sava??lar, sava??lar, ayaklanmalar, halk hareketleri, seferberlik ilan??, grev, lokavt ve salg??n hastal??klar, altyap?? ve internet ar??zalar??, elektrik kesintisi gibi sebeplerden (a??a????da birlikte "M??cbir Sebep??? olarak an??lacakt??r.) dolay?? s??zle??meden do??an y??k??ml??l??kler taraflarca ifa edilemez hale gelirse, taraflar bundan sorumlu de??ildir. Bu s??rede Taraflar?????n i??bu S??zle??me???den do??an hak ve y??k??ml??l??kleri ask??ya al??n??r.</p>
									       			<b>7. S??zle??menin B??t??nl?????? ve Uygulanabilirlik</b><br>
									       			<p>????bu s??zle??me ??artlar??ndan biri, k??smen veya tamamen ge??ersiz hale gelirse, s??zle??menin geri kalan?? ge??erlili??ini korumaya devam eder.</p>
									       			<b>8. S??zle??mede Yap??lacak De??i??iklikler</b><br>
									       			<p>Firma, diledi??i zaman sitede sunulan hizmetleri ve i??bu s??zle??me ??artlar??n?? k??smen veya tamamen de??i??tirebilir. De??i??iklikler sitede yay??nland?????? tarihten itibaren ge??erli olacakt??r. De??i??iklikleri takip etmek Kullan??c?????n??n sorumlulu??undad??r. Kullan??c??, sunulan hizmetlerden yararlanmaya devam etmekle bu de??i??iklikleri de kabul etmi?? say??l??r.</p>
									       			<b>9. Tebligat</b><br>
									       			<p>????bu S??zle??me ile ilgili taraflara g??nderilecek olan t??m bildirimler, Firma???n??n bilinen e.posta adresi ve kullan??c??n??n ??yelik formunda belirtti??i e.posta adresi vas??tas??yla yap??lacakt??r. Kullan??c??, ??ye olurken belirtti??i adresin ge??erli tebligat adresi oldu??unu, de??i??mesi durumunda 5 g??n i??inde yaz??l?? olarak di??er tarafa bildirece??ini, aksi halde bu adrese yap??lacak tebligatlar??n ge??erli say??laca????n?? kabul eder.</p>
									       			<b>10. Delil S??zle??mesi</b><br>
									       			<p>Taraflar aras??nda i??bu s??zle??me ile ilgili i??lemler i??in ????kabilecek her t??rl?? uyu??mazl??klarda Taraflar?????n defter, kay??t ve belgeleri ile ve bilgisayar kay??tlar?? ve faks kay??tlar?? 6100 say??l?? Hukuk Muhakemeleri Kanunu uyar??nca delil olarak kabul edilecek olup, kullan??c?? bu kay??tlara itiraz etmeyece??ini kabul eder.</p>
									       			
									       			<b>11. Uyu??mazl??klar??n ????z??m??</b><br>
									       			<p>????bu S??zle??me???nin uygulanmas??ndan veya yorumlanmas??ndan do??acak her t??rl?? uyu??mazl??????n ????z??m??nde ??stanbul (Merkez) Adliyesi Mahkemeleri ve ??cra Daireleri yetkilidir.</p>
									      </div>
									    
									    </div>
									  </div>
								</div>
							</div>
							
							
							
							
							<div class="col-md-4" style="margin: auto;margin-left: -310px;margin-top: 150px;">
								<form action="" method="post">
									
								  <div class="mb-3">
								    <label for="exampleInputEmail1" class="form-label">Kullan??c?? Ad??</label>
								    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kadi" required="">
								    
								  </div>
								  <div class="mb-3">
								    <label for="exampleInputPassword1" class="form-label">??ifre</label>
								    <input type="password" class="form-control" id="exampleInputPassword1" name="sifre" required="">
								  </div>
								  
								 
								  <button type="submit" class="btn btn-primary" name="girisyap" style="background-color: #ee6363;">Giri?? Yap</button>
								</form>
							</div>
							<?php 
					  if ($_POST) {
					    $kullanici=$_POST["kadi"];
					    $sifre=$_POST["sifre"];
					    include 'baglanti.php';
					    $sonuc=$vt->query("select * from uyeler where kadi='$kullanici'")->fetch();
					    if ($sonuc) {
					      if ($sifre==$sonuc["sifre"]) {
					        session_start();
					         $_SESSION['uyeoturumu']=$kullanici;
					         $_SESSION["kulid"]=$sonuc["kulid"];
					         
					         echo "<script>alert('Merhaba Say??n $kullanici,Ho??geldiniz.')</script>";
					         echo "<script>window.location.href='index.php'</script>";

					      }
					      else
					      {
					        echo "<script>alert('??ifre Yanl????!')</script>";
					      }
					    }
					    else
					    {
					    echo "<script>alert('Bu Kullan??c?? Mevcut De??il!')</script>";
					    }
					  }

					 ?>
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
<?php 
			
		
		
	


 ?>