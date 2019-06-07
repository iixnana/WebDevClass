-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2018 at 06:33 AM
-- Server version: 5.7.24-log
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizzacau`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `size` int(1) NOT NULL,
  `options` text NOT NULL,
  `ingredients` text NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `title`, `image`, `price`) VALUES
(1, 'Cheese', 'img/cheese.png', '2'),
(2, 'Tomato', 'img/tomato.png', '2');

-- --------------------------------------------------------

--
-- Table structure for table `menupizza`
--

CREATE TABLE `menupizza` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` varchar(10) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menupizza`
--

INSERT INTO `menupizza` (`id`, `title`, `image`, `price`, `description`) VALUES
(0, 'Custom', 'img/custom.png', '5', 'Choose your own ingredients!'),
(1, 'Margharita', 'img/pizza.png', '20', 'Very tasty'),
(2, 'Hawaiian', 'img/pizza.png', '25', 'Not that tasty but expensive');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `title`, `image`, `price`) VALUES
(1, 'Cheese crust', 'img/pizza.png', 1),
(2, 'Hot sauce', 'img/pizza.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sidemenu`
--

CREATE TABLE `sidemenu` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` int(10) NOT NULL,
  `description` text NOT NULL,
  `size` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sidemenu`
--

INSERT INTO `sidemenu` (`id`, `title`, `image`, `price`, `description`, `size`) VALUES
(1, 'Coca-cola', 'img/cola.png', 3, '1L bottle', 3),
(2, 'Cider', 'img/cola.png', 3, '0.25L can', 1);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id` int(1) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `title`, `image`, `price`) VALUES
(1, 'Small', 'img/pizza.png', 4),
(2, 'Medium', 'img/pizza.png', 6),
(3, 'Large', 'img/pizza.png', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tempcart`
--

CREATE TABLE `tempcart` (
  `title` varchar(100) NOT NULL,
  `amount` int(1) NOT NULL DEFAULT '1',
  `price` int(10) NOT NULL,
  `category` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menupizza`
--
ALTER TABLE `menupizza`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sidemenu`
--
ALTER TABLE `sidemenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tempcart`
--
ALTER TABLE `tempcart`
  ADD PRIMARY KEY (`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menupizza`
--
ALTER TABLE `menupizza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sidemenu`
--
ALTER TABLE `sidemenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
