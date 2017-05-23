-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 23 mei 2017 om 16:47
-- Serverversie: 10.1.21-MariaDB
-- PHP-versie: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectkv`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Aanbieding`
--

CREATE TABLE `Aanbieding` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `Aanbieding`
--

INSERT INTO `Aanbieding` (`id`, `name`, `price`) VALUES
(5, 'Wit brood', '2'),
(6, 'Reparatie Iphone', '170'),
(7, 'Nike Schoenen', '89'),
(8, 'Boerenworst', '12');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Shop`
--

CREATE TABLE `Shop` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `Shop`
--

INSERT INTO `Shop` (`id`, `name`, `price`) VALUES
(4, 'pintje', 10),
(5, 'Hamburger', 150),
(6, '-10% shop', 250),
(7, '6 Pintjes', 400),
(8, 'Sjaal', 520),
(9, '-50% shop', 950),
(11, 'Ticket voor een persoon', 1800),
(13, 'Truitje ', 1500),
(14, 'Meet and greet', 3000);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `avatar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `Users`
--

INSERT INTO `Users` (`id`, `email`, `firstname`, `lastname`, `password`, `avatar`) VALUES
(1, 'pieter@slangen.be', 'pieter', 'slangen', '$2y$12$xYpEZ/NaLRHf58ntmd6AlerE81EanWDABsX4KV9KitXg9S0LM06VO', ''),
(2, 'Pieterslangen@live.nl', 'pieter', 'slangen', '$2y$12$Gz67PS/ugHY6dfJmd7aWWO.o0NpnVTm1J0WP.cxOB1PYIr9n2R/Vq', ''),
(3, 'Pieterslangen@live.be', 'pieter', 'slangen', '$2y$12$d4MToS1.lkVmoHoGNqol6.rgA2Dv0x7BQm3xtJTbARde4rXlREnxe', '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `Aanbieding`
--
ALTER TABLE `Aanbieding`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `Shop`
--
ALTER TABLE `Shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `Aanbieding`
--
ALTER TABLE `Aanbieding`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT voor een tabel `Shop`
--
ALTER TABLE `Shop`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT voor een tabel `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
