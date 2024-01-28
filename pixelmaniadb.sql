-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2021 at 02:00 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `text`) VALUES
(23, 'umesh', 'this wabsite is good');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `title`, `image`) VALUES
(1, 'first', 0x646f776e6c6f61642e706e67),
(2, 'ship', 0x372e6a7067),
(5, 'spiderman', 0x7370696465726d616e2e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `mobile`, `password`, `cpassword`, `usertype`) VALUES
(1, 'umesh', 'umesh@gmail.com', '1234567890', '$2y$10$HmZinn80Clj1Ff2OPRYrfeRqJTY8EYQXyZn9nSDg6B/o/VP/xo8JS', ' $2y$10$iRYJ/4BSFCnbDc0Elg94U.PgG2WleoO/L0QOaAchWsjbMOsosvFFy', 'user'),
(3, 'kalpit', 'kalpittamboli63@gmail.com', '6378049030', '$2y$10$1OsbYVv7fnzSOSNlFnUV6.LOH6oy6jOn9YJMdyTBXy0enj7MAXNmm', ' $2y$10$V/9DLVU3BzRTAD9CI1v5JukfRHlR2Pws9w7mIrTaxgIHr4CqXu.L6', 'admin'),
(4, 'arpit', 'arpit@yahoo.com', '7465829312', '$2y$10$qh2vZuzFSDBDOiUl7gif/O7uATTw9UfTy64Kc7q8Hu4XZtmxZQIiy', ' $2y$10$8qKtmS1jXqDntctSyOcGnOfZFj39G9ON0vP8nSYfeQex0dB52qw9W', 'user'),
(5, 'kavi', 'kavi@gmail.com', '2536498571', '$2y$10$DhFTPXCrdPxoltok3eW6p.LaqC48Dp0oKxsq7ZQqoInDJUpx5XCIK', ' $2y$10$dSzLSZZ8ONF.lywNtCU/xe0r4xXYSIKe25WQvXuTg2evf8Sxn1xF.', 'user'),
(6, 'raju', 'raju@gmail.com', '2341567251', '$2y$10$kamJdJMCroUdmSUmBZkn3uoctkH3xWuQOI/kvGW8FtktgsFQpyD1m', ' $2y$10$z0muoxXgtlhrkVbUy0tsEef5fWNrG4A5uwZnJR7AEqTQ6smFFBAYi', 'user'),
(7, 'shippu', 'shippu10@gmail.com', '6748354675', '$2y$10$73ctBrigFbOl4kIGd8srJOC0jh5Jjdximx6K7C.CLGizlkfRJfmzG', ' $2y$10$LYZm/eJR95eeL5RGQGekGecMn7MYlh1CGMo/ZeRxl64HKlWY7YkFS', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `email`, `text`) VALUES
(4, 'arpit@yahoo.com', 'i cannot create account'),
(5, 'asdesafd@gmail.com', 'i cannot download image.\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
