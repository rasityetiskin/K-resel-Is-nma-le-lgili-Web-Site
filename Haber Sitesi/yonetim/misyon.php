<div class="templatemo-content col-1 light-gray-bg">
    <div class="templatemo-content-container">
        <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Misyon</h2>
            <p>Misyon güncellemek için bu kısmı kullanabilirsiniz</p>
            <?php
                 $misyon = $db->query("SELECT * FROM misyon ")->fetch(PDO::FETCH_ASSOC);
                 if (isset($_POST['baslik']) && isset($_POST['alt_baslik']) && isset($_POST['yazi'])) {
                    //baslik kisa_icerik icerik varsa 
                    $baslik = trim($_POST['baslik']);// trim ile başındaki sonundaki boşlukları kaldır
                    $alt_baslik = trim($_POST['alt_baslik']);
                    $yazi = trim($_POST['yazi']);

                    $query = $db->prepare("UPDATE misyon SET baslik = ?,alt_baslik = ?,yazi=?");
                    $insert = $query->execute(array(
                        $baslik, $alt_baslik, $yazi));
                    if ($insert) {
                        header('location:index.php?sayfa=misyon ');

                    } else {
                        header('location:index.php?sayfa=misyon ');
                    }
                }
            ?>

            <form action="" class="templatemo-login-form" method="post">
                <div class="row form-group">
                    <div class="col-lg-12 col-md-12 form-group">
                        <label for="baslik">Başlık</label>
                        <input type="text" class="form-control" id="baslik" name="baslik" placeholder="Başlık" value="<?php echo $misyon ['baslik']; ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-12 col-md-12 form-group">
                        <label for="alt_baslik">Alt Başlık</label>
                        <input type="text" class="form-control" id="alt_baslik" name="alt_baslik" placeholder="Alt Başlık" value="<?php echo $misyon ['alt_baslik']; ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-12 col-md-12 form-group">
                        <label for="yazi">Misyon yazısı</label>
                        <textarea class="form-control" id="yazi" row="5" cols="5" name="yazi" placeholder="Misyon  yazısı"><?php echo $misyon ['yazi']; ?></textarea>
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