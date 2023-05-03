-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 09:39 AM
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
  `passenger` varchar(255) NOT NULL,
  `number_of_passenger` int(100) NOT NULL,
  `name_of_passenger` varchar(255) NOT NULL,
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

INSERT INTO `request_tbl` (`id`, `transaction_id`, `requestor_name`, `requestor_govmail`, `requestor_position`, `requestor_division`, `requestor_contact_number`, `region`, `passenger`, `number_of_passenger`, `name_of_passenger`, `office`, `raduis`, `pickup_point`, `destination`, `start_date`, `end_date`, `start_time`, `end_time`, `purpose`, `remarks`, `travel_order`, `asigned_driver`, `vehicle_plate_number`, `start_odometer`, `end_odometer`, `reservation_status`) VALUES
(17, 'nmis-123', 'Mark Ferdinand', 'asda@wqeqw.com', 'dancer', 'PIMD', 12312, '1231', '', 0, '', '', '', 'Ali mall', 'Quezon Ave', '2023-04-23', '2023-04-24', '15:46:00.000000', '00:00:00.000000', '12321', NULL, '231', 'Melanie', NULL, NULL, NULL, 'Initialed'),
(18, 'nmis-09', 'John Paul', '1231@GMAIL.COM', 'ProgrammerII', 'PIMD', 12345, 'NCR', '', 0, '', '', '', 'Fairview', 'cubao', '2023-04-19', '2023-04-26', '15:39:00.000000', '15:39:00.000000', 'Travel', NULL, 'TRA-00-1-02', 'asda asd21', NULL, NULL, NULL, 'Verified'),
(21, 'vrs-123', 'Juffrey Bayog', 'Mark@abayan.com', 'OJT', 'PIMD', 989665, 'IV', '', 0, '', '', '', 'HONGKONG', 'USA', '2023-04-20', '2023-04-27', '07:50:00.000000', '08:50:00.000000', 'Swabe', NULL, 'TRA-098', 'juffs', NULL, NULL, NULL, 'Initialed'),
(22, 'NMISVRS-7', '2021100143', 'gov@gmail.com', 'tambay', 'ARD', 2147483647, 'Other', 'Yes', 8, 'Mark Raymond Rom', 'n/a', 'Outside-manila', 'DAU', 'BUlacan', '2023-05-02', '2023-05-03', '11:51:00.000000', '23:51:00.000000', 'Yes', NULL, 'nmisvr_db.sql', 'asda asd21', NULL, NULL, NULL, 'Initialed');

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
(4, 'nmis-09 ', 'Verified', '0000-00-00 00:00:00.000000'),
(5, 'nmis-123 ', 'Verified', '0000-00-00 00:00:00.000000'),
(6, 'nmis-09 ', 'Verified', '0000-00-00 00:00:00.000000'),
(7, 'nmis-123 ', 'Verified', '0000-00-00 00:00:00.000000'),
(8, 'nmis-09 ', 'Verified', '0000-00-00 00:00:00.000000'),
(9, 'vrs-123 ', 'Verified', '0000-00-00 00:00:00.000000'),
(10, 'vrs-123 ', 'Checked', '0000-00-00 00:00:00.000000'),
(11, 'vrs-123 ', 'Initialed', '0000-00-00 00:00:00.000000'),
(12, 'vrs-123 ', 'Approved', '0000-00-00 00:00:00.000000'),
(13, 'nmis-09 ', 'Checked', '0000-00-00 00:00:00.000000'),
(14, 'NMISVRS-7 ', 'Verified', '0000-00-00 00:00:00.000000'),
(15, 'NMISVRS-7 ', 'Initialed', '0000-00-00 00:00:00.000000');

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
(75, 'nmis-1', '123', '321', 'fsdfsdsfs', 'Programmer II', 'PIMD', NULL, 'ict@gov.com.ph', '09898765432', '$2y$10$PlF7d55otHmkbE2w3.EDW.a.twu/24Sna7kaAENYf7fhVTlmNJvKu', 'Driver'),
(76, 'sadsa', 'asda', 'asd21', '231232', '21321', 'POSMD', NULL, '123213@gmail.fsd', '2322342', '$2y$10$iKXLsFO6fysT7xB0/FdUhu7/8yvoZT8BZOq37pYqHVzSd7kzFdMtO', 'Driver'),
(98, '2021100143', 'Imon', 'Imon', 'swabe', 'tambay', 'Engineering', NULL, 'gov@gmail.com', '2323333123123', '$2y$10$Nkqbhq4PKdbtrHn5R9Fn0ObEBtNNYkuHJMILs/S.2vcRF.dmxZKgS', NULL);

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
-- AUTO_INCREMENT for table `request_tbl`
--
ALTER TABLE `request_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `transaction_tbl`
--
ALTER TABLE `transaction_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `vehicles_tbl`
--
ALTER TABLE `vehicles_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
