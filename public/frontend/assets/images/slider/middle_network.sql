-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 12:57 PM
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
-- Database: `middle_network`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobileNumber` varchar(10) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `userName`, `email`, `password`, `mobileNumber`, `date_added`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2b$10$EHdxzgH9JelzJJycmJ/Deeb/htVfFNOnX2jKBhPSwX9bSMPBnC8kC', '8917418977', '2023-08-14 06:42:13'),
(2, 'Satabdi Karubaki', 'satabdi@gmail.com', '$2b$10$RjMaAKszTgGRYHKLrvGNauJyff.XK7K5OpcW9tOJWtZu6VeB9TURK', '9078749930', '2023-08-14 06:51:44'),
(3, 'Madeline_Dicki53', 'Willard72@yahoo.com', '$2b$10$kQtzucMR4taesJg3Xlag3O8rruuwNqWQ9PW97e8crg3pjL0pisyz2', '123456788', '2023-09-20 05:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `affiliate`
--

CREATE TABLE `affiliate` (
  `id` int(11) NOT NULL,
  `affiliate_link` varchar(500) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('active','inactive','','') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `affiliate`
--

INSERT INTO `affiliate` (`id`, `affiliate_link`, `date_added`, `status`) VALUES
(2, 'https://corponizers.com/', '2023-09-07 09:35:08', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `artist_name` varchar(255) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `profile_pic` varchar(500) NOT NULL,
  `instagram_id` varchar(100) NOT NULL,
  `spotify_id` varchar(100) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `artist_name`, `email`, `password`, `profile_pic`, `instagram_id`, `spotify_id`, `contact_no`, `status`, `date_added`) VALUES
(26, 'subhransu barik ', 'ashaa@gmail.com', '$2b$10$Qr8CcLY4D7laR.2gf/opJO.ugssFuhvLfOxQ0dnsx7ekf.//6cJfa', 'uploads\\1693896703314-astro7.png', 'tech_wizard', '1McMsnEElThX1knmY4oliG', '123456788', 'inactive', '2023-11-30 06:46:45'),
(24, 'subhransu barik ', 'asha@gmail.com', '$2b$10$IJIEl5Vi3Q4RgtOCkFRO5OUF4A1AUTC4.NZVJ7N6VW0uTpSIJSd/q', 'uploads\\1693896182577-astro7.png', 'tech_wizard', '6HaGTQPmzraVmaVxvz6EUc', '123456989', 'inactive', '2023-09-20 16:45:29'),
(27, 'subhransu barik ', 'satu@gmail.com', '$2b$10$vb9k.WZFiF3V1h/TLNeeS.snE6fTY9TZYcEBrf19JTcJtiu0Zq8.G', 'uploads\\1693896709137-astro7.png', 'tech_wizard', '2BC5YpA6FqvLcqFCzF3FzH', '183456789', 'inactive', '2023-09-12 09:41:46'),
(28, 'subhransu barik ', 'hh@gmail.com', '$2b$10$IevkrWWSYKt/6RFh6deUN.6o7wlKcfsfrAlPxsZbcDiJOGkEtuuJa', 'uploads\\1693896714661-astro7.png', 'tech_wizard', '06HL4z0CvFAxyc27GXpf02', '103456789', 'inactive', '2023-09-20 16:46:35'),
(29, 'Deba', 'some@some', 'abc', '', '', '6wUJkXMlCHsqCY1WAtwsm1', '0', 'active', '2023-09-20 17:06:06'),
(30, 'artist', 'artist@gmail.com', '$2b$10$ehIsD8ORVrRBUauCTvJsp.PShvchbgXV7Su4LSVngbXmTuO/tWf/K', 'uploads\\1695188934910-pexels-jorge-jesus-614117.jpg', 'nayak__deba', '6HaGTQPmzraVmaVxvz6EUc', '640-453-1327', 'active', '2023-09-20 16:46:46'),
(31, 'artist', 'ranveer@gmail.com', '$2a$08$ko5VE9QictZQTXYD5Eo68.O4Bdn9mYPsALKC5Hu66gh.t1h0Ceeme', 'uploads\\1695188934910-pexels-jorge-jesus-614117.jpg', 'ranveer', '6ZcvVBPQ2ToLXEWVbaw59P', '1234948405', 'active', '2023-12-04 06:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `venue` varchar(300) NOT NULL,
  `genres` varchar(200) NOT NULL,
  `promoterId` int(11) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `cost` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `visibility` enum('public','hidden') NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `approve` enum('0','1') NOT NULL,
  `description` varchar(500) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `artist_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `venue`, `genres`, `promoterId`, `image`, `cost`, `age`, `visibility`, `status`, `approve`, `description`, `startDate`, `endDate`, `startTime`, `endTime`, `artist_id`) VALUES
(24, 'an exciting event', 'some where', 'kpop', 0, 'seven.jfif', 0, 18, 'public', 'active', '0', 'some description', '1899-11-01', '0000-00-00', '12:20:00', '12:40:00', 30),
(25, 'an exciting event 90', 'some where', 'kpop', 0, 'seven.jfif', 0, 18, 'public', 'active', '0', 'some description', '1888-12-04', '0000-00-00', '12:20:00', '12:40:00', 30),
(21, 'event 90 neha kakkar', 'india, Mumbai , dill kobar', 'acid', 1, 'seven.jfif', 200, 18, 'public', 'inactive', '0', 'your boy honey singh is here to entertain you come and enjoy the show.', '2023-08-29', '2023-08-30', '10:00:00', '12:00:00', NULL),
(23, 'an exciting event', 'some where', 'kpop', 0, 'seven.jfif', 0, 18, 'public', 'active', '0', 'some description', '2023-09-01', '0000-00-00', '12:20:00', '12:40:00', 30),
(28, 'deba', 'veve', 'some genres', 20, 'image,', 0, 90, 'public', 'active', '0', 'some description', '2022-12-12', '2022-12-12', '20:10:00', '20:12:00', 20),
(29, 'a new exciting event', 'some where', 'kpop', NULL, '1695210928725-pexels-thisisengineering-3861969.jpg', 0, 18, 'public', 'active', '0', 'some description', '0000-00-00', '0000-00-00', '11:20:00', '12:40:00', NULL),
(30, 'a new exciting event', 'some where', 'kpop', NULL, '1695210968517-pexels-thisisengineering-3861969.jpg', 0, 18, 'public', 'active', '0', 'some description', '1897-12-04', '0000-00-00', '11:20:00', '12:40:00', NULL),
(31, 'a new exciting event', 'some where', 'kpop', NULL, '1695214593383-pexels-thisisengineering-3861969.jpg', 0, 18, 'public', 'active', '0', 'some description', '0000-00-00', '0000-00-00', '11:20:00', '12:40:00', NULL),
(32, 'a new exciting event', 'some where', 'kpop', NULL, '1695214699031-pexels-thisisengineering-3861969.jpg', 0, 18, 'public', 'active', '0', 'some description', '0000-00-00', '0000-00-00', '11:20:00', '12:40:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `magazine`
--

CREATE TABLE `magazine` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date_published` date DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('active','inactive') NOT NULL,
  `approve` enum('0','1') NOT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `magazine`
--

INSERT INTO `magazine` (`id`, `title`, `description`, `image`, `date_published`, `date_added`, `status`, `approve`, `link`) VALUES
(7, 'subhransu magazine', 'subhransu barikmagazine is published by the best author that is subhransu barik about how to write clean and better code......', 'seven.jfif', NULL, '2023-09-18 07:26:05', 'active', '0', 'https://en.wikipedia.org/wiki/Seven_(Jungkook_song)'),
(8, 'Rozalin magazine', 'satabdi magazine is published by the best author that is satabdi about how to write clean and better code......	', 'seven.jfif', NULL, '2023-09-18 07:26:05', 'active', '1', 'https://en.wikipedia.org/wiki/Seven_(Jungkook_song)'),
(9, 'archana magazine', 'archana barik magazine is published by the best author that is subhransu barik about how to write clean and better code......', 'seven.jfif', NULL, '2023-09-18 07:26:05', 'inactive', '0', 'https://en.wikipedia.org/wiki/Seven_(Jungkook_song)'),
(10, 'lory magazine', 'archana barik magazine is published by the best author that is subhransu barik about how to write clean and better code......', 'seven.jfif', NULL, '2023-09-18 07:26:05', 'active', '0', 'https://en.wikipedia.org/wiki/Seven_(Jungkook_song)'),
(11, 'mitu magazine', 'archana barik magazine is published by the best author that is subhransu barik about how to write clean and better code......', 'seven.jfif', NULL, '2023-09-18 07:26:05', 'inactive', '0', 'https://en.wikipedia.org/wiki/Seven_(Jungkook_song)');

-- --------------------------------------------------------

--
-- Table structure for table `middle_network`
--

CREATE TABLE `middle_network` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `playlist_id` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('inactive','active') NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `link`, `date_added`, `status`, `image`, `description`) VALUES
(15, 'news title edited', 'https://en.wikipedia.org/wiki/Seven_(Jungkook_song)', '2023-09-20 18:16:58', 'inactive', 'seven.jfif', 'The 1965 novel was previously made into a cult film released in 1979'),
(4, 'some title', 'https://en.wikipedia.org/wiki/Seven_(Jungkook_song)', '2023-09-20 18:16:58', 'inactive', 'seven.jfif', 'The 1965 novel was previously made into a cult film released in 1979'),
(6, 'edited ltitle', 'https://en.wikipedia.org/wiki/Seven_(Jungkook_song)', '2023-09-20 18:16:58', 'inactive', 'seven.jfif', 'The 1965 novel was previously made into a cult film released in 1979'),
(7, 'edited ltitle', 'https://en.wikipedia.org/wiki/Seven_(Jungkook_song)', '2023-09-20 18:16:58', 'inactive', 'seven.jfif', 'The 1965 novel was previously made into a cult film released in 1979'),
(8, 'edited ltitle', 'https://en.wikipedia.org/wiki/Seven_(Jungkook_song)', '2023-09-20 18:16:58', 'inactive', 'seven.jfif', 'The 1965 novel was previously made into a cult film released in 1979'),
(9, 'edited ltitle', 'https://en.wikipedia.org/wiki/Seven_(Jungkook_song)', '2023-09-20 18:16:58', 'inactive', 'seven.jfif', 'The 1965 novel was previously made into a cult film released in 1979'),
(10, 'edited ltitle', 'https://en.wikipedia.org/wiki/Seven_(Jungkook_song)', '2023-09-20 18:16:58', 'active', 'seven.jfif', 'The 1965 novel was previously made into a cult film released in 1979'),
(13, 'news title edited', 'https://en.wikipedia.org/wiki/Seven_(Jungkook_song)', '2023-09-20 18:16:58', 'active', 'seven.jfif', 'The 1965 novel was previously made into a cult film released in 1979'),
(16, 'news title edited', 'https://en.wikipedia.org/wiki/Seven_(Jungkook_song)', '2023-09-20 18:16:58', 'inactive', 'seven.jfif', 'The 1965 novel was previously made into a cult film released in 1979'),
(17, 'some title', 'some link', '2023-09-20 18:37:47', 'inactive', 'some image', 'some description');

-- --------------------------------------------------------

--
-- Table structure for table `promoters`
--

CREATE TABLE `promoters` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promoters`
--

INSERT INTO `promoters` (`id`, `name`) VALUES
(2, 'satabdikarubaki');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `artistId` varchar(255) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `review_date` date DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `email` varchar(25) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `email`, `phone`) VALUES
(1, 'd', '90');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `number` varchar(50) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `dob` date NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `otp` varchar(100) NOT NULL,
  `otpExpiresIn` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `photo`, `number`, `gender`, `dob`, `status`, `otp`, `otpExpiresIn`) VALUES
(1, 'subhransu', 'Barik', 'barik@gmail.com', '', '789456123', 'male', '2023-09-16', 'active', '5000', '2023-09-12 13:54:45'),
(2, 'karubaki', 'kini', 'ask@gmail.com', '', '741852963', 'female', '2000-04-14', 'active', '', '0000-00-00 00:00:00'),
(3, 'Ashaparava', 'Sahoo', 'satabdi@gmail.com', '', '8917417897', 'female', '2023-09-09', 'active', '', '0000-00-00 00:00:00'),
(4, 'satabdi karubaki', 'nayak', 'barik@gmail.com', '', '7894561234', 'female', '2222-12-07', 'active', '', '0000-00-00 00:00:00'),
(5, 'anand', 'das', 'ananddas@gmail.com', '', '78645678', 'male', '2017-06-15', 'active', 'WmJMcu', '2023-12-05 01:47:33'),
(6, 'avishek', 'das', 'avishekdas@gmail.com', '', '70909876', 'male', '2017-07-18', 'active', 'HotOXr', '2023-12-05 02:06:13'),
(7, 'avishek', 'mishra', 'avishekmishra@gmail.com', '', '70909876', 'male', '2017-07-18', 'active', '719694', '2023-12-05 02:42:59'),
(8, 'avishek', 'mishra', 'monalisamahanta98@gmail.com', '', '70909876', 'male', '2017-07-18', 'active', '320515', '2023-12-05 02:45:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `affiliate`
--
ALTER TABLE `affiliate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact_no` (`contact_no`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ariist` (`artist_id`),
  ADD KEY `fk` (`promoterId`);

--
-- Indexes for table `magazine`
--
ALTER TABLE `magazine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promoters`
--
ALTER TABLE `promoters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`number`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `affiliate`
--
ALTER TABLE `affiliate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `magazine`
--
ALTER TABLE `magazine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `promoters`
--
ALTER TABLE `promoters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
