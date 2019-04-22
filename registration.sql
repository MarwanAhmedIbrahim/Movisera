-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2018 at 10:19 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Marwan_14k', 'marwan.ahmed14@icloud.com', '98093698bcb65053046a8304c9fbda19'),
(2, 'meho97', 'mehad@gmail.com', '5e424cf8654e1b50c97f24129e38cd6c'),
(3, 'manar_23k', 'totifroty_2010@yahoo.com', '9c2f924fb2f7004e7979ab2027ca1d65'),
(4, 'bozra', 'bozra@gmail.com', 'f6569665c2697bc4936784f56c128ffd'),
(5, 'iBraidy', 'mahmoudbraidyy@gmail.com', 'ac32e64b3f1a9c26638a9755ee752650'),
(6, 'alifadly97', 'alifadly97@gmail.com', '5a9572c7dc08ac7f1f411df432c61f8d'),
(7, 'Mo_amer96', 'mohamedamermin@gmail.com', '020a670e2903782d410ada1a7cda92bb'),
(8, 'samar hady', 'samar.hady1@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(9, 'ahmed_190', 'ahmed.zzzz@hotmail.com', 'cfecdb276f634854f3ef915e2e980c31'),
(10, 'Dr.Engy', 'bestdr@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(11, 'doha_gad', 'dohaga95@gmail.com', '52ebdacbfff52b56901ef897e45f4f41'),
(12, 'Sally', 'sally303@gmail.com', '6562c5c1f33db6e05a082a88cddab5ea');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
