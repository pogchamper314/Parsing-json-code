-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Мар 06 2020 г., 10:49
-- Версия сервера: 5.7.18-log
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
-- База данных: `usersdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `arguments`
--

CREATE TABLE `arguments` (
  `id` int(11) NOT NULL,
  `ip` longtext NOT NULL,
  `speed` longtext NOT NULL,
  `pub_date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `arguments`
--

INSERT INTO `arguments` (`id`, `ip`, `speed`, `pub_date`) VALUES
(4, '            [ip] => 192.168.0.105\r\n', '            [speed] => 100\r\n', '2020-03-06 10:16:46.994448'),
(5, '            [ip] => 192.168.0.105\r\n', '            [speed] => 100\r\n', '2020-03-06 10:16:46.994448'),
(6, '            [ip] => 192.168.0.105\r\n', '            [speed] => 100\r\n', '2020-03-06 10:16:54.480835');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `arguments`
--
ALTER TABLE `arguments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `arguments`
--
ALTER TABLE `arguments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
