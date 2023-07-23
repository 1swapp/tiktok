-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 29 Kas 2020, 22:19:26
-- Sunucu sürümü: 10.3.24-MariaDB-cll-lve
-- PHP Sürümü: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `takipsut_tiktok`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `mail` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `isim` text NOT NULL,
  `sifre` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `mail`, `isim`, `sifre`) VALUES
(2, 'demo@botcuyuz.com', 'Mehmet Ali Albayrak', 'demo');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `islemLog`
--

CREATE TABLE `islemLog` (
  `id` int(11) NOT NULL,
  `link` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tarih` date NOT NULL DEFAULT current_timestamp(),
  `kullanici` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `siparisID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `islemLog`
--

INSERT INTO `islemLog` (`id`, `link`, `tarih`, `kullanici`, `siparisID`) VALUES
(1, 'https://www.tiktok.com/@feyatkul04/video/6803304795294715142', '2020-04-16', 'https://www.tiktok.com/@feyatkul5304', 4922);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siteAyar`
--

CREATE TABLE `siteAyar` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_turkish_ci NOT NULL,
  `siteAd` text COLLATE utf8_turkish_ci NOT NULL,
  `metaDescription` text COLLATE utf8_turkish_ci NOT NULL,
  `metaKeywords` text COLLATE utf8_turkish_ci NOT NULL,
  `whatsaap` text COLLATE utf8_turkish_ci NOT NULL,
  `reklam` text COLLATE utf8_turkish_ci NOT NULL,
  `modal` text COLLATE utf8_turkish_ci NOT NULL,
  `apiUrl` text COLLATE utf8_turkish_ci NOT NULL,
  `apiKey` text COLLATE utf8_turkish_ci NOT NULL,
  `apiservisİD` varchar(999) COLLATE utf8_turkish_ci NOT NULL,
  `miktar` int(11) NOT NULL,
  `reklamUrl` text COLLATE utf8_turkish_ci NOT NULL,
  `paket` text COLLATE utf8_turkish_ci NOT NULL,
  `paketaciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `paket1` text COLLATE utf8_turkish_ci NOT NULL,
  `paket1aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `paket2` text COLLATE utf8_turkish_ci NOT NULL,
  `paket2aciklama` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siteAyar`
--

INSERT INTO `siteAyar` (`id`, `title`, `siteAd`, `metaDescription`, `metaKeywords`, `whatsaap`, `reklam`, `modal`, `apiUrl`, `apiKey`, `apiservisİD`, `miktar`, `reklamUrl`, `paket`, `paketaciklama`, `paket1`, `paket1aciklama`, `paket2`, `paket2aciklama`) VALUES
(1, 'Tiktok Şifresiz izlenme hilesi', 'Takipci.Live', 'Ücretsiz Tiktok Hilesi', 'tiktok, hile', '55555555', '<style>\r\n.responsive {\r\nwidth: 100%;\r\nheight: auto;\r\n}\r\n</style><center><a href=\"#\"><img class=\"responsive\" src=\"https://www.medyum.kim/wp-content/uploads/2019/02/medyum-reklam.gif\"></a></center>', '<style>\r\n.responsive {\r\nwidth: 100%;\r\nheight: auto;\r\n}\r\n</style><center><a href=\"#\"><img class=\"responsive\" src=\"https://www.medyum.kim/wp-content/uploads/2019/02/medyum-reklam.gif\"></a></center>', 'https://smm.com/api/v2', 'Api key', '110', 100, 'http://bc.vc/gNdqGDc', 'Tiktok Takipçi', 'Paket 1 Açıklama\r\n<br>', 'Tiktok Be?eni', 'Paket 2 Açıklama\r\n<br>', 'Tiktok İzlenme', 'Paket 3 Açıklama\r\n<br>\r\n');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `islemLog`
--
ALTER TABLE `islemLog`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siteAyar`
--
ALTER TABLE `siteAyar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `islemLog`
--
ALTER TABLE `islemLog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `siteAyar`
--
ALTER TABLE `siteAyar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
