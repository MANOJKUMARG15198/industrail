-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2018 at 03:00 PM
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
  `a` varchar(50) NOT NULL,
  `b` varchar(50) NOT NULL,
  `c` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `co`
--

INSERT INTO `co` (`id`, `a`, `b`, `c`, `username`, `password`) VALUES
(1, '', '', '', 'rr', 'rr'),
(2, 'vignesh', 'mani@gmail.com', '9988555777', 'tt', 'tt');

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
  `hod` varchar(50) NOT NULL,
  `re` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cooo`
--

INSERT INTO `cooo` (`id`, `com`, `trav`, `date`, `end`, `mail`, `hod`, `re`) VALUES
(1, 'cse', '22', '30-12-17', '01-12-18', 'ram@gmail.com', '', ''),
(2, 'cse', '55', '05-01-18', '10-01-18', '90000', '', ''),
(3, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE IF NOT EXISTS `hod` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `hod` varchar(50) NOT NULL,
  `re` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`id`, `hod`, `re`) VALUES
(1, 'APPROVAL', 'ok');

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
(1, 'tt', 'tt');

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
(1, 'pp', 'pp');

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
-- Table structure for table `rr`
--

CREATE TABLE IF NOT EXISTS `rr` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `hod` varchar(50) NOT NULL,
  `re` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `rr`
--

INSERT INTO `rr` (`id`, `hod`, `re`) VALUES
(1, 'APPROVAL', 'jj');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `college`, `staff`, `web`, `web1`) VALUES
(1, 'boss', 'chennai', 'www.boss.com', 2147483647),
(2, 'boss', 'chennai', 'www.boss.com', 2147483647);

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
(1, 'tt', 'tt');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `trp`
--

INSERT INTO `trp` (`id`, `type`, `type1`, `staff`) VALUES
(1, 'train', 'sleeper', '8956238945'),
(2, 'bus', 'sleeper', '8956238945');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `name`) VALUES
(1, 'CertificateMagic_20_06_35.pdf'),
(2, 'appruval letter.doc'),
(3, 'permit letter.pdf'),
(4, 'students list.xlsx');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
