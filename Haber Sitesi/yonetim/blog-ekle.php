<div class="templatemo-content col-1 light-gray-bg">
    <div class="templatemo-content-container">
        <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Blog Ekle</h2>
            <p>Blog Yazısı Eklemek için bu kısmı kullanabilirsiniz</p>
            <?php

 
    if (isset($_FILES["kapak_resmi"])) 
    {
        //kapak resmi varsa
         $email=$_SESSION['kullanici_email'];
        $kullanici = $db->query("SELECT * FROM kullanici WHERE email = '{$email}'")->fetch(PDO::FETCH_ASSOC);
        //geçerli kullaniciyi bul

        $uzanti= array('image/jpeg','image/jpg','image/png','image/x-png','image/gif');//resim uzantılarını ekle
        $dizin= "../uploads";//nereye yüklenecek
        if(in_array(strtolower($_FILES['kapak_resmi']['type']),$uzanti)){//uzantı doğru mu
        move_uploaded_file($_FILES['kapak_resmi']['tmp_name'],"./$dizin/{$_FILES['kapak_resmi']['name']}");//resmi yükle
        chmod("./$dizin/{$_FILES['kapak_resmi']['name']}" , 0777);//resime yetki ver

        $resim= "{$_FILES['kapak_resmi']['name']}";
        if(isset($_POST['baslik']) && isset($_POST['kisa_icerik']) && isset($_POST['icerik']))
        {
            //baslik kisa_icerik icerik varsa 
            $baslik=trim($_POST['baslik']);// trim ile başındaki sonundaki boşlukları kaldır
            $kisa_icerik=trim($_POST['kisa_icerik']);
            $icerik=trim($_POST['icerik']);
            
            $query = $db->prepare("INSERT INTO bloglar SET baslik = ?,kisa_icerik = ?,icerik=?,kapak_resmi=?,yazar_kullanici_adi=?,yazar_id=?");
            $insert = $query->execute(array(
             $baslik,$kisa_icerik,$icerik,$resim,$kullanici['kullanici_adi'],$kullanici['id']));
                if ( $insert ){
                header('location:index.php?sayfa=anasayfa');
                /*
                    blog ekle başarılıysa profile git
                 */
                }else{
                header('location:index.php?sayfa=blog-ekle');
                /**
                 * hatalıysa blog ekleye git
                 */
                }
        }

        }else{
        echo "Resim Yükleme Başarısız !";
        /**
         * 
         * Resim yükleme başarısız
         */
        }


      
     /*   required formdaki zorunlu alan
        */
        
      
      }
      

      ?>
            <form action="" class="templatemo-login-form" method="post" enctype="multipart/form-data">
                <div class="row form-group">
                    <div class="col-lg-12 col-md-12 form-group">
                        <label for="baslik">Başlık</label>
                        <input type="text" class="form-control" id="baslik" name="baslik" placeholder="Başlık">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-12 col-md-12 form-group">
                        <label for="kisa_icerik">Kısa İçerik</label>
                        <textarea class="form-control" id="kisa_icerik" name="kisa_icerik" placeholder="Kısa İçerik"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-12 col-md-12 form-group">
                        <label for="icerik">İçerik</label>
                        <textarea class="form-control" id="icerik" name="icerik" placeholder="İçerik"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-12">
                        <label class="control-label templatemo-block">Kapak Resmi</label>
                        <input type="file" name="kapak_resmi" id="fileToUpload" class="filestyle"
                            data-buttonName="btn-primary" data-buttonBefore="true" data-icon="false">
                    
                    </div>
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="templatemo-blue-button">Kaydet</button>
                    <button type="reset" class="templatemo-white-button">Sıfırla</button>
                </div>
            </form>
        </div>

    </div>
</div>