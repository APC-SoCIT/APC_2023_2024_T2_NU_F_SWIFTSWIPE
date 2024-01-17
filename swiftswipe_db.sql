-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2024 at 09:20 AM
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
-- Database: `swiftswipe_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admint`
--

CREATE TABLE `admint` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admint`
--

INSERT INTO `admint` (`id`, `username`, `password`, `name`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_in`
--

CREATE TABLE `attendance_in` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `strand` varchar(255) NOT NULL,
  `logTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `rfid_no` varchar(255) NOT NULL,
  `pp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance_in`
--

INSERT INTO `attendance_in` (`id`, `fname`, `lname`, `section`, `strand`, `logTime`, `rfid_no`, `pp`) VALUES
(300, 'James', 'Santos', 'SECTION A', 'ABM', '2024-01-17 04:59:04', '1', 'uploadImage/3.png'),
(301, 'Jannet', 'Roxas', 'SECTION B', 'HUMMS', '2024-01-17 05:15:35', '2', 'uploadImage/4.png'),
(302, 'John Jay', 'Cruz', 'SECTION C', 'STEM', '2024-01-17 05:15:36', '3', 'uploadImage/1.png'),
(303, 'Silvia', 'Dyrit', 'SECTION B', 'HUMMS', '2024-01-17 05:15:37', '4', 'uploadImage/5.png'),
(304, 'Lily', 'Rivera', 'SECTION A', 'ABM', '2024-01-17 05:15:38', '5', 'uploadImage/2.png'),
(305, 'James', 'Santos', 'SECTION A', 'ABM', '2024-01-17 05:15:39', '1', 'uploadImage/3.png'),
(306, 'Jannet', 'Roxas', 'SECTION B', 'HUMMS', '2024-01-17 05:15:40', '2', 'uploadImage/4.png'),
(307, 'John Jay', 'Cruz', 'SECTION C', 'STEM', '2024-01-17 05:15:40', '3', 'uploadImage/1.png'),
(308, 'James', 'Santos', 'SECTION A', 'ABM', '2024-01-17 05:21:57', '1', 'uploadImage/3.png'),
(309, 'John Jay', 'Cruz', 'SECTION C', 'STEM', '2024-01-17 05:21:58', '3', 'uploadImage/1.png'),
(310, 'Silvia', 'Dyrit', 'SECTION B', 'HUMMS', '2024-01-17 05:21:58', '4', 'uploadImage/5.png'),
(311, 'Lily', 'Rivera', 'SECTION A', 'ABM', '2024-01-17 05:21:59', '5', 'uploadImage/2.png'),
(312, 'Jannet', 'Roxas', 'SECTION B', 'HUMMS', '2024-01-17 05:21:59', '2', 'uploadImage/4.png'),
(313, 'John Jay', 'Cruz', 'SECTION C', 'STEM', '2024-01-17 05:22:00', '3', 'uploadImage/1.png'),
(314, 'Silvia', 'Dyrit', 'SECTION B', 'HUMMS', '2024-01-17 05:22:00', '4', 'uploadImage/5.png');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_out`
--

CREATE TABLE `attendance_out` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `strand` varchar(255) NOT NULL,
  `logTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `rfid_no` varchar(255) NOT NULL,
  `pp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `sectionname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `sectionname`) VALUES
(19, 'SECTION A'),
(20, 'SECTION B'),
(21, 'SECTION C');

-- --------------------------------------------------------

--
-- Table structure for table `strand`
--

CREATE TABLE `strand` (
  `id` int(11) NOT NULL,
  `strandname` varchar(255) NOT NULL,
  `strandcode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `strand`
--

INSERT INTO `strand` (`id`, `strandname`, `strandcode`) VALUES
(39, 'Accountancy Business and Management', 'ABM'),
(40, 'The Humanities and Social Sciences', 'HUMMS'),
(41, 'Science, Technology Engineering and Mathematics', 'STEM');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `rfid_no` varchar(255) NOT NULL,
  `pp` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `strand` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pnum` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `rfid_no`, `pp`, `fname`, `lname`, `strand`, `section`, `pname`, `pnum`, `address`) VALUES
(41, '1', 'uploadImage/3.png', 'James', 'Santos', 'ABM', 'SECTION A', 'Anita Santos', '09827382712', 'Caloocan'),
(45, '2', 'uploadImage/4.png', 'Jannet', 'Roxas', 'HUMMS', 'SECTION B', 'Carlo Roxas', '093482937381', 'Quezon City'),
(46, '3', 'uploadImage/1.png', 'John Jay', 'Cruz', 'STEM', 'SECTION C', 'Juanito Cruz', '09428394831', 'Caloocan City'),
(47, '4', 'uploadImage/5.png', 'Silvia', 'Dyrit', 'HUMMS', 'SECTION B', 'Leo Dyrit', '09438293831', 'Quezon City'),
(48, '5', 'uploadImage/2.png', 'Lily', 'Rivera', 'ABM', 'SECTION A', 'Jonard Rivera', '09328273839', 'Caloocan City');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(27, 'Yuan Cedrick', 'Ramos', 'ramosyc@student.apc.edu.ph', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admint`
--
ALTER TABLE `admint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_in`
--
ALTER TABLE `attendance_in`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_out`
--
ALTER TABLE `attendance_out`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strand`
--
ALTER TABLE `strand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admint`
--
ALTER TABLE `admint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance_in`
--
ALTER TABLE `attendance_in`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=315;

--
-- AUTO_INCREMENT for table `attendance_out`
--
ALTER TABLE `attendance_out`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `strand`
--
ALTER TABLE `strand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
