-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 13. Jan 2017 um 16:02
-- Server-Version: 10.1.19-MariaDB
-- PHP-Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `keylib`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `steam`
--

CREATE TABLE `steam` (
  `SteamID` int(11) NOT NULL,
  `SteamName` text NOT NULL,
  `SteamPicture` text NOT NULL,
  `SteamText` text NOT NULL,
  `SteamCustom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `steam`
--

INSERT INTO `steam` (`SteamID`, `SteamName`, `SteamPicture`, `SteamText`, `SteamCustom`) VALUES
(570, 'Dota 2', 'games/img/570.jpg', '', ''),
(8980, 'Borderlands', 'games/img/8980.jpg', '', ''),
(377160, 'Fallout 4', 'games/img/377160.jpg', 'Bethesda Game Studios, the award-winning creators of Fallout 3 and The Elder Scrolls V: Skyrim, welcome you to the world of Fallout 4 â€“ their most ambitious game ever, and the next generation of open-world gaming.', '');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `steam`
--
ALTER TABLE `steam`
  ADD PRIMARY KEY (`SteamID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
