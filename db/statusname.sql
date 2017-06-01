-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost:3306
-- Время создания: Фев 20 2016 г., 22:49
-- Версия сервера: 5.5.35-33.0-log
-- Версия PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `u0068520_php05`
--

-- --------------------------------------------------------

--
-- Структура таблицы `statusname`
--

CREATE TABLE `statusname` (
  `id` int(11) NOT NULL,
  `status` enum('active','passive','lock','gold') NOT NULL,
  `statusname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `statusname`
--

INSERT INTO `statusname` (`id`, `status`, `statusname`) VALUES
(1, 'active', 'активный'),
(2, 'passive', 'отключёный'),
(3, 'lock', 'блокированный'),
(4, 'gold', 'ВИП');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `statusname`
--
ALTER TABLE `statusname`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `statusname`
--
ALTER TABLE `statusname`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
