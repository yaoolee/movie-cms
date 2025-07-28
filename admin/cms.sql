-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 08, 2022 at 03:40 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `runtime` int NOT NULL,
  `lang` varchar(100) NOT NULL,
  `type` enum('animate','real') DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `director` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movies`
--

INSERT INTO movies (title, runtime, lang, type, release_date, director) VALUES ('Empowered Synergy', 118, 'English', 'real', '2020-05-17', 'Jason Ford');
INSERT INTO movies (title, runtime, lang, type, release_date, director) VALUES ('Synergistic Metrics', 130, 'French', 'animate', '2017-08-24', 'Isabelle Tremblay');
INSERT INTO movies (title, runtime, lang, type, release_date, director) VALUES ('Progressive Matrix', 95, 'Japanese', 'real', '2015-11-02', 'Takashi Nakamura');
INSERT INTO movies (title, runtime, lang, type, release_date, director) VALUES ('Revolutionary Paradigm', 102, 'English', 'real', '2021-02-15', 'Sophia Carter');
INSERT INTO movies (title, runtime, lang, type, release_date, director) VALUES ('Visionary Synergy', 123, 'Korean', 'animate', '2019-07-11', 'Min-Joon Lee');
INSERT INTO movies (title, runtime, lang, type, release_date, director) VALUES ('NextGen Ecosystem', 140, 'Spanish', 'real', '2023-01-08', 'Carlos Ortega');
INSERT INTO movies (title, runtime, lang, type, release_date, director) VALUES ('Innovative Framework', 90, 'English', 'animate', '2018-03-27', 'Emma Johnson');
INSERT INTO movies (title, runtime, lang, type, release_date, director) VALUES ('Holistic Infrastructure', 110, 'French', 'real', '2016-09-10', 'Luc Moreau');
INSERT INTO movies (title, runtime, lang, type, release_date, director) VALUES ('Modular Fusion', 98, 'English', 'animate', '2020-12-19', 'Olivia Bennett');
INSERT INTO movies (title, runtime, lang, type, release_date, director) VALUES ('Scalable Interface', 100, 'Japanese', 'real', '2019-06-05', 'Haruki Yamamoto');
INSERT INTO movies (title, runtime, lang, type, release_date, director) VALUES ('Virtual Synergy', 105, 'English', 'animate', '2022-04-14', 'James Anderson');
INSERT INTO movies (title, runtime, lang, type, release_date, director) VALUES ('Distributed Matrix', 113, 'Spanish', 'real', '2017-10-29', 'Miguel Rivera');
INSERT INTO movies (title, runtime, lang, type, release_date, director) VALUES ('Augmented Network', 125, 'Korean', 'animate', '2018-12-07', 'Seo-Yeon Kim');
INSERT INTO movies (title, runtime, lang, type, release_date, director) VALUES ('Strategic Vision', 135, 'English', 'real', '2015-04-22', 'Robert Smith');
INSERT INTO movies (title, runtime, lang, type, release_date, director) VALUES ('Proactive Horizon', 88, 'French', 'real', '2020-08-13', 'Claire Dubois');
INSERT INTO movies (title, runtime, lang, type, release_date, director) VALUES ('Synergized Pulse', 120, 'English', 'animate', '2021-11-30', 'Daniel Thompson');
INSERT INTO movies (title, runtime, lang, type, release_date, director) VALUES ('Virtual Canvas', 112, 'Japanese', 'real', '2016-05-09', 'Yuki Tanaka');
INSERT INTO movies (title, runtime, lang, type, release_date, director) VALUES ('Quantum Reach', 101, 'English', 'real', '2019-02-17', 'Nancy Wright');
INSERT INTO movies (title, runtime, lang, type, release_date, director) VALUES ('Collaborative Core', 92, 'Korean', 'animate', '2022-09-03', 'Jin-Woo Park');
INSERT INTO movies (title, runtime, lang, type, release_date, director) VALUES ('Immersive Loop', 132, 'Spanish', 'real', '2023-03-26', 'Ana Martinez');


-- Table structure for table `users`

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first` varchar(25) DEFAULT NULL,
  `last` varchar(25) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `active` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `dateAdded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table `users`


INSERT INTO `users` (`id`, `first`, `last`, `email`, `password`, `active`, `dateAdded`) VALUES
(1, 'Justin', 'Kent', 'jstin009@gmail.com', '5f4dwc3b5aa765d61d8327dqb882cf99', 'Yes', '2025-07-27 11:42:10');

--

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;