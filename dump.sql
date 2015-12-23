-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 24, 2015 at 02:29 AM
-- Server version: 5.5.41-log
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phplogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto_increment',
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `homephone` varchar(15) NOT NULL,
  `workphone` varchar(15) NOT NULL,
  `cellphone` varchar(15) NOT NULL,
  `address1` varchar(30) NOT NULL,
  `address2` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(40) NOT NULL,
  `zip` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `birthday` date NOT NULL,
  `name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `homephone`, `workphone`, `cellphone`, `address1`, `address2`, `city`, `state`, `zip`, `country`, `birthday`, `name`, `username`, `password`, `date`) VALUES
(8, '1', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '1', 'e10adc3949ba59abbe56e057f20f883e', '2015-12-16'),
(9, '', '11', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '11', '3f230640b78d7e71ac5514e57935eb69', '2015-12-16'),
(10, '1qaz', '1qazx', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '1qazx', '981b6d81b4af6ae0f4c274c17a32fbd1', '2015-12-16'),
(11, 'q', 'q', 'qaz@o.o', '', '', '', 'q', 'q', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00'),
(12, 'jgj', 'gjg', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'jhjhjhjh', 'fcea920f7412b5da7be0cf42b8c93759', '2015-12-19');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
