-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2026 at 12:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web technologies project test database`
--

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
('abc', '12345678', 'fall 24-25', 'abc', 'abc'),
('NILOY PAUL', '11111111', '5', 'H', 'H');

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
-- Table structure for table `course_book`
--

CREATE TABLE `course_book` (
  `coursename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_book`
--

INSERT INTO `course_book` (`coursename`) VALUES
('Data Science'),
('Human Computer Interaction'),
('Web Technology');

-- --------------------------------------------------------

--
-- Table structure for table `course_credit_information`
--

CREATE TABLE `course_credit_information` (
  `id` int(11) NOT NULL,
  `studentid` varchar(20) NOT NULL,
  `department` varchar(10) NOT NULL,
  `completed_credits` int(11) DEFAULT 0,
  `completed_courses` text DEFAULT NULL,
  `remaining_credits` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_credit_information`
--

INSERT INTO `course_credit_information` (`id`, `studentid`, `department`, `completed_credits`, `completed_courses`, `remaining_credits`) VALUES
(1, '22-46872-1', 'CSE', 9, 'CSC1205, CSC2108, CSC2211', 139);

-- --------------------------------------------------------

--
-- Table structure for table `course_info`
--

CREATE TABLE `course_info` (
  `id` int(11) NOT NULL,
  `studentid` varchar(50) NOT NULL,
  `department` varchar(10) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `credit` int(5) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_info`
--

INSERT INTO `course_info` (`id`, `studentid`, `department`, `course_code`, `course_name`, `credit`, `status`) VALUES
(1, '22-46872-1', 'CSE', 'CSC1102', 'Intro to Programming', 3, 'Remaining'),
(2, '22-46872-1', 'CSE', 'CSC1205', 'OOP 1', 3, 'Remaining'),
(3, '22-46872-1', 'CSE', 'CSC2108', 'Data Structures', 3, 'Remaining'),
(4, '22-46872-1', 'CSE', 'MAT1102', 'Calculus', 3, 'Remaining'),
(5, '22-46872-1', 'CSE', 'CSC3113', 'Web Technologies', 3, 'Completed'),
(6, '22-46872-1', 'CSE', 'ENG1101', 'English 1', 3, 'Remaining');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_information`
--

CREATE TABLE `faculty_information` (
  `facultyID` int(100) NOT NULL,
  `facultyname` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_information`
--

INSERT INTO `faculty_information` (`facultyID`, `facultyname`, `position`, `Email`, `Location`) VALUES
(1, 'MD. AL-AMIN', 'Assistant Professor, Faculty, DEPARTMENT OF COMPUTER SCIENCE', 'alamin@aiub.edu ', 'Building: D - Building Room No: DN109'),
(2, 'ABHIJIT BHOWMIK', 'Associate Professor, Faculty, DEPARTMENT OF COMPUTER SCIENCE', 'abhijit@aiub.edu', 'Building: D - Building Room No: DNGA11'),
(3, 'DR. MD. ABDULLAH - AL - JUBAIR', 'Associate Professor, DIRECTOR, DEPARTMENT OF COMPUTER SCIENCE', 'abdullah@aiub.edu ', 'Building: D - Building Room No: DNGA04');

-- --------------------------------------------------------

--
-- Table structure for table `game_slot`
--

CREATE TABLE `game_slot` (
  `slotID` int(100) NOT NULL,
  `gamename` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `studentid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game_slot`
--

INSERT INTO `game_slot` (`slotID`, `gamename`, `time`, `studentid`) VALUES
(1, 'Pool Board', '11:00-12:00', '22468721'),
(2, 'Table Tennis', '12:00-13:00', '22468721'),
(3, 'Chess', '13:00-14:00', '22468921'),
(4, 'Carrom Board', '14:00-15:00', '22473021'),
(5, 'PlayStation 5', '15:00-16:00', '23517732'),
(6, 'Table Tennis', '11:00-12:00', '11111111'),
(7, 'Carrom Board', '11:00-12:00', '22222222'),
(8, 'PlayStation 5', '13:00-14:00', '22222222'),
(9, 'Ludo', '11:00-12:00', '22222222'),
(10, 'Table Tennis', '14:00-15:00', '22222222'),
(11, 'Carrom Board', '12:00-13:00', '11111111');

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
-- Table structure for table `student_id_application`
--

CREATE TABLE `student_id_application` (
  `applicationID` int(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_id_application`
--

INSERT INTO `student_id_application` (`applicationID`, `department`, `time`) VALUES
(1, 'CSE', '2026-01-07'),
(2, 'CSE', '2026-01-15'),
(3, 'CSE', '2026-01-03'),
(4, 'CSE', '2026-01-15'),
(5, 'CSE', '2026-01-08'),
(6, 'EEE', '2026-01-15'),
(7, 'EEE', '2026-01-15'),
(8, 'EEE', '2026-01-15'),
(9, 'EEE', '2026-01-15'),
(10, 'CSE', '2026-01-31'),
(11, 'CSE', '2026-01-20'),
(12, 'CSE', '2026-01-22'),
(13, 'CSE', '2026-01-13'),
(14, 'CSE', '2026-01-13'),
(15, 'CSE', '2025-12-30'),
(16, 'CSE', '2025-12-30'),
(17, 'CSE', '2025-12-30'),
(18, 'CSE', '2025-12-30'),
(19, 'CSE', '2025-12-30'),
(20, 'CSE', '2026-01-08'),
(21, 'CSE', '2026-01-12'),
(22, 'CSE', '2026-01-12'),
(23, 'CSE', '2026-01-12'),
(24, 'CSE', '2026-01-12'),
(25, 'CSE', '2026-01-12'),
(26, 'CSE', '2026-01-12'),
(27, 'CSE', '2026-01-12'),
(28, 'EEE', '2026-01-07'),
(29, 'EEE', '2026-01-07'),
(30, 'EEE', '2026-01-06'),
(31, 'EEE', '2026-01-06'),
(32, 'EEE', '2026-01-06'),
(33, 'CSE', '2026-01-21'),
(34, 'CSE', '2026-01-21'),
(35, 'CSE', '2026-01-21'),
(36, 'CSE', '2026-01-21'),
(37, 'CSE', '2026-01-21'),
(38, 'EEE', '2026-01-11'),
(39, 'EEE', '2026-01-11'),
(40, 'EEE', '2026-01-11'),
(41, 'CSE', '2026-01-21'),
(42, 'CSE', '2026-01-21'),
(43, 'CSE', '2025-12-30'),
(44, 'EEE', '2026-01-08'),
(45, 'EEE', '2026-01-13');

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
('23517732', 'niloypaul'),
('11111111', '11111111'),
('22222222', '22222222');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_book`
--
ALTER TABLE `course_book`
  ADD PRIMARY KEY (`coursename`);

--
-- Indexes for table `course_credit_information`
--
ALTER TABLE `course_credit_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_info`
--
ALTER TABLE `course_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_information`
--
ALTER TABLE `faculty_information`
  ADD PRIMARY KEY (`facultyID`);

--
-- Indexes for table `game_slot`
--
ALTER TABLE `game_slot`
  ADD PRIMARY KEY (`slotID`);

--
-- Indexes for table `student_id_application`
--
ALTER TABLE `student_id_application`
  ADD PRIMARY KEY (`applicationID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_credit_information`
--
ALTER TABLE `course_credit_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_info`
--
ALTER TABLE `course_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faculty_information`
--
ALTER TABLE `faculty_information`
  MODIFY `facultyID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `game_slot`
--
ALTER TABLE `game_slot`
  MODIFY `slotID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student_id_application`
--
ALTER TABLE `student_id_application`
  MODIFY `applicationID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;