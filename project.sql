-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2017 at 03:14 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_candidate`
--

CREATE TABLE `add_candidate` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `city` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `experience` int(1) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_candidate`
--

INSERT INTO `add_candidate` (`id`, `name`, `age`, `gender`, `city`, `qualification`, `experience`, `phone`, `email`) VALUES
(1, 'Manjinder Kaur', 21, 'Female', 'Patiala', 'B.Tech', 5, 8872048015, 'jaspreet@gmail.com'),
(2, 'Jaspreet Kaur', 21, 'Female', 'Patiala', 'B.Tech', 5, 8872048019, 'jaspreet@gmail.com'),
(3, 'Prabhjot Kaur', 22, 'Female', 'Patiala', 'B.Tech', 5, 8872048017, 'prabh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('root', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `option_a` varchar(100) NOT NULL,
  `option_b` varchar(100) NOT NULL,
  `option_c` varchar(100) NOT NULL,
  `option_d` varchar(100) NOT NULL,
  `correct_answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_answer`) VALUES
(1, 'What does PHP stand for?', 'Private Home Page', 'Personal Hypertext Processor', 'PHP: Hypertext Preprocessor', 'Private Home Portal', 'PHP: Hypertext Preprocessor'),
(2, 'Who is the father of php?', 'Rasmus lerdorf', 'william makepiece', 'drek kolkevi', 'list barely', 'rasmus lerdorf'),
(3, ' How do you write \"Hello World\" in PHP', '\"Hello World\";', 'echo \"Hello World\";', 'Document.Write(\"Hello World\");', 'System.out.println(\"Hello World\");', 'echo \"Hello World\";'),
(4, ' All variables in PHP start with which symbol?', '!', '$\r\n ', '&', '+', '$\r\n '),
(5, 'What is the correct way to end a PHP statement?', '.', ';', '</php>', 'New Line', ';');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `candidate_name` varchar(100) NOT NULL,
  `total_right` int(11) NOT NULL,
  `total_wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `candidate_name`, `total_right`, `total_wrong`, `total`) VALUES
(1, 'Manjinder Kaur', 4, 1, 4),
(2, 'Jaspreet Kaur', 3, 2, 3),
(3, 'Prabhjot Kaur', 14, 7, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_candidate`
--
ALTER TABLE `add_candidate`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_candidate`
--
ALTER TABLE `add_candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
