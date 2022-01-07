-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 01:35 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new`
--

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `userid` varchar(110) NOT NULL,
  `perpose` varchar(100) NOT NULL,
  `amount` int(10) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`userid`, `perpose`, `amount`, `date`) VALUES
('Devesh', 'coffe', 50, 2022),
('Devesh', 'coffe', 0, 2022),
('Devesh', 'coffe', 500, 2022),
('Devesh', 'coffe', 500, 2022),
('Devesh', 'coffe', 50, 2022),
('Devesh', 'coffe', 200, 2022),
('Devesh', 'coffe', 100, 2022),
('Devesh', 'coffe', 100, 2022),
('Devesh', 'coffe', 100, 2022),
('Devesh', 'coffe', 100, 2022);

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `userid` varchar(110) NOT NULL,
  `perposeofincome` varchar(110) NOT NULL,
  `incomeamount` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`userid`, `perposeofincome`, `incomeamount`, `date`) VALUES
('Devesh', 'bank', 0, '2022-01-04'),
('Devesh', 'bank', 0, '2022-01-04'),
('Devesh', 'bank', 0, '2022-01-04'),
('Devesh', 'bank', 1200, '2022-01-04'),
('Devesh', 'bank', 300, '2022-01-04'),
('Devesh', 'bank', 500, '2022-01-04'),
('Devesh', 'bank', 50, '2022-01-04'),
('Devesh', 'salary', 50, '2022-01-04');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `userid` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`userid`, `email`, `password`) VALUES
('1', 'd@gmail.com', 'Hur1234'),
('2', 'd@gmail.com', 'Hur1234'),
('Devesh', 'd@gmail.com', 'Hur1234'),
('a', 'b', '123'),
('a', 'b', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
