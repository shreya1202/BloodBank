-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2018 at 12:46 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BloodBank`
--

-- --------------------------------------------------------

--
-- Table structure for table `Donor`
--

CREATE TABLE `donor` (
  `Name` varchar(40) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Age` int(100) NOT NULL,
  `Address` text NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Mobile` int(11) NOT NULL,
  `BGroup` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Donor`
--

INSERT INTO `Donor` (`Name`, `Gender`, `Age`, `Address`, `Email`, `Mobile`, `BGroup`) VALUES
('Abhi', 'Male', 25, 'Delhi', 'abhi@yahoo.com', 789789789, 'a-'),
('Priya', 'Female', 30, 'Jammu', 'priya@gmail.com', 412412412, 'o+'),
('Joseph', 'Male', 35, 'Jharkhand', 'jj@rediff.com', 456123012, 'b-'),
('Shreya Seth', 'Female', 21, 'Lucknow', 'shreyaseth97@gmail.com', 752306925, 'o+');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
