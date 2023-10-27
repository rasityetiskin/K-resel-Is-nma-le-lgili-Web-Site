<?php
	include '../ayarlar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yönetim Panel Giriş</title>
    <meta name="description" content="">
    <meta name="author" content="Raşit">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet'
        type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">

</head>

<body class="light-gray-bg">
    <div class="templatemo-content-widget templatemo-login-widget white-bg">
        <header class="text-center">
            <div class="square"></div>
            <h1>Yönetim Panel</h1>
        </header>
        <?php
        if(isset($_POST['sifre']) && isset($_POST['email']))//form post olmuşsa email ve şifre varsa
        {

            $sifre=trim($_POST['sifre']);//sağ ve sol boşlukları temizle gelen sifreyi al
            $email=trim($_POST['email']);//sağ ve sol boşlukları temizle gelen email i al

            $sorgu=$db->prepare("select * from kullanici where email=? and sifre=?");
            $sorgu->execute(array($email,$sifre));
            $islem=$sorgu->fetch();
            //gelen email ve şifre eşleşiyorsa
                if ( $islem )
                {
                    $kullanici = $db->query("SELECT * FROM kullanici WHERE email = '{$email}'")->fetch(PDO::FETCH_ASSOC);
                    //giriş yapan kullanici yi bul
                    $_SESSION['kullanici_email']   =$email; //email i session kullanici emaile e ata
                    $_SESSION['kullanici_id']   =$kullanici['id'];//id i session kullanici idye  ata
					$_SESSION['kullanici_adi']   =$kullanici['kullanici_adi'];
					header('location:index.php?sayfa=anasayfa');//anasayfa ya gönder
                }else{
				
                	echo '<strong style="color:red;">Giriş Hatalı</strong>';
                    //hatalı giriş yazdır
                }
        }	
            ?>
        <form action="" class="templatemo-login-form" method='Post'>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>
                    <input type="password" name="sifre" class="form-control" placeholder="******">
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="templatemo-blue-button width-100">Giriş Yap</button>
            </div>
            <div class="form-group">
            <center>
                 <a href="kayit-ol.php" class="text-center width-100" style="margin-left:auto;margin-right:auto;">Kayıt Ol</a>
            </center>
            
            </div>
        </form>
    </div>
</body>

</html>