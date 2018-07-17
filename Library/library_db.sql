-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2018 at 12:18 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_list`
--

CREATE TABLE `book_list` (
  `id` int(11) NOT NULL,
  `bookid` varchar(255) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `isbn` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `added` datetime NOT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_list`
--

INSERT INTO `book_list` (`id`, `bookid`, `book_name`, `author`, `isbn`, `category`, `added`, `status`) VALUES
(4, '14', ' AEIOU or Any Easy Intimacy', 'Jeffrey Brown', 978, 'Mature ', '2018-04-06 16:31:23', 1),
(5, '15', 'The Barefoot Serpent (softcover) ', 'Scott Morse', 978, 'Young ', '2018-04-06 16:35:15', NULL),
(6, '16', ' Lone Racer ', 'Nicolas Mahler', 978, 'Horror', '2018-04-06 16:35:51', NULL),
(7, '17', 'Magic Boy and the Robot Elf ', 'James Kochalka', 978, 'Adventure', '2018-04-06 16:36:44', NULL),
(8, '18', 'The Ambassadors', 'Henry James', 503867, 'Dark Comedy', '2018-04-06 16:38:21', NULL),
(9, '19', 'Finnegans Wake', 'James Joyce', 42692059, 'Sui generis', '2018-04-06 16:39:37', NULL),
(10, '20', 'Lolita', 'Vladimir Nabokov', 336, ' 	Novel', '2018-04-06 16:40:53', NULL),
(11, '21', 'The Great Gatsby', 'F. Scott Fitzgerald', 4583536, 'Novel', '2018-04-06 16:41:31', NULL),
(12, '22', 'A Passage to India', 'E.M. Forster', 59352597, 'History', '2018-04-06 16:42:35', NULL),
(13, '23', 'On the Road', 'Jack Kerouac', 43419454, 'History', '2018-04-06 16:43:22', NULL),
(14, '24', 'To the Lighthouse', 'Virginia Woolf', 2147483647, 'Modernism', '2018-04-06 16:44:29', NULL),
(15, '25', 'Women in Love', ' 	D. H. Lawrence', 89567894, 'Novel', '2018-04-06 16:45:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lend`
--

CREATE TABLE `lend` (
  `id` int(11) NOT NULL,
  `bookid` varchar(255) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `person_name` varchar(255) NOT NULL,
  `lend_date` datetime NOT NULL,
  `return_date` datetime NOT NULL,
  `actual_return` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lend`
--

INSERT INTO `lend` (`id`, `bookid`, `book_name`, `person_name`, `lend_date`, `return_date`, `actual_return`, `status`) VALUES
(54, '14', ' AEIOU or Any Easy Intimacy', 'F', '2018-04-06 19:31:55', '2018-04-09 19:31:55', '2018-04-07 00:13:08', 1),
(55, '15', 'The Barefoot Serpent (softcover) ', 'F', '2018-04-06 19:31:58', '2018-04-09 19:31:58', '2018-04-06 23:37:14', 1),
(56, '15', 'The Barefoot Serpent (softcover) ', 'F', '2018-04-06 19:35:18', '2018-04-09 19:35:18', '2018-04-06 23:37:14', 1),
(57, '16', ' Lone Racer ', 'F', '2018-04-06 23:35:51', '2018-04-09 23:35:51', '2018-04-06 23:37:12', 1),
(58, '14', ' AEIOU or Any Easy Intimacy', 'F', '2018-04-06 23:37:43', '2018-04-09 23:37:43', '2018-04-07 00:13:08', 1),
(59, '14', ' AEIOU or Any Easy Intimacy', 'faisal', '2018-04-07 00:16:55', '2018-04-10 00:16:55', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES
(1, 'a', 'a', 'faisal@xfaisal.com', 'a', '1'),
(2, 'Faisal', 'Ahamed', 'faisal@xfaisal.com', 'faisal', '1234'),
(3, 'Faisal', 'Ahamed', 'faisal@xfaisal.com', 'f', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_list`
--
ALTER TABLE `book_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lend`
--
ALTER TABLE `lend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_list`
--
ALTER TABLE `book_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `lend`
--
ALTER TABLE `lend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
