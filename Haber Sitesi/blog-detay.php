<?php
    if($_GET['id'])
    {
        $id=$_GET['id'];
        $secilmis_blog = $db->query("SELECT * FROM bloglar WHERE id = '{$id}'")->fetch(PDO::FETCH_ASSOC);
        //bloglar tablosundan id gelen blogu seç bilgilerini getir
            if ($secilmis_blog )
            {
            }else{
            header('location:index.php?sayfa=anasayfa');//seçilmiş blog yoksa anasaayfa ya gönder
            /*
                blog yazısı varsa
            */
            }

    }else{
        header('location:index.php?sayfa=anasayfa');//Eğer id get parametresi yoksa anasayfa ya git
    }
?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('uploads/<?php echo $secilmis_blog['kapak_resmi']; ?>')"><!-- id si gönderilmiş seçilen blog un kapak resmini yaz -->
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1><?php echo $secilmis_blog['baslik']; ?></h1><!-- seçilen blog un başlığını yaz-->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Post Content-->
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <h2 class="subheading"><?php echo $secilmis_blog['kisa_icerik']; ?></h2><!-- seçilen blog un kısa içeriğini yaz-->
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p> <?php echo $secilmis_blog['icerik']; ?></p>
            </div>
        </div>
        <br>
        <div class="row gx-4 gx-lg-5 justify-content-center">
            Yazar <br>
            <?php echo $secilmis_blog['yazar_kullanici_adi']; ?>
            <br>
            <?php echo $secilmis_blog['yayinlanma_tarihi']; ?>
        </div>
    </div>
</article>