-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 27 May 2022, 14:56:32
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `odev`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bloglar`
--

CREATE TABLE `bloglar` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `kisa_icerik` varchar(255) NOT NULL,
  `icerik` text NOT NULL,
  `yazar_id` int(11) NOT NULL,
  `yayinlanma_tarihi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `yazar_kullanici_adi` varchar(255) NOT NULL,
  `kapak_resmi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `bloglar`
--

INSERT INTO `bloglar` (`id`, `baslik`, `kisa_icerik`, `icerik`, `yazar_id`, `yayinlanma_tarihi`, `yazar_kullanici_adi`, `kapak_resmi`) VALUES
(1, 'WhatsApp çöktü mü? Sıkıntıyla ilgili ilk açıklama geldi', 'Son dakika haberi... Sosyal medya platformu WhatsApp\'a dünya genelinde e erişim sorunları yaşandığı haberleri gelmeye başladı.', 'WhatsApp\'a 20 Mayıs akşamı saat 23:25 sıralarından itibaren erişim sorunu yaşanmaya başladığı bildirildi.\r\nKullanıcılar mesaj iletmek ve almakta sorunla karşılaştıklarını ve uygulamanın ve WEB uygulamasının açılmadığını ifade ederken WhatsApp\'tan konuya ilişkin açıklama geldi.', 5, '2022-05-24 21:00:00', 'rasityetiskin', 'teknoloji1.jpg'),
(2, 'Oppo\'dan dikkat çeken performans: Dünyada 4. sırada', 'OPPO, Canalys verilerine göre orta ve üst düzey pazarlarda istikrarlı büyümesini sürdürerek 2022 yılının ilk çeyreğinde dünyanın dördüncü en büyük akıllı telefon markası konumunu korudu.', 'Dünyanın önde gelen lider akıllı ürün markası OPPO, Canalys verilerine göre orta ve üst düzey pazarlarda istikrarlı büyümesini sürdürerek 2022\'nin ilk çeyreğinde dünyanın dördüncü en büyük akıllı telefon markası konumunu korudu.[1] Yılın ilk çeyreğinde akıllı telefon pazarının global olarak küçülmesine rağmen, ürün inovasyonları ve devam eden Ar-Ge yatırımlarıyla OPPO, Batı Avrupa\'da ve diğer gelişmekte olan pazarlarda istikrarlı büyümesini sürdürüyor. OPPO, önceki çeyrekte, şirketin kendi tasarımı ilk NPU\'su olan MariSilicon X ile donatılmış son teknoloji amiral gemisi Find X5 Serisini piyasaya sunmuştu. OPPO ayrıca Mobil Dünya Kongresi 2022\'de pil ömrünü iki katına çıkaran 150W SUPERVOOC hızlı şarjı, 9 dakikada 4500mAh pili şarj eden 240W SUPERVOOC hızlı şarjı ve 5G\'yi hızlı bir Wi-Fi\'a dönüştüren OPPO 5G CPE T2 gibi heyecan verici teknolojilerini de tanıtmıştı.\r\n\r\nOPPO, 2022\'nin ilk çeyreğinde Avrupa akıllı telefon pazarında beşinci sırada yer aldı. Avrupa pazarına 2018\'de giren OPPO, yerel pazara daha iyi hizmet sunabilmek için operatör iş kolunu genişletti ve aktif olarak Ar-Ge\'ye yatırım yaparak farklı amiral gemisi ürünler sunmaya yönelik çalışmalar yürüttü. Son teknoloji amiral gemisi Find X5 Serisi, şirketin ilk katlanabilir amiral gemisi Find N, 150W ve 240W SUPERVOOC hızlı şarj teknolojileri dahil olmak üzere OPPO birçok uluslararası ödül kazandı. Orta ve üst düzey ürünleriyle büyük beğeni kazanan OPPO, yıllık bazda %4\'lük bir büyüme yakalayarak Batı Avrupa\'daki satış rakamları açısından dördüncülüğünü korurken 12 ülkede bölge pazarında ilk beşte yer aldı.', 5, '2022-05-19 13:22:25', 'rasityetiskin', 'teknoloji.jpg'),
(3, 'Apple, kendi otomobilleri için işletim sistemi geliştiriyor', 'Apple, kendi otomobillerini kontrol etmek için özel bir işletim sistemi üzerinde çalışmalarını hızlandırdı.', 'Apple\'ın, yıllardır üzerinde çalıştığı sürücüsüz araç projesi ile ilgili son zamanlarda yeni gelişmeler yaşanıyor.\r\nGeçtiğimiz aylarda Reuters\'a konuşan kaynaklara göre Apple, 2024 yılında kendi sürücüsüz otomobiliyle karşımıza çıkacak.\r\nŞimdiden üretim ve batarya konusularında bazı şirketler ile yakın temas halinde olan Apple, aynı zamanda yazılım konusunda da çalışmalar yürütüyor.\r\nApple otomobilleri için yeni işletim sistemi\r\nApple, yeni bir işletim sistemi üzerinde çalışmalara başladı. İşletim sistemi, Apple Car elektrikli otomobilin işlevlerini kontrol edecek şekilde tasarlanacak.\r\nUzmanlara göre yeni işletim sistemi; trafik kontrolünden, temel sistemlere; klimanın çalışmasından Apple Music ile entegre medya sistemine kadar sürücüsüz bir elektrikli otomobilin tüm işlevlerinden sorumlu olacak.', 5, '2022-05-19 13:31:44', 'rasityetiskin', 'araba1.jpeg'),
(4, 'Tesla\'nın üretimine virüs arası', 'Çin\'de tespit edilen yeni koronavirüs vakalarının ardından Tesla, Şanghay\'daki üretimi durdurma kararı almıştı. Günler geçmesine rağmen üretim hala başlamış değil.', 'Tesla, Şanghay fabrikasında üretimi geçtiğimiz ayın sonlarına doğru durdurma kararı almıştı.\r\nTESLA ÜRETİME BAŞLAYAMADI\r\n\r\nElektrikli araç üreticisi, yaptığı bir açıklamayla başlangıçta dört günlüğüne kapattığı fabrikada 8 Nisan\'dan önce üretime başlamayı planlamadıklarını söyledi.\r\nÜretimin gecikmesi nedeniyle Tesla, bu süre zarfında en az 24 bin elektrikli araç üretememiş olacak.\r\nFoxconn, Huawei ve Tencent gibi teknoloji şirketlerinin ülkedeki merkezi olan 17,5 milyonluk Shenzhen kentinde, hayati önemde olmayan sektörlerde faaliyetler durduruldu.Apple’ın tedarikçilerinden Foxconn, kentteki iki büyük üretim tesisinde faaliyetlere ara verildiğini açıklamış, sonra kapılarını yeniden açmıştı.', 5, '2022-05-19 18:12:54', 'rasityetiskin', 'araba.jpg'),
(6, 'Instagram logoyu değiştirdi! Sosyal medyada alay konusu oldu', 'Instagram logosunda değişikliğe gitti. Logodaki olmayan değişim sosyal medayda gündem oldu', 'Dünyanın en çok kullanılan sosyal medya platformlarından Instagram 5 yıl sonra logosunda değişikliğe gitti.\r\n\r\nEski ve yeni logo arasında çok fazla fark olmaması sosyal medyada espri konusu oldu.', 5, '2022-05-22 11:10:07', 'rasityetiskin', 'teknoloji2.jpg'),
(7, 'Son dakika: Meteoroloji hava durumu raporunu paylaştı! Bu tarihlere dikkat: Gök gürültülü sağanak uyarısı', 'Son dakika haberleri: Meteoroloji Genel Müdürlüğü, 25-29 Nisan tarihlerine ait hava durumu tahmin raporunu yayınladı. Ankara, Düzce, ve Sakarya\'nın da aralarında olduğu birçok ilde gök gürültülü sağanak yağışın etkili olması bekleniyor. İşte detaylar...', 'Son dakika haberleri: Meteoroloji Genel Müdürlüğü, 25-29 Nisan tarihlerini kapsayan hava durumu raporunu paylaştı.\r\nRapora göre; özellikle 27-29 Nisan tarihleri arasında birçok ilde gök görültülü sağanak yağış etkili olacak', 5, '2022-05-22 11:32:00', 'rasityetiskin', 'hava.durumu.jpg'),
(8, 'Son dakika... Meteoroloji il il hava durumu tahminlerini yayınladı! Bugün (10 Mayıs) hava nasıl olacak?', 'Son dakika hava durumu tahminleri Meteoroloji tarafından yayınlandı. Mayıs ayının gelmesine rağmen serin havalar devam ederken havaların ne zaman ısınacağı da merak konusu oldu. Meteoroloji Genel Müdürlüğü\'nün yaptığı son değerlendirmelere göre Bolu ve Es', 'Meteoroloji Genel Müdürlüğü tarafından yapılan son değerlendirmelere göre, ülkemizin iç ve doğu kesimlerinin parçalı, yer yer çok bulutlu, İç Ege ve Muğla, Batı Akdeniz’in iç kesimleri, Doğu Karadeniz\'in iç kesimleri, (Malatya ve Elazığ hariç) Doğu Anadolu, Güneydoğu Anadolu’nun doğusu ile Bolu ve Eskişehir çevrelerinin yerel sağanak ve gök gürültülü sağanak yağışlı, diğer yerlerin az bulutlu ve açık geçeceği tahmin ediliyor.', 5, '2022-05-22 12:10:52', 'rasityetiskin', 'havadurumu2.jpg'),
(9, 'Bilinçli tüketici gıda etiketlerini okumalı', 'Gıda alışverişi yaparken sadece son kullanma tarihine bakmak yetmiyor. Bilinçli bir tüketicinin, aldığı gıdanın içerdiği katkı maddelerini bilmesi büyük önem taşıyor. Bunun yolu da gıda etiketlerini okumaktan geçiyor.', 'Gıda alışverişi yaparken dikkatli olmak gerekiyor. Çoğu tüketici ambalajlı bir gıda aldığında sadece son tüketim tarihine bakmayı yeterli buluyor. Ancak iş bununla bitmiyor. Gıdanın içeriğinde hangi maddelerin yer aldığı da önemli. Pek çok kişi gıda alışverişi yaparken bunu dikkate almıyor. Oysa her gıdanın ambalajında, kullanılan katkı maddeleriyle ilgili bilgi içeren bir etiket yer alıyor. Bilinçli bir tüketicinin aldığı gıdanın etiketini incelemesi gerekiyor. Gıda etiketlerinde hangi bilgilerin yer alması gerekiyor?\r\n\r\nGıdanın içerdiği protein, karbonhidrat, yağ ve mineral oranı gibi bilgilerin bulunması gerekiyor. İçeriğinde herhangi bir katkı maddesi kullanıldıysa bunun da mutlaka belirtilmesi zorunlu.\r\n\r\nGıdaların içerisinde bulunan katkı maddelerinin kullanımı konusunda bir sınır var mı?\r\n\r\nNormalde bu katkı maddelerinin belli bir mevzuata göre kullanılması gerekiyor. Belli sınırlar dahilinde kullanılıyor. Fakat yapılan bilimsel araştırmalarda görülüyor ki, mevzuatın çok daha üstünde katkı maddeleri kullanılabiliyor. Tespit edildiğinde tabii ki cezaları ve yaptırımları var. Ama tespit edilene kadar biz onu tüketmiş oluyoruz. Bu nedenle sağlık açısından zararlı katkı maddelerini içeren gıdalara biraz tedbirli yaklaşmamız gerekiyor.', 5, '2022-05-22 12:46:40', 'rasityetiskin', 'resimm.jpg'),
(10, 'Son yağışlar baraj ve göllere umut oldu', 'Doğu ve Güneydoğu Anadolu bölgelerinde son dönemde etkili olan yağışlar, su seviyesinde büyük düşüşün yaşandığı baraj ve göletlerin dolması için umut oldu.', 'Küresel ısınmaya bağlı son yıllarda buharlaşmanın artması ve özellikle geçen yıl yaşanan kuraklık barajlardaki su seviyelerini de düşürdü.\r\n\r\nKış dönemi etkili olan yağışlar, kuruma noktasına gelen baraj ve göletler için adeta can suyu olurken, doluluk oranına dair umutları da artırdı.\r\n\r\nDepolamalı tesislere gelen suyun yaklaşık yüzde 60\'ının kar erimesinden kaynaklandığı ülkede mart ayından itibaren barajlardaki doluluğun daha da artması bekleniyor.\r\n\r\n\"Bu yıl kar yağışı önemli derecede arttı\"', 5, '2022-05-22 12:53:01', 'rasityetiskin', 'resimmm.jpg'),
(11, 'Hafta sonu hava nasıl olacak?', 'Hava sıcaklıklarının artarak mevsim normalleri civarına yer yer üzerine çıkacağı tahmin ediliyor. Bugün Ege\'nin güneyi ile Batı Akdeniz\'de yarın ise yurdun büyük bölümünde yağış görülecek.', 'Meteoroloji Genel Müdürlüğü tarafından yapılan son değerlendirmelere göre bugü yurdun güneybatı ve kuzeydoğu kesimlerinin parçalı bulutlu, Güney Ege ile Batı Akdeniz’in iç kesimlerinin sağanak ve gök gürültülü sağanak yağışlı, diğer yerlerin az bulutlu geçeceği tahmin ediliyor.Pazar günü Marmara\'nın kuzeybatısı, Batı Karadeniz, Ege\'nin güneyi, Doğu Karadeniz\'in iç kesimleri Akdeniz Bölgesinin tamamı ile İç Anadolu\'nun güney ve doğusunda gök gürültülü sağanak bekleniyor. Kalan kesimlerin parçalı ve çok bulutlu olması bekleniyor.Hava sıcaklıklarının artarak mevsim normalleri civarına yer yer üzerine çıkacağı, ancak hafta başından itibaren yağışla birlikte azalacağı kuzey ve doğu kesimlerde mevsim normalleri altına düşeceği tahmin ediliyor.', 5, '2022-05-22 13:32:42', 'rasityetiskin', 'resim4.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `alt_baslik` varchar(255) NOT NULL,
  `yazi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`id`, `baslik`, `alt_baslik`, `yazi`) VALUES
(1, 'Hakkımızda', '', 'Ne Yapıyoruz?\r\nTürkiye\'de ve dünyada meydana gelen olaylar ve gelişmeleri ajanslar ve kendi ekibimiz aracılığıyla takip ederek size sunuyoruz. Sitemizde, kendi mahallenizden dünyanın en uzak köşesine kadar her yer ile ilgili haber okuyabilirsiniz. Ziyaretçilere, son 10 günün tüm haberleri içinde konuya göre arama yapma olanağı sunmaktayız. Bu arama, kelime ve ilgili bazlı, yapay zeka ile desteklenmiş gerçek bir haber arama sayfasıdır.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `isim` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefon` varchar(20) NOT NULL,
  `mesaj` text NOT NULL,
  `gonderilme_tarihi` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `isim`, `email`, `telefon`, `mesaj`, `gonderilme_tarihi`) VALUES
(5, 'Raşit', 'rasit@yetiskin.com', '4103', 'Hoşgeldiniz Siteye', '2022-05-27 13:24:11');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int(11) NOT NULL,
  `kullanici_adi` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sifre` text NOT NULL,
  `kayıt_tarihi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `kullanici_adi`, `email`, `sifre`, `kayıt_tarihi`) VALUES
(5, 'rasityetiskin', 'rasit@yetiskin.com', '123123', '2022-05-18 17:54:38');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `misyon`
--

CREATE TABLE `misyon` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `alt_baslik` varchar(255) NOT NULL,
  `yazi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `misyon`
--

INSERT INTO `misyon` (`id`, `baslik`, `alt_baslik`, `yazi`) VALUES
(1, 'Misyon', '', 'Değer yaratan, müşteri memnuniyeti ve topluma katkıları ile örnek bir kuruluş olarak medya sektöründe; yazılı, görsel, işitsel ve dijital yayın alanlarında öncü kuruluş olmak ve bu konumunu korumak.Dünya medya sektörünün önde gelen kuruluşları arasında yer almak.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `vizyon`
--

CREATE TABLE `vizyon` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `alt_baslik` varchar(255) NOT NULL,
  `yazi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `vizyon`
--

INSERT INTO `vizyon` (`id`, `baslik`, `alt_baslik`, `yazi`) VALUES
(1, 'Vizyon', '', 'Kaliteyi bir yaşam biçimi olarak benimseyen, doğru, tarafsız ve güncel haberler ile toplumu bilgilendiren, eğitici ve öğretici içerikli yayınlar geliştiren ve bunları yaygınlaştıran haber sitesi olmak.\r\nSektördeki tüm yenilikleri takip ederek bu yenilikleri faaliyet alanlarına uygulamak ve topluma ulaşmasını sağlamak.');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `bloglar`
--
ALTER TABLE `bloglar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `misyon`
--
ALTER TABLE `misyon`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `vizyon`
--
ALTER TABLE `vizyon`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `bloglar`
--
ALTER TABLE `bloglar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimizda`
--
ALTER TABLE `hakkimizda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `misyon`
--
ALTER TABLE `misyon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `vizyon`
--
ALTER TABLE `vizyon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
