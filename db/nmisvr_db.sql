-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 10:45 AM
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
  `location` varchar(255) NOT NULL,
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
  `reservation_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_tbl`
--

INSERT INTO `request_tbl` (`id`, `transaction_id`, `requestor_name`, `requestor_govmail`, `requestor_position`, `requestor_division`, `requestor_contact_number`, `region`, `location`, `destination`, `start_date`, `end_date`, `start_time`, `end_time`, `purpose`, `remarks`, `travel_order`, `asigned_driver`, `vehicle_plate_number`, `start_odometer`, `end_odometer`, `reservation_status`) VALUES
(1, '12313', 'wq', 'qw', 'qw', '', 94892800, 'qw', 'cubao', 'Tarlac', '2023-04-15', '2023-04-16', '00:00:00.000000', '18:19:55.000000', 'sdadsa', 'Approved', '23121', NULL, NULL, NULL, NULL, 'Pending'),
(2, '1221', '23123', '12312', '1231', '123213', 213213, '3213213', '21312', '21312', '2023-04-15', '2023-04-16', '00:00:00.000000', '18:19:55.000000', '213213', 'Rejected', 'wqewe', 'Ernisto', 'adsdas', NULL, NULL, 'Processing'),
(3, 'asdads', 'sdadsa', 'sdad', 'asdsad', 'asdsa', 213213, 'asdad', 'Cubao', 'Cubao', '2023-04-22', '2023-04-29', '08:13:52.000000', '27:13:52.000000', 'sadadasdas', 'Appproved', 'sadad', 'Melanie', 'dasd', NULL, NULL, 'Approved'),
(4, 'nmis-02', 'Marss', 'g@govmail.com.ph', 'Dancer', 'PIMD', 213213, 'IV', 'CUBAO', 'Hongkong', '2023-04-15', '2023-04-19', '08:13:52.000000', '45:30:56.000000', 'swabe', 'Approved', '1234', 'Swabe', '1234', NULL, NULL, 'Initialed');

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
(72, 'vr-54', 'asdasd', 'sadasd', 'admin', '1231', 'Accounting', NULL, 'fsdfsfs@gov.ph', '4213', '$2y$10$BomU3FqfrQHIypL4NMAAqeaDuFPdKregMrsQUMgt4Nf5LK1oEAIbq', 'Supervising Admin'),
(73, 'nmis-1', '123', '321', 'fsdfsdsfs', 'Programmer II', 'PIMD', NULL, 'ict@gov.com.ph', '09898765432', '$2y$10$SpezDsBmO5rzk7QHWHPzJezgL0Q8RubVcurkJPwtrWYPyN5YonJRC', 'Supervising Admin'),
(74, 'nmis-2', 'mark', 'abayan', 'admin', 'Programmer II', 'PIMD', NULL, 'ict@gov.com.ph', '09898765432', '$2y$10$5UusOYRGtILUbXzjvGyRo.Mweiv.DD5/8sVt8xoiNkEZihz1I93FS', 'Driver'),
(75, 'nmis-1', '123', '321', 'fsdfsdsfs', 'Programmer II', 'PIMD', NULL, 'ict@gov.com.ph', '09898765432', '$2y$10$PlF7d55otHmkbE2w3.EDW.a.twu/24Sna7kaAENYf7fhVTlmNJvKu', 'Supervising Admin');

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
(2, 'nmis-123', 'HONDA', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request_tbl`
--
ALTER TABLE `request_tbl`
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
-- AUTO_INCREMENT for table `request_tbl`
--
ALTER TABLE `request_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `vehicles_tbl`
--
ALTER TABLE `vehicles_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
