-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 06 feb 2020 om 22:42
-- Serverversie: 10.1.35-MariaDB
-- PHP-versie: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app1`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `infixname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `customer`
--

INSERT INTO `customer` (`id`, `firstname`, `infixname`, `lastname`, `email`, `password`) VALUES
(1, 'test', '', 'test', 'test1@gmail.com', 'test1');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `eten`
--

CREATE TABLE `eten` (
  `id` int(11) DEFAULT NULL,
  `gerecht` varchar(100) NOT NULL,
  `Vetpercentage` varchar(100) NOT NULL,
  `Koolhydraten` varchar(100) NOT NULL,
  `Suiker` varchar(100) NOT NULL,
  `calorieen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `eten`
--

INSERT INTO `eten` (`id`, `gerecht`, `Vetpercentage`, `Koolhydraten`, `Suiker`, `calorieen`) VALUES
(NULL, 'kip', '15', '200', '', ''),
(NULL, 'kip', '15', '200', '', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `stats`
--

CREATE TABLE `stats` (
  `id` int(11) NOT NULL,
  `machine` varchar(32) NOT NULL,
  `reps` varchar(32) NOT NULL,
  `tijd` varchar(32) NOT NULL,
  `niveau` varchar(32) NOT NULL,
  `gewicht` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `stats`
--

INSERT INTO `stats` (`id`, `machine`, `reps`, `tijd`, `niveau`, `gewicht`) VALUES
(1, '', '', '', '', ''),
(2, 'leg press', '12', '2', '0', '90');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `stats`
--
ALTER TABLE `stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
