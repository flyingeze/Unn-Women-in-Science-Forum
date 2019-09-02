-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2019 at 04:52 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unnwsf`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `department_title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `department_title`, `created_at`, `updated_at`) VALUES
(1, 'Agricultural and Bio-Resources Engineering', '2019-07-28 22:06:10', '2019-07-28 22:06:10'),
(2, 'Agriculture', '2019-07-28 22:06:11', '2019-07-28 22:06:11'),
(3, 'Animal Science', '2019-07-28 22:06:11', '2019-07-28 22:06:11'),
(4, 'Archaeology', '2019-07-28 22:06:11', '2019-07-28 22:06:11'),
(5, 'Architecture', '2019-07-28 22:06:11', '2019-07-28 22:06:11'),
(6, 'Biochemistry', '2019-07-28 22:06:11', '2019-07-28 22:06:11'),
(7, 'Biological Science', '2019-07-28 22:06:11', '2019-07-28 22:06:11'),
(8, 'Civil Engineering', '2019-07-28 22:06:11', '2019-07-28 22:06:11'),
(9, 'Computer Education', '2019-07-28 22:06:12', '2019-07-28 22:06:12'),
(10, 'Computer Science', '2019-07-28 22:06:12', '2019-07-28 22:06:12'),
(11, 'Computer with Statistics', '2019-07-28 22:06:12', '2019-07-28 22:06:12'),
(12, 'Crop Science', '2019-07-28 22:06:12', '2019-07-28 22:06:12'),
(13, 'Dentistry And Dental Surgery', '2019-07-28 22:06:12', '2019-07-28 22:06:12'),
(14, 'Dentistry and Dental Technology', '2019-07-28 22:06:12', '2019-07-28 22:06:12'),
(15, 'Education and Biology', '2019-07-28 22:06:12', '2019-07-28 22:06:12'),
(16, 'Education and Chemistry', '2019-07-28 22:06:12', '2019-07-28 22:06:12'),
(17, 'Education and Computer Science', '2019-07-28 22:06:13', '2019-07-28 22:06:13'),
(18, 'Education and Geography', '2019-07-28 22:06:13', '2019-07-28 22:06:13'),
(19, 'Education and Integrated Science', '2019-07-28 22:06:13', '2019-07-28 22:06:13'),
(20, 'Education and Mathematics', '2019-07-28 22:06:13', '2019-07-28 22:06:13'),
(21, 'Education and Physics', '2019-07-28 22:06:13', '2019-07-28 22:06:13'),
(22, 'Education and Science', '2019-07-28 22:06:13', '2019-07-28 22:06:13'),
(23, 'Electrical Engineering', '2019-07-28 22:06:13', '2019-07-28 22:06:13'),
(24, 'Electronics Engineering', '2019-07-28 22:06:14', '2019-07-28 22:06:14'),
(25, 'Food Science and Technology', '2019-07-28 22:06:14', '2019-07-28 22:06:14'),
(26, 'Geography', '2019-07-28 22:06:14', '2019-07-28 22:06:14'),
(27, 'Geology', '2019-07-28 22:06:14', '2019-07-28 22:06:14'),
(28, 'Health Education', '2019-07-28 22:06:14', '2019-07-28 22:06:14'),
(29, 'Home Science', '2019-07-28 22:06:14', '2019-07-28 22:06:14'),
(30, 'Industrial Technical Education', '2019-07-28 22:06:14', '2019-07-28 22:06:14'),
(31, 'Mechanical Engineering', '2019-07-28 22:06:15', '2019-07-28 22:06:15'),
(32, 'Medical Laboratory Technology / Science', '2019-07-28 22:06:15', '2019-07-28 22:06:15'),
(33, 'Medical Rehabilitation', '2019-07-28 22:06:15', '2019-07-28 22:06:15'),
(34, 'Medicine and Surgery', '2019-07-28 22:06:15', '2019-07-28 22:06:15'),
(35, 'Microbiology', '2019-07-28 22:06:15', '2019-07-28 22:06:15'),
(36, 'Nursing / Nursing Science', '2019-07-28 22:06:15', '2019-07-28 22:06:15'),
(37, 'Nutrition and Dietetics', '2019-07-28 22:06:15', '2019-07-28 22:06:15'),
(38, 'Pharmacy', '2019-07-28 22:06:15', '2019-07-28 22:06:15'),
(39, 'Physics', '2019-07-28 22:06:16', '2019-07-28 22:06:16'),
(40, 'Physics / Astrology', '2019-07-28 22:06:16', '2019-07-28 22:06:16'),
(41, 'Pure / Applied Chemistry', '2019-07-28 22:06:16', '2019-07-28 22:06:16'),
(42, 'Pure and Industrial Chemistry', '2019-07-28 22:06:16', '2019-07-28 22:06:16'),
(43, 'Radiography', '2019-07-28 22:06:16', '2019-07-28 22:06:16'),
(44, 'Soil Science', '2019-07-28 22:06:16', '2019-07-28 22:06:16'),
(45, 'Statistics', '2019-07-28 22:06:16', '2019-07-28 22:06:16'),
(46, 'Surveying And Geoinformatics', '2019-07-28 22:06:17', '2019-07-28 22:06:17'),
(47, 'Veterinary Medicine', '2019-07-28 22:06:17', '2019-07-28 22:06:17'),
(48, 'Zoology', '2019-07-28 22:06:17', '2019-07-28 22:06:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
