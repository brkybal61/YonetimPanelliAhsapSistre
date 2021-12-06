-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 01 Kas 2020, 16:07:03
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ahsap`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

DROP TABLE IF EXISTS `ayar`;
CREATE TABLE IF NOT EXISTS `ayar` (
  `ayar_id` int(11) NOT NULL AUTO_INCREMENT,
  `ayar_logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_url` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_author` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_tel` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_gsm` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_faks` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_ilce` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_il` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_twitter` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_instagram` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`ayar_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_url`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_author`, `ayar_tel`, `ayar_gsm`, `ayar_faks`, `ayar_mail`, `ayar_ilce`, `ayar_il`, `ayar_adres`, `ayar_facebook`, `ayar_twitter`, `ayar_instagram`) VALUES
(0, 'dimg/31687logo-yok.png', 'www.ahşap.com', 'Ahşap Bakım Scripti ', 'Ahşap Scripti Yapımı', 'ahşap,tahta,odun', 'Berkay Bal', '0850 000 19 67', '0850 000 19 67', '0850 000 19 67 ', 'berkay@hotmail.com', 'Sarıyer', 'İstanbul', 'Emirgan Korusu', 'www.facebook.com', 'www.twitter.com', 'www.instagram.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

DROP TABLE IF EXISTS `hakkimizda`;
CREATE TABLE IF NOT EXISTS `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_video` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_vizyon` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_misyon` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`hakkimizda_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_icerik`, `hakkimizda_video`, `hakkimizda_vizyon`, `hakkimizda_misyon`) VALUES
(0, 'Ahşap Bakım Scripti', '<p>Hizmet sekt&ouml;r&uuml;nde 10 yılı aşkın tecr&uuml;be ile siz değerli m&uuml;şterilerimize hizmet vermekteyiz.</p>\r\n\r\n<p>Mobilya montaj,&nbsp;tamirat,&nbsp;havuz sistre,&nbsp;havuz deck bakım,ahşap bakım,&nbsp;sistre cila,&nbsp;parke cila&nbsp;işlerinizi b&uuml;y&uuml;k bir hassasiyet ile yapmaktayız.</p>\r\n\r\n<p>İstanbul&rsquo;un b&uuml;t&uuml;n semtlerinde ev ve işyerlerinize&nbsp;konyalilarmarangoz.com&nbsp;olarak saat sınırlaması olmaksızın hizmet vermekteyiz. Verdiğimiz t&uuml;m hizmetlerde &ouml;nceliğimiz her zaman m&uuml;şteri memnuniyetini sağlamaktır.</p>\r\n', '', 'Güncel teknolojileri takip ederek müşterilerimize en iyi hizmeti vermek için uzman ekibimizle 7/24 hizmetinizdeyiz.', 'Mobilya montaj, tamirat, havuz sistre, havuz deck bakım, ahşap bakım, sistre cila, parke cila işlerinizde kaliteli hizmeti müşterilerimize en uygun fiyatlarla sunmak hizmet politikamızdır.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

DROP TABLE IF EXISTS `kullanici`;
CREATE TABLE IF NOT EXISTS `kullanici` (
  `kullanici_id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_adsoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_password` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_tel` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`kullanici_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_adsoyad`, `kullanici_mail`, `kullanici_password`, `kullanici_tel`) VALUES
(1, 'Berkay Bal', 'berkaybal@icloud.com', 'e10adc3949ba59abbe56e057f20f883e', '0561 461 19 67');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesaj`
--

DROP TABLE IF EXISTS `mesaj`;
CREATE TABLE IF NOT EXISTS `mesaj` (
  `mesaj_id` int(11) NOT NULL AUTO_INCREMENT,
  `mesaj_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj_soyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj_tel` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `mesaj_zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`mesaj_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mesaj`
--

INSERT INTO `mesaj` (`mesaj_id`, `mesaj_ad`, `mesaj_soyad`, `mesaj_mail`, `mesaj_tel`, `mesaj_detay`, `mesaj_zaman`) VALUES
(1, 'Berkay', 'Bal', 'berkay@hotmail.com', '', 'İyi günler. Ben salonumdaki yemek masasına cila ve boyattırmak istiyorum. Yardımcı olabilir misiniz?', '2020-10-23 12:50:19'),
(2, 'Bülent', 'Öztürk', 'bulent@hotmail.com', '', 'İyi günler. Ben yemek masasını boyattırmak istiyorum. Yardımcı olabilir misiniz?', '2020-10-23 12:51:01');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `slider_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_sira` int(2) NOT NULL,
  `slider_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_ad`, `slider_resimyol`, `slider_sira`, `slider_durum`) VALUES
(6, 'Kompozit ve Ahşap Deck Temizleme', 'dimg/slider/280802822030818288512.jpg', 1, '1'),
(7, 'Mobilya Tamiratı', 'dimg/slider/2259623716284302548312.jpg', 2, '1'),
(8, 'Mobilya Montajı', 'dimg/slider/259032688429253276591.jpg', 3, '1'),
(9, 'slider-1', 'dimg/slider/234542555923950210391-3.jpg', 4, '1'),
(10, 'slider-2', 'dimg/slider/295732683023696292771-6.jpg', 5, '1'),
(11, 'slider-3', 'dimg/slider/228922606327939298391-16.jpg', 6, '1'),
(13, 'slider-5', 'dimg/slider/226792594529545279865.jpg', 7, '1'),
(14, 'slider-6', 'dimg/slider/266242323028697295286.jpg', 8, '1'),
(15, 'slider-8', 'dimg/slider/261852179728729251967.jpg', 9, '1'),
(16, 'slider-11', 'dimg/slider/2123526006240572329411.jpg', 11, '1'),
(17, 'slider-12', 'dimg/slider/2981027290280843163312.jpg', 12, '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
