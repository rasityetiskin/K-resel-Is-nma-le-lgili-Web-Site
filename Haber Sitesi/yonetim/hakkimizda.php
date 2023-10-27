<div class="templatemo-content col-1 light-gray-bg">
    <div class="templatemo-content-container">
        <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Hakkımızda</h2>
            <p>Hakkımızdayı güncellemek için bu kısmı kullanabilirsiniz</p>
            <?php
                 $hakkimizda = $db->query("SELECT * FROM hakkimizda ")->fetch(PDO::FETCH_ASSOC);

                 if (isset($_POST['baslik']) && isset($_POST['alt_baslik']) && isset($_POST['yazi'])) {
                    //baslik kisa_icerik icerik varsa 
                    $baslik = trim($_POST['baslik']);// trim ile başındaki sonundaki boşlukları kaldır
                    $alt_baslik = trim($_POST['alt_baslik']);
                    $yazi = trim($_POST['yazi']);

                    $query = $db->prepare("UPDATE hakkimizda SET baslik = ?,alt_baslik = ?,yazi=?");
                    $update = $query->execute(array(
                        $baslik, $alt_baslik, $yazi));
                        //hakkimizdayı gelen veriler ile güncellle
                    if ($update) {
                        header('location:index.php?sayfa=hakkimizda');
                        //işlem başarılıysa

                    } else {
                        //işlem başarısız ise
                        header('location:index.php?sayfa=hakkimizda');
                    }
                }
            ?>

            <form action="" class="templatemo-login-form" method="post">
                <div class="row form-group">
                    <div class="col-lg-12 col-md-12 form-group">
                        <label for="baslik">Başlık</label>
                        <input type="text" class="form-control" id="baslik" name="baslik" placeholder="Başlık" value="<?php echo $hakkimizda['baslik']; ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-12 col-md-12 form-group">
                        <label for="alt_baslik">Alt Başlık</label>
                        <input type="text" class="form-control" id="alt_baslik" name="alt_baslik" placeholder="Alt Başlık" value="<?php echo $hakkimizda['alt_baslik']; ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-12 col-md-12 form-group">
                        <label for="yazi">Hakkımızda yazısı</label>
                        <textarea class="form-control" id="yazi" row="5" cols="5" name="yazi" placeholder="Hakkımızda yazısı"><?php echo $hakkimizda['yazi']; ?></textarea>
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