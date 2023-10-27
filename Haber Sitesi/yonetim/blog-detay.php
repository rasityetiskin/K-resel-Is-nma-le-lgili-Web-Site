<?php
    if($_GET['id'])// id get parametresi varsa
    {
        $id=$_GET['id'];//get id parametresini id değişkenine ata
        $secilmis_blog = $db->query("SELECT * FROM bloglar WHERE id = '{$id}'")->fetch(PDO::FETCH_ASSOC);
       //bloglar tablosundan gelenye eşit olan blog yazısını getir
            if ($secilmis_blog )
            {
               //seçilmiş blog varsa

            }else{
            header('location:index.php?sayfa=anasayfa');
            /*
                blog yazısı yoksa ana sayfaya gönder
            */
            }

    }else{
        header('location:index.php?sayfa=anasayfa');
        //paramete yoksa anasayfa ya gönder
    }
?>
<div class="templatemo-content col-1 light-gray-bg">
    <div class="templatemo-content-container">
        <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Blog Detay</h2>
            <p>Blog Yazısı görüntülemek için bu kısmı kullanabilirsiniz</p>
            <div class="row form-group">
                <div class="col-lg-12 col-md-12 form-group">
                    <h1><?php echo $secilmis_blog['baslik']; ?></h1><!-- seçilen blog un başlığını yaz-->
                </div>
                <div class="col-lg-12 col-md-12 form-group">
                    <p><?php echo $secilmis_blog['kisa_icerik']; ?></p><!-- seçilen blog un kisa_icerik yaz-->
                </div>
                <div class="col-lg-12 col-md-12 form-group">
                    <p><?php echo $secilmis_blog['icerik']; ?></p><!-- seçilen blog un icerik yaz-->
                </div>
                <div class="col-lg-12 col-md-12 form-group">
                    <p><?php echo $secilmis_blog['yazar_kullanici_adi']; ?></p><!-- seçilen blog un yazar_kullanici_adi yaz-->
                </div>
                <div class="col-lg-12 col-md-12 form-group">
                    <p><?php echo $secilmis_blog['yayinlanma_tarihi']; ?></p><!-- seçilen blog un yayinlanma_tarihi yaz-->
                </div>
                <div class="col-lg-12 col-md-12 form-group">
                    <img src="../uploads/<?php echo $secilmis_blog['kapak_resmi']; ?>" class="img-responsive"><!-- seçilen blog un kapak_resmi yaz-->
                </div>
            </div>
        </div>
    </div>
</div>