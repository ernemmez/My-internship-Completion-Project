<?php 

	$kadi=$_POST['kadi'];
	$epst=$_POST['email'];
	$sfr=$_POST['sifre'];
	$tel=$_POST['gsm'];
	include 'baglanti.php';
	$ekle=$vt->prepare("insert into uyeler set kadi=?,email=?,sifre=?,gsm=?");
	$ekle->execute(array($kadi,$epst,$sfr,$tel));

	if ($ekle) {
		echo "<script>alert('Kayıt Başarılı.')</script>";
		echo "<script>window.location.href='index.php'</script>";
	}
	else
	{
		echo "<script>alert('Bir Sorun Oluştu!Lütfen Tekrar Deneyiniz.')</script>";
		echo "<script>window.location.href='kayitol.php'</script>";
	}

 ?>