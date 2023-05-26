-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 07:14 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aclcdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `clg_candidates`
--

CREATE TABLE `clg_candidates` (
  `candidateID` int(11) NOT NULL,
  `name` varchar(18) NOT NULL,
  `position` varchar(14) NOT NULL,
  `partyList` varchar(20) NOT NULL,
  `yearLvl` varchar(20) NOT NULL,
  `course` varchar(70) NOT NULL,
  `platform` varchar(5000) NOT NULL,
  `picture` varchar(50) NOT NULL DEFAULT 'defaultIMG.jpg',
  `voteCount` int(11) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `dateUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clg_candidates`
--

INSERT INTO `clg_candidates` (`candidateID`, `name`, `position`, `partyList`, `yearLvl`, `course`, `platform`, `picture`, `voteCount`, `dateCreated`, `dateUpdated`) VALUES
(1, 'Power', 'PRESIDENT', 'PARTY LIST A', '2nd year College', 'Bachelor of Science in Computer Science', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'power.jpg', 10, '2023-04-09 15:57:33', '2023-05-20 01:04:45'),
(2, 'Hange Zoe', 'VICE PRESIDENT', 'PARTY LIST A', '4th year College', 'Bachelor of Science in Computer Science', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'hange.jpg', 4, '2023-05-05 11:34:51', '2023-05-10 12:34:32'),
(3, 'Nico Robin', 'SECRETARY', 'PARTY LIST A', '4th year College', ' Bachelor of Science in Accounting Information Sys', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'robin.jpg', 0, '2023-04-09 16:15:28', '2023-04-09 16:29:59'),
(4, 'Gintoki Sakata', 'TREASURER', 'PARTY LIST A', '4th year College', 'Associate in Computer Technology', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'sakata.jpg', 5, '2023-04-09 16:15:28', '2023-05-14 03:15:47'),
(5, 'Sakuragi Hanamichi', 'COLLEGE REP', 'PARTY LIST A', '1st year College', 'Associate in Computer Technology', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'sakuragi.jpg', 0, '2023-05-14 07:59:19', '2023-05-18 14:27:15'),
(6, 'Okita Sougo', 'PRESIDENT', 'PARTY LIST B', '3rd year College', 'Bachelor of Science in Computer Science', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'sougo.jpg', 0, '2023-05-14 08:00:28', '2023-05-14 08:00:49'),
(7, 'Nobara Kugisaki', 'VICE PRESIDENT', 'PARTY LIST B', '3rd year College', 'Bachelor of Science in Accounting Information System', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'nobara.jpg', 0, '2023-04-21 15:22:42', '2023-05-14 08:01:01'),
(8, 'Ayame Sarutobi', 'SECRETARY', 'PARTY LIST B', '4th year College', 'Bachelor of Science in Computer Science', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'sacchan.jpg', 0, '2023-04-21 15:27:43', '2023-05-14 08:01:10'),
(9, 'Rin Tosahka', 'TREASURER', 'PARTY LIST B', '2nd year College', 'Bachelor of Science in Accounting Information System', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'rin.jpg', 5, '2023-05-05 11:36:31', '2023-05-14 08:01:17'),
(10, 'Sasha Braus', 'COLLEGE REP', 'PARTY LIST B', '2nd year College', 'Bachelor of Science in Accounting Information System', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'sasha.jpg', 5, '2023-05-14 08:05:21', '2023-05-19 18:19:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clg_candidates`
--
ALTER TABLE `clg_candidates`
  ADD PRIMARY KEY (`candidateID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clg_candidates`
--
ALTER TABLE `clg_candidates`
  MODIFY `candidateID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
