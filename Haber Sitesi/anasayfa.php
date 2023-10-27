<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Haber Siteme Hoşgeldiniz</h1>
                    <span class="subheading">Ana Sayfa Haberleri</span>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <?php
            
            $bloglar = $db->query("SELECT * FROM bloglar Order By id Desc", PDO::FETCH_ASSOC);
            //bloglar tablosundan blogları id si en büyük olacak şekilde getir
            if ( $bloglar->rowCount() ){//blog varsa
                 foreach( $bloglar as $blog ){//bloglari gelen veri sayısı kadar döndür
                     ?>
        
            <div class="post-preview">
                <a href="?sayfa=blog-detay&id=<?php echo $blog['id'] ?>"><!-- listelenen blogun blog-detay sayfasında id sini gönder -->
                    <img class="img-responsive" src="uploads/<?php echo $blog['kapak_resmi'] ?>" alt=""><!-- listelenen blog un kapak resmini göster -->
                    <h2 class="post-title"><?php echo $blog['baslik'] ?></h2><!-- listelenen blog un başlığını göster -->
                    <h3 class="post-subtitle"><?php echo  $blog['kisa_icerik'] ?></h3><!-- listelenen blog un kısa içeriğini göster -->
                </a>
                <p class="post-meta">
                    Yazar
                    <a href="#!"><?php echo $blog['yazar_kullanici_adi']; ?></a><!-- listelenen blog un yazar kullanici adını göster -->
                    <?php echo $blog['yayinlanma_tarihi']; ?><!-- listelenen blog un yayınlanma tarihini adını göster -->
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <?php
                 }
            }
            ?>
            <!-- Post preview-->


        </div>
    </div>
</div>