<?php
    include '../ayarlar.php';
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Haber Sitesi Admin Panel</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Left column -->
    <div class="templatemo-flex-row">
        <div class="templatemo-sidebar">
            <header class="templatemo-site-header">
                <div class="square"></div>
                <h1><?php echo $_SESSION['kullanici_adi'];?></h1>
            </header>
            <div class="mobile-menu-icon">
                <i class="fa fa-bars"></i>
            </div>
            <nav class="templatemo-left-nav">
                <ul>
                    <li>
                        <a href="?sayfa=anasayfa" class="<?php if(isset($_GET['sayfa'])  && $_GET['sayfa'] == 'anasayfa') { echo 'active'; } ?>">
                            <i class="fa fa-home fa-fw"></i>
                            Ana Sayfa
                        </a>
                    </li>
                    <li>
                        <a href="?sayfa=blog-ekle" class="<?php if(isset($_GET['sayfa'])  && $_GET['sayfa'] == 'blog-ekle') { echo 'active'; } ?>">
                            <i class="fa fa-bar-chart fa-fw"></i>
                            Blog Ekle
                        </a>
                    </li>
                    <li>
                        <a href="?sayfa=bloglar" class="<?php if(isset($_GET['sayfa'])  && $_GET['sayfa'] == 'bloglar') { echo 'active'; } ?>">
                            <i class="fa fa-database fa-fw"></i>
                            Bloglar
                        </a>
                    </li>
                    <li>
                        <a href="?sayfa=iletisim" class="<?php if(isset($_GET['sayfa'])  && $_GET['sayfa'] == 'iletisim') { echo 'active'; } ?>">
                            <i class="fa fa-map-marker fa-fw"></i>
                            İletişim
                        </a>
                    </li>
                    <li>
                        <a href="?sayfa=hakkimizda" class="<?php if(isset($_GET['sayfa'])  && $_GET['sayfa'] == 'hakkimizda') { echo 'active'; } ?>">
                            <i class="fa fa-users fa-fw"></i>
                            Hakkimizda
                        </a>
                    </li>
                    <li>
                        <a href="?sayfa=vizyon"><i class="fa fa-users fa-fw"></i>
                            Vizyon
                        </a>
                    </li>
                    <li>
                        <a href="?sayfa=misyon">
                            <i class="fa fa-users fa-fw"></i>Misyon
                        </a>
                    </li>
                    <li>
                        <a href="?sayfa=cikis-yap">
                            <i class="fa fa-eject fa-fw"></i>
                            Çıkış Yap
                        </a>
                    </li>
                </ul>
            </nav>
        </div>