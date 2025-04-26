-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2025 at 06:32 PM
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
-- Database: `testing-php`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `day_of_week` varchar(20) DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `appointment_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patient_id`, `doctor_id`, `day_of_week`, `appointment_date`, `appointment_time`) VALUES
(1, 3, 1, 'Tuesday', '2025-04-22', '10:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`) VALUES
(2, 'Athletic Training'),
(3, 'Exercise Physiology'),
(1, 'Musculoskeletal Physiotherapy'),
(4, 'Sports Physiotherapy'),
(5, 'Sports Rehabilitation');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `department_id`) VALUES
(1, 'Olivia Reed', 1),
(2, 'Emma Carter', 4),
(3, 'James Brooks', 2),
(4, 'Daniel Smith', 3),
(5, 'Micheal Adams', 5);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`) VALUES
(3, 'Is first session for free?'),
(17, 'karimmm');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `message`) VALUES
(1, 'hiii'),
(2, 'ka'),
(3, 'kk'),
(4, 'qq');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `day_of_week` enum('Monday','Tuesday','Wednesday','Thursday','Friday') DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `doctor_id`, `day_of_week`, `start_time`, `end_time`) VALUES
(1, 1, 'Monday', '09:00:00', '10:00:00'),
(3, 3, 'Monday', '10:00:00', '11:00:00'),
(4, 4, 'Monday', '11:00:00', '12:00:00'),
(5, 5, 'Monday', '13:00:00', '14:00:00'),
(6, 2, 'Monday', '14:00:00', '15:00:00'),
(7, 4, 'Monday', '15:00:00', '16:00:00'),
(8, 3, 'Monday', '16:00:00', '17:00:00'),
(9, 3, 'Tuesday', '09:00:00', '10:00:00'),
(10, 1, 'Tuesday', '10:00:00', '11:00:00'),
(11, 2, 'Tuesday', '11:00:00', '12:00:00'),
(12, 2, 'Tuesday', '13:00:00', '14:00:00'),
(13, 4, 'Tuesday', '14:00:00', '15:00:00'),
(14, 5, 'Tuesday', '15:00:00', '16:00:00'),
(15, 1, 'Tuesday', '16:00:00', '17:00:00'),
(16, 4, 'Wednesday', '09:00:00', '10:00:00'),
(17, 2, 'Wednesday', '10:00:00', '11:00:00'),
(18, 5, 'Wednesday', '11:00:00', '12:00:00'),
(19, 3, 'Wednesday', '13:00:00', '14:00:00'),
(20, 3, 'Wednesday', '14:00:00', '15:00:00'),
(21, 2, 'Wednesday', '15:00:00', '16:00:00'),
(22, 5, 'Wednesday', '16:00:00', '17:00:00'),
(23, 2, 'Thursday', '09:00:00', '10:00:00'),
(24, 4, 'Thursday', '10:00:00', '11:00:00'),
(25, 3, 'Thursday', '11:00:00', '12:00:00'),
(26, 1, 'Thursday', '13:00:00', '14:00:00'),
(27, 5, 'Thursday', '14:00:00', '15:00:00'),
(28, 1, 'Thursday', '15:00:00', '16:00:00'),
(29, 4, 'Thursday', '16:00:00', '17:00:00'),
(30, 5, 'Friday', '09:00:00', '10:00:00'),
(31, 5, 'Friday', '10:00:00', '11:00:00'),
(32, 1, 'Friday', '11:00:00', '12:00:00'),
(33, 4, 'Friday', '13:00:00', '14:00:00'),
(34, 1, 'Friday', '14:00:00', '15:00:00'),
(35, 3, 'Friday', '15:00:00', '16:00:00'),
(36, 2, 'Friday', '16:00:00', '17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `age` int(10) UNSIGNED DEFAULT NULL,
  `gender` enum('male','female') NOT NULL,
  `plan` enum('none','basic','advanced','premium') NOT NULL DEFAULT 'none'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `full_name`, `father_name`, `phone`, `age`, `gender`, `plan`) VALUES
(3, 'karim@1', '$2y$10$J2rUiKkeEBfWH6KYz8MHeuzdYU2GbeldowtxNiMTgF5G5vTS2Vbq.', 'Karim Rahal', 'Hussein', '71168748', 21, 'male', 'premium'),
(4, 'sarah@1', '$2y$10$aGrR.zUPxKhw.cbHi3y1deVqJKo23JmDRGahDUM8jnWBC0Bv6DGQ6', 'Sarah Dhainy', 'Hussein', '81829974', 20, 'female', 'basic'),
(5, 'karim@2', '$2y$10$dB6nsrgaDthXsN9GtHI7ZODZU02OWjwGCiP8bRC7eCIeJr.17Y9qS', 'Karim Rahal', 'Hussein', '71168748', 21, 'male', 'none');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_department` (`department_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `fk_department` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
