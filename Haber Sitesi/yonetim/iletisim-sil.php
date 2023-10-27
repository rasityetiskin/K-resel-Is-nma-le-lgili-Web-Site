<?php
            if ($_GET['id']) {
                //get id parametresi var mı
                $id = $_GET['id'];//gelen id parametresini id değişkenine ata
                $iletisim = $db->query("SELECT * FROM iletisim WHERE id = '{$id}'")->fetch(PDO::FETCH_ASSOC);
                //gelen iletisim i bul
                $query = $db->prepare("DELETE FROM iletisim WHERE id = :id");
                    $delete = $query->execute(array(
                    'id' => $_GET['id']
                    ));
                    //iletisim tablosundaki id si gelen id ile eşleşe kaydı sil iletişim sayfasına gönder
                    header('location:index.php?sayfa=iletisim');
            }
?>