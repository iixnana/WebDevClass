-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2018 at 07:33 AM
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
-- Database: `addressbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `contact_group` varchar(100) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `email`, `phone`, `contact_group`, `date_added`) VALUES
(1, 'Joey', 'Tribbiani', 'joeytribbiani@gmail.com', '+821044443333', 'business', '2017-09-09 05:14:14'),
(2, 'Rachel', 'Green', 'rachelgreen@gmail.com', '+821022224444', 'friends', '2017-09-10 05:15:20'),
(3, 'Phoebe', 'Buffay', 'phoebebuffay@gmail.com', '+37062014523', 'friends', '2018-10-09 05:14:14'),
(4, 'Monica', 'Geller', 'monicageller@yahoo.com', '+822098524444', 'friends', '2017-09-09 09:14:14'),
(5, 'Chandler', 'Bing', 'chandlerbing@hotmail.com', '+821077778888', 'friends', '2017-09-09 11:07:14'),
(6, 'Ross', 'Geller', 'rgeller@gmail.com', '+821099998888', 'family', '2017-09-08 22:07:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
