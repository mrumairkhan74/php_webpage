-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2024 at 10:12 AM
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
-- Database: `fixophones`
--

-- --------------------------------------------------------

--
-- Table structure for table `fixosheet`
--

CREATE TABLE `fixosheet` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phno` bigint(30) NOT NULL,
  `pickup` varchar(100) NOT NULL,
  `bestway` varchar(100) NOT NULL,
  `time` int(6) NOT NULL,
  `date` int(11) NOT NULL,
  `device` varchar(100) NOT NULL,
  `problem` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fixosheet`
--

INSERT INTO `fixosheet` (`id`, `name`, `phno`, `pickup`, `bestway`, `time`, `date`, `device`, `problem`, `message`) VALUES
(1, 'Umair Khan', 133453534646, 'attock', '1', 172000, 20241225, '3', '5', ''),
(2, 'Umair Khan', 133453534646, 'attock', '1', 172000, 20241225, '3', '5', ''),
(3, 'gsdgjafs', 133453534646, 'werwerwe', '1', 22400, 20241224, '2', '2', ''),
(4, 'Umair Khan', 133453534646, 'attock', '1', 143800, 20241220, '3', '5', ''),
(5, 'Umair Khan', 133453534646, 'attock', '2', 1, 2024, '4', '4', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fixosheet`
--
ALTER TABLE `fixosheet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fixosheet`
--
ALTER TABLE `fixosheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
