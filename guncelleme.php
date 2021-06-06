<?php 
	include 'baglanti.php';
							if (isset($_POST["guncelle"]))
				                 {
				                    
				                     $duzenle=$vt->prepare("UPDATE konu SET konu=:konu,baslik=:baslik,icrkmtn=:icrkmtn,durum=:durum,ktgr=:ktgr where konuid=:konuid");
				                     $duzenle->execute(array(
				                     		'konu'=>$_POST['konu'],
				                     		'baslik'=>$_POST['baslik'],
				                     		'icrkmtn'=>$_POST['icrkmtn'],
				                     		'durum'=>$_POST['durum'],
				                     		'ktgr'=>$_POST['ktgr'],
				                     		'konuid'=>$_POST['konuid']

				                     ));
				                     echo "<script> alert('İçerik Güncellenmiştir.') </script>";
				                     echo "<script> window.location.href='adminana.php' </script>";
				                 }
				                 else
				                 {
				                 		 echo "<script> alert('İçerik Güncellenirken Bir Hata Oluştu.') </script>";
				                 		 exit;
				                 }

 ?>