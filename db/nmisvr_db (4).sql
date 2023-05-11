-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 05:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nmisvr_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_url`) VALUES
(4, 'IMG-645c60a5d19270.72970532.png');

-- --------------------------------------------------------

--
-- Table structure for table `request_tbl`
--

CREATE TABLE `request_tbl` (
  `id` int(100) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `requestor_name` varchar(255) NOT NULL,
  `requestor_govmail` varchar(255) NOT NULL,
  `requestor_position` varchar(255) NOT NULL,
  `requestor_division` varchar(255) NOT NULL,
  `requestor_contact_number` int(100) NOT NULL,
  `region` varchar(255) NOT NULL,
  `passenger` varchar(255) NOT NULL,
  `number_of_passenger` int(100) NOT NULL,
  `name_of_passenger` varchar(255) NOT NULL,
  `p1` varchar(255) NOT NULL,
  `p2` varchar(255) NOT NULL,
  `p3` varchar(255) NOT NULL,
  `office` varchar(255) NOT NULL,
  `raduis` varchar(255) NOT NULL,
  `pickup_point` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` time(6) NOT NULL,
  `end_time` time(6) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `travel_order` varchar(255) NOT NULL,
  `asigned_driver` varchar(255) DEFAULT NULL,
  `vehicle_plate_number` varchar(255) DEFAULT NULL,
  `start_odometer` int(100) DEFAULT NULL,
  `end_odometer` int(100) DEFAULT NULL,
  `reservation_status` enum('Initialed','Processing','Approved','Pending','Verified','Canceled','Checked') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_tbl`
--

INSERT INTO `request_tbl` (`id`, `transaction_id`, `requestor_name`, `requestor_govmail`, `requestor_position`, `requestor_division`, `requestor_contact_number`, `region`, `passenger`, `number_of_passenger`, `name_of_passenger`, `p1`, `p2`, `p3`, `office`, `raduis`, `pickup_point`, `destination`, `start_date`, `end_date`, `start_time`, `end_time`, `purpose`, `remarks`, `travel_order`, `asigned_driver`, `vehicle_plate_number`, `start_odometer`, `end_odometer`, `reservation_status`) VALUES
(205, 'NMISVRS-9', '123', '123@mail.com', '123', 'Laboratory', 2147483647, '', 'No', 2, 'mark ranile ', 'Jewel Guting', 'Walter Gabane', 'Jps Bobilla', 'it', 'Within-Manila', 'gh', 'shg', '2023-05-10', '2023-05-10', '11:15:00.000000', '00:15:00.000000', 'Seminar/ Meeting', NULL, '', 'PLATE-543 asda asd21', NULL, NULL, NULL, NULL),
(208, 'NMISVRS-23', '123', '123@mail.com', '123', '', 0, '', 'Yes', 2, 'Fernando Abayan', 'Missy Abayan', 'Reyan Abayan', 'Norbeth ABayan', '', 'Within-Manila', 'U.S.A', ' North Korean', '2023-05-11', '2023-05-12', '10:05:00.000000', '10:05:00.000000', 'others', NULL, '', 'MARSS REPASO', NULL, NULL, NULL, 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_tbl`
--

CREATE TABLE `transaction_tbl` (
  `id` int(100) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `transaction_description` varchar(255) NOT NULL,
  `transaction_date_time` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction_tbl`
--

INSERT INTO `transaction_tbl` (`id`, `transaction_id`, `transaction_description`, `transaction_date_time`) VALUES
(42, 'NMISVRS-9 ', 'Verified', '0000-00-00 00:00:00.000000'),
(43, 'NMISVRS-9 ', 'Initialed', '0000-00-00 00:00:00.000000'),
(44, 'NMISVRS-9 ', 'Approved', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `id` int(100) NOT NULL,
  `employee_id` varchar(100) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `govmail` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`id`, `employee_id`, `first_name`, `last_name`, `username`, `position`, `division`, `address`, `govmail`, `contact_number`, `password`, `role`) VALUES
(113, '123', '123', '123', '123', '123', 'Laboratory', NULL, '123@mail.com', '123', '$2y$10$bnqRR2ILBsJON9s.hSQP8O51Il6grpTkPL9F153.aYLPYTTlxluzu', NULL),
(114, 'nmis20', 'melanie', 'abueme', 'mels', 'IT', 'PIMD', NULL, 'mels@govmail.com', '09489280092', '$2y$10$0oy98EMVGWk3C7xBmHJ2tOpHU5/RUEUtvCLcisl2Ghvhg887kd.Fu', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles_tbl`
--

CREATE TABLE `vehicles_tbl` (
  `id` int(100) NOT NULL,
  `plate_number` varchar(255) NOT NULL,
  `vehicle_model` varchar(255) NOT NULL,
  `start_odometer` int(100) DEFAULT NULL,
  `end_odometer` int(100) DEFAULT NULL,
  `assigned_driver` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicles_tbl`
--

INSERT INTO `vehicles_tbl` (`id`, `plate_number`, `vehicle_model`, `start_odometer`, `end_odometer`, `assigned_driver`) VALUES
(1, 'nmis-123', 'honda', NULL, NULL, NULL),
(2, 'nmis-123', 'HONDA', NULL, NULL, NULL),
(14, 'PLATE-543', 'Honda', 0, 0, 'asda asd21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_tbl`
--
ALTER TABLE `request_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_tbl`
--
ALTER TABLE `transaction_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles_tbl`
--
ALTER TABLE `vehicles_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `request_tbl`
--
ALTER TABLE `request_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `transaction_tbl`
--
ALTER TABLE `transaction_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `vehicles_tbl`
--
ALTER TABLE `vehicles_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
