-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2025 at 10:05 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `mobile`, `address`) VALUES
-- (2, 'rthth', 'dfjj', 'fghfgh@gfg.com', ),
-- (4, 'edited', 'jghjghj', 'fghfgh@gfg.com'),
-- (5, 'ghjfgh', 'jghjghj', 'fghfgh@gfg.com'),
-- (6, 'ghjfgh', 'jghjghj', 'fghfgh@gfg.com'),
-- (7, 'test', 'jghjghj', 'fghfgh@gfg.com'),
-- (8, 'cvb', 'dd', 'fghfgh@gfg.com');
(1, 'John', 'Doe', 'john.doe@example.com', '9876543210', '123 Main Street, Springfield'),
(2, 'Jane', 'Smith', 'jane.smith@example.com', '8765432109', '456 Elm Street, Shelbyville'),
(3, 'Alice', 'Johnson', 'alice.johnson@example.com', '7654321098', '789 Oak Avenue, Capital City'),
(4, 'Bob', 'Brown', 'bob.brown@example.com', '6543210987', '101 Pine Lane, Ogdenville'),
(5, 'Eve', 'Davis', 'eve.davis@example.com', '5432109876', '202 Maple Drive, North Haverbrook');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
