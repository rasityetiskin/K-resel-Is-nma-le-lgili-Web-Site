<?php
	include '../ayarlar.php';
?>
<!DOCTYPE html>
<html lang="tr">

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
        if(isset($_POST['kullanici_adi']) && isset($_POST['sifre']) && isset($_POST['email']))
        {
            //kullanici_adi sifre email varsa 
            $kullanici_adi=trim($_POST['kullanici_adi']);
            $sifre=trim($_POST['sifre']);
            $email=trim($_POST['email']);
            
            $query = $db->prepare("INSERT INTO kullanici SET kullanici_adi = ?,email = ?,sifre = ?");
            $insert = $query->execute(array(
             $kullanici_adi,$email,$sifre));
             //gelen verileri kaydet
                if ( $insert ){
                header('location:index.php?sayfa=giris-yap');
                //ekleme başarılıysa 
                }else{
                header('location:index.php?sayfa=kayit-ol');
                //kayıt başarısızsa kayıt ola git
                }
        }
    ?>
        <form action="" class="templatemo-login-form" method='Post'>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>
                    <input type="text" name="kullanici_adi" class="form-control" placeholder="kullanici_adi">
                </div>
            </div>
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
                <button type="submit" class="templatemo-blue-button width-100">Kayıt Ol</button>
            </div>
        </form>
    </div>
</body>

</html>