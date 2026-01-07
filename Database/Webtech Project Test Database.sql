-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2026 at 07:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech project test database`
--
CREATE DATABASE IF NOT EXISTS `webtech project test database` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `webtech project test database`;

-- --------------------------------------------------------

--
-- Table structure for table `clubapplyform`
--

CREATE TABLE `clubapplyform` (
  `name` varchar(50) NOT NULL,
  `studentid` varchar(8) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `passion` varchar(200) NOT NULL,
  `reason` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Database To Store Club Apply Form Information.';

--
-- Dumping data for table `clubapplyform`
--

INSERT INTO `clubapplyform` (`name`, `studentid`, `semester`, `passion`, `reason`) VALUES
('Rakibul Kabir Khan', '22468721', 'fall 24-25', 'Coding', 'I want to improve my coding skills.'),
('Md. Al Jabir ', '22468921', 'Summer 24-25', 'Photography', 'I want to improve my Photography skills.'),
('Md. Ariful Islam', '22473021', 'Summer 24-25', 'Photography', 'I want to explore Bangladesh and take pictures.'),
('Niloy Paul', '23517732', 'fall 24-25', 'Coding', 'Learn coding with a team.'),
('abc', '12345678', 'fall 24-25', 'abc', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `complaintandadvice`
--

CREATE TABLE `complaintandadvice` (
  `studentid` varchar(10) NOT NULL,
  `complaint` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaintandadvice`
--

INSERT INTO `complaintandadvice` (`studentid`, `complaint`) VALUES
('22468721', 'Please open more sections'),
('22468921', 'The canteen food prices are a bit steep. Please reduce the price.');

-- --------------------------------------------------------

--
-- Table structure for table `lost_items`
--

CREATE TABLE `lost_items` (
  `studentid` varchar(10) NOT NULL,
  `itemname` varchar(100) NOT NULL,
  `itemdescription` text NOT NULL,
  `datefound` date NOT NULL,
  `locationfound` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Table for Lost and Found Page';

--
-- Dumping data for table `lost_items`
--

INSERT INTO `lost_items` (`studentid`, `itemname`, `itemdescription`, `datefound`, `locationfound`) VALUES
('22468721', 'ID Card', 'A Student ID Card Belonging to MD. Ariful Islam.', '2025-12-17', 'Kuratoli,Kuril.'),
('22468921', 'Notebook', 'Found a notebook on room 3115.', '2025-11-12', 'Annex 3 Room 115.'),
('22468721', 'Mobile Phone', 'Someone left their smartphone charging in a wall socket.', '2026-01-04', 'Annex 9 Room 9402');

-- --------------------------------------------------------

--
-- Table structure for table `stapplyform`
--

CREATE TABLE `stapplyform` (
  `Name` varchar(50) NOT NULL,
  `Degree` varchar(50) NOT NULL,
  `CGPA` float NOT NULL,
  `Semester` varchar(100) NOT NULL,
  `Credits` int(11) NOT NULL,
  `Experience` varchar(10) NOT NULL,
  `Reference` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Student Tutor Apply Form Database';

--
-- Dumping data for table `stapplyform`
--

INSERT INTO `stapplyform` (`Name`, `Degree`, `CGPA`, `Semester`, `Credits`, `Experience`, `Reference`) VALUES
('abc', 'BSc in CSE', 3.6, 'fall 24-25', 91, 'yes', 'abc'),
('xyz', 'BSc in EEE', 3.7, 'Summer 24-25', 96, 'yes', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `studentid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Sign Up and Login Table';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`studentid`, `password`) VALUES
('22468721', 'rakibulkabir'),
('22468921', 'jabir123'),
('22473021', 'arif1234'),
('23517732', 'niloypaul');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;