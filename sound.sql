-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2024 at 03:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sound`
--

-- --------------------------------------------------------

--
-- Table structure for table `mixes`
--

CREATE TABLE `mixes` (
  `id` int(11) NOT NULL,
  `song_name` varchar(255) NOT NULL,
  `artist_name` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `playlist` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mixes`
--

INSERT INTO `mixes` (`id`, `song_name`, `artist_name`, `image_path`, `playlist`, `created_at`) VALUES
(1, 'Despacito', 'Louis Fonsi', 'Images/Despacito.jpg', 'mixes', '2024-09-01 21:00:58');

-- --------------------------------------------------------

--
-- Table structure for table `party`
--

CREATE TABLE `party` (
  `id` int(11) NOT NULL,
  `song_name` varchar(255) NOT NULL,
  `artist_name` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `playlist` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phonk_play`
--

CREATE TABLE `phonk_play` (
  `id` int(11) NOT NULL,
  `song_name` varchar(255) NOT NULL,
  `artist_name` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `playlist` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `popular_songs`
--

CREATE TABLE `popular_songs` (
  `id` int(11) NOT NULL,
  `song_name` varchar(255) NOT NULL,
  `artist_name` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `playlist` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `raps`
--

CREATE TABLE `raps` (
  `id` int(11) NOT NULL,
  `song_name` varchar(255) NOT NULL,
  `artist_name` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `playlist` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `romantic`
--

CREATE TABLE `romantic` (
  `id` int(11) NOT NULL,
  `song_name` varchar(255) NOT NULL,
  `artist_name` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `playlist` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sad`
--

CREATE TABLE `sad` (
  `id` int(11) NOT NULL,
  `song_name` varchar(255) NOT NULL,
  `artist_name` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `playlist` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trending_play`
--

CREATE TABLE `trending_play` (
  `id` int(11) NOT NULL,
  `song_name` varchar(255) NOT NULL,
  `artist_name` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `playlist` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(3, 'Kashan', 'kashan2345000@gmail.com', '$2y$10$HCafsbeMr7Uj4SUfWtsOvu3TSVXwXPcouZHh2DwY8cqWWWzXSdSz2'),
(4, 'Adnan', 'Adnan2300@gmail.com', '$2y$10$yJ3gDrCMaAcXR8H/R12.v.nyGYuMV/0KmOrIGpIz2DQ0oxXxmMHEW'),
(5, 'Raheel', 'raheel123@gmail.com', '$2y$10$iIOEcXsGRQwdpF9vWEiyX.OM3jmzVeuP1xpE2cXn5wmFbrtyTsvt.'),
(6, 'Amir', 'amir123@gmail.com', '$2y$10$JGPEIOvX8vu5hAGkt5WCHunQPb20nO9owCTUjTq7DDxNPfFJqKWEC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mixes`
--
ALTER TABLE `mixes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `song_name` (`song_name`);

--
-- Indexes for table `party`
--
ALTER TABLE `party`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `song_name` (`song_name`);

--
-- Indexes for table `phonk_play`
--
ALTER TABLE `phonk_play`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `song_name` (`song_name`);

--
-- Indexes for table `popular_songs`
--
ALTER TABLE `popular_songs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `song_name` (`song_name`);

--
-- Indexes for table `raps`
--
ALTER TABLE `raps`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `song_name` (`song_name`);

--
-- Indexes for table `romantic`
--
ALTER TABLE `romantic`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `song_name` (`song_name`);

--
-- Indexes for table `sad`
--
ALTER TABLE `sad`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `song_name` (`song_name`);

--
-- Indexes for table `trending_play`
--
ALTER TABLE `trending_play`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `song_name` (`song_name`);

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
-- AUTO_INCREMENT for table `mixes`
--
ALTER TABLE `mixes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `party`
--
ALTER TABLE `party`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phonk_play`
--
ALTER TABLE `phonk_play`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `popular_songs`
--
ALTER TABLE `popular_songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `raps`
--
ALTER TABLE `raps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `romantic`
--
ALTER TABLE `romantic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sad`
--
ALTER TABLE `sad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trending_play`
--
ALTER TABLE `trending_play`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
