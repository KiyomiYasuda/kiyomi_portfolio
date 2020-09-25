-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2020-09-25 11:36:25
-- サーバのバージョン： 10.4.13-MariaDB
-- PHP のバージョン: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `kiyomi_portfolio`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(11) NOT NULL DEFAULT 'U'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `accounts`
--

INSERT INTO `accounts` (`account_id`, `username`, `password`, `role`) VALUES
(1, 'Kiyomi1', '1d430d0a0757ca4b16a57dbc5c436353', 'U'),
(2, 'Kiyomi', '1d430d0a0757ca4b16a57dbc5c436353', 'A'),
(3, 'Yuka', '50c94a5678875c312b27f1692a8d4187', 'U'),
(4, 'Justin', '3b29ba53c507b00a745ca7e2cbfd6acf', 'U'),
(5, 'MIzuho', '1e2a796539042ca860c3091662aa4346', 'U');

-- --------------------------------------------------------

--
-- テーブルの構造 `fix_orders`
--

CREATE TABLE `fix_orders` (
  `fix_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fix_price` int(20) NOT NULL,
  `payment_method` varchar(10) NOT NULL,
  `shipping_status` varchar(20) NOT NULL DEFAULT 'preparing',
  `payment` float NOT NULL,
  `payment_change` float NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `fix_orders`
--

INSERT INTO `fix_orders` (`fix_id`, `user_id`, `fix_price`, `payment_method`, `shipping_status`, `payment`, `payment_change`, `date`) VALUES
(1, 2, 900, 'Cash', 'delivered', 0, 0, '0000-00-00'),
(2, 3, 1200, 'Cash', 'preparing', 0, 0, '0000-00-00'),
(3, 2, 900, 'Cash', '', 0, 0, '0000-00-00'),
(4, 2, 900, 'Cash', '', 0, 0, '0000-00-00'),
(5, 2, 900, 'Cash', '', 1000, 100, '0000-00-00'),
(6, 2, 900, '', '', 1000, 100, '0000-00-00'),
(7, 3, 1200, '', '', 1500, 300, '0000-00-00'),
(8, 2, 900, 'Cash', '', 1000, 100, '0000-00-00'),
(9, 2, 1200, 'Cash', '', 1300, 100, '0000-00-00'),
(10, 2, 900, '', 'delivered', 1200, 300, '2020-09-22'),
(11, 2, 800, '', 'delivered', 800, 0, '2020-09-22'),
(12, 2, 600, 'Cash', 'preparing', 600, 0, '2020-09-22'),
(13, 2, 600, 'Cash', 'preparing', 700, 100, '2020-09-22'),
(14, 2, 600, 'Cash', 'preparing', 700, 100, '2020-09-22'),
(15, 2, 300, 'Cash', 'preparing', 500, 200, '2020-09-22'),
(16, 3, 1500, 'Cash', 'preparing', 1700, 200, '2020-09-22'),
(17, 3, 900, 'Cash', 'preparing', 1000, 100, '2020-09-22'),
(18, 2, 3000, 'CreditCard', 'preparing', 3000, 0, '2020-09-24'),
(19, 3, 800, 'CreditCard', 'preparing', 900, 100, '2020-09-24'),
(20, 4, 3300, 'CreditCard', 'preparing', 3300, 0, '2020-09-25'),
(21, 2, 900, 'Cash', 'preparing', 1000, 100, '2020-09-25'),
(22, 5, 1000, 'Cash', 'preparing', 1500, 500, '2020-09-25');

-- --------------------------------------------------------

--
-- テーブルの構造 `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `item_price` float NOT NULL,
  `item_quantity` int(100) NOT NULL,
  `item_img` varchar(255) DEFAULT NULL,
  `item_size` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_price`, `item_quantity`, `item_img`, `item_size`) VALUES
(3, 'Blue Mountain Coffee', 500, 24, 'bluemountain.jpg', 'small(100g)'),
(4, 'Kilimanjaro Coffee', 400, 46, 'kilimanjaro.jpg', 'small(100g)'),
(5, 'Green Tea', 400, 37, 'greentea.jpg', 'medium(200g)'),
(6, 'Oolong Tea', 300, 33, 'Oolong-tea.jpg', 'small(100g)'),
(7, 'Rooibos Tea', 300, 28, 'rooibos tea.jpg', 'small(100g)'),
(8, 'Organic Herb Tea', 400, 35, 'herbtea.jpg', 'small(100g)'),
(10, 'Assam Tea', 300, 27, 'assamtea.jpg', 'small(100g)'),
(11, 'Darjeeling Tea', 300, 38, 'darjeelingTea.jpg', 'small(100g)'),
(12, 'Blend Coffee', 400, 38, 'blendcoffeebeans.jpg', 'small(100g)');

-- --------------------------------------------------------

--
-- テーブルの構造 `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `buy_quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `buy_status` varchar(20) NOT NULL DEFAULT 'PENDING'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `item_id`, `buy_quantity`, `total_price`, `buy_status`) VALUES
(2, 2, 10, 3, 900, 'PAID'),
(3, 3, 8, 1, 400, 'PAID'),
(4, 3, 5, 2, 800, 'PAID'),
(6, 2, 6, 3, 900, 'PAID'),
(7, 2, 8, 3, 1200, 'PAID'),
(8, 2, 10, 3, 900, 'PAID'),
(9, 2, 8, 2, 800, 'PAID'),
(10, 2, 10, 2, 600, 'PAID'),
(11, 2, 10, 2, 600, 'PAID'),
(12, 2, 6, 2, 600, 'PAID'),
(13, 2, 10, 1, 300, 'PAID'),
(15, 3, 6, 5, 1500, 'PAID'),
(16, 3, 10, 3, 900, 'PAID'),
(17, 2, 3, 2, 1000, 'PAID'),
(18, 2, 4, 3, 1200, 'PAID'),
(19, 2, 5, 2, 800, 'PAID'),
(20, 3, 12, 2, 800, 'PAID'),
(22, 4, 3, 2, 1000, 'PAID'),
(23, 4, 4, 1, 400, 'PAID'),
(24, 4, 5, 1, 400, 'PAID'),
(25, 4, 6, 1, 300, 'PAID'),
(26, 4, 6, 1, 300, 'PAID'),
(27, 4, 7, 1, 300, 'PAID'),
(28, 4, 9, 1, 300, 'PAID'),
(29, 4, 11, 1, 300, 'PAID'),
(30, 2, 7, 1, 300, 'PAID'),
(31, 2, 9, 1, 300, 'PAID'),
(32, 2, 11, 1, 300, 'PAID'),
(34, 5, 3, 2, 1000, 'PAID');

-- --------------------------------------------------------

--
-- テーブルの構造 `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `posts`
--

INSERT INTO `posts` (`id`, `full_name`, `email`, `content`) VALUES
(1, 'Kiyomi Y', 'kiyomi.y0730@gmail.com', 'Hey!'),
(2, 'Nakagawa Kenichi', 'ken@gmail.com', 'Hi! Teas are so good!'),
(3, 'Sid Roth', 'Sid@gmail.com', 'I want to go this cafe!'),
(4, 'Nakagawa Kenichi', 'ken@gmail.com', 'Hi!');

-- --------------------------------------------------------

--
-- テーブルの構造 `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `evaluation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `reviews`
--

INSERT INTO `reviews` (`id`, `item_name`, `nickname`, `comment`, `date`, `evaluation`) VALUES
(2, 'Organic Herb Tea', 'Yuka', 'I love it! Good taste!', '2020-09-23', 3),
(3, 'Assam Tea', 'Yuka', 'Great!', '2020-09-24', 3),
(4, 'Organic Herb Tea', 'Yuka', 'Good smell!', '2020-09-24', 5),
(5, 'Kilimanjaro Coffee', 'kiyomi', 'This is so full-flavored coffee!', '2020-09-24', 4),
(6, 'Organic Herb Tea', 'kiyomi', 'This is very tasty and healthy!', '2020-09-24', 4),
(7, 'Blue Mountain Coffee', 'kiyomi', 'I love it! Good smell.', '2020-09-24', 5),
(8, 'Green Tea', 'kiyomi', 'This tea is  light taste and tasty!', '2020-09-24', 4),
(9, 'Blend Coffee', 'Yuka', 'It is easy to drink and tasty.', '2020-09-24', 5),
(10, 'Blue Mountain Coffee', 'Justin', 'It is very full-flavored! ', '2020-09-25', 4),
(11, 'Kilimanjaro Coffee', 'Justin', 'It is very reasonable coffee.', '2020-09-25', 4),
(12, 'Green Tea', 'Justin', 'I like this Japanese tea.', '2020-09-25', 5),
(13, 'Oolong Tea', 'Justin', 'It is refreshing flavor for oolong tea.', '2020-09-25', 4),
(14, 'Rooibos Tea', 'Justin', 'I hope to be more healthy drinking rooibos tea.', '2020-09-25', 4),
(15, 'Earl Grey', 'Justin', 'This tea has a refreshing citrus aroma. Good!', '2020-09-25', 5),
(16, 'Darjeeling Tea', 'Justin', 'This darjeeling tea is 100% darjeeling leaves. Great!', '2020-09-25', 5),
(17, 'Assam Tea', 'kiyomi', 'I bought it for present of my friend.', '2020-09-25', 4),
(18, 'Oolong Tea', 'kiyomi', 'This tea goes well with Chinese foods!', '2020-09-25', 5),
(19, 'Rooibos Tea', 'kiyomi', 'I am happy as it is decaffeinated.', '2020-09-25', 5),
(20, 'Earl Grey', 'kiyomi', 'It is goes well with cookies.', '2020-09-25', 5),
(21, 'Blue Mountain Coffee', 'Mizuho', 'Great!', '2020-09-25', 4);

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `address`, `account_id`) VALUES
(1, 'Kiyomi１', 'Yasuda１', 'kiyomi.y0730@gmail.com', 'Fukuoka', 1),
(2, 'Kiyomi', 'Yasuda', 'kiyomi.y@gmail.com', 'New York', 2),
(3, 'Yuka', 'Ri', 'yuka@gmailcom', 'Saga', 3),
(4, 'Justin', 'Bieber', 'justin@gmail.com', 'California USA', 4),
(5, 'Mizuho', 'A', 'm@gmail.com', 'Saga', 5);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- テーブルのインデックス `fix_orders`
--
ALTER TABLE `fix_orders`
  ADD PRIMARY KEY (`fix_id`);

--
-- テーブルのインデックス `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- テーブルのインデックス `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- テーブルのインデックス `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- テーブルのAUTO_INCREMENT `fix_orders`
--
ALTER TABLE `fix_orders`
  MODIFY `fix_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- テーブルのAUTO_INCREMENT `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- テーブルのAUTO_INCREMENT `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- テーブルのAUTO_INCREMENT `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- テーブルのAUTO_INCREMENT `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- テーブルのAUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
