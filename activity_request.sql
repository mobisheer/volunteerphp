-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2013 at 05:04 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `volunteer_connect`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_request`
--

CREATE TABLE IF NOT EXISTS `activity_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `a_id` int(11) NOT NULL,
  `v_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `a_id` (`a_id`),
  KEY `v_id` (`v_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `activity_request`
--

INSERT INTO `activity_request` (`id`, `a_id`, `v_id`, `status`) VALUES
(2, 19, 10, 0),
(6, 20, 10, 0),
(7, 20, 10, 0),
(8, 21, 10, 0),
(9, 22, 10, 0),
(10, 12, 10, 0),
(11, 23, 10, 0),
(18, 24, 10, 0),
(19, 25, 10, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_request`
--
ALTER TABLE `activity_request`
  ADD CONSTRAINT `activity_request_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `ngoactivity` (`id`),
  ADD CONSTRAINT `activity_request_ibfk_2` FOREIGN KEY (`v_id`) REFERENCES `volunteer` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
ALTER TABLE `activity_request`
DROP FOREIGN KEY `activity_request_ibfk_1`

ALTER TABLE ngoactivity
ADD 
FOREIGN KEY (ngo_id)
REFERENCES ngo (id)