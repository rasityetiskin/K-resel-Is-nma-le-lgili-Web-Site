<?php
            if ($_GET['id']) 
            {//get parametredeki id varsa 
                $id = $_GET['id'];
                $secilmis_blog = $db->query("SELECT * FROM bloglar WHERE id = '{$id}'")->fetch(PDO::FETCH_ASSOC);
                // id si gelen blog u bul
                if(file_exists($secilmis_blog->kapak_resmi))
                {
                    //kapak resmi varsa 
                    unlink('../uploads/'.$secilmis_blog->kapak_resmi);
                    //unlink ile dosyayı sil
                }
                $query = $db->prepare("DELETE FROM bloglar WHERE id = :id");
                    $delete = $query->execute(array(
                    'id' => $_GET['id']
                    ));

                    //veritabınından sil ve bloglar sayfasına gönder
                    header('location:index.php?sayfa=bloglar');
            }

?>