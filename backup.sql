-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 27, 2023 at 09:36 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `id_type`, `title`, `description`, `price`) VALUES
(1, 1, 'Salade de Chèvre & Lard Paysan ', '6.50€', '8€'),
(3, 2, 'Bavette ', '6.50€', '25€'),
(5, 1, 'Moules Gratinées ', '6.50€', '6€'),
(6, 1, 'Terrine Maison, Cornichons ', '96.50€', '8€'),
(7, 2, 'Rouille de Seiches à la Sétoise', '6.50€', '15€'),
(8, 3, 'Café Gourmand ', '6.50€', '6.50€');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `id` int(11) NOT NULL,
  `guest` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`id`, `guest`) VALUES
(1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `starter` varchar(100) NOT NULL,
  `main` varchar(100) NOT NULL,
  `dessert` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `type`, `starter`, `main`, `dessert`, `price`) VALUES
(1, 'Dejeuner', 'Moules Gratinées ', 'Bavette \"Simmental\" ', 'Dessert du Jour Maison ', '30€'),
(2, 'Diner', 'Salade de fèves et Bellota', 'Moules Gratinées ', 'Dessert du Jour Maison ', '25 €');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `name`, `file`) VALUES
(1, 'Bavette à l\'échalote', 'foto/viande.jpg'),
(2, 'Bavette à l\'échalote', 'foto/viande.jpg'),
(4, 'Viande', 'foto/viande.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `covers` int(11) NOT NULL,
  `allergy` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `tel`, `username`, `firstname`, `covers`, `allergy`, `date`, `time`) VALUES
(1, '0631654310', 'lea', 'ayora', 3, 'SFDGF', '2023-02-25', '12:00:00'),
(2, '0631654310', 'lea', 'Ayora', 3, 'poisson', '2023-02-11', '12:15:00'),
(3, '0631654310', 'lea', 'Ayora', 3, 'poisson', '2023-02-11', '12:15:00'),
(4, '0631654310', 'lea', 'Ayora', 11, 'poisson', '2023-02-17', '12:15:00'),
(5, '0631654310', 'lea', 'Ayora', 11, 'poisson', '2023-02-18', '12:00:00'),
(6, '0631654310', 'lea', 'Ayora', 3, 'poisson', '2023-04-05', '12:00:00'),
(7, '0631654310', 'lea', 'Ayora', 3, 'poisson', '2023-04-05', '12:00:00'),
(8, '0631654310', 'lea', 'Ayora', 3, 'poisson', '2023-04-05', '12:00:00'),
(9, '0631654310', 'léa', 'Ayora', 3, 'poisson', '2023-04-19', '12:45:00'),
(10, '0631654310', 'lea', 'Ayora', 12, 'poisson', '2023-02-22', '12:00:00'),
(11, '0631654310', 'lea', 'Ayora', 3, 'poisson', '2023-02-21', '14:00:00'),
(12, '0631654310', 'lea', 'Ayora', 3, 'poisson', '2023-02-21', '14:00:00'),
(13, '0631654310', 'lea', 'Ayora', 3, 'poisson', '2023-03-30', '12:00:00'),
(14, '0631654310', 'lea', 'Ayora', 3, 'poisson', '2023-04-24', '13:15:00'),
(15, '0631654310', 'lea', 'Ayora', 3, 'poisson', '2023-04-10', '12:00:00'),
(16, '0631654310', 'lea', 'Ayora', 3, 'poisson', '2023-04-10', '12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `day` varchar(100) NOT NULL,
  `opening_m` varchar(100) NOT NULL,
  `closure_m` varchar(100) NOT NULL,
  `opening_s` varchar(100) NOT NULL,
  `closure_s` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `day`, `opening_m`, `closure_m`, `opening_s`, `closure_s`) VALUES
(1, 'Lundi', '11:30', '13:00', '19:00', '13:00'),
(2, 'Mardi', 'fermé', '13:00', '19:00', '13:00'),
(3, 'Mercredi', '12:00', '14:00', '19:00', '23:00'),
(4, 'jeudi', 'fermé', '13:00', '19:00', '13:00'),
(5, 'vendredi', '12:00', '13:30', '20:00', '22:45'),
(6, 'Samedi', '12:00', '14:00', '19:00', '23:00'),
(7, 'Dimanche', '12:00', '14:00', '19:00', '23:00');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(10) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `type`) VALUES
(1, 'entree'),
(2, 'plat'),
(3, 'dessert');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `covers` int(10) NOT NULL,
  `allergy` varchar(500) CHARACTER SET utf8 NOT NULL,
  `type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `email`, `covers`, `allergy`, `type`, `password`) VALUES
(5, 'léa', 'ayora', 'contactinstitutdoublehelice@gmail.com', 0, '', 'admin', '616c1af8cc7f4556975b7cbe50bce072e87a5e5c4c14b3ccb87575fc547b3167'),
(44, 'lea', 'ayora', 'arar@gmail.com', 0, '', 'user', '616c1af8cc7f4556975b7cbe50bce072e87a5e5c4c14b3ccb87575fc547b3167'),
(45, 'lou', 'ayora', 'lea.dh11100@gmail.com', 0, 'poisson', 'user', '616c1af8cc7f4556975b7cbe50bce072e87a5e5c4c14b3ccb87575fc547b3167'),
(47, 'lea', 'Ayora', 'lea.dh@gmail.com', 3, 'poisson', 'user', '616c1af8cc7f4556975b7cbe50bce072e87a5e5c4c14b3ccb87575fc547b3167');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type` (`id_type`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
