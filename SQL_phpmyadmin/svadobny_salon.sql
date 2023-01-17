-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Út 17.Jan 2023, 23:37
-- Verzia serveru: 10.4.25-MariaDB
-- Verzia PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `svadobny_salon`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `announcement_text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `announcements`
--

INSERT INTO `announcements` (`id`, `announcement_text`, `created_at`) VALUES
(12, 'Pripomíname, že na skúšku svadobných šiat je potrebné sa vopred objednať !', '2023-01-15 01:54:09'),
(13, 'Pri zarezervovani svadobných šiat na Váš termín svadby sa platí záloha v hodnote 100€.', '2023-01-15 01:54:34'),
(42, 'Pri skúšaní svadobných šiat je skúšanie troch modelov grátis.', '2023-01-16 15:10:20');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_size` float(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `photos`
--

INSERT INTO `photos` (`id`, `file_name`, `file_size`, `created_at`) VALUES
(47, '63c53ffc80c2b.jpg', 0.49, '2023-01-16 12:15:56'),
(48, '63c53ffc81121.jpg', 0.57, '2023-01-16 12:15:56'),
(51, '63c5693c87ef8.jpg', 0.64, '2023-01-16 15:11:56'),
(52, '63c5693c885c3.jpg', 0.59, '2023-01-16 15:11:56'),
(53, '63c5693c88a9f.jpg', 0.69, '2023-01-16 15:11:56'),
(54, '63c5693c88edf.jpg', 0.47, '2023-01-16 15:11:56'),
(55, '63c5693c892fd.jpg', 0.71, '2023-01-16 15:11:56'),
(56, '63c5693c8972f.jpg', 0.72, '2023-01-16 15:11:56'),
(57, '63c5693c89bbc.jpg', 0.69, '2023-01-16 15:11:56'),
(58, '63c5693c8a053.jpg', 0.56, '2023-01-16 15:11:56');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `registered_users`
--

CREATE TABLE `registered_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `registered_users`
--

INSERT INTO `registered_users` (`id`, `username`, `password`, `created_at`, `last_login`) VALUES
(1, 'admin', 'admin', '2023-01-15 01:56:12', '2023-01-17 22:30:54'),
(2, 'admin2', '$2y$10$7abQYYAuYvYbi2HJ5gPk..30QUpt4vKeeiUCk1H2gFoY72CG2Rq4W', '2023-01-17 22:14:54', '2023-01-17 22:14:54');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_size` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexy pre tabuľku `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pre tabuľku `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT pre tabuľku `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
