-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 02 2020 г., 08:42
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Структура таблицы `test_tab`
--

CREATE TABLE `test_tab` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `distance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `test_tab`
--

INSERT INTO `test_tab` (`id`, `date`, `name`, `count`, `distance`) VALUES
(1, '2020-08-01', 'Гамбург-Висбаден', 5, 517),
(2, '2020-08-18', 'Гамбург-Дрезден', 3, 499),
(3, '2020-08-01', 'Гамбург-Любек', 8, 66),
(4, '2020-07-23', 'Гамбург-Хамм', 3, 499),
(5, '2020-07-15', 'Дрезден-Падерборн', 4, 345),
(6, '2020-07-15', 'Любек-Хамм', 3, 505),
(7, '2020-07-15', 'Дрезден-Ройтлинген', 4, 555),
(8, '2020-07-15', 'Любек-Оффенбах', 3, 505);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `test_tab`
--
ALTER TABLE `test_tab`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `test_tab`
--
ALTER TABLE `test_tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
