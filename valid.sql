-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2021 at 09:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `valid`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `cellnumber` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dele_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `cellnumber`, `email`, `dele_id`) VALUES
(1, 'Mian', 'Hamza', '0311590584', 'infohamza23@gmail.com', 0),
(2, 'Muhammad', 'Hamza', '03335905858', 'engineerhamza33@gmail.com', 0),
(5, 'Muhammad', 'Faizan ', '1234567', 'faizan12345@gmail.como', 0),
(6, 'Muhammad', 'Faizan ', '123456789', 'faizan123456@gmail.como', 0),
(8, 'Mian ', 'Umar', '03337878', 'usman@gmail.com', 0),
(10, 'Muhammad', 'Hamza', '03335906898', 'infohamza238@gmail.com', 1),
(11, 'Faiqa', 'Anjum', '0333345454', 'faiqa@gmail.com', 1),
(12, 'Ahmad ', 'Ali', '03333333333', 'ahmed@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
