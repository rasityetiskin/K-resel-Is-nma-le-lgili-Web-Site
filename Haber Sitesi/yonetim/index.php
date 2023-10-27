<?php
	include '../ayarlar.php'; //ayaları dahil et
	include 'kullanici-kontrol.php'; //kullaniciyi kontrol et giriş yapmış mı

	include 'header.php'; // header sayfasını dahil et

	if(isset($_GET['sayfa']))//sayfa get parametresi varsa
	{
		$sayfa=$_GET['sayfa'];//sayfa değişkenine ata
		if(isset($sayfa))//sayfa varsa
		{
			include $sayfa.'.php';//sayfa ya .php ekle ve dahil et
		}
	}
	else
	{
		include 'anasayfa.php';//yoksa anasayfa yı aç
	}
?>

<?php
    include 'footer.php';//footer i dahil et
?>