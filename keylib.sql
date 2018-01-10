-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2018 at 02:54 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keylib`
--

-- --------------------------------------------------------

--
-- Table structure for table `steam`
--

CREATE TABLE `steam` (
  `SteamID` int(11) NOT NULL,
  `SteamName` text NOT NULL,
  `SteamText` text NOT NULL,
  `SteamPicture` text NOT NULL,
  `SteamCustom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `steam`
--

INSERT INTO `steam` (`SteamID`, `SteamName`, `SteamText`, `SteamPicture`, `SteamCustom`) VALUES
(8980, 'Borderlands', 'test', 'games/img/8980.jpg', 'test'),
(20920, 'The Witcher 2: Assassins of Kings Enhanced Edition', 'Enjoy a captivating story, dynamic combat system and beautiful graphics in the second installment in the RPG saga about the Witcher, Geralt of Rivia.', 'games/img/20920.jpg', ''),
(225260, 'BrÃ¼tal Legend', '', 'games/img/225260.jpg', ''),
(292030, 'The Witcher 3: Wild Hunt', 'The Witcher is a story-driven, next-generation open world role-playing game, set in a visually stunning fantasy universe, full of meaningful choices and impactful consequences. In The Witcher, you play as Geralt of Rivia, a monster hunter tasked with finding a child from an ancient prophecy.', 'games/img/292030.jpg', ''),
(377160, 'Fallout 4', 'Bethesda Game Studios, the award-winning creators of Fallout 3 and The Elder Scrolls V: Skyrim, welcome you to the world of Fallout 4 â€“ their most ambitious game ever, and the next generation of open-world gaming.', 'games/img/377160.jpg', ''),
(391540, 'Undertale', 'UNDERTALE! The RPG game where you don\'t have to destroy anyone.', 'games/img/391540.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `steam`
--
ALTER TABLE `steam`
  ADD PRIMARY KEY (`SteamID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
