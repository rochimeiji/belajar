-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2013 at 06:29 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `belajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE IF NOT EXISTS `msg` (
  `id_msg` int(11) NOT NULL AUTO_INCREMENT,
  `msg` text NOT NULL,
  PRIMARY KEY (`id_msg`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`id_msg`, `msg`) VALUES
(1, 'hello'),
(5, 'Keren him lanjutkan mantap dah'),
(6, 'saya suka gaya loo!!!'),
(7, 'Php ajax seru ya,...!!'),
(8, 'Hello eiji!!'),
(9, 'Hello juga rochim, ada apa ya?'),
(10, 'Itu kamu bisa ajax gimana? keren tuh!!'),
(11, 'Saya coba-coba aja koq, tau-tau bisa keren kan,,.!!'),
(12, 'Saya makan dulu ya,..!!!'),
(13, 'Saya udah deh makannya,..!! hehe :) kamu udah makan belum'),
(14, 'Udah dong bentar lagi mau pembagian rapot saya,.! :D'),
(15, 'Haha sama dong,.. hehe :)'),
(16, 'Iya bentar lagi mau berangkat,!!'),
(17, ''),
(18, 'zzzz kenaapa ya di firefox,.?'),
(19, 'Tuh sekarang bisa,.. :D'),
(20, 'Haha iya, kereeeen!!!!'),
(21, 'haloo'),
(22, 'Iya ada apa?'),
(23, 'haloo imam'),
(24, 'haloo imam'),
(25, 'haloo Titia'),
(26, 'Hallo fauzi'),
(27, 'Iya ada apa?');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gambar`
--

CREATE TABLE IF NOT EXISTS `tb_gambar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul_gambar` varchar(30) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `tb_gambar`
--

INSERT INTO `tb_gambar` (`id`, `judul_gambar`, `nama_file`) VALUES
(68, '', '1234567892463914776_4.jpg'),
(74, 'LIGHTHOUSE', '1234567898186131659_Lighthouse.jpg'),
(75, 'LIGHTHOUSE', '1234567896344243551_Lighthouse.jpg'),
(73, 'Desert', '1234567894879868426_Desert.jpg'),
(72, 'helloa', '1234567897292479718_Chrysanthemum.jpg'),
(62, 'Keren', '1234567898289899443_Koala.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `user`, `pass`, `email`) VALUES
(6, 'asda', '5b1cc76106425d5538b9341d7aa26e336bae9f7e', 'asda@yahoo.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
