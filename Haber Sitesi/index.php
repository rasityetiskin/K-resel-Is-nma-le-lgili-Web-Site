<?php
    include 'header.php';
	if(isset($_GET['sayfa']))
	{
		$sayfa=$_GET['sayfa'];
		if(isset($sayfa))
		{
			include $sayfa.'.php';
		}
	}
	else
	{
		include 'anasayfa.php';
	}

?>

<?php
    include 'footer.php';
?>
