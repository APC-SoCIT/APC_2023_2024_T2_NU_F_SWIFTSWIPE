-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2024 at 04:55 PM
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
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admint`
--

INSERT INTO `admint` (`id`, `username`, `password`, `email`, `image`) VALUES
(14, 'adminlester', '123', 'lppasatiempo@admin.nu-fairview.edu.ph', 'profilepicturev2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `id` int(11) NOT NULL,
  `pp` varchar(255) NOT NULL,
  `student_no` varchar(255) NOT NULL,
  `rfid_no` varchar(255) NOT NULL,
  `strand` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pnum` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `pp` varchar(255) NOT NULL,
  `student_no` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance_in`
--

INSERT INTO `attendance_in` (`id`, `fname`, `lname`, `section`, `strand`, `logTime`, `rfid_no`, `pp`, `student_no`, `grade`) VALUES
(415, 'Florencio Jr.', 'Acuin', '12-ABM-2301', 'ABM', '2024-03-03 15:37:55', '12312312312', '428491952_1996151897444808_5141876617724161659_n.jpg', '20239-2021', 'Grade 12'),
(416, 'Manuel', 'Gonzales', '12-STEM-2303', 'STEM', '2024-03-03 15:37:58', '3322144846', '426113477_266464856541093_3680283205693187074_n.jpg', '13213-2022', 'Grade 12'),
(417, 'Ira Josh', 'Rodriguez', '12-ABM-2301', 'ABM', '2024-03-03 15:38:01', '5235128291', '423541837_1103471300690775_4160743632483333777_n.png', '12412-2022', 'Grade 12'),
(418, 'Eduardo', ' Rivera', '12-STEM-2303', 'STEM', '2024-03-03 15:38:04', '214124529852', '423599984_1124843492209726_910321237159881957_n.jpg', '13202-2022', 'Grade 12'),
(419, 'Rafael', 'Mendoza', '12-ABM-2301', 'ABM', '2024-03-03 15:38:06', '39084698340952', '423541897_1510824232819898_7695342030759829490_n.png', '98251-2022', 'Grade 12');

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
  `pp` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `student_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance_out`
--

INSERT INTO `attendance_out` (`id`, `fname`, `lname`, `section`, `strand`, `logTime`, `rfid_no`, `pp`, `grade`, `student_no`) VALUES
(157, 'Florencio Jr.', 'Acuin', '12-ABM-2301', 'ABM', '2024-03-03 15:40:41', '12312312312', '428491952_1996151897444808_5141876617724161659_n.jpg', 'Grade 12', '20239-2021'),
(158, 'Manuel', 'Gonzales', '12-STEM-2303', 'STEM', '2024-03-03 15:40:45', '3322144846', '426113477_266464856541093_3680283205693187074_n.jpg', 'Grade 12', '13213-2022'),
(159, 'Ira Josh', 'Rodriguez', '12-ABM-2301', 'ABM', '2024-03-03 15:40:48', '5235128291', '423541837_1103471300690775_4160743632483333777_n.png', 'Grade 12', '12412-2022'),
(160, 'Eduardo', ' Rivera', '12-STEM-2303', 'STEM', '2024-03-03 15:40:51', '214124529852', '423599984_1124843492209726_910321237159881957_n.jpg', 'Grade 12', '13202-2022'),
(161, 'Rafael', 'Mendoza', '12-ABM-2301', 'ABM', '2024-03-03 15:40:54', '39084698340952', '423541897_1510824232819898_7695342030759829490_n.png', 'Grade 12', '98251-2022');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `sectionname` varchar(255) NOT NULL,
  `strand` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `sectionname`, `strand`) VALUES
(62, '12-STEM-2303', 'STEM'),
(63, '12-ABM-2301', 'ABM'),
(64, '12-STEM-2302', 'STEM'),
(65, '12-STEM-2301', 'STEM'),
(66, '12-ABM-2302', 'ABM'),
(67, '12-ABM-2303', 'ABM'),
(68, '11-HUMSS-2301', 'HUMSS'),
(69, '11-HUMSS-2302', 'HUMSS'),
(70, '11-HUMSS-2303', 'HUMSS');

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
(47, 'Science Technology Engineering and Mathematics', 'STEM'),
(49, 'Accountancy Business and Management', 'ABM'),
(50, 'Humanities and Social Sciences', 'HUMSS');

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
  `address` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `student_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `rfid_no`, `pp`, `fname`, `lname`, `strand`, `section`, `pname`, `pnum`, `address`, `grade`, `student_no`) VALUES
(101, '12312312312', '428491952_1996151897444808_5141876617724161659_n.jpg', 'Florencio Jr.', 'Acuin', 'ABM', '12-ABM-2301', 'Stephanie Acuin', '', 'Quezon City', 'Grade 12', '20239-2021'),
(103, '3322144846', '426113477_266464856541093_3680283205693187074_n.jpg', 'Manuel', 'Gonzales', 'STEM', '12-STEM-2303', 'Ceicile Gonzales', '', 'Caloocan City', 'Grade 12', '13213-2022'),
(104, '5235128291', '423541837_1103471300690775_4160743632483333777_n.png', 'Ira Josh', 'Rodriguez', 'ABM', '12-ABM-2301', 'Johnny Rodriguez', '', 'Antipolo City', 'Grade 12', '12412-2022'),
(105, '214124529852', '423599984_1124843492209726_910321237159881957_n.jpg', 'Eduardo', ' Rivera', 'STEM', '12-STEM-2303', 'Marco Rivera', '', 'Quezon City', 'Grade 12', '13202-2022'),
(106, '39084698340952', '423541897_1510824232819898_7695342030759829490_n.png', 'Rafael', 'Mendoza', 'ABM', '12-ABM-2301', 'Rafael Mendoza', '', 'Quezon City', 'Grade 12', '98251-2022'),
(107, '124124124', 'image-removebg-preview (2).png', 'Kristina', 'Ramos', 'HUMSS', '11-HUMSS-2301', 'James Ramos', '', 'Caloocan City', 'Grade 11', '21421-2023');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `image`, `department`) VALUES
(24, 'ramon02', '123', 'delacruzr@teacher.nu-fairvew.edu.ph', 'image-removebg-preview (5).png', 'HUMSS'),
(25, 'janetr', '123', 'reyesj@teacher.nu-fairview.edu.ph', 'image-removebg-preview (4).png', 'ABM'),
(26, 'marktan', '123', 'tanm@teacher.nu-fairview.edu.ph', 'image-removebg-preview (6).png', 'STEM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admint`
--
ALTER TABLE `admint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `attendance_in`
--
ALTER TABLE `attendance_in`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=421;

--
-- AUTO_INCREMENT for table `attendance_out`
--
ALTER TABLE `attendance_out`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `strand`
--
ALTER TABLE `strand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
