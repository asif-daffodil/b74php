-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 02:25 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b74`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL DEFAULT 'Naam nai',
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `regtime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `sname`, `email`, `phone`, `regtime`) VALUES
(1, 'Noman', 'jekono@email.com', '012364598563', '2022-01-07 13:13:02'),
(2, 'Roman', 'kamal@jamal.com', '01742420420', '2022-01-07 13:15:05'),
(3, 'Naam nai', 'nam@nai.com', '01742042042', '2022-01-07 13:15:05'),
(4, 'jaal Ali', 'jamal@ali.com', '01798653214', '2022-01-07 13:17:51'),
(5, 'Tomal Chowdhury', 'tomal@choedhury.com', '01865456545', '2022-01-07 13:17:51'),
(6, 'Akmal Khandoker', 'akmal@gmail.com', '01963636363', '2022-01-07 13:17:51'),
(7, 'Asam', 'aslam@gmail.com', '01978656565', '2022-01-07 13:17:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
