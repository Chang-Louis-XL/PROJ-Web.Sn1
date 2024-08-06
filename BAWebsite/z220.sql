-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-08-05 14:19:50
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
-- 資料表結構 `n1-about`
--

CREATE TABLE `n1-about` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `text1` text NOT NULL,
  `text2` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `n1-about`
--

INSERT INTO `n1-about` (`id`, `img`, `text1`, `text2`, `sh`) VALUES
(3, 'about01.png', 'Create new value', 'Decades of experience in advertising, helping high-quality products gain greater visibility.', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `n1-book`
--

CREATE TABLE `n1-book` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `phone` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `datetime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `n1-book`
--

INSERT INTO `n1-book` (`id`, `name`, `phone`, `email`, `datetime`) VALUES
(1, '張曉天', '0900-000-000', '5145@labor.gov.tw', '2024-08-29'),
(2, '陳大名', '0911-111-111', 'dsafdsf@gmail.com', '2024-09-07'),
(3, 'sd', 'asd', 'asd', '2024-08-14');

-- --------------------------------------------------------

--
-- 資料表結構 `n1-contect`
--

CREATE TABLE `n1-contect` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `detailed` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `n1-contect`
--

INSERT INTO `n1-contect` (`id`, `title`, `detailed`) VALUES
(1, 'Contact us', 'Please fill out the following information so we can arrange a dedicated service representative for you.');

-- --------------------------------------------------------

--
-- 資料表結構 `n1-home`
--

CREATE TABLE `n1-home` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text DEFAULT NULL,
  `text1` text NOT NULL,
  `text2` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `n1-home`
--

INSERT INTO `n1-home` (`id`, `img`, `text1`, `text2`, `sh`) VALUES
(1, 'bk01.png', 'Taiwan boutique agent', 'Blooming the value of products', 1),
(24, 'pf01.png', '1', '3', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `n1-offering`
--

CREATE TABLE `n1-offering` (
  `id` int(10) UNSIGNED NOT NULL,
  `svg` text NOT NULL,
  `text1` text NOT NULL,
  `text2` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `n1-offering`
--

INSERT INTO `n1-offering` (`id`, `svg`, `text1`, `text2`, `sh`) VALUES
(16, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"72\" height=\"72\" viewBox=\"0 0 24 24\"\r\n                        style=\"fill: rgb(152, 157, 158);transform: msFilter\">\r\n                        <path\r\n                            d=\"M19.148 2.971A2.008 2.008 0 0 0 17.434 2H6.566c-.698 0-1.355.372-1.714.971L2.143 7.485A.995.995 0 0 0 2 8a3.97 3.97 0 0 0 1 2.618V19c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2v-8.382A3.97 3.97 0 0 0 22 8a.995.995 0 0 0-.143-.515l-2.709-4.514zm.836 5.28A2.003 2.003 0 0 1 18 10c-1.103 0-2-.897-2-2 0-.068-.025-.128-.039-.192l.02-.004L15.22 4h2.214l2.55 4.251zM10.819 4h2.361l.813 4.065C13.958 9.137 13.08 10 12 10s-1.958-.863-1.993-1.935L10.819 4zM6.566 4H8.78l-.76 3.804.02.004C8.025 7.872 8 7.932 8 8c0 1.103-.897 2-2 2a2.003 2.003 0 0 1-1.984-1.749L6.566 4zM10 19v-3h4v3h-4zm6 0v-3c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v3H5v-7.142c.321.083.652.142 1 .142a3.99 3.99 0 0 0 3-1.357c.733.832 1.807 1.357 3 1.357s2.267-.525 3-1.357A3.99 3.99 0 0 0 18 12c.348 0 .679-.059 1-.142V19h-3z\">\r\n                        </path>\r\n                    </svg>', 'Store display', 'We offer our clients excellent quality services for many years, with the best and delicious food in the city.', 1),
(17, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"72\" height=\"72\" viewBox=\"0 0 24 24\"\r\n                        style=\"fill: rgba(152, 157, 158);transform: msFilter\">\r\n                        <path\r\n                            d=\"M13.4 2.096a10.08 10.08 0 0 0-8.937 3.331A10.054 10.054 0 0 0 2.096 13.4c.53 3.894 3.458 7.207 7.285 8.246a9.982 9.982 0 0 0 2.618.354l.142-.001a3.001 3.001 0 0 0 2.516-1.426 2.989 2.989 0 0 0 .153-2.879l-.199-.416a1.919 1.919 0 0 1 .094-1.912 2.004 2.004 0 0 1 2.576-.755l.412.197c.412.198.85.299 1.301.299A3.022 3.022 0 0 0 22 12.14a9.935 9.935 0 0 0-.353-2.76c-1.04-3.826-4.353-6.754-8.247-7.284zm5.158 10.909-.412-.197c-1.828-.878-4.07-.198-5.135 1.494-.738 1.176-.813 2.576-.204 3.842l.199.416a.983.983 0 0 1-.051.961.992.992 0 0 1-.844.479h-.112a8.061 8.061 0 0 1-2.095-.283c-3.063-.831-5.403-3.479-5.826-6.586-.321-2.355.352-4.623 1.893-6.389a8.002 8.002 0 0 1 7.16-2.664c3.107.423 5.755 2.764 6.586 5.826.198.73.293 1.474.282 2.207-.012.807-.845 1.183-1.441.894z\">\r\n                        </path>\r\n                        <circle cx=\"7.5\" cy=\"14.5\" r=\"1.5\"></circle>\r\n                        <circle cx=\"7.5\" cy=\"10.5\" r=\"1.5\"></circle>\r\n                        <circle cx=\"10.5\" cy=\"7.5\" r=\"1.5\"></circle>\r\n                        <circle cx=\"14.5\" cy=\"7.5\" r=\"1.5\"></circle>\r\n                    </svg>', 'Multimedia web design', 'We offer our clients excellent quality services for many years, with the best and delicious food in the city.', 1),
(18, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"72\" height=\"72\" viewBox=\"0 0 24 24\"\r\n                        style=\"fill: rgba(152, 157, 158);transform: msFilter\">\r\n                        <path\r\n                            d=\"m14.49 20.937 5.381-1.166S17.93 6.633 17.914 6.546c-.016-.086-.086-.144-.158-.144s-1.439-.101-1.439-.101-.949-.949-1.064-1.05c-.027-.029-.057-.043-.086-.058l-.677 15.744zm.446-15.772c-.016 0-.043.014-.057.014-.016 0-.217.059-.533.158-.318-.919-.879-1.768-1.871-1.768h-.086c-.289-.361-.633-.519-.936-.519-2.316 0-3.426 2.892-3.77 4.359-.892.275-1.538.476-1.613.505-.504.158-.517.172-.574.648-.057.344-1.367 10.489-1.367 10.489l10.117 1.899.69-15.785zm-2.635.704v.102c-.559.173-1.178.36-1.783.547.346-1.323.992-1.972 1.553-2.217.146.375.23.878.23 1.568zm-.92-2.2c.1 0 .201.028.303.102-.732.344-1.539 1.222-1.871 2.978a59.11 59.11 0 0 1-1.411.432c.389-1.339 1.325-3.512 2.979-3.512zm.402 7.812s-.604-.315-1.322-.315c-1.08 0-1.123.676-1.123.849 0 .921 2.418 1.28 2.418 3.453 0 1.712-1.08 2.806-2.547 2.806-1.756 0-2.648-1.094-2.648-1.094l.475-1.554s.922.792 1.697.792a.693.693 0 0 0 .721-.69c0-1.209-1.986-1.268-1.986-3.252 0-1.669 1.195-3.295 3.627-3.295.936 0 1.395.272 1.395.272l-.707 2.028zm.922-7.281c.518.06.85.648 1.064 1.311-.258.087-.547.173-.863.273v-.187c0-.561-.072-1.022-.201-1.397z\">\r\n                        </path>\r\n                    </svg>', 'Product management', 'Find our application and download it, you can make reservations, food                         orders, see your deliveries on the way and much more.', 1);

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
(6, 'p3.png', 'silver ring', 'Details', '$18.00', 1),
(7, 'p4.png', 'silver ring', 'Details', '$20.00', 1),
(8, 'p1.png', 'silver ring', ' Details', '$20.00', 1),
(9, 'p3.png', 'silver ring', 'Details', '$20.00', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `n1-profolio`
--

CREATE TABLE `n1-profolio` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `text1` text NOT NULL,
  `text2` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `n1-profolio`
--

INSERT INTO `n1-profolio` (`id`, `img`, `text1`, `text2`, `sh`) VALUES
(1, 'pf01.png', 'multimedia', 'Find our application and download it, you can make reservations, food orders, see your deliveries on the way and much more.', 1);

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
(9, '31321', '123', 'daffsdaf'),
(0, 'momomo', 'momomo', 'momomo'),
(0, 'asdsad', 'asdsad', 'asdsad'),
(0, 'asdsad123', 'asdsad123', 'asdsad123'),
(0, 'momomo1', 'momomo1', 'momomo1'),
(0, 'momoooo', 'momoooo', 'momoooo');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `n1-about`
--
ALTER TABLE `n1-about`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `n1-book`
--
ALTER TABLE `n1-book`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `n1-contect`
--
ALTER TABLE `n1-contect`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `n1-home`
--
ALTER TABLE `n1-home`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `n1-offering`
--
ALTER TABLE `n1-offering`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `n1-product`
--
ALTER TABLE `n1-product`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `n1-profolio`
--
ALTER TABLE `n1-profolio`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `n1-about`
--
ALTER TABLE `n1-about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `n1-book`
--
ALTER TABLE `n1-book`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `n1-contect`
--
ALTER TABLE `n1-contect`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `n1-home`
--
ALTER TABLE `n1-home`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `n1-offering`
--
ALTER TABLE `n1-offering`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `n1-product`
--
ALTER TABLE `n1-product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `n1-profolio`
--
ALTER TABLE `n1-profolio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
