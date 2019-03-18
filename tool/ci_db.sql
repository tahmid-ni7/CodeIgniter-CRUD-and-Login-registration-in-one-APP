-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2019 at 09:20 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_user_id` int(11) NOT NULL,
  `project_name` varchar(222) NOT NULL,
  `project_body` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_user_id`, `project_name`, `project_body`, `created_date`) VALUES
(1, 0, 'PHP', 'Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.', '2019-03-05 07:40:22'),
(4, 0, 'Codeigniter', 'For building a web application you spend a lot of time in writing the same code again and again. Frameworks provide you a starting block and minimize the amount of code needed to build a website.\r\n\r\nCodeIgniter is PHP driven framework but it\'s not a PHP substitute. Diving into CodeIgniter doesn?t mean you are leaving PHP behind. PHP is a server-side scripting language for building dynamic web-based applications.\r\n\r\nCodeIgniter contains libraries, simple interface and logical structure to access these libraries, plug-ins, helpers and some other resources which solve the complex functions of PHP more easily maintaining a high performance. It simplifies the PHP code and brings out a fully interactive, dynamic website at a much shorter time. It supports PHP version of 5.2.6 or newer and MySQL version 4.1 or newer. It makes your web more robust and your code easier to read and maintain. It is a free toolkit, light weight and easier to install.\r\n\r\nA person using CodeIgniter must be familiar with PHP. You need to have a good knowledge about PHP like its basic syntax and how it interacts with database and HTML.', '2019-03-06 09:19:52'),
(5, 0, 'HTML', 'HTML tutorial or HTML 5 tutorial provides basic and advanced concepts of HTML. Our HTML tutorial is developed for beginners and professionals. In our tutorial, every topic is given step-by-step so that you can learn it in a very easy way. If you are new in learning HTML, then you can learn HTML from basic to a professional level and after learning HTML with CSS and JavaScript you will be able to create your own interactive and dynamic website. But Now We will focus on HTML only in this tutorial.', '2019-03-06 09:40:26'),
(7, 0, 'Bootstrap', 'Bootstrap is awesome...Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.', '2019-03-06 10:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `reg_date`, `username`, `password`) VALUES
(4, 'Izaz', 'Tahur', 'user@system.com', '2019-03-04 14:28:35', 'izaz', '$2y$12$7aetCkYPzorm/HeUBER4Bu1OzE4Dqwpt9/L2wzZb3wisSIQF4ObFK'),
(6, 'Tahmid', 'Nishat', 'tahmid.ni7@gmail.com', '2019-03-04 15:00:39', 'tahmid', '$2y$12$xget.qowdO8N/QRJdz1yee3jkHBgxLdpJHL0wsar1k7gWOuioG.Yy'),
(7, 'Tahmid', 'Nishat', 'user@system.com', '2019-03-04 15:01:35', 'nishat', '$2y$12$LQ.l.n205UM7NPbbgFYcm.PUdk4mseaKj9DvnDLjmf9AQfluLD1NC'),
(22, 'Tahmid', 'Nishat', 'tahmid.ni7@gmail.com', '2019-03-04 16:20:03', 'nishat07', '$2y$12$HyNg7kbyqhcTZqtfGtoTWud8L.7v3ZFT8bx3qu3AWevJZSa3ZWepm'),
(23, 'Tahmid', 'Nishat', 'tahmid.ni7@gmail.com', '2019-03-06 08:25:09', 'tahmid7', '$2y$12$JFCo04b7nhSLr43qldqshePMey90wVMCAZJmD1q2t8v3isMRgcsPO'),
(24, 'Izaz', 'Tahur', 'izaz@gmail.com', '2019-03-06 11:48:56', 'tahur', '$2y$12$PFwV1lapT2Puea/ikpuvX.nU/Fm4CBOelwZXdsnAE2wWPhlA6yj.O');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
