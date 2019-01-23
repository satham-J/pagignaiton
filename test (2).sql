-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2019 at 01:07 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `sample_table`
--

CREATE TABLE `sample_table` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sample_table`
--

INSERT INTO `sample_table` (`id`, `name`, `status`, `created`) VALUES
(1, 'One', 0, '0000-00-00 00:00:00'),
(2, 'Two', 0, '0000-00-00 00:00:00'),
(3, 'Three', 0, '0000-00-00 00:00:00'),
(4, 'Four', 0, '0000-00-00 00:00:00'),
(5, 'Five', 0, '0000-00-00 00:00:00'),
(6, 'Six', 0, '0000-00-00 00:00:00'),
(7, 'Seven', 0, '0000-00-00 00:00:00'),
(8, 'Eight', 0, '0000-00-00 00:00:00'),
(9, 'Nine', 0, '0000-00-00 00:00:00'),
(10, 'Ten', 0, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sample_table`
--
ALTER TABLE `sample_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sample_table`
--
ALTER TABLE `sample_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
