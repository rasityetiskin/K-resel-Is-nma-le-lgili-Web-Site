<?php
 session_start();  
 session_destroy();  
 header("location:index.php?sayfa=anasayfa");  
 /**
  * Çıkış yap oturumları temizle ana sayfa ya git
  */
?>