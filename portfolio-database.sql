-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 04, 2024 at 01:21 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(11) NOT NULL,
  `email_sender` varchar(255) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text,
  `date_send` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `email_sender`, `subject`, `message`, `date_send`) VALUES
(2, 'nuno@gmail.com', 'Metting', 'This is the text for example email', '2024-07-04 11:09:49'),
(4, 'vdab@vdab.be', 'Loon', 'I need to do the loon for this month.\r\n\r\nbest regards\r\n\r\nJunior Dev', '2024-07-04 11:35:28'),
(6, 'jan@vdab.be', 'New Class', 'Hallo,\r\n\r\nfrom now on we gonna have 4 lessons per week.\r\n\r\nbest regards\r\n\r\nJan VDAB', '2024-07-04 11:41:01'),
(7, 'emmy@vdab.be', 'new Classes', 'Hallo,\r\n\r\nfrom now on we gonna have 4 lessons per week.\r\n\r\nbest Regards \r\n\r\nEmmy VDAB', '2024-07-04 11:46:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
