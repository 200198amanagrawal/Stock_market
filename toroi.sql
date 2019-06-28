-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2018 at 11:50 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toroi`
--

-- --------------------------------------------------------

--
-- Table structure for table `db1`
--

CREATE TABLE `db1` (
  `id` int(11) NOT NULL,
  `symbol` varchar(20) NOT NULL,
  `close` varchar(20) NOT NULL,
  `volume` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db1`
--

INSERT INTO `db1` (`id`, `symbol`, `close`, `volume`) VALUES
(37, 'ETH', '19.1700', 0),
(36, 'INFY', '9.8950', 0),
(35, 'MSFT', '109.1850', 0),
(38, 'INFY', '9.8900', 0),
(39, 'ETH', '18.6700', 0);

-- --------------------------------------------------------

--
-- Table structure for table `db2`
--

CREATE TABLE `db2` (
  `id` int(11) NOT NULL,
  `Symbol` varchar(20) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` float NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db2`
--

INSERT INTO `db2` (`id`, `Symbol`, `Quantity`, `Price`, `Amount`) VALUES
(29, 'MSFT', 100, 104.82, 10482),
(35, 'INFY', 1000, 9.895, 9895),
(27, 'EURUSD', 20, 1, 23);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `Name`, `Email`, `Password`) VALUES
(1, 'aman', 'aman.agrawal2016@vitstudent.ac.in', '@Agrawal1998'),
(4, 'f', 'f@f.com', 'f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db1`
--
ALTER TABLE `db1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db2`
--
ALTER TABLE `db2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db1`
--
ALTER TABLE `db1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `db2`
--
ALTER TABLE `db2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
