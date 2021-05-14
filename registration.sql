-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 23, 2021 at 05:19 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `add-image`
--

DROP TABLE IF EXISTS `add-image`;
CREATE TABLE IF NOT EXISTS `add-image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add-image`
--

INSERT INTO `add-image` (`id`, `image`) VALUES
(1, 'kanoria.jpg'),
(2, 'kanoria.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(101, 'Sumitra Thawani', 'sumitrathawani3@gmail.com', 'Sumitra');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

DROP TABLE IF EXISTS `student_registration`;
CREATE TABLE IF NOT EXISTS `student_registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `collegename` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmpassword` varchar(255) NOT NULL,
  `contactnumber` varchar(255) NOT NULL,
  `eventname` varchar(255) NOT NULL,
  `upload_id` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`id`, `firstname`, `lastname`, `collegename`, `course`, `year`, `email`, `password`, `confirmpassword`, `contactnumber`, `eventname`, `upload_id`, `status`) VALUES
(1, 'Anjali', 'sharma', 'kanoria college', 'Bca', '3rd year', 'kalpana@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', '9988776655', 'design-Mania,Debate(hindi),Quiz,', 'kanoria.jpg', 0),
(2, 'kalpana', 'verma', 'kanoria college', 'Bca', '3rd semester', 'anjali@gmail.com', '12ed51686a83dff335014f5960cf94a4', '12ed51686a83dff335014f5960cf94a4', '9988776655', 'Code-War,Singing,Fantoosh-The mimicry contest,', 'kanoria.jpg', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
