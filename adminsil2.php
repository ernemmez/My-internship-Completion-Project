<?php 
	session_start();

	if (@$_SESSION["admin"])
	 {
			if (isset($_GET["id"]))
		 	{

		 		$gelenid=$_GET["id"];
				include 'baglanti.php';
				$sonuc=$vt->prepare("delete from uyeler where kulid=?");
				$sonuc->execute(array($gelenid));
				echo "<script>window.location.href='adminana.php'</script>";

			}

			else
			{
				

		 		
				echo "<script>window.location.href='adminsil.php'</script>";
			}
	}

	else
	{
		echo "<h3 class='text-danger'> Bu Sayfayı Görmeye Yetkiniz Yok!</h3>";
		
	}


 ?>