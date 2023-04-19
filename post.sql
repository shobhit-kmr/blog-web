-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2022 at 08:22 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `post`
--

-- --------------------------------------------------------

--
-- Table structure for table `loginblog`
--

CREATE TABLE `loginblog` (
  `id` int(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post_tab`
--

CREATE TABLE `post_tab` (
  `id` int(25) NOT NULL,
  `userid` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `last_modified` varchar(30) NOT NULL,
  `blog_title` varchar(200) NOT NULL,
  `blog_content` longtext NOT NULL,
  `banner_img` varchar(80) NOT NULL,
  `categories` varchar(40) NOT NULL,
  `tags` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_tab`
--

INSERT INTO `post_tab` (`id`, `userid`, `date`, `last_modified`, `blog_title`, `blog_content`, `banner_img`, `categories`, `tags`) VALUES
(1, 'abc123', '2022-11-10', '2022-11-17', 'hello boby', 'i am boby ', '', 'app development', 'tags'),
(4, 'abc123', '2022-11-09', '2022-11-22', 'hello boby', 'i am boby ', 'WhatsApp Image 2022-11-11 at 9.16.18 PM.jpeg', 'app development', 'tags'),
(5, 'aftab123', '2022-11-30', '2022-11-22', 'Hello aftab', 'hy i am aftab alam', 'Photo.png', 'web development', '#boby'),
(6, 'sanjeev@123', '2022-11-30', '2022-11-10', 'hello sanjeev', 'hy i am sanjeev', 'Video.png', 'web development', '#narender'),
(7, 'sanjeev5555', '2022-12-09', '2022-11-10', 'hello sanjeev how are you', 'hy i am sanjeev fine now', 'Video.png', 'web development', '#narender'),
(8, 'sanjeev5555', '2022-12-09', '2022-11-10', 'hello sanjeev how are you', 'hy i am sanjeev fine now', 'Video.png', 'web development', '#narender'),
(9, 'sanjeev5555', '2022-12-09', '2022-11-10', 'hello sanjeev how are you', 'hy i am sanjeev fine now', 'Video.png', 'web development', '#narender'),
(10, 'narender', '2023-01-26', '2022-11-16', 'hello narender how are you', 'hy i am narender now', 'Promotion.png', 'web development', '#sanjeev'),
(11, 'narender', '2023-01-26', '2022-11-16', 'hello narender how are you', 'hy i am narender now', 'Promotion.png', 'web development', '#sanjeev'),
(12, 'narender', '2023-01-26', '2022-11-16', 'hello narender how are you', 'hy i am narender now', 'Promotion.png', 'web development', '#sanjeev'),
(13, 'narender', '2023-01-26', '2022-11-16', 'hello narender how are you', 'hy i am narender now', 'WhatsApp Image 2022-08-30 at 11.02.28 AM.jpeg', 'web development', '#sanjeev'),
(14, 'narender singh', '2023-01-26', '2022-11-16', 'hello narender how are you', 'hy i am narender now', 'Mask group.png', 'web development', '#sanjeev'),
(15, 'narender singh', '2023-01-26', '2022-11-16', 'hello narender how are you', 'hy i am narender now', 'Mask group.png', 'web development', '#sanjeev'),
(22, 'sanjeev5555', '2022-11-22', '2022-11-10', 'hello narender how are you', '<p>let start with the task to reach the goal of your life&nbsp;</p>', 'img3.jpg', 'App Development', 'dgsdg'),
(23, 'sanjeev@123', '2022-11-07', '', 'hello boby', '<p>&nbsp;gnhmjhmkmhngfbvfgnhnjmtjmmtjymnhnhhnhngh</p>', 'lko.jpg', 'App Development', '#narender'),
(31, 'anuradha', '2022-11-16', '2022-11-17', 'life', '<p>jindagi khubsurat sapno ka seher hai kabhi kabhi sach me sapna ban jaati hai aur kabhi hakikat. isse jeena hai to yaado ke sath jiyo taki jab iss duniya se jao to sath me yaade jaye na ki sapne.</p><p>kabhi pachhtava ya&nbsp; kash apni jindagi me na chhodo jo&nbsp; karna hai jab karna hai kr lo, baad me na kehne ko rahe ki kash ye uss wqt kr liya hota .&nbsp;</p><p>alwys keep smiling......smile is the best soution of every problem</p>', 'shiv.jfif', 'App Development', 'zindagi'),
(32, '', '0000-00-00', '', '', '', '', '', 'xg'),
(33, '', '0000-00-00', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loginblog`
--
ALTER TABLE `loginblog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tab`
--
ALTER TABLE `post_tab`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginblog`
--
ALTER TABLE `loginblog`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_tab`
--
ALTER TABLE `post_tab`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
