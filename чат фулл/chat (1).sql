-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 09 2020 г., 20:57
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
-- База данных: `chat`
--

-- --------------------------------------------------------

--
-- Структура таблицы `frends`
--

CREATE TABLE `frends` (
  `user_1` int(11) NOT NULL,
  `user_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 1, 3, 'Привет', '2020-03-03 09:10:00'),
(2, 3, 1, 'Привет Как дела ?', '2020-03-31 09:15:00'),
(3, 1, 3, 'Все хорошо СПС', '2020-04-03 16:22:56'),
(6, 1, 3, 'Отлично, я рад', '2020-04-03 17:02:50'),
(7, 1, 3, 'Что нового ? ', '2020-04-03 17:07:55'),
(20, 0, 0, 'fgfgfgfg', '2020-04-03 20:30:17'),
(21, 4, 1, 'tretrtrt', '2020-04-03 20:31:42'),
(22, 4, 1, 'все хорошо', '2020-04-03 20:37:07'),
(23, 4, 3, 'вывыв', '2020-04-03 20:40:22'),
(24, 4, 1, '5495959595', '2020-04-03 23:35:42'),
(25, 4, 3, '555555', '2020-04-03 23:35:52'),
(26, 8, 1, 'привет питер', '2020-04-07 12:37:07'),
(27, 8, 1, 'ok', '2020-04-07 12:39:54'),
(28, 8, 2, 'Иван коз\r\n', '2020-04-07 13:19:26'),
(29, 1, 8, 'прив', '2020-04-07 13:20:12'),
(30, 8, 1, 'dddd', '2020-04-07 18:30:34'),
(31, 8, 1, 'dddd', '2020-04-07 19:52:22'),
(32, 8, 1, 'dddd', '2020-04-07 19:52:35'),
(33, 8, 1, 'dfdfdfd', '2020-04-09 19:45:24'),
(34, 8, 1, 'ghghg\n', '2020-04-09 19:45:45'),
(35, 8, 3, 'Анастасия ты нормальная ?', '2020-04-09 19:50:19');

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
(1, 'Piter', '45334234', '4242424', 'images/user.png', ''),
(2, 'Иван', '353535', '5353535', 'images/user.png', ''),
(3, 'Анастасия ', '45334234', '4242424', 'images/user.gerl.png', ''),
(4, 'Виктор', '999999', 'V@i.ua', '', '9999'),
(5, 'Наташа', '444444', 'vcc@i.ua', '', '99999'),
(7, 'Вася', '554545', '54545@bk.ru', '', '9999'),
(8, 'Максим Шрамко', '', 'shramkomax@gmail.com', '', '9999'),
(9, 'кен ', '1444', '444', '', '444');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `frends`
--
ALTER TABLE `frends`
  ADD UNIQUE KEY `user_1` (`user_1`,`user_2`);

--
-- Индексы таблицы `mess`
--
ALTER TABLE `mess`
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
-- AUTO_INCREMENT для таблицы `mess`
--
ALTER TABLE `mess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `polzovateli`
--
ALTER TABLE `polzovateli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
