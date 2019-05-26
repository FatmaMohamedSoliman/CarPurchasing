-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 18, 2019 at 12:26 PM
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `status`, `description`, `model`, `color`, `price`, `image`, `reservationdate`, `reservedto`, `modelyear`) VALUES
(12, 'reserved', 'dsdsdsd ', 'MER', 'Red', 43433333, ' img/bg-img/feature-1.jpg', '2019-05-17 11:28:08', 1, 2019),
(11, 'reserved', 'dfdfdfhhdf 4444  ', 'FIAT', 'Red', 60000, 'https://www.volkswagen.ie/content/dam/vw-ngw/vw_pkw/importers/ie/offers-and-finance/NewPolo_TL.png/_jcr_content/renditions/original.transform/med/img.png', '2019-05-18 09:09:09', 1, 2019),
(10, 'free', 'bmw i8   ', 'KIA', 'Blue', 5050000, 'https://st.motortrend.com/uploads/sites/10/2016/06/2015-bmw-i8-mega-coupe-doors.png', NULL, NULL, 2019),
(13, 'free', 'car1', 'BMW', 'Gray', 70000, 'data:image/jpeg;base64,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', NULL, NULL, 2019),
(14, 'free', 'ccc80000   ', 'BMW', 'Blue', 80000, 'http://pluspng.com/img-png/car-png--2000.png', '2019-05-17 00:00:00', 1, 2019),
(15, 'free', 'car description ', 'VM', 'Red', 80000, 'https://st.motortrend.com/uploads/sites/10/2016/06/2015-bmw-i8-mega-coupe-doors.png', NULL, NULL, 2019),
(16, 'free', 'A car is a wheeled motor vehicle used for transportation. Most definitions of car say they run primarily on roads, seat one to eight people, have four tires, and mainly transport people rather than goods. Cars came into global use during the 20th century, and developed economies depend on them.', 'FIAT', 'Black', 400000, 'http://www.moibbk.com/images/tesla-black-1.jpg\r\n\r\n\r\n', NULL, NULL, 2019),
(17, 'free', 'An internal combustion engine is called an â€œinternal combustion engineâ€ because fuel and air combust inside the engine to create the energy to move the pistons, which in turn move the car (weâ€™ll show you how that happens in detail below).  Contrast that to an external combustion engine, where fuel is burned outside the engine and the energy created from that burning is what powers it. Steam engines are the best example of this. Coal is burned outside of the engine, which heats water to produce steam, which then powers the engine.', 'BMW', 'Red', 5000764, 'https://tech-ish.com/wp-content/uploads/2015/12/Tesla-Model-S.jpg', '2019-05-17 00:00:00', 1, 2019),
(18, 'free', 'Combined power: 369 hp                     Combined torque: 420 lbÂ·ft                     Engine: I-3 1,5 l                     Power: 228 hp @ 5,800 rpm (170 kW)                     Fuel type: Premium Engine:	Electric    Power: 141 hp @ 4,800 rpm (105 kW)', 'VERNNA', 'Red', 600000, 'https://fortunedotcom.files.wordpress.com/2016/08/44502_2017_elantra_sedan.jpg', NULL, NULL, 2017),
(19, 'free', 'Combined power: 369 hp                     Combined torque: 420 lbÂ·ft                     Engine: I-3 1,5 l                     Power: 228 hp @ 5,800 rpm (170 kW)                     Fuel type: Premium                     Engine:	Electric                     Power: 141 hp @ 4,800 rpm (105 kW)', 'KIA', 'Gray', 900000, 'http://www.moibbk.com/files/carsNews/images/2015-chrysler-model-300-v6-awd-big-price-tag-but-the-car-shows-presence.jpg', NULL, NULL, 2018),
(20, 'free', 'A car is a wheeled motor vehicle used for transportation. Most definitions of car say they run primarily on roads, seat one to eight people, have four tires, and ma', 'VM', 'Red', 34542524, 'https://www.s1cars.com/i/hp/syc.jpg', NULL, NULL, 2015);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `password` text NOT NULL,
  `user_type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `phone`, `email`, `address`, `password`, `user_type`) VALUES
(1, 'customer', 123456456, 'customer@domain.com', 'add1235', 'soso.soso123', NULL),
(2, 'Admin123', 1245987, 'ahmed@mail.com', 'haram', 'lolo.lolo123', 1),
(7, 'Sara123', 125478963, 'sara@mail.com', 'madii', 'koko.koko', NULL),
(6, 'bosy', 1220317511, 'b@a.com', 'asasas', '123', NULL),
(8, 'jannt', 123654789, 'jannat', 'madii', 'koko.koko123', NULL),
(9, 'u1', 1234567891, 'ex@email.com', 'asasa', '123', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
