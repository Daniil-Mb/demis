-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 16 2023 г., 17:32
-- Версия сервера: 5.6.51
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `demis`
--

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(320) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `address`, `number`, `email`) VALUES
(1, 'Стрельцов Даниил Максимович', 'тула', '88006666666', 'wwwwww@www.cu');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `head` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `head`, `text`, `date`) VALUES
(1, 'Бананы', 'Равным образом сложившаяся структура организации позволяет оценить значение системы обучения кадров, соответствует насущным потребностям. Задача организации, в особенности же постоянный количественный рост и сфера нашей активности влечет за собой процесс внедрения и модернизации соответствующий условий активизации.', '2023-07-16 03:23:07'),
(2, 'Не бананы', 'Таким образом дальнейшее развитие различных форм деятельности в значительной степени обуславливает создание дальнейших направлений развития. Постоянное информационно-пропагандистское обеспечение нашей деятельности в значительной степени обуславливает создание форм развития. ', '2023-07-16 03:23:07'),
(3, 'Человек', 'Не следует, однако забывать, что сложившаяся структура организации способствует подготовки и реализации новых предложений. Равным образом дальнейшее развитие различных форм деятельности позволяет оценить значение позиций, занимаемых участниками в отношении поставленных задач.', '2023-07-16 03:23:07'),
(4, 'Животное', 'Равным образом сложившаяся структура организации влечет за собой процесс внедрения и модернизации систем массового участия. Таким образом сложившаяся структура организации требуют от нас анализа форм развития.', '2023-07-16 03:23:07'),
(5, 'Медуза', 'Начало повседневной работы по формированию позиции в значительной степени обуславливает создание соответствующий условий активизации. Идейные соображения высшего порядка, а также новая модель организационной деятельности позволяет оценить значение направлений прогрессивного развития.', '2023-07-16 03:23:07');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
