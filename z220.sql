-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-07-25 19:10:00
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `z220`
--

-- --------------------------------------------------------

--
-- 資料表結構 `n1-home`
--

CREATE TABLE `n1-home` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `text1` text NOT NULL,
  `text2` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `n1-home`
--

INSERT INTO `n1-home` (`id`, `img`, `text1`, `text2`, `sh`) VALUES
(1, 'bk01.jpg', 'Taiwan boutique agent', 'Blooming the value of products', 1),
(17, '03C03.png', '123', '1414', 0),
(20, '03C04.png', '', '', 0),
(21, '03C02.png', '124', '', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `n1-product`
--

CREATE TABLE `n1-product` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `menu_name` text NOT NULL,
  `menu_detail` text NOT NULL,
  `menu_preci` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `n1-product`
--

INSERT INTO `n1-product` (`id`, `img`, `menu_name`, `menu_detail`, `menu_preci`, `sh`) VALUES
(1, 'p1.png', 'Barbecue salad', 'Delicious dish', '$22.00', 1),
(2, 'bk01.png', '1', '2', '1', 1),
(5, 'bk01.png', 'j', 'j', 'j', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `n1-users`
--

CREATE TABLE `n1-users` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` text NOT NULL,
  `pw` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `n1-users`
--

INSERT INTO `n1-users` (`id`, `acc`, `pw`, `email`) VALUES
(1, 'admin', '1234', 'admin@labor.gov.tw'),
(3, 'mem01', 'mem01', 'mem01@labor.gov.tw'),
(4, 'mem02', 'mem02', 'mem02@labor.gov.tw'),
(9, '31321', '123', 'daffsdaf');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `n1-home`
--
ALTER TABLE `n1-home`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `n1-product`
--
ALTER TABLE `n1-product`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `n1-home`
--
ALTER TABLE `n1-home`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `n1-product`
--
ALTER TABLE `n1-product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
