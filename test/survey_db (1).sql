-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 09:28 AM
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
-- Database: `survey_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `survey_responses`
--

CREATE TABLE `survey_responses` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `age` int(11) NOT NULL,
  `favoriteFoods` varchar(255) NOT NULL,
  `rating1` int(11) NOT NULL,
  `rating2` int(11) NOT NULL,
  `rating3` int(11) NOT NULL,
  `rating4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `survey_responses`
--

INSERT INTO `survey_responses` (`id`, `fullName`, `email`, `contact`, `birthdate`, `age`, `favoriteFoods`, `rating1`, `rating2`, `rating3`, `rating4`) VALUES
(5, 'Sanele Nkosi', 'imanathi17@gmail.com', '0769582204', '2000-06-02', 23, 'Pap and Wors', 1, 1, 1, 1),
(9, 'Samkele Khumalo', 'Samkele@gmail.com', '0785151211', '2007-08-07', 16, 'Pizza, Pasta', 1, 4, 1, 1),
(10, 'Amahle', 'amahle123@gmail.com', '0715005420', '2012-05-02', 12, 'Pizza, Pap and Wors, Other', 1, 1, 1, 1),
(12, 'Syabonga Nkosi', 'Syabonga@gmail.com', '0715005420', '2000-11-06', 23, 'Pizza, Pap and Wors', 1, 5, 1, 5),
(16, 'Keletso Senyolo', 'Keletso@gmail.com', '0715005420', '1996-10-16', 27, 'Pizza, Pap and Wors, Other', 1, 5, 2, 3),
(20, 'Zanokuhle', 'Zano@gmail.com', '0715005420', '2015-05-06', 9, 'Pizza, Pap and Wors', 1, 2, 5, 4),
(21, 'Imanathi', 'imanathi17@gmail.com', '0769582204', '2017-11-15', 6, 'Pizza, Pasta, Pap and Wors', 1, 5, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `survey_responses`
--
ALTER TABLE `survey_responses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `survey_responses`
--
ALTER TABLE `survey_responses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
