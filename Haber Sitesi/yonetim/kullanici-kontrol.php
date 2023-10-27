<?php
if(!isset( $_SESSION['kullanici_email'] ))
{
    //oturum açmamışsa giriş yap sayfasına gönder
    /*
        Giriş Yapmamış kişi devam edemesin 
    */
    header('location:giris.php');
}
?>