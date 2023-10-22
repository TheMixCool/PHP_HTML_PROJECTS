-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 31 2022 г., 00:51
-- Версия сервера: 5.5.62
-- Версия PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `suite`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `login` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`login`, `password`) VALUES
('cat', 'cat'),
('dog', 'cat'),
('user', 'qwerty');

-- --------------------------------------------------------

--
-- Структура таблицы `buyerdata`
--

CREATE TABLE `buyerdata` (
  `id` int(11) NOT NULL,
  `lastname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(16) NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `buyerdata`
--

INSERT INTO `buyerdata` (`id`, `lastname`, `name`, `phone`, `email`, `address`) VALUES
(39, '', '', 0, '', ''),
(40, '', '', 0, '', ''),
(41, 'qwe', 'qwe', 0, 'qwe', 'qwe'),
(42, '', '', 0, '', ''),
(43, '', '', 0, '', ''),
(44, '', '', 0, '', ''),
(45, '', '', 0, '', ''),
(46, '111', '', 0, '', ''),
(47, '123444', '', 0, '', ''),
(48, '123444', '', 0, '', ''),
(49, '31231', '3123123', 12312312, '3312312', '3123123'),
(50, '31231', '3123123', 12312312, '3312312', '3123123'),
(51, '31231', '3123123', 12312312, '3312312', '3123123'),
(52, '3123', '12312', 3123, '4421', '4124'),
(53, '', '', 0, '', ''),
(54, '', '', 0, '', ''),
(55, '', '', 0, '', ''),
(56, '', '', 0, '', ''),
(57, '', '', 0, '', ''),
(58, '', '', 0, '', ''),
(59, '', '', 0, '', ''),
(60, '', '', 0, '', ''),
(61, '', '', 0, '', ''),
(62, '', '', 0, '', ''),
(63, '', '', 0, '', ''),
(64, '', '', 0, '', ''),
(65, '', '', 0, '', ''),
(66, '', '', 0, '', ''),
(67, '', '', 0, '', ''),
(68, '', '', 0, '', ''),
(69, '', '', 0, '', ''),
(70, '', '', 0, '', ''),
(71, '', '', 0, '', ''),
(72, '31312', '', 0, '', ''),
(73, '', '', 0, '', ''),
(74, '', '', 0, '', ''),
(75, '', '', 0, '', ''),
(76, '', '', 0, '', ''),
(77, '', '', 0, '', ''),
(78, '', '', 0, '', ''),
(79, '', '', 0, '', ''),
(80, '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `session_id` varchar(64) CHARACTER SET utf8 NOT NULL,
  `disk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`session_id`, `disk_id`) VALUES
('fqtbhg7b5jmt96ts3p9dilo9vb39mnl6', 1),
('hdc808fuflqaqqv0ccsio8ldkia51euh', 2),
('uhnn25b7a69i4gal1idulie4gr7e992o', 3),
('fqtbhg7b5jmt96ts3p9dilo9vb39mnl6', 2),
('fqtbhg7b5jmt96ts3p9dilo9vb39mnl6', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `disks`
--

CREATE TABLE `disks` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `disks`
--

INSERT INTO `disks` (`id`, `image`, `name`, `author`, `genre`, `year`, `description`, `price`) VALUES
(1, 'https://s3.amazonaws.com/www-inside-design/uploads/2020/10/aspect-ratios-blogpost-1x1-1.png', 'квадрат', 'Малевич', 'Поп', '2018', '123', 888),
(2, 'https://media.forgecdn.net/avatars/160/106/636663413021584402.png', 'Еще один квадрат', 'Лжемалевич', 'Рок', '2018', 'На любителя.', 1555),
(3, 'https://metod7.ru/image/catalog/info/cifra1.jpg', 'Название', 'Кис-кис', 'Поп', '2020', 'На любителя.', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `buyerid` int(11) NOT NULL,
  `paymentid` int(11) NOT NULL,
  `order_token` varchar(64) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `buyerid`, `paymentid`, `order_token`) VALUES
(14, 1, 2, 'hdc808fuflqaqqv0ccsio8ldkia51euh'),
(15, 0, 0, 'hdc808fuflqaqqv0ccsio8ldkia51euh'),
(16, 0, 0, 'hdc808fuflqaqqv0ccsio8ldkia51euh'),
(17, 0, 0, 'hdc808fuflqaqqv0ccsio8ldkia51euh');

-- --------------------------------------------------------

--
-- Структура таблицы `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `cardnumber` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cardholder` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cvv` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `payment`
--

INSERT INTO `payment` (`id`, `cardnumber`, `cardholder`, `date`, `cvv`) VALUES
(40, '', '', '', 0),
(41, '', '', '', 0),
(42, '123', '123', '123', 333),
(43, '', '', '', 0),
(44, '', '', '', 0),
(45, '', '', '', 0),
(46, '', '', '', 0),
(47, '', '', '', 0),
(48, '1234444', '', '', 0),
(49, '1234444', '', '', 0),
(50, '33333333333', '33333333333', '333', 333),
(51, '33333333333', '33333333333', '333', 333),
(52, '33333333333', '33333333333', '333', 333),
(53, '412', '111', '333', 113),
(54, '', '', '', 0),
(55, '', '', '', 0),
(56, '', '', '', 0),
(57, '', '', '', 0),
(58, '', '', '', 0),
(59, '', '', '', 0),
(60, '', '', '', 0),
(61, '', '', '', 0),
(62, '', '', '', 0),
(63, '', '', '', 0),
(64, '', '', '', 0),
(65, '', '', '', 0),
(66, '', '', '', 0),
(67, '', '', '', 0),
(68, '', '', '', 0),
(69, '', '', '', 0),
(70, '', '', '', 0),
(71, '', '', '', 0),
(72, '', '', '', 0),
(73, '', '', '', 0),
(74, '', '', '', 0),
(75, '', '', '', 0),
(76, '', '', '', 0),
(77, '', '', '', 0),
(78, '', '', '', 0),
(79, '', '', '', 0),
(80, '', '', '', 0),
(81, '', '', '', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`login`);

--
-- Индексы таблицы `buyerdata`
--
ALTER TABLE `buyerdata`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD KEY `disk_id` (`disk_id`),
  ADD KEY `session_id` (`session_id`) USING BTREE;

--
-- Индексы таблицы `disks`
--
ALTER TABLE `disks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paymentid` (`paymentid`),
  ADD KEY `buyerid` (`buyerid`),
  ADD KEY `order_token` (`order_token`),
  ADD KEY `order_token_2` (`order_token`);

--
-- Индексы таблицы `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `buyerdata`
--
ALTER TABLE `buyerdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT для таблицы `disks`
--
ALTER TABLE `disks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
