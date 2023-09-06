-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 07:14 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booktown`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `firstName` varchar(120) DEFAULT NULL,
  `lastName` varchar(120) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `commentss` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`firstName`, `lastName`, `email`, `commentss`) VALUES
('', '', '', ''),
('Arbab', 'Memon', 'name@gamil.com', 'This book store is really helpful . ');

-- --------------------------------------------------------

--
-- Table structure for table `contributor`
--

CREATE TABLE `contributor` (
  `firstName` varchar(120) DEFAULT NULL,
  `lastName` varchar(120) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `book` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contributor`
--

INSERT INTO `contributor` (`firstName`, `lastName`, `email`, `book`) VALUES
('Arbab', 'Memon', 'arbab@gamil.com', 0x41737369676e6d656e74206f662057656220456e6769656572696e672e706466);

-- --------------------------------------------------------

--
-- Table structure for table `dbmsbooks`
--

CREATE TABLE `dbmsbooks` (
  `bookName` varchar(120) DEFAULT NULL,
  `bookId` int(11) DEFAULT NULL,
  `imageLink` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dbmsbooks`
--

INSERT INTO `dbmsbooks` (`bookName`, `bookId`, `imageLink`) VALUES
('Database Systems by Thomas Connoly', 1, 'https://m.media-amazon.com/images/P/B00XN6XBJ0.01._SCLZZZZZZZ_SX500_.jpg'),
('Database Systems', 2, 'https://m.media-amazon.com/images/I/31FuWJeLLiL._SY298_BO1,204,203,200_.jpg'),
('Foundation Of Databases', 3, 'https://m.media-amazon.com/images/I/51ip78jAl6L._SX318_BO1,204,203,200_.jpg'),
('Principles Of Database Systems', 4, 'https://m.media-amazon.com/images/I/518x1swZoyL._SX338_BO1,204,203,200_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dsabooks`
--

CREATE TABLE `dsabooks` (
  `bookName` varchar(120) DEFAULT NULL,
  `bookId` int(11) DEFAULT NULL,
  `imageLink` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dsabooks`
--

INSERT INTO `dsabooks` (`bookName`, `bookId`, `imageLink`) VALUES
('DSA With Java', 55, NULL),
('Data Structure & Algorithm in java', 47, 'https://images-na.ssl-images-amazon.com/images/I/51NoqhM4r9L._SX407_BO1,204,203,200_.jpg'),
('Advance Data Structures', 51, 'https://m.media-amazon.com/images/P/0521880378.01._SCLZZZZZZZ_SX500_.jpg'),
('Problem Solving', 52, 'https://m.media-amazon.com/images/I/51YORtBDG4L._SX405_BO1,204,203,200_.jpg'),
('Design And Data Structures', 53, 'https://m.media-amazon.com/images/I/51QZFIqYHAL._SX396_BO1,204,203,200_.jpg'),
('Clean Code', 54, 'https://learning.oreilly.com/library/cover/9780136083238/250w/'),
('Data Structure And Algorithm', 49, 'https://m.media-amazon.com/images/P/0201000237.01._SCLZZZZZZZ_SX500_.jpg'),
('Analysis In C++', 50, 'https://m.media-amazon.com/images/P/048648582X.01._SCLZZZZZZZ_SX500_.jpg'),
('Introduction To Algorithm', 48, 'https://m.media-amazon.com/images/P/0262033844.01._SCLZZZZZZZ_SX500_.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
