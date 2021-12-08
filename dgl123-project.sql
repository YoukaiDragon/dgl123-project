-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 10:26 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dgl123-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_data`
--

CREATE TABLE `contact_data` (
  `id` int(11) NOT NULL,
  `customerName` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `messageDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `activity` varchar(255) COLLATE utf8_bin NOT NULL,
  `paid` tinyint(1) NOT NULL DEFAULT '0',
  `comment` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `contact_data`
--

INSERT INTO `contact_data` (`id`, `customerName`, `email`, `messageDate`, `activity`, `paid`, `comment`, `visible`) VALUES
(8, 'John Doe', 'jdoe@example.com', '2021-12-08 13:14:41', 'Draft', 0, 'This is a test message', 1),
(9, 'Bob', 'bob@example.com', '2021-12-08 13:21:04', 'D&D', 1, 'This is a test message', 0),
(10, 'Rob Johnson', 'rj@testing.com', '2021-12-08 13:23:10', 'Commander', 0, 'This is also a test message                             ', 1),
(11, 'Tyson', 'moretesting@example.com', '2021-12-08 13:23:37', 'Commander', 1, 'No Pizza', 1),
(12, 'Tyson', 'moretesting@example.com', '2021-12-08 13:24:46', 'Draft', 0, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu_frappe`
--

CREATE TABLE `menu_frappe` (
  `id` int(11) NOT NULL,
  `drink` varchar(30) COLLATE utf8_bin NOT NULL,
  `priceSmall` varchar(7) COLLATE utf8_bin NOT NULL DEFAULT '',
  `priceMed` varchar(7) COLLATE utf8_bin NOT NULL DEFAULT '',
  `priceLarge` varchar(7) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `menu_frappe`
--

INSERT INTO `menu_frappe` (`id`, `drink`, `priceSmall`, `priceMed`, `priceLarge`) VALUES
(1, 'Tea Frappe', '3.01', '3.27', '3.52'),
(2, 'Chai Frappe', '4.20', '4.77', '5.26'),
(3, 'Matcha Frappe', '4.20', '4.77', '5.26'),
(4, 'Milkshake', '4.77', '5.25', '5.78'),
(5, 'Smoothie', '4.77', '5.25', '5.78'),
(6, 'Add Yogurt', '', '0.80', ''),
(7, 'Matcha or Protein', '', '1.05', '');

-- --------------------------------------------------------

--
-- Table structure for table `menu_frappe_coffee`
--

CREATE TABLE `menu_frappe_coffee` (
  `id` int(11) NOT NULL,
  `drink` varchar(30) COLLATE utf8_bin NOT NULL,
  `priceSmall` varchar(7) COLLATE utf8_bin NOT NULL DEFAULT '',
  `priceMed` varchar(7) COLLATE utf8_bin NOT NULL DEFAULT '',
  `priceLarge` varchar(7) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `menu_frappe_coffee`
--

INSERT INTO `menu_frappe_coffee` (`id`, `drink`, `priceSmall`, `priceMed`, `priceLarge`) VALUES
(1, 'Cappuccino Frappe', '3.76', '4.41', '4.77'),
(2, 'Sweet Capp Frappe', '4.20', '4.81', '5.17'),
(3, 'Caramel Frappe', '4.49', '4.95', '5.41'),
(4, 'Mocha Frappe', '4.49', '4.95', '5.41'),
(5, 'Flavoured Mocha Frappe', '5.17', '5.41', '6.02');

-- --------------------------------------------------------

--
-- Table structure for table `menu_hotdrinks`
--

CREATE TABLE `menu_hotdrinks` (
  `id` int(11) NOT NULL,
  `drink` varchar(30) COLLATE utf8_bin NOT NULL,
  `priceSmall` char(4) COLLATE utf8_bin NOT NULL DEFAULT '',
  `priceMed` char(4) COLLATE utf8_bin NOT NULL DEFAULT '',
  `priceLarge` char(4) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `menu_hotdrinks`
--

INSERT INTO `menu_hotdrinks` (`id`, `drink`, `priceSmall`, `priceMed`, `priceLarge`) VALUES
(1, 'Tea', '2.50', '2.50', '2.50'),
(2, 'Matcha Tea', '3.55', '4.01', '4.49'),
(3, 'Chai Tea Latte', '3.79', '4.29', '4.71'),
(4, 'London Fog', '3.55', '4.01', '4.49'),
(5, 'Hot Chocolate', '3.22', '3.89', '4.38'),
(6, 'Steamer', '3.02', '3.49', '3.83'),
(7, 'Flavored Steamer', '3.81', '4.29', '4.59');

-- --------------------------------------------------------

--
-- Table structure for table `menu_hotdrinks_coffee`
--

CREATE TABLE `menu_hotdrinks_coffee` (
  `id` int(11) NOT NULL,
  `drink` varchar(30) COLLATE utf8_bin NOT NULL,
  `priceSmall` char(4) COLLATE utf8_bin NOT NULL DEFAULT '',
  `priceMed` char(4) COLLATE utf8_bin NOT NULL DEFAULT '',
  `priceLarge` char(4) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `menu_hotdrinks_coffee`
--

INSERT INTO `menu_hotdrinks_coffee` (`id`, `drink`, `priceSmall`, `priceMed`, `priceLarge`) VALUES
(1, 'Brewed Coffee', '2.13', '2.37', '2.73'),
(2, 'Latte', '3.81', '4.35', '4.61'),
(3, 'Cappuccino', '3.92', '4.49', '4.97'),
(4, 'Caramel Macchiato', '4.49', '5.09', '5.61'),
(5, 'Mocha', '4.69', '5.20', '5.70'),
(6, 'Flavored Mocha', '5.20', '5.70', '6.04'),
(7, 'Americano', '2.79', '3.40', '4.01'),
(8, 'Espresso', '2.52', '3.36', '4.20');

-- --------------------------------------------------------

--
-- Table structure for table `menu_overice`
--

CREATE TABLE `menu_overice` (
  `id` int(11) NOT NULL,
  `drink` varchar(30) COLLATE utf8_bin NOT NULL,
  `priceSmall` varchar(4) COLLATE utf8_bin NOT NULL DEFAULT '',
  `priceMed` varchar(4) COLLATE utf8_bin NOT NULL DEFAULT '',
  `priceLarge` varchar(4) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `menu_overice`
--

INSERT INTO `menu_overice` (`id`, `drink`, `priceSmall`, `priceMed`, `priceLarge`) VALUES
(1, 'Iced Chai', '4.01', '4.41', '4.81'),
(2, 'Iced Matcha', '4.66', '4.95', '5.41'),
(3, 'Iced Tea (In-House)', '2.50', '2.50', '2.50'),
(4, 'Iced Tea Mix - Flavours', '2.09', '2.42', '2.60'),
(5, 'Italian Soda', '2.36', '2.99', '3.40'),
(6, 'Italian Cream Soda', '2.66', '3.21', '3.81');

-- --------------------------------------------------------

--
-- Table structure for table `menu_overice_coffee`
--

CREATE TABLE `menu_overice_coffee` (
  `id` int(11) NOT NULL,
  `drink` varchar(30) COLLATE utf8_bin NOT NULL,
  `priceSmall` varchar(4) COLLATE utf8_bin NOT NULL DEFAULT '',
  `priceMed` varchar(4) COLLATE utf8_bin NOT NULL DEFAULT '',
  `priceLarge` varchar(4) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `menu_overice_coffee`
--

INSERT INTO `menu_overice_coffee` (`id`, `drink`, `priceSmall`, `priceMed`, `priceLarge`) VALUES
(1, 'Iced Coffee', '2.05', '2.38', '2.66'),
(2, 'Iced Americano', '2.14', '2.79', '3.41'),
(3, 'Sweet Iced Cappuccino', '4.20', '4.81', '5.17'),
(4, 'Iced Cappuccino', '3.76', '4.41', '4.77'),
(5, 'Iced Mocha', '4.16', '4.69', '5.20'),
(6, 'Iced Flavored Mocha', '4.69', '5.17', '5.70');

-- --------------------------------------------------------

--
-- Table structure for table `store_accessories`
--

CREATE TABLE `store_accessories` (
  `id` int(11) NOT NULL,
  `link` varchar(255) COLLATE utf8_bin NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `store_accessories`
--

INSERT INTO `store_accessories` (`id`, `link`, `name`, `price`) VALUES
(1, 'images/TombOfAnnil-TrapsSet.jpg', 'Icons of the Realms Tomb of Annihiliation: Tombs and Traps Premium Set', '50.00'),
(2, 'images/poly-dice.jpg', 'Polyhedral Dice Set', '8.99'),
(3, 'images/bugbear_miniatures.jpg', 'D&D miniatures', '4.99'),
(4, 'images/DrgShldW.JPG', 'Dragon Shield Sleeves: White Matte', '11.99'),
(5, 'images/DrgShldR.JPG', 'Dragon Shield Sleeves: Red Matte', '11.99'),
(6, 'images/DrgShldG.JPG', 'Dragon Shield Sleeves: Green Matte', '11.99'),
(7, 'images/DrgShldSB.JPG', 'Dragon Shield Sleeves: Sky Blue Matte', '11.99');

-- --------------------------------------------------------

--
-- Table structure for table `store_boardgames`
--

CREATE TABLE `store_boardgames` (
  `id` int(11) NOT NULL,
  `link` varchar(255) COLLATE utf8_bin NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `store_boardgames`
--

INSERT INTO `store_boardgames` (`id`, `link`, `name`, `price`) VALUES
(1, 'images/Waterdeep.JPG', 'Lords of Waterdeep', '50.99'),
(2, 'images/Catan.JPG', 'Setters of Catan', '47.99'),
(3, 'images/Takenoko.JPG', 'Takenoko', '51.99'),
(4, 'images/BetrayalAtHouse.JPG', 'Betrayal at House on the Hill', '54.99'),
(5, 'images/Betrayal-WidowsWalk.JPG', 'Betrayal at House on the Hill: Widow\'s Walk Expansion', '44.99'),
(6, 'images/TerraformMars.JPG', 'Terraforming Mars', '59.99'),
(7, 'images/Citadels.JPG', 'Citadels', '19.99'),
(8, 'images/ElderSign.JPG', 'Elder Sign', '37.99'),
(9, 'images/SmashUp.JPG', 'Smash Up', '30.99'),
(10, 'images/Smash-Awesome.JPG', 'Smash Up: Awesome Level 9000', '21.89'),
(11, 'images/Smash-YourFault.JPG', 'Smash Up: It\'s Your Fault!', '24.99');

-- --------------------------------------------------------

--
-- Table structure for table `store_cards`
--

CREATE TABLE `store_cards` (
  `id` int(11) NOT NULL,
  `link` varchar(255) COLLATE utf8_bin NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `store_cards`
--

INSERT INTO `store_cards` (`id`, `link`, `name`, `price`) VALUES
(1, 'images/Commander2019.png', 'Commander 2019 Decks', '69.99'),
(2, 'images/IkoriaCommander.jpg', 'Ikoria Commander Decks', '64.99'),
(3, 'images/MTGChallenger.jpg', 'Challenger Decks', '34.99'),
(4, 'images/ForgottenRealmsBundle.png', 'Forgotten Realms Bundle', '44.99');

-- --------------------------------------------------------

--
-- Table structure for table `store_featured`
--

CREATE TABLE `store_featured` (
  `id` int(11) NOT NULL,
  `link` varchar(255) COLLATE utf8_bin NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `store_featured`
--

INSERT INTO `store_featured` (`id`, `link`, `name`, `price`) VALUES
(1, 'images/Waterdeep.JPG', 'Lords of Waterdeep', '51.99'),
(2, 'images/BetrayalAtHouse.JPG', 'Betrayal at House on the Hill', '54.99'),
(3, 'images/ForgottenRealmsBundle.png', 'Forgotten Realms Bundle', '44.99'),
(4, 'images/TombOfAnnil-TrapsSet.jpg', 'Icons of the Realms Tomb of Annihliation: Tombs and Traps Premium Set', '50.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_data`
--
ALTER TABLE `contact_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_frappe`
--
ALTER TABLE `menu_frappe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_frappe_coffee`
--
ALTER TABLE `menu_frappe_coffee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_hotdrinks`
--
ALTER TABLE `menu_hotdrinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_hotdrinks_coffee`
--
ALTER TABLE `menu_hotdrinks_coffee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_overice`
--
ALTER TABLE `menu_overice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_overice_coffee`
--
ALTER TABLE `menu_overice_coffee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_accessories`
--
ALTER TABLE `store_accessories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_boardgames`
--
ALTER TABLE `store_boardgames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_cards`
--
ALTER TABLE `store_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_featured`
--
ALTER TABLE `store_featured`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_data`
--
ALTER TABLE `contact_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `menu_frappe`
--
ALTER TABLE `menu_frappe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `menu_frappe_coffee`
--
ALTER TABLE `menu_frappe_coffee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `menu_hotdrinks`
--
ALTER TABLE `menu_hotdrinks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `menu_hotdrinks_coffee`
--
ALTER TABLE `menu_hotdrinks_coffee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `menu_overice`
--
ALTER TABLE `menu_overice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `menu_overice_coffee`
--
ALTER TABLE `menu_overice_coffee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `store_accessories`
--
ALTER TABLE `store_accessories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `store_boardgames`
--
ALTER TABLE `store_boardgames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `store_cards`
--
ALTER TABLE `store_cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `store_featured`
--
ALTER TABLE `store_featured`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
