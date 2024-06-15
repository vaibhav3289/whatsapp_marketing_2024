-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 27, 2023 at 11:13 AM
-- Server version: 5.7.24
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greendvc_vaccine`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`) VALUES
(1, 'admin', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

DROP TABLE IF EXISTS `children`;
CREATE TABLE IF NOT EXISTS `children` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `h_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `b_place` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `f_occupation` varchar(255) NOT NULL,
  `c_number` varchar(255) NOT NULL,
  `gender` enum('M','F','O') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`id`, `h_id`, `d_id`, `c_name`, `f_name`, `dob`, `b_place`, `city`, `address`, `f_occupation`, `c_number`, `gender`) VALUES
(1, 1, 1, 'a', 'a', '2023-12-09', 'a', 'a', 'mehasana1', 's', '111', 'F'),
(2, 1, 1, 'z', 'z', '0000-00-00', 'zz', 'z', 'z', '1', '1', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(255) NOT NULL,
  `d_number` varchar(255) NOT NULL,
  `bod` date NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `d_name`, `d_number`, `bod`, `gender`, `email`, `address`, `qualification`) VALUES
(1, 'dharmishta', '7888888888', '2023-12-15', 'F', 'dharmishta@gmail.com', 'mehsana', 'mac'),
(2, 's', '01', '2023-12-08', 'M', 's', 'ss', 's');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

DROP TABLE IF EXISTS `hospital`;
CREATE TABLE IF NOT EXISTS `hospital` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `h_name` varchar(255) NOT NULL,
  `h_address` varchar(255) NOT NULL,
  `h_city` varchar(255) NOT NULL,
  `h_number` varchar(255) NOT NULL,
  `start_time` time NOT NULL,
  `stop_time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `h_name`, `h_address`, `h_city`, `h_number`, `start_time`, `stop_time`) VALUES
(1, 'eyes hospital', 'mehsana', 'mehsana', '1111111111', '10:00:00', '14:58:08');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `contact` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `juri` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `install_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `u_type` enum('S','M') NOT NULL,
  `status` enum('A','D') NOT NULL,
  `mid` varchar(255) NOT NULL,
  `mkey` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `cid_web` varchar(255) NOT NULL,
  `env` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `name`, `address`, `contact`, `branch`, `juri`, `logo`, `install_date`, `expiry_date`, `u_type`, `status`, `mid`, `mkey`, `website`, `type`, `cid_web`, `env`) VALUES
(1, 'VACCINE', 'BOMBEY,MARKET HIGH ROAD-THARAD.', '9913292193, 9714280390', 'THARAD', 'THARAD', 'logo.png', '0000-00-00', '2023-09-01', 'M', 'A', 'pgcGQH91459125796335', 'EU3kR!JB%8BqzwDR', 'DEFAULT', 'Retail', 'WEB', 'PROD');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

DROP TABLE IF EXISTS `vaccine`;
CREATE TABLE IF NOT EXISTS `vaccine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `g_id` int(11) NOT NULL,
  `ve_name` varchar(255) NOT NULL,
  `vg_name` varchar(255) NOT NULL,
  `Birth_depend` enum('Y','N') NOT NULL,
  `gender` enum('M','F','B') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`id`, `g_id`, `ve_name`, `vg_name`, `Birth_depend`, `gender`) VALUES
(1, 1, 'dsss', 'dsssss', 'Y', 'F'),
(4, 1, 'd', 'd', 'Y', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_group`
--

DROP TABLE IF EXISTS `vaccine_group`;
CREATE TABLE IF NOT EXISTS `vaccine_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `v_group` varchar(255) NOT NULL,
  `day` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaccine_group`
--

INSERT INTO `vaccine_group` (`id`, `v_group`, `day`) VALUES
(1, 'dddd', 121),
(2, 'f', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
