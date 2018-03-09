-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `horseclub`
--

-- --------------------------------------------------------

--
-- Структура на таблица `blog`
--

CREATE TABLE `blog` (
  `post_id` int(11) NOT NULL,
  `post_title` text NOT NULL,
  `post_text` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `blog`
--

INSERT INTO `blog` (`post_id`, `post_title`, `post_text`, `user_id`, `date_created`) VALUES
(1, 'Great Website', 'this is a very good website just want to say this to the owners of this service', 2, '2017-05-02 08:26:12'),
(2, 'Test Post', 'this is a test!!!', 2, '2017-05-02 10:05:39'),
(3, 'good service ', 'good service good service good service ', 3, '2017-05-02 10:45:18'),
(8, 'amazing webservice', 'i just want to say that this is amazing website ', 2, '2017-05-02 12:51:04'),
(9, 'breaking news:shark attacks!!!', 'shark attacks!!! around the world', 2, '2017-10-15 16:59:53'),
(12, 'blablabla', 'sdsdsdsd', 2, '2017-10-15 20:16:33');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`, `email`, `status`) VALUES
(2, 'Valeri Zaykov', '095b2626c9b6bad0eb89019ea6091bd9', 'valeri.zaykov@gmail.com', 'A'),
(3, 'Petar Petrov', 'e3e7f312a36e128c29a42352bb4ff8d7', 'peterp@gmail.com', 'A'),
(7, 'gosho', '202cb962ac59075b964b07152d234b70', 'gosho@mail.com', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
