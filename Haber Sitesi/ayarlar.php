<?php
@session_start();//oturum başlatma
@ob_start();//oturum başlatma
/**
 * @ işareti hata gizleme
 */
date_default_timezone_set('Europe/Istanbul');// saati türkiye saati yap
error_reporting(E_ALL);
ini_set('display_errors', 1);
/**
 * Hataları göster oturum işlemlerini başlat
 */
try {
     $db = new PDO("mysql:host=localhost;dbname=rasityet_odev;charset=utf8", "rasityet_odev", "41034103");
} catch ( PDOException $e ){
     print $e->getMessage();
}

?>