-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 192.168.193.32:3306
-- Время создания: Апр 13 2022 г., 19:38
-- Версия сервера: 5.5.62
-- Версия PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `chatdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `usernameOwner` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `usernameFriend` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`usernameOwner`, `usernameFriend`) VALUES
('name4', 'username1'),
('username1', 'name4'),
('name4', 'username2'),
('username2', 'name4'),
('name4', 'username3'),
('username3', 'name4'),
('name4', 'Egor'),
('Egor', 'name4'),
('Egor', 'username1'),
('username1', 'Egor'),
('Egor', 'username2'),
('username2', 'Egor'),
('Vargo', 'TheMix'),
('TheMix', 'Vargo'),
('TheMix', 'Aboba'),
('Aboba', 'TheMix');

-- --------------------------------------------------------

--
-- Структура таблицы `messagelist`
--

CREATE TABLE `messagelist` (
  `id` int(11) NOT NULL,
  `sender` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `MessageText` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `messagelist`
--

INSERT INTO `messagelist` (`id`, `sender`, `receiver`, `MessageText`, `Date`) VALUES
(26, 'TheMix', 'username1', 'Первое сообщение', '2022-03-27 02:13:57'),
(27, 'TheMix', '', 'Второе сообщение', '2022-03-27 03:41:25'),
(28, 'TheMix', '', 'q', '2022-03-27 03:52:02'),
(29, 'Vargo', '', 'Привет', '2022-03-27 15:41:04'),
(30, 'Aboba', '', 'aboba', '2022-03-27 15:44:27'),
(31, 'Aboba', '', 'amogus', '2022-03-27 15:44:38'),
(33, 'TheMix2', '', 'BUgaga', '2022-03-27 15:46:13'),
(34, 'Vargo', 'TheMix', '<b>ХМммм</b>', '2022-03-27 15:46:51'),
(35, 'field1', '', '<p>qweqwe</p>', '2022-03-27 15:49:41'),
(36, 'TheMix', '', 'qweq', '2022-03-27 15:50:11'),
(44, 'Aboba', '', 'хаха', '2022-03-27 16:06:42'),
(45, 'Aboba', '', 'хихи', '2022-03-27 16:06:49'),
(47, 'TheMix', '', 'йцуйцу', '2022-03-27 16:12:21'),
(48, 'Vargo', 'TheMix', '<div id=\"ytplayer\"></div>  <script>   // Load the IFrame Player API code asynchronously.   var tag = document.createElement(\"script\");   tag.src = \"https://www.youtube.com/player_api\";   var firstScriptTag = document.getElementsByTagName(\"script\")[0];   firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);    // Replace the \"ytplayer\" element with an <iframe> and   // YouTube player after the API code downloads.   var player;   function onYouTubePlayerAPIReady() {     player = new YT.Player(\"ytplayer\", {       height: \"360\",       width: \"640\",       videoId: \"dQw4w9WgXcQ\"     });   } </script>', '2022-03-27 16:12:27'),
(49, 'Vargo', 'TheMix', '<div id=\"ytplayer\"></div>  <script>   var tag = document.createElement(\"script\");   tag.src = \"https://www.youtube.com/player_api\";   var firstScriptTag = document.getElementsByTagName(\"script\")[0];   firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);      var player;   function onYouTubePlayerAPIReady() {     player = new YT.Player(\"ytplayer\", {       height: \"360\",       width: \"640\",       videoId: \"dQw4w9WgXcQ\"     });   } </script>', '2022-03-27 16:13:22'),
(62, 'TheMix', '', 'qweqwe', '2022-03-27 16:25:30'),
(68, 'Vargo', 'TheMix', 'DD', '2022-03-27 16:39:41'),
(77, 'field1', '', '< ', '2022-03-27 16:49:37'),
(81, 'field1', '', 'qqwe ', '2022-03-27 16:53:31'),
(82, 'field1', '', '< ', '2022-03-27 16:53:37'),
(86, 'field1', '', 'text ', '2022-03-27 16:57:15'),
(87, 'TheMix', '', '< ', '2022-03-27 17:00:59'),
(88, 'field1', '', 'test ', '2022-03-27 17:01:41'),
(90, 'field1', '', 'hmmm ', '2022-03-27 17:03:30'),
(95, 'Vargo', 'TheMix', 'Кто я ', '2022-03-27 17:10:44'),
(96, 'Vargo', 'TheMix', 'Кто я ', '2022-03-27 17:10:54'),
(97, 'Vargo', 'TheMix', 'Кто я ', '2022-03-27 17:11:02'),
(98, 'Vargo', 'TheMix', 'Кто я`, GetDate()); ', '2022-03-27 17:14:41'),
(99, 'Vargo', 'TheMix', 'Кто я\", GetDate()); ', '2022-03-27 17:15:11'),
(100, 'TheMix', '', '<> ', '2022-03-27 17:16:56'),
(101, 'TheMix', '', '<> ', '2022-03-27 17:17:27'),
(102, 'TheMix', '', '<> ', '2022-03-27 17:18:09'),
(103, 'Vargo', 'TheMix', '-- ', '2022-03-27 17:18:56'),
(104, 'Vargo', 'TheMix', 'D', '0000-00-00 00:00:00'),
(105, 'Vargo', 'TheMix', 'Dd', '0000-00-00 00:00:00'),
(106, 'TheMix', '', '<> ', '2022-03-27 17:20:08'),
(107, 'TheMix', '', 'field1 ', '2022-03-27 17:20:40'),
(108, 'Vargo', 'TheMix', 'field1 ', '2022-03-27 17:20:44'),
(109, 'TheMix', '', 'field1 ', '2022-03-27 17:20:46'),
(110, 'TheMix', '', 'field1 ', '2022-03-27 17:20:53'),
(111, 'TheMix', '', 'qwe ', '2022-03-27 17:21:23'),
(112, 'TheMix', '', '<> ', '2022-03-27 17:21:27'),
(113, 'Vargo', 'TheMix', 'Dd', '0000-00-00 00:00:00'),
(114, 'TheMix', '', 'field1 ', '2022-03-27 17:21:39'),
(115, 'Vargo', 'TheMix', 'field1 ', '2022-03-27 17:21:46'),
(116, 'TheMix', '', 'field1 ', '2022-03-27 17:22:50'),
(117, 'TheMix', '', '<> ', '2022-03-27 17:23:45'),
(118, 'TheMix', '', 'qwe ', '2022-03-27 17:24:50'),
(119, 'TheMix', '', '< ', '2022-03-27 17:24:54'),
(122, 'Vargo', 'TheMix', 'Dd', '0000-00-00 00:00:00'),
(124, 'Vargo', 'TheMix', 'конецстроки', '0000-00-00 00:00:00'),
(130, 'Vargo', 'TheMix', 'конецстроки1', '0000-00-00 00:00:00'),
(134, 'TheMix', '', 'йцу ', '2022-03-27 17:53:32'),
(136, 'field1', '', 'aaa ', '2022-03-27 17:53:41'),
(137, 'Vargo', 'TheMix', 'Привет с 1973', '1973-05-09 13:21:56'),
(138, 'Vargo', 'TheMix', 'Привет время2', '1970-01-01 03:01:09'),
(139, 'TheMix', '', '))) ', '2022-03-27 19:12:59'),
(140, 'TheMix', '', 'Чек ', '2022-03-27 19:56:01'),
(143, 'Themix', '', 'йцу ', '2022-03-27 20:08:14'),
(144, 'Themix', '', '<img src=\"https://www.google.com/url?sa=i&url=https%3A%2F%2Fskigu.ru%2Fresorts%2Fleningrad-region%2Fkrasnoe-ozero%2F&psig=AOvVaw2uL6pzEFQ2a-5D998pCzrN&ust=1648487414812000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCPD8n6jk5vYCFQAAAAAdAAAAABAD\"> ', '2022-03-27 20:10:32'),
(147, 'Themix', '', '<img src=\"https://547772.ssl.1c-bitrix-cdn.ru/upload/iblock/703/7031c3d7bd73ce05097fe067c75e4760.jpg?1381157012105260\" alt=\"Я люблю гей фурри порно\" width=\"500\" height=\"600\">  ', '2022-03-27 20:11:27'),
(148, 'PaDlA', '', '<img src=\"https://yandex.ru/images/search?cbir_id=371446%2F22BjXatYye3eOflNtPKnrQ1033&pos=0&rpt=imageview&img_url=https%3A%2F%2Fcf.shopee.co.id%2Ffile%2Fe720340c68c18ad79c373af1d8e36e22&cbir_page=similar&url=https%3A%2F%2Favatars.mds.yandex.net%2Fget-images-cbir%2F371446%2F22BjXatYye3eOflNtPKnrQ1033%2Forig\"> ', '2022-03-27 20:12:18'),
(149, 'PaDlA', '', '<img src=\"https://cf.shopee.co.id/file/e720340c68c18ad79c373af1d8e36e22\" alt=\"Name\" width=\"500\" height=\"600\"> ', '2022-03-27 20:13:39'),
(150, '', '', 'aboba ', '2022-03-28 09:49:30'),
(151, '', '', 'ТЕСТОВОЕ СООЩЕНИЕ ', '2022-03-28 09:53:02'),
(152, 'themix', '', 'qwe ', '2022-04-11 19:45:04');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `conv_id` int(11) NOT NULL,
  `sender` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `conv_id`, `sender`, `receiver`, `message`, `Date`) VALUES
(1, 2, 'text1', 'text2', 'text3', '2022-03-27 17:49:24');

-- --------------------------------------------------------

--
-- Структура таблицы `session`
--

CREATE TABLE `session` (
  `session_id` varchar(64) CHARACTER SET utf8 NOT NULL,
  `username` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `session`
--

INSERT INTO `session` (`session_id`, `username`) VALUES
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'qwe'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'qwe'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', '11'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'Egor'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'egor'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'Egor'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'Egor'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'Egor'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'Egor'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'Egor'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'Egor'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'Egor'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'Egor'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'Egor'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'Egor'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'Egor'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'Egor'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'Egor'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'Egor'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'Egor'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'Egor'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'Egor'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'Egor'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'username1'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'Egor'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'username1'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'Egor'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'username1'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'Egor'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'username1'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'username1'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'Egor'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'name4'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'Egor'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'name4'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'Egor'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'name4'),
('0tej4bfq2gi5jj64lth83mgatapnp6qv', 'TheMix'),
('jn2acf5c2h6hfua1msmcvhvrkle24ovv', 'TheMix'),
('kg9s6bbt9ren94igor5gbk0h2glbqtvu', 'TheMix'),
('kg9s6bbt9ren94igor5gbk0h2glbqtvu', 'TheMix'),
('bom87qkph3ggu5l4jm8fkv9qttujd8p5', 'Vargo'),
('t4nd40dcdl2pa82b60ji1dgjhdt87dst', 'Aboba'),
('cthjiaochduakdsoc6ofce98pbgeptbu', 'TheMix'),
('cthjiaochduakdsoc6ofce98pbgeptbu', 'TheMix2'),
('kg9s6bbt9ren94igor5gbk0h2glbqtvu', 'TheMix'),
('m986o4nocug0knbksjg6asri2derv12g', 'abobyyss'),
('f8rvb9ps7ji1ht4g2sb67ptndfk3cln2', 'eblan'),
('f8rvb9ps7ji1ht4g2sb67ptndfk3cln2', 'eblan'),
('f8rvb9ps7ji1ht4g2sb67ptndfk3cln2', 'eblan'),
('f8rvb9ps7ji1ht4g2sb67ptndfk3cln2', 'eblan'),
('f8rvb9ps7ji1ht4g2sb67ptndfk3cln2', 'eblan'),
('f8rvb9ps7ji1ht4g2sb67ptndfk3cln2', 'eblan'),
('kg9s6bbt9ren94igor5gbk0h2glbqtvu', 'TheMix'),
('kg9s6bbt9ren94igor5gbk0h2glbqtvu', 'TheMix'),
('cthjiaochduakdsoc6ofce98pbgeptbu', 'aboba'),
('f8rvb9ps7ji1ht4g2sb67ptndfk3cln2', 'eblan'),
('pq8gl71b4mata27alkr16l4oj6befcp3', 'TheMix'),
('cvljausld3cvugjgd6r33ivield5c7h1', 'Themix'),
('kg9s6bbt9ren94igor5gbk0h2glbqtvu', 'Themix'),
('1oh1j95ecocs9umn3tedsf14e51mgf3s', 'TheMix'),
('aes6ober5chlii1ajr5gu5lap8d2bmsi', 'Pisya'),
('ln5gbdpl8j2ilej0ejp6f22ujusitvur', 'PaDlA'),
('o83gnjgd1avamonabh0q57ua7kjdq8r5', 'PaDlA'),
('1oh1j95ecocs9umn3tedsf14e51mgf3s', 'TheMix'),
('1oh1j95ecocs9umn3tedsf14e51mgf3s', 'Themix'),
('kg9s6bbt9ren94igor5gbk0h2glbqtvu', 'TheMix'),
('cthjiaochduakdsoc6ofce98pbgeptbu', 'THEMIX'),
('a5fcobpm3tqvqvkog8719pok683p2mc1', 'Themix'),
('kg9s6bbt9ren94igor5gbk0h2glbqtvu', 'TheMix'),
('kg9s6bbt9ren94igor5gbk0h2glbqtvu', 'TheMix'),
('se19lq9bbi6ulus0ehdsdjeasf8tv89a', 'TheMix'),
('cfjamve7tijji78oejdo77f468mcgn4d', 'themix'),
('ai4igd4h477ilcom8oin20ehh4sq1ao9', 'themix'),
('ai4igd4h477ilcom8oin20ehh4sq1ao9', 'themix'),
('7gj52taek2280pir575uq9a8lkrt10o9', 'themix'),
('foabrva8ulgb9j0bk2a4mdfl0fglssdb', 'themix'),
('paqkl4j7q5kbig9unrv6vvh0c0n6u2dm', 'themix'),
('hpt3nf9ded5kqmsj6e6cr41cl0i5cm1m', 'Themix'),
('i0lshpbm24pa72ikg689dkq9oorafrcq', 'TheMix'),
('q32l3282ovkicm5tdas3dn455k5occ7m', 'Themix'),
('jahmc3a14o692jeu73tbov68it2qcidp', 'themix'),
('jahmc3a14o692jeu73tbov68it2qcidp', 'themix'),
('jahmc3a14o692jeu73tbov68it2qcidp', 'themix'),
('jahmc3a14o692jeu73tbov68it2qcidp', 'themix'),
('tm9rjbahs59teiff0su6qoui3p408cp4', 'themix'),
('pue3rkj90i73a8mtq5rsua602cn1nske', 'Themix'),
('umbklopnj709c1j0l3lp7e01lntsmrpd', 'themix'),
('885edfprl74rp3e5aiuncd5tpvvtjk3d', 'themix'),
('885edfprl74rp3e5aiuncd5tpvvtjk3d', 'themix'),
('885edfprl74rp3e5aiuncd5tpvvtjk3d', 'themix');

-- --------------------------------------------------------

--
-- Структура таблицы `userlist`
--

CREATE TABLE `userlist` (
  `username` varchar(32) CHARACTER SET utf8 NOT NULL,
  `name` varchar(32) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(64) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `userlist`
--

INSERT INTO `userlist` (`username`, `name`, `password`) VALUES
('TheMix', 'Egor', '1234'),
('Vargo', 'agaName', 'weedpass'),
('Aboba', 'Aboba', 'aboba'),
('TheMix2', 'Egor', '1234'),
('abobyyss', 'abobyyss', '123'),
('eblan', 'eblan', 'eblan'),
('Pisya', 'Pisya', 'Pisya'),
('PaDlA', 'g4m4l1y', 'password');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `messagelist`
--
ALTER TABLE `messagelist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `messagelist`
--
ALTER TABLE `messagelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
