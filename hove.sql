-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: MySQL-8.2
-- Время создания: Апр 06 2025 г., 19:47
-- Версия сервера: 8.2.0
-- Версия PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hove`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_phone` varchar(20) NOT NULL,
  `customer_address` text NOT NULL,
  `order_items` text NOT NULL COMMENT 'JSON-массив товаров',
  `total_price` decimal(10,2) NOT NULL,
  `order_status` enum('new','processing','completed','cancelled') DEFAULT 'new',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `customer_email`, `customer_phone`, `customer_address`, `order_items`, `total_price`, `order_status`, `created_at`) VALUES
(1, 'SABKa', 'rezanwin2006@gmail.com', '+7 (910) 674-41-65', '.Владимир мкр.Юрьевец', '[{\"name\":\"Ӧ-18\",\"price\":13600,\"image\":\"media\\/Product Card-3.png\"},{\"name\":\"Ӧ-18\",\"price\":13600,\"image\":\"media\\/Product Card-3.png\"},{\"name\":\"Ӧ-18\",\"price\":13600,\"image\":\"media\\/Product Card-3.png\"},{\"name\":\"Ӧ-18\",\"price\":24500,\"image\":\"media\\/Product Card.png\"}]', 65300.00, 'new', '2025-04-01 22:45:55'),
(2, 'Резанов Андрей', 'gdxgdfg@gfa.er', '+7 (910) 674-41-65', 'Г.Владимир мкр.Юрьевец', '[{\"name\":\"Ӧ-18\",\"price\":13600,\"image\":\"media\\/Product Card-3.png\"},{\"name\":\"Ӧ-18\",\"price\":13600,\"image\":\"media\\/Product Card-3.png\"},{\"name\":\"Ӧ-18\",\"price\":13600,\"image\":\"media\\/Product Card-3.png\"},{\"name\":\"Ӧ-18\",\"price\":13600,\"image\":\"media\\/Product Card-3.png\"}]', 54400.00, 'new', '2025-04-01 23:12:50'),
(3, 'SABKa', 'gdxgdfg@gfa.e', '+7 (910) 674-41-65', 'Г.Владимир мкр.Юрьевец', '[{\"name\":\"Ӧ-18\",\"price\":13600,\"image\":\"media\\/Product Card-3.png\"},{\"name\":\"Ӧ-18\",\"price\":13600,\"image\":\"media\\/Product Card-3.png\"},{\"name\":\"Ӧ-18\",\"price\":13600,\"image\":\"media\\/Product Card-3.png\"},{\"name\":\"Ӧ-18\",\"price\":13600,\"image\":\"media\\/Product Card-3.png\"}]', 54400.00, 'new', '2025-04-01 23:15:41'),
(4, 'SABKa', 'gdxgdfg@gfa.er', '+7 (910) 674-41-65', 'Г.Владимир мкр.Юрьевец', '[{\"name\":\"Ӧ-18\",\"price\":13600,\"image\":\"media\\/Product Card-3.png\"},{\"name\":\"Ӧ-18\",\"price\":13600,\"image\":\"media\\/Product Card-3.png\"},{\"name\":\"Ӧ-18\",\"price\":13600,\"image\":\"media\\/Product Card-3.png\"}]', 40800.00, 'new', '2025-04-01 23:18:56'),
(5, 'SABKa', 'rezanwin2006@gmail.com', '+7 (910) 674-41-65', 'Г.Владимир мкр.Юрьевец', '[{\"name\":\"Ӧ-18\",\"price\":13600,\"image\":\"media\\/Product Card-3.png\"},{\"name\":\"Ӧ-18\",\"price\":13600,\"image\":\"media\\/Product Card-3.png\"},{\"name\":\"Ӧ-18\",\"price\":13600,\"image\":\"media\\/Product Card-3.png\"}]', 40800.00, 'new', '2025-04-01 23:23:54'),
(6, 'SABKa', 'rezanwin2006@gmail.com', '89106744165', 'Г.Владимир мкр.Юрьевец', '[{\"name\":\"Ӧ-18\",\"price\":13600,\"image\":\"media\\/Product Card-3.png\"},{\"name\":\"Ӧ-18\",\"price\":13600,\"image\":\"media\\/Product Card-3.png\"},{\"name\":\"Ӧ-18\",\"price\":13600,\"image\":\"media\\/Product Card-3.png\"}]', 40800.00, 'new', '2025-04-01 23:40:45'),
(7, 'SABKa', 'rezanwin2006@gmail.com', '89106744165', 'Г.Владимир мкр.Юрьевец', '[{\"name\":\"Ӧ-18\",\"price\":13600,\"image\":\"media\\/Product Card-3.png\"},{\"name\":\"Ӧ-18\",\"price\":13600,\"image\":\"media\\/Product Card-3.png\"},{\"name\":\"Ӧ-18\",\"price\":13600,\"image\":\"media\\/Product Card-3.png\"},{\"name\":\"Ӧ-15\",\"price\":13990,\"image\":\"media\\/Product Card-5.png\"},{\"name\":\"Ӧ-15\",\"price\":13990,\"image\":\"media\\/Product Card-5.png\"},{\"name\":\"Ӧ-15\",\"price\":13990,\"image\":\"media\\/Product Card-5.png\"}]', 82770.00, 'new', '2025-04-01 23:42:04'),
(8, 'SABKa', 'rezanwin2006@gmail.com', '89106744165', 'Г.Владимир мкр.Юрьевец', '[{\"name\":\"Ӧ-12\",\"price\":11990,\"image\":\"media\\/Product Card-2.png\"},{\"name\":\"Ӧ-12\",\"price\":11990,\"image\":\"media\\/Product Card-2.png\"},{\"name\":\"Ӧ-12\",\"price\":11990,\"image\":\"media\\/Product Card-2.png\"},{\"name\":\"Ӧ-16\",\"price\":9990,\"image\":\"media\\/Product Card-6.png\"},{\"name\":\"Ӧ-16\",\"price\":9990,\"image\":\"media\\/Product Card-6.png\"},{\"name\":\"Ӧ-16\",\"price\":9990,\"image\":\"media\\/Product Card-6.png\"},{\"name\":\"Ӧ-11\",\"price\":10990,\"image\":\"media\\/Product Card-1.png\"}]', 76930.00, 'new', '2025-04-01 23:58:04'),
(9, 'SABKa', 'rezanwin2006@gmail.com', '89106744165', 'Г.Владимир мкр.Юрьевец', '[{\"name\":\"Ӧ-11\",\"price\":10990,\"image\":\"media\\/Product Card-1.png\"}]', 10990.00, 'new', '2025-04-06 16:42:46');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `model` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `model`, `color`, `price`, `description`, `image_path`, `created_at`) VALUES
(5, 'Ӧ-10', 'Light', 12990.00, ' Стильный и современный стул из высококачественного дерева. Элегантные линии делают его идеальным дополнением к любому интерьеру.', 'media/Product Card.png', '2025-04-01 23:32:45'),
(6, 'Ӧ-11', 'Dark', 10990.00, 'Изящный деревянный стул с гладкой отделкой, который станет центральным элементом в интерьере.', 'media/Product Card-1.png', '2025-04-01 23:33:22'),
(7, 'Ӧ-12', 'Light', 11990.00, ' Классический стул. Вдохновлен итальянскими традициями, добавляет уют в любом уголке. ', 'media/Product Card-2.png', '2025-04-01 23:34:32'),
(8, 'Ӧ-13', 'Dark', 7990.00, 'Минималистичный стул из массива дерева. Подходит для современных интерьеров, сочетающих стиль и комфорт.', 'media/Product Card-3.png', '2025-04-01 23:35:10'),
(9, 'Ӧ-14', 'Dark', 13990.00, 'Уютный деревянный стул с состаренным эффектом. Прекрасно вписывается в интерьеры в стиле ретро.', 'media/Product Card-4.png', '2025-04-01 23:35:58'),
(10, 'Ӧ-15', 'Light', 13990.00, ' Натуральный деревянный стул с минималистичным дизайном. Идеален для создания экологичного пространства.', 'media/Product Card-5.png', '2025-04-01 23:36:35'),
(11, 'Ӧ-16', 'Dark', 9990.00, ' Строгий и стильный деревянный стул с универсальным дизайном. Подходит для дома и офисных помещений.', 'media/Product Card-6.png', '2025-04-01 23:37:15'),
(12, 'Ӧ-17', 'Light', 11990.00, 'Изысканный деревянный стул с классическими пропорциями и элегантными деталями.', 'media/Product Card-7.png', '2025-04-01 23:37:57'),
(13, 'Ӧ-18', 'Dark', 12990.00, 'Стул, сделанный из необработанного дерева. Принесет в ваш дом тепло и атмосферу экологического комфорта.', 'media/Product Card-8.png', '2025-04-01 23:38:31'),
(14, 'Ӧ-19', 'Dark', 10990.00, 'Натуральный деревянный стул с минималистичным дизайном. Идеален для создания экологичного пространства.', 'media/Product Card-9.png', '2025-04-01 23:39:29');

-- --------------------------------------------------------

--
-- Структура таблицы `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`) VALUES
(8, 'gdxgdfg@gfa.er', '2025-04-01 01:05:02'),
(9, 'rezanwin2006@gmail.com', '2025-04-01 23:40:17');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
