-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 03 mei 2017 om 14:08
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
(1, 'brood', '2'),
(2, 'wurst', '5'),
(3, 'schoenen', '60'),
(4, 'Smartphone', '350');

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
(1, 'pieter@slangen.be', 'pieter', 'slangen', '$2y$12$xYpEZ/NaLRHf58ntmd6AlerE81EanWDABsX4KV9KitXg9S0LM06VO', '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `Aanbieding`
--
ALTER TABLE `Aanbieding`
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
