-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 27 2020 г., 10:18
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `medclin`
--

-- --------------------------------------------------------

--
-- Структура таблицы `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `pass`, `photo`) VALUES
(999, 'Doctor', '9999', '');

-- --------------------------------------------------------

--
-- Структура таблицы `mess`
--

CREATE TABLE `mess` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_id_2` int(11) NOT NULL,
  `message` text NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `mess`
--

INSERT INTO `mess` (`id`, `user_id`, `user_id_2`, `message`, `time`) VALUES
(56, 2, 999, 'dfdfdf', '2020-04-25 17:36:21'),
(57, 999, 9, 'fdfdfd', '2020-04-25 17:36:27'),
(58, 2, 999, 'Привет \r\n', '2020-04-25 20:20:51'),
(59, 999, 9, 'привет \n', '2020-04-25 20:21:56'),
(60, 8, 999, 'fdfdfdf', '2020-04-26 15:48:29'),
(61, 8, 999, 'ввввв', '2020-04-26 16:49:21'),
(62, 8, 999, 'как оно', '2020-04-27 10:16:20'),
(63, 999, 9, 'Ок', '2020-04-27 10:57:34'),
(66, 9, 999, 'fdfdfdf', '2020-04-26 15:48:29'),
(67, 9, 999, 'ввввв', '2020-04-26 16:49:21'),
(68, 9, 999, 'как оно', '2020-04-27 10:16:20'),
(69, 999, 8, 'fdfdfd', '2020-04-25 17:36:27'),
(70, 999, 2, 'привет \r\n', '2020-04-25 20:21:56'),
(71, 999, 2, 'Ок', '2020-04-27 10:57:34');

-- --------------------------------------------------------

--
-- Структура таблицы `note`
--

CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `text` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `note`
--

INSERT INTO `note` (`id`, `id_user`, `text`, `phone`, `time`) VALUES
(8, 8, 'У меня болит голова ', '0662178965', '2020-04-26 15:34:28'),
(9, 8, 'очень круто', '0662178965', '2020-04-27 10:16:36'),
(10, 8, 'вврпарпаораорплгрдлрполлолггдшщшг', '0662178965', '2020-04-27 10:32:52'),
(13, 9, 'У меня болит голова ', '0662178965', '2020-04-26 15:34:28'),
(14, 9, 'очень круто', '0662178965', '2020-04-27 10:16:36'),
(15, 9, 'вврпарпаораорплгрдлрполлолггдшщшг', '0662178965', '2020-04-27 10:32:52');

-- --------------------------------------------------------

--
-- Структура таблицы `polzovateli`
--

CREATE TABLE `polzovateli` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `polzovateli`
--

INSERT INTO `polzovateli` (`id`, `name`, `phone`, `email`, `photo`, `pass`) VALUES
(1, 'Piter', '45334234', '4242424', 'images/user.png', '9999'),
(3, 'Анастасия ', '45334234', '4242424', 'images/user.gerl.png', ''),
(5, 'Наташа', '444444', 'vcc@i.ua', '', '99999'),
(8, 'Максим Шрамко', '0662178965', 'shramkomax@gmail.com', '', '9999'),
(9, 'Максим ', '0662178985', 'shramko@gmail.com', '', '9999'),
(999, 'Doctor', '', '', '', '5858585');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mess`
--
ALTER TABLE `mess`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `polzovateli`
--
ALTER TABLE `polzovateli`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

--
-- AUTO_INCREMENT для таблицы `mess`
--
ALTER TABLE `mess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT для таблицы `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `polzovateli`
--
ALTER TABLE `polzovateli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
