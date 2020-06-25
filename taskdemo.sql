-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2020 at 03:17 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taskdemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `student_Id` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`student_Id`, `first_name`, `last_name`, `email`, `comment`, `datetime`) VALUES
(1, 'Nitish', 'Kumar', 'nitishkumar8591@gmail.com', 'we will meet you soon next week', '2020-06-15 10:42:52'),
(2, 'Naresh', 'Kumar', 'naresh@gmail.com', 'we will meet you soon next Monday', '2020-06-15 10:43:37'),
(3, 'Radha', 'Singh', 'radha@gmail.com', 'we will call you soon next week', '2020-06-15 10:44:18'),
(4, 'Manoj', 'wagh', 'manoj12@gmail.com', 'we will meet you soon next month', '2020-06-15 10:46:06'),
(5, 'Anju', 'Choudhary', 'anjuchoudhary@gmail.com', 'we will contact you next year', '2020-06-15 10:51:15'),
(6, 'Kalpa', 'Valli', 'kalpa89@gmail.com', 'Yes,please contact me few days after', '2020-06-15 10:53:36'),
(7, 'Jay', 'Kumar', 'jaykumar12@gmail.com', 'please contact me 7 days after', '2020-06-15 10:55:13'),
(8, 'Naveen', 'Singh', 'naveensingh19@gmail.com', 'tomorrow we will contact you', '2020-06-15 10:57:15'),
(9, 'Anju', 'Singh', 'anjusingh123@gmail.com', 'will contact today again ', '2020-06-15 10:58:33'),
(10, 'Pravallika', 'Banavathu', 'pravallika90@gmail.com', 'she will join next weak', '2020-06-15 11:01:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`student_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `student_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
