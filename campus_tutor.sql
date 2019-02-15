-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2018 at 12:47 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campus_tutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `bbas`
--

CREATE TABLE `bbas` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `office` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bbas`
--

INSERT INTO `bbas` (`id`, `name`, `office`, `time`, `course`) VALUES
(1, 'Sazzad Sir (szz)', 'sac904', 'MW 9-11am', 'cse 482 & cse 499'),
(2, 'Mamun Molla sir (MLA)', 'sac 1024', 'st 9-11am', 'mat350, cse 257 & mat 250');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(200) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nsuid` int(100) NOT NULL,
  `mobile` int(100) NOT NULL,
  `account` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `username`, `email`, `nsuid`, `mobile`, `account`, `password`) VALUES
(1, '', '', 12123, 123, 'tutor', 'lolcumlolcum'),
(2, '', '', 12123, 123, 'tutor', 'lolcumlolcum'),
(3, '', '', 12123, 123, 'tutor', 'lolcumlolcum'),
(4, '', '', 12123, 123, 'tutor', 'lolcumlolcum'),
(5, '', '', 12123, 123, 'tutor', 'lolcumlolcum'),
(6, '', '', 12123, 123, 'tutor', ''),
(7, '', '', 12123, 123, 'tutor', 'lolcumlolcum'),
(8, '', '', 12123, 123, 'tutor', 'lolcumlolcum'),
(9, '', '', 12123, 123, 'tutor', 'lolcumlolcum'),
(10, 'jnferjnf', 'jencjc@mqil.com', 12123, 123, 'tutor', 'lolcumvhvhvhv7676lolcum'),
(11, 'jnferjnf', 'jencjc@mqil.com', 2147483647, 2147483647, 'tutor', 'lolcum34534534534534lolcum'),
(12, '', '', 0, 0, 'tutor', 'lolcumlolcum'),
(13, '', '', 0, 0, 'tutor', 'lolcumlolcum'),
(14, '', '', 45, 45, 'tutor', 'lolcumlolcum'),
(15, '', '', 45, 45, 'tutor', 'lolcumlolcum'),
(16, '', '', 45, 45, 'tutor', 'lolcumlolcum'),
(17, '45', 'ahammedtanveer@gmail.com', 45, 45, 'student', 'lolcum45lolcum'),
(18, '45', 'ahammedtanveer@gmail.com', 45, 45, 'student', 'lolcumlolcum'),
(19, '45', 'ahammedtanveer@gmail.com', 45, 45, 'student', 'lolcum45lolcum'),
(20, '46', 'ahammedtanveer@gmail.com', 46, 46, 'tutor', 'lolcum45lolcum'),
(21, 'tanvir', 'ahammedtanveer@gmail.com', 1311318042, 234, 'tutor', 'lolcum2324424lolcum'),
(22, '', '', 0, 0, 'tutor', 'lolcumlolcum'),
(23, '', 'tanvira1993@gmail.com', 0, 0, 'tutor', 'lolcumlolcum');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(200) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nsuid` int(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `dob` date NOT NULL,
  `blood` varchar(5) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `file` blob NOT NULL,
  `creat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `attempt` int(10) NOT NULL,
  `mobile` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `username`, `password`, `email`, `nsuid`, `department`, `gender`, `dob`, `blood`, `addr`, `file`, `creat`, `updatetime`, `attempt`, `mobile`) VALUES
(1, '1', 'lolcum1lolcum', '', 0, 'ece', 'Femal', '0000-00-00', 'A+', ' ', '', '2018-04-23 18:54:45', '2018-04-28 22:32:23', 0, 0),
(25, 'eee', 'lolcum1lolcum', 'e@m.com', 0, 'ece', 'Femal', '0000-00-00', '', '', 0x38303070782d5761636f5f43472d34415f555341462e4a5047, '2018-04-26 08:49:04', '2018-04-28 22:43:19', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

CREATE TABLE `tutors` (
  `id` int(200) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(80) NOT NULL,
  `nsuid` int(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `blood` varchar(20) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `file` blob NOT NULL,
  `expert` varchar(100) NOT NULL,
  `creat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `attempt` int(20) NOT NULL,
  `mobile` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`id`, `username`, `password`, `email`, `nsuid`, `department`, `gender`, `dob`, `blood`, `addr`, `file`, `expert`, `creat`, `updatetime`, `attempt`, `mobile`) VALUES
(1, 's', 'lolcumslolcum', 's@email.com', 123, 'sss', 'Female', '0000-00-00', 'A+', ' ', '', '231,332,410', '2018-04-23 19:36:10', '2018-04-28 19:41:22', 0, 152121),
(2, 'tanvir', 'lolcum1lolcum', 'ahammedtanveer@gmail.com', 1321615042, 'ece', 'Male', '0000-00-00', '', '', 0x38303070782d5761636f5f43472d34415f555341462e4a5047, '332', '2018-04-23 20:53:22', '2018-04-26 07:56:05', 0, 1521218373),
(3, 'ddddddddddd', 'lolcum1lolcum', 'd@mail.com', 1234333, 'ddd', 'Female', '0000-00-00', '', '', '', '231', '2018-04-24 13:34:05', '2018-04-28 19:41:12', 0, 333015),
(4, 'qq', 'lolcumqqlolcum', 'q@mai', 1321615042, 'ece', 'Female', '0000-00-00', '', '', 0x313338303237355f3231353333303430383634313730365f313238363930323532345f6e2e6a7067, '', '2018-04-24 13:36:15', '2018-04-26 07:56:15', 0, 1521218373),
(5, 'q', 'lolcumqlolcum', 'qmail@mail.com', 123455555, 'qqq', 'Female', '0000-00-00', '', '', '', '231.332', '2018-04-24 18:23:22', '2018-04-28 19:41:25', 0, 555016),
(6, 'd', 'lolcum1lolcum', 'd@gm.com', 1, 'ece', 'Female', '0000-00-00', '', '', '', '', '2018-04-28 22:19:20', '2018-04-28 22:19:20', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bbas`
--
ALTER TABLE `bbas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutors`
--
ALTER TABLE `tutors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bbas`
--
ALTER TABLE `bbas`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tutors`
--
ALTER TABLE `tutors`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
