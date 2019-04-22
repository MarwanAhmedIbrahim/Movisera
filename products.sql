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
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies_series`
--

CREATE TABLE `movies_series` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `text` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies_series`
--

INSERT INTO `movies_series` (`id`, `title`, `text`, `img`) VALUES
(1, 'jumanji', 'description.php?item=Jumanji', 'jumanji_welcome_to_the_jungle_ver3_xlg.jpg'),
(2, 'Dunkirk', 'description.php?item=Dunkirk', 'dunkirk_xlg.jpg'),
(3, 'The Hobbit', 'description.php?item=The_Hobbit', 'hobbit_the_battle_of_the_five_armies_ver2_xlg.jpg'),
(4, 'The Mountain Between Us', 'description.php?item=The_Mountain_Between_Us', 'mountain_between_us_xlg.jpg'),
(5, 'Maze Runner', 'description.php?item=Maze_Runner', 'maze_runner_the_death_cure_xlg.jpg'),
(6, 'Black Panther', 'description.php?item=Black_Panther', 'black_panther_ver2_xlg.jpg'),
(7, 'Vikings', 'description.php?item=Vikings', 'rsz_vikings_ver20_xlg.jpg'),
(8, 'Da Vincis Demons', 'description.php?item=Da_Vinci_Demons', 'da_vincis_demons_ver2_xlg.jpg'),
(9, 'Game Of Thrones', 'description.php?item=Game_of_Thrones', 'rsz_game_of_thrones_ver77_xxlg.jpg'),
(10, 'Breaking Bad', 'description.php?item=Breaking_Bad', 'rsz_breaking_bad_ver5_xxlg.jpg'),
(11, 'Mr.Robot', 'description.php?item=Mr_Robot', 'rsz_mr_robot_ver7_xlg.jpg'),
(12, 'House Of Cards', 'description.php?item=House_of_Cards', 'rsz_house_of_cards_ver8_xxlg.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies_series`
--
ALTER TABLE `movies_series`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies_series`
--
ALTER TABLE `movies_series`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
