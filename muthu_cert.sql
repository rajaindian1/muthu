-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2024 at 11:31 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `muthu_cert`
--

CREATE TABLE `muthu_cert` (
  `id` int(11) NOT NULL,
  `bibid` varchar(15) NOT NULL,
  `rname` varchar(255) NOT NULL,
  `cate` varchar(100) NOT NULL,
  `place` varchar(20) NOT NULL,
  `ftime` varchar(20) NOT NULL,
  `mdate` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `muthu_cert`
--

INSERT INTO `muthu_cert` (`id`, `bibid`, `rname`, `cate`, `place`, `ftime`, `mdate`, `year`) VALUES
(1, '1011', 'John Victor', 'CSK 3K', '3rd', '00:15:12', '28/01/2024', '2024'),
(2, '1012', 'Thamizh Selvam', 'CSK 3K', '1st', '', '', '2024'),
(3, '1013', 'Mutharasu', 'KISSFLOW 6K', '2nd', '00:35:03', '28/01/2024', '2024'),
(4, '1014', 'Guru', 'KISSFLOW 6K', 'FINISHER', '', '28/01/2024', '2024'),
(5, '1015', 'Santhosh', '8K WALK', 'FINISHER', '', '28/01/2024', '2024'),
(6, '1016', 'Mathiyazhagan', '8K WALK', 'FINISHER', '', '28/01/2024', '2024'),
(7, '1017', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `muthu_cert`
--
ALTER TABLE `muthu_cert`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `muthu_cert`
--
ALTER TABLE `muthu_cert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
