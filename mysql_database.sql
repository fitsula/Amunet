-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 01, 2016 at 01:11 AM
-- Server version: 5.5.47-0+deb8u1
-- PHP Version: 5.6.19-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `amunet`
--

-- --------------------------------------------------------

--
-- Table structure for table `ip`
--

CREATE TABLE IF NOT EXISTS `ip` (
`id` int(11) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `white` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ip`
--

INSERT INTO `ip` (`id`, `ip`, `name`, `white`) VALUES
(1, '127.0.0.1', 'localhost', 1),
(2, '192.168.1.1', 'localhost', 1),
(3, '37.73.152.138', 'lifecell', 0),
(4, '192.168.1.101', 'localhost server', 1),
(5, '::1', 'localhost', 1),
(6, '192.168.1.112', 'localhost mobile', 1),
(7, '192.168.1.110', 'localhost notebook', 1),
(8, '192.168.1.111', 'localhost notebook', 1);


-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
`id` int(11) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=208 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `ip`, `datetime`) VALUES
(1, '127.0.0.1', '2016-04-28 00:25:57'),
(2, '192.168.1.100', '2016-04-29 13:14:47'),
(3, '192.168.1.100', '2016-04-29 17:10:11'),
(4, '192.168.1.100', '2016-04-29 18:26:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ip`
--
ALTER TABLE `ip`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ip`
--
ALTER TABLE `ip`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
