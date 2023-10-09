-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2023 at 01:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acadbridge`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `stud_id` int(11) NOT NULL,
  `stud_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`stud_id`, `stud_name`, `email`, `username`, `password`, `user_type`) VALUES
(42, 'Administrator', 'systemadmin@gmail.com', 'system', '$2y$10$PQ0r0F5IRBLrV6WviZS7SOXLL1jQUT00ihzd9bqZcIn4UXTmNe7Qm', 3),
(46, 'Edward Pulvera', 'edward@gmail.com', 'edward', '$2y$10$cIxGZFJLt25AOKahDDAz4.9.0hn9ZEWl4AuUsuc8Nfwr4A/wrQWLC', 2),
(47, 'Asnari B. Pacalna', 'asnaripacalna@gmail.com', 'asnari', '$2y$10$U4HQXjETFU17jL26jqgQxu8qyvbgleXoBNq/ilfBuoLVqrrDIaW66', 1),
(48, 'Vincent Ace Rivera', 'augusto@gmail.com', 'ace', '$2y$10$HfnciaY1d0C1Z37bSXBtc.wi8fm6RdkBnJ2LhGC5Wh55tgBW1f0lW', 1),
(49, 'Gene Ryan A. Depalubos', 'ryan@gmail.com', 'ryan', '$2y$10$jtuwbHnnAF7FNOvTMvzpOOx.7quOxWRjC5pBTm9nG41PmLDZ.BTp.', 1),
(50, 'Arjay Escabas', 'arjay@gmail.com', 'arjay', '$2y$10$uNtMvevTYVS5RbL6RpWcNetFIkHQUH.NiPTW/7bxHW/nH7XgE0RUa', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`stud_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
