-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2015 at 11:25 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shootball`
--

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE  `players` (
  `team` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `marquee` int(11) NOT NULL, 
  `value` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`team`, `id`, `name`, `position`, `price`, `available`,`marquee`, `value`) VALUES
(0, 1, 'Saurez', 4, 100, 1, 0, 15),
(0, 2, 'Drogba', 4, 70, 1, 0, 15),
(0, 3, 'Cech', 1, 50, 1, 0, 10),
(0, 4, 'Lampard', 3, 60, 1, 0, 12),
(0, 5, 'Lionel Messi', 4, 150, 1, 0, 25),
(0, 6, 'john Terry', 2, 80, 1, 0, 20),
(0, 7, 'Xavi', 3, 80, 1, 0, 17);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE  `teams` (
  `team_id` int(11) NOT NULL AUTO_INCREMENT,
  `goalkeeper` int(11) NOT NULL,
  `defender` int(11) NOT NULL,
  `midfielder` int(11) NOT NULL,
  `striker` int(11) NOT NULL,
  `marquee` int(11) NOT NULL, 
  `budget` int(11) NOT NULL,
  `penalty` int(11) NOT NULL,
  `total_point` int(11) NOT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`team_id`, `goalkeeper`, `defender`, `midfielder`, `striker`, `marquee`, `budget`, `penalty`, `total_point`) VALUES
(1, 0, 0, 0, 0, 0, 500, 0, 0),
(2,  0, 0, 0, 0, 0, 500, 0, 0),
(3,  0, 0, 0, 0, 0, 500, 0, 0),
(4,  0, 0, 0, 0, 0, 500, 0, 0),
(5,  0, 0, 0, 0, 0, 500, 0, 0),
(6,  0, 0, 0, 0, 0, 500, 0, 0),
(7,  0, 0, 0, 0, 0, 500, 0, 0),
(8,  0, 0, 0, 0, 0, 500, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
