-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2023 at 07:39 AM
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
-- Database: `babysitter`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `babysitter`
--

CREATE TABLE `babysitter` (
  `babysitter_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `babysitter`
--

INSERT INTO `babysitter` (`babysitter_id`, `first_name`, `last_name`, `username`, `email`, `password`, `phone`, `gender`, `address`) VALUES
(1, 'baby', 'sitter', 'babysitter ', 'babysitter@gmail.com', '1234', 20300348, 'male', 'karachi'),
(3, 'sima', 'noor', 'babe  ', 'sima@gmail.com', '1234', 8949494494, 'female', 'islamabad');

-- --------------------------------------------------------

--
-- Table structure for table `babysitter_schedule`
--

CREATE TABLE `babysitter_schedule` (
  `schd_id` int(11) NOT NULL,
  `babysitter_id` int(11) NOT NULL,
  `service_type` varchar(50) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `babysitter_schedule`
--

INSERT INTO `babysitter_schedule` (`schd_id`, `babysitter_id`, `service_type`, `start_time`, `end_time`, `status`) VALUES
(3, 1, 'Part Time', '16:00:00', '20:00:00', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `babysitter_services`
--

CREATE TABLE `babysitter_services` (
  `baby_service_id` int(11) NOT NULL,
  `babysitter_id` int(11) NOT NULL,
  `rate_per_hour` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `babysitter_services`
--

INSERT INTO `babysitter_services` (`baby_service_id`, `babysitter_id`, `rate_per_hour`, `service_id`) VALUES
(1, 1, 30, 1);

-- --------------------------------------------------------

--
-- Table structure for table `child_enroll`
--

CREATE TABLE `child_enroll` (
  `childenroll_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `emergency_contact_number` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `child_enroll`
--

INSERT INTO `child_enroll` (`childenroll_id`, `name`, `age`, `address`, `contact_number`, `emergency_contact_number`, `user_id`, `status`) VALUES
(1, 'ali', 5, 'lahor', 2147483647, 2147483647, 1, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `cont_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `reply` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`cont_id`, `user_id`, `name`, `email`, `message`, `reply`) VALUES
(2, 1, 'user', 'sam@gmail.com', 'fnorn jvnvijjv vijntii tvijtn v tvtnv tvnv tv', '');

-- --------------------------------------------------------

--
-- Table structure for table `hirebabysitter`
--

CREATE TABLE `hirebabysitter` (
  `hire_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `babysitter_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hirebabysitter`
--

INSERT INTO `hirebabysitter` (`hire_id`, `user_id`, `child_id`, `babysitter_id`, `status`) VALUES
(1, 1, 1, 1, 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `name`, `description`, `status`) VALUES
(1, 'babysitter services', 'gygfd64dvendn cfnjf rkn or ggnrog rgnjg ng 4g 4jgk gjk', 'Active'),
(3, 'Child Care', 'Welcome to our premier child care service at Babysitter We understand that ', 'Active'),
(4, 'Home Care', 'Welcome to  Home Care Service , where compassionate care meets the comfort of home.  ', 'Active'),
(5, 'Cleaner', 'We understand the importance of a clean and organized environment, not only for aesthetics but also for your health and peace of mind.', 'Active'),
(6, 'Tutoring', 'where learning knows no bounds! We understand the value of education and the positive impact it has on shaping young minds. Our tutoring service is designed to empower students of all ages with the knowledge, skills, and confidence they need to excel acad', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `username`, `email`, `password`, `phone`, `gender`, `address`) VALUES
(1, 'user', '1', 'user', 'user@gmail.com', '1234', 3334343222, 'male', 'karachi'),
(2, 'asim', 'ali', 'user2 ', 'sajid@gmail.com', '1234', 222222222222, 'male', 'lahore'),
(5, 'kali', 'das', 'user5 ', 'kali@gmail.com', '1234', 30942395893589, 'male', 'benglor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `babysitter`
--
ALTER TABLE `babysitter`
  ADD PRIMARY KEY (`babysitter_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `babysitter_schedule`
--
ALTER TABLE `babysitter_schedule`
  ADD PRIMARY KEY (`schd_id`);

--
-- Indexes for table `babysitter_services`
--
ALTER TABLE `babysitter_services`
  ADD PRIMARY KEY (`baby_service_id`);

--
-- Indexes for table `child_enroll`
--
ALTER TABLE `child_enroll`
  ADD PRIMARY KEY (`childenroll_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `hirebabysitter`
--
ALTER TABLE `hirebabysitter`
  ADD PRIMARY KEY (`hire_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `babysitter`
--
ALTER TABLE `babysitter`
  MODIFY `babysitter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `babysitter_schedule`
--
ALTER TABLE `babysitter_schedule`
  MODIFY `schd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `babysitter_services`
--
ALTER TABLE `babysitter_services`
  MODIFY `baby_service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `child_enroll`
--
ALTER TABLE `child_enroll`
  MODIFY `childenroll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `cont_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hirebabysitter`
--
ALTER TABLE `hirebabysitter`
  MODIFY `hire_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
