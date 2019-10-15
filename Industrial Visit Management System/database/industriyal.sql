-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2018 at 01:52 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `industriyal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `co`
--

CREATE TABLE IF NOT EXISTS `co` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `co`
--

INSERT INTO `co` (`id`, `username`, `password`) VALUES
(1, 'coodinator', 'coodinator');

-- --------------------------------------------------------

--
-- Table structure for table `cooo`
--

CREATE TABLE IF NOT EXISTS `cooo` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `com` varchar(50) NOT NULL,
  `trav` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `end` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `cooo`
--

INSERT INTO `cooo` (`id`, `com`, `trav`, `date`, `end`, `mail`) VALUES
(1, 'webro', 'bus', '05-01-18', '10-01-18', '90000'),
(2, 'orange', 'train', '30-12-17', '10-01-18', '565665'),
(3, 'colors', 'bus', '30-12-17', '10-01-18', '6565566'),
(4, 'orange', 'train', '05-01-18', '10-01-18', '350000'),
(5, 'webro', 'bus', '10-12-2018', '12-12-2018', '185000'),
(6, 'ece', '20', '05-01-18', '01-12-18', '235000'),
(7, 'ece', '55', '30-12-17', '01-12-18', '90000'),
(8, '==select Branch==', '20', '05-01-18', '01-12-18', '5600000'),
(9, 'ece', '20', '05-01-18', '10-01-18', '90000'),
(10, 'ece', '20', '05-01-18', '01-12-18', '90000');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE IF NOT EXISTS `hod` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `hod` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`id`, `hod`) VALUES
(1, 'APPROVAL'),
(2, 'WAITING'),
(3, 'APPROVAL'),
(4, 'APPROVAL'),
(5, 'WAITING'),
(6, 'APPROVAL'),
(7, 'APPROVAL'),
(8, 'WAITING'),
(9, 'APPROVAL'),
(10, 'APPROVAL');

-- --------------------------------------------------------

--
-- Table structure for table `hod1`
--

CREATE TABLE IF NOT EXISTS `hod1` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hod1`
--

INSERT INTO `hod1` (`id`, `username`, `password`) VALUES
(1, 'hod', 'hod');

-- --------------------------------------------------------

--
-- Table structure for table `mesg`
--

CREATE TABLE IF NOT EXISTS `mesg` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `usrname` varchar(50) NOT NULL,
  `comment` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pri`
--

CREATE TABLE IF NOT EXISTS `pri` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pri`
--

INSERT INTO `pri` (`id`, `username`, `password`) VALUES
(1, 'principal', 'principal');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `college` varchar(50) NOT NULL,
  `staff` varchar(50) NOT NULL,
  `web` varchar(50) NOT NULL,
  `web1` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `college`, `staff`, `web`, `web1`) VALUES
(1, 'cit college of techonogy', 'guru', 'h.jpg', 0),
(2, 'pavai college', 'manikegali', 'h.jpg', 0),
(3, 'king college of techonogy', 'karthi', 'h.jpg', 0),
(4, 'pavai college', 'guru', 'h.jpg', 0),
(5, 'selvam college', 'vani', 'h.jpg', 0),
(6, 'tes', 'chennai', 'www.tcs.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `tran`
--

CREATE TABLE IF NOT EXISTS `tran` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tran`
--

INSERT INTO `tran` (`id`, `username`, `password`) VALUES
(1, 'transport', 'transport');

-- --------------------------------------------------------

--
-- Table structure for table `trp`
--

CREATE TABLE IF NOT EXISTS `trp` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `type1` varchar(50) NOT NULL,
  `staff` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `trp`
--

INSERT INTO `trp` (`id`, `type`, `type1`, `staff`) VALUES
(1, 'train', 'semisleeper', '8956238945');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `name`) VALUES
(1, 'students list.xlsx'),
(2, 'appruval letter.doc'),
(3, 'permit letter.pdf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
