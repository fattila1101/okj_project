-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2019. Máj 05. 15:27
-- Kiszolgáló verziója: 5.7.14
-- PHP verzió: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `books`
--
CREATE DATABASE IF NOT EXISTS `books` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `books`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `books_info`
--

CREATE TABLE `books_info` (
  `id` int(10) NOT NULL,
  `title` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `author` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `year` int(4) NOT NULL,
  `price` int(10) NOT NULL,
  `category` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `image` varchar(50) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `books_info`
--

INSERT INTO `books_info` (`id`, `title`, `author`, `year`, `price`, `category`, `image`) VALUES
(1, 'Android-alapú szoftverfejlesztés', 'Ekler Péter', 2012, 5700, 'Android', 'android.jpg'),
(2, 'Android kézikönyv', 'Fehér Krisztián', 2014, 1182, 'Android', 'android_laikusoknak.jpg'),
(3, 'Képes világatlasz', 'Robin Hosie', 2005, 2850, 'Földrajz', 'atlasz.jpg'),
(4, 'A foci-eb sztárjai', 'Bookazine', 2016, 1416, 'Sport', 'foci_eb.jpg'),
(5, 'The truth about HTML5', 'Luke Stevens', 2012, 2546, 'Webfejlesztés', 'html5.jpg'),
(6, 'PHP,MySQL,JS & HTML5', 'Steven Suehring', 2014, 7500, 'Webfejlesztés', 'php_mysql_js_html5.jpg'),
(7, 'A ragyogás', 'Stephen King', 2014, 3316, 'Irodalom', 'ragyogas.jpg'),
(8, 'Sportanatómia', 'Frédéric Delavier', 2014, 5900, 'Sport', 'sportanatomia.jpg');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `books_info`
--
ALTER TABLE `books_info`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `books_info`
--
ALTER TABLE `books_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
