-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Aug 02, 2017 at 04:04 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `park`
--

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`id`, `name`, `description`, `image`) VALUES
(9, 'Lion', 'The lion (Panthera leo) is one of the big cats in the genus Panthera and a member of the family Felidae. The commonly used term African lion collectively denotes the several subspecies in Africa. ', 'uploads/72933106.jpg'),
(10, 'Elephant', 'Elephants are large mammals of the family Elephantidae and the order Proboscidea. ', 'uploads/52978814.jpg'),
(11, 'Dolphin', 'Dolphins are a widely distributed and diverse group of aquatic mammals. They are an informal grouping within the order Cetacea, excluding whales and ...', 'uploads/24766135.jpg'),
(12, 'Gorilla', 'Gorillas are ground-dwelling, predominantly herbivorous apes that inhabit the forests of central Africa.', 'uploads/58570845.jpg'),
(14, 'Owl', 'Owls are birds from the order Strigiformes, which includes about 200 species of mostly solitary and nocturnal birds of prey typified by an upright stance, a large, ...', 'uploads/41391886.jpg'),
(15, 'Blue Butterfly', 'Butterfly Conservation is a British charity devoted to saving butterflies, moths and their ..', 'uploads/96225614.jpg'),
(17, 'Turtle', 'Turtles are reptiles of the order Testudines (or Chelonii) characterised by a special bony or cartilaginous shell developed from their ribs and acting as a shield.', 'uploads/38165842.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `loginAttempts`
--

CREATE TABLE `loginAttempts` (
  `IP` varchar(20) NOT NULL,
  `Attempts` int(11) NOT NULL,
  `LastLogin` datetime NOT NULL,
  `Username` varchar(65) DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loginAttempts`
--

INSERT INTO `loginAttempts` (`IP`, `Attempts`, `LastLogin`, `Username`, `ID`) VALUES
('::1', 2, '2017-08-02 01:49:09', 'mamunswe', 12),
('::1', 2, '2017-08-02 00:50:12', 'mamunsweuy', 13),
('::1', 2, '2017-08-02 00:51:13', 'gj', 14),
('::1', 2, '2017-08-02 00:51:19', 'ghj', 15),
('::1', 2, '2017-08-02 00:53:01', 'r6', 16),
('::1', 2, '2017-08-02 00:53:39', 'fhy', 17),
('::1', 2, '2017-08-02 00:54:20', 'yui', 18),
('::1', 1, '2017-08-02 00:55:05', 'mamun', 19),
('::1', 2, '2017-08-02 00:55:15', 'vhj', 20),
('::1', 2, '2017-08-02 00:55:47', '678', 21),
('::1', 2, '2017-08-02 01:50:26', 'mamuns', 22),
('::1', 1, '2017-08-02 03:55:49', 'admin', 23);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` char(23) NOT NULL,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '1',
  `is_admin` tinyint(2) NOT NULL DEFAULT '0',
  `mod_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `email`, `verified`, `is_admin`, `mod_timestamp`) VALUES
('50649821759774c20e9439', 'admin', '$2y$10$.csIWSnrLO56xCnDFrGjBuJY72YkoNkPAq85pG5Kn57CGHPvRRXTu', 'safaripark.demo@gmail.com', 1, 1, '2017-07-26 01:56:42');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `setting_key` varchar(255) NOT NULL,
  `setting_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(10) NOT NULL,
  `ticket_name` varchar(30) NOT NULL,
  `adult_price` int(20) NOT NULL,
  `kids_price` int(20) NOT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `ticket_name`, `adult_price`, `kids_price`, `description`, `image`) VALUES
(1, 'Vip Ticket', 150, 50, 'Mauris dictum augue non sapien interdum cursus. Phasellus nisl eros, viverra nec blandit et, pellentesque ut augue. Vivamus eget justo libero.', 'uploads/ticket-79127004.jpg'),
(2, 'Dolphin show', 200, 75, 'The dolphin trainer and her dolphin are ready to impress the audience with a specular show. This is not a small aquarium, but a big show like you would see in ...', 'uploads/ticket-44776341.jpg'),
(3, 'The Magilla Gorilla Show ', 250, 100, 'Magilla Gorilla is a gorilla who spends his time languishing in the front display window of Melvin Peebles'' pet shop, eating bananas and being a drain .', 'uploads/ticket-37006905.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginAttempts`
--
ALTER TABLE `loginAttempts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `loginAttempts`
--
ALTER TABLE `loginAttempts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
