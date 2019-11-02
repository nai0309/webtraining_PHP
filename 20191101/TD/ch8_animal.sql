-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019 年 11 月 01 日 01:27
-- 伺服器版本： 10.1.40-MariaDB
-- PHP 版本： 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `php_10804`
--

-- --------------------------------------------------------

--
-- 資料表結構 `ch8_animal`
--

CREATE TABLE `ch8_animal` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` int(11) NOT NULL,
  `info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `ch8_animal`
--

INSERT INTO `ch8_animal` (`id`, `name`, `weight`, `info`, `date`) VALUES
(2, '藪貓', 23, '食肉目 貓科 藪貓屬', '2019-10-31 13:26:14'),
(3, '浣熊', 8, '食肉目 浣熊科 浣熊屬', '2019-10-31 13:26:14'),
(4, '耳廓狐', 17, '食肉目 犬科 狐屬', '2019-10-31 13:26:14'),
(5, '河馬', 120, '鯨偶蹄目 河馬科 河馬屬', '2019-10-31 13:26:14');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `ch8_animal`
--
ALTER TABLE `ch8_animal`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動增長(AUTO_INCREMENT)
--

--
-- 使用資料表自動增長(AUTO_INCREMENT) `ch8_animal`
--
ALTER TABLE `ch8_animal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
