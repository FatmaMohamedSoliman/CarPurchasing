-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 25, 2019 at 08:53 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

DROP TABLE IF EXISTS `car`;
CREATE TABLE IF NOT EXISTS `car` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` text NOT NULL,
  `description` text NOT NULL,
  `model` text NOT NULL,
  `color` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` text NOT NULL,
  `reservationdate` datetime DEFAULT NULL,
  `reservedto` int(11) DEFAULT NULL,
  `modelyear` int(11) NOT NULL,
  `addedby` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `status`, `description`, `model`, `color`, `price`, `image`, `reservationdate`, `reservedto`, `modelyear`, `addedby`) VALUES
(14, 'reserved', 'ccc80000   ', 'BMW', 'Blue', 80000, 'http://pluspng.com/img-png/car-png--2000.png', '2019-05-23 22:10:59', 1, 2019, 0),
(17, 'free', 'An internal combustion engine is called an â€œinternal combustion engineâ€ because fuel and air combust inside the engine to create the energy to move the pistons, which in turn move the car (weâ€™ll show you how that happens in detail below).  Contrast that to an external combustion engine, where fuel is burned outside the engine and the energy created from that burning is what powers it. Steam engines are the best example of this. Coal is burned outside of the engine, which heats water to produce steam, which then powers the engine.', 'BMW', 'Red', 5000764, 'https://tech-ish.com/wp-content/uploads/2015/12/Tesla-Model-S.jpg', '2019-05-17 00:00:00', 1, 2019, 0),
(18, 'free', 'Combined power: 369 hp                     Combined torque: 420 lbÂ·ft                     Engine: I-3 1,5 l                     Power: 228 hp @ 5,800 rpm (170 kW)                     Fuel type: Premium Engine:	Electric    Power: 141 hp @ 4,800 rpm (105 kW)', 'VERNNA', 'Red', 600000, 'https://fortunedotcom.files.wordpress.com/2016/08/44502_2017_elantra_sedan.jpg', NULL, NULL, 2017, 0),
(22, 'free', 'Find the best free stock images about cars. Download all photos and use them even for commercial projects.', 'FIAT', 'Blue', 40000000, 'http://silverdice.us/wp-content/uploads/2017/07/toyota-ia-toyota-yaris-ia-7909-jpg.jpg', NULL, NULL, 2018, 0),
(23, 'free', 'View latest bikes and cars photos at CarAndBike.com. Find exclusive photo gallery of bike and car images from the Auto Expo, launch event, car & bike awards, ..', 'KIA', 'Black', 240000, 'https://www.liacars.com/assets/stock/colormatched_01/white/640/cc_2019hov01_01_640/cc_2019hov010021_01_640_gy.jpg', NULL, NULL, 2015, 2),
(26, 'free', '200CC ,high quality motors ', 'BMW', 'Red', 40000000, 'https://cdn.bmwblog.com/wp-content/uploads/BMW-M4-Coupe-Concept-colors-19.jpg', NULL, NULL, 2019, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `password` text NOT NULL,
  `user_type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `phone`, `email`, `address`, `password`, `user_type`) VALUES
(1, 'customer', 123456456, 'customer@domain.com', 'add1235', 'soso.soso123', NULL),
(2, 'Admin123', 1245987, 'ahmed@mail.com', 'haram', 'lolo.lolo123', 1),
(7, 'Sara123', 125478963, 'sara@mail.com', 'madii', 'koko.koko', NULL),
(6, 'bosy', 1220317511, 'b@a.com', 'asasas', '123', NULL),
(8, 'jannt', 123654789, 'jannat', 'madii', 'koko.koko123', NULL),
(9, 'u1', 1234567891, 'ex@email.com', 'asasa', '123', NULL),
(10, 'omar', 12345678934, 'omr@domain.com', 'hhhh', 'Omar123!@#', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
