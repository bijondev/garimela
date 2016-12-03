-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 19, 2012 at 04:44 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_garimela`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buyareinfo`
--

CREATE TABLE IF NOT EXISTS `tbl_buyareinfo` (
  `buyare_id` int(11) NOT NULL AUTO_INCREMENT,
  `pub_date` date NOT NULL,
  `end_date` date NOT NULL,
  `car_type` varchar(50) NOT NULL,
  `car_model` varchar(50) NOT NULL,
  `car_discription` varchar(250) NOT NULL,
  `budget` varchar(50) NOT NULL,
  `contact_address` varchar(250) NOT NULL,
  `contact_no` varchar(150) NOT NULL,
  `ad_duration` varchar(10) NOT NULL,
  `status` int(1) NOT NULL,
  `entry_by` varchar(200) NOT NULL,
  `entry_date_time` datetime NOT NULL,
  `entry_ip` varchar(20) NOT NULL,
  `update_by` varchar(200) NOT NULL,
  `update_date_time` datetime NOT NULL,
  `update_ip` varchar(32) NOT NULL,
  PRIMARY KEY (`buyare_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_buyareinfo`
--

INSERT INTO `tbl_buyareinfo` (`buyare_id`, `pub_date`, `end_date`, `car_type`, `car_model`, `car_discription`, `budget`, `contact_address`, `contact_no`, `ad_duration`, `status`, `entry_by`, `entry_date_time`, `entry_ip`, `update_by`, `update_date_time`, `update_ip`) VALUES
(3, '0000-00-00', '0000-00-00', 'bus', 'Honda CD 50/80', 'Second hand motor bike but good condition', 'Tk. 30,000  to Tk. 40,000', 'House # 43, Floor # 06, Road # 13, Sector # 04, Dhaka-1230.', '+880 1911 015506', '', 1, '', '0000-00-00 00:00:00', '', 'bijon.bairagi@gmail.com', '2012-01-26 16:49:26', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_car_type`
--

CREATE TABLE IF NOT EXISTS `tbl_car_type` (
  `car_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_type` varchar(50) NOT NULL,
  `discription` varchar(200) NOT NULL,
  PRIMARY KEY (`car_type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_car_type`
--

INSERT INTO `tbl_car_type` (`car_type_id`, `car_type`, `discription`) VALUES
(1, 'motor cycle', ''),
(2, 'bus', '34'),
(7, 'track', ''),
(8, 'byke', 'gdhh');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_distic`
--

CREATE TABLE IF NOT EXISTS `tbl_distic` (
  `dist_id` int(10) NOT NULL AUTO_INCREMENT,
  `div_id` int(10) NOT NULL,
  `dist_name` varchar(50) NOT NULL,
  `remarks` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`dist_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `tbl_distic`
--

INSERT INTO `tbl_distic` (`dist_id`, `div_id`, `dist_name`, `remarks`, `status`) VALUES
(1, 1, 'Barguna', '', 1),
(2, 1, 'Barisal', '', 1),
(3, 1, 'Bhola', '', 1),
(4, 1, 'Jhalokati', '', 1),
(5, 1, 'Patuakhali', '', 1),
(6, 1, 'Pirojpur', '', 1),
(7, 2, 'Bandarban', '', 1),
(8, 2, 'Brahmanbaria', '', 1),
(9, 2, 'Chandpur', '', 1),
(10, 2, 'Chittagong', '', 1),
(11, 2, 'Comilla', '', 1),
(12, 2, 'Cox''s Bazar', '', 1),
(13, 2, 'Feni', '', 1),
(14, 2, 'Khagrachari', '', 1),
(15, 2, 'Lakshmipur', '', 1),
(16, 2, 'Noakhali', '', 1),
(17, 2, 'Rangamati', '', 1),
(18, 3, 'Dhaka', '', 1),
(19, 3, 'Faridpur', '', 1),
(20, 3, 'Gazipur', '', 1),
(21, 3, 'Gopalganj', '', 1),
(22, 3, 'Jamalpur', '', 1),
(23, 3, 'Kishoreganj', '', 1),
(24, 3, 'Madaripur', '', 1),
(25, 3, 'Manikgonj', '', 1),
(26, 3, 'Munshiganj', '', 1),
(27, 3, 'Mymensingh', '', 1),
(28, 3, 'Narayanganj', '', 1),
(29, 3, 'Narsingdi', '', 1),
(30, 3, 'Netrokona', '', 1),
(31, 3, 'Rajbari', '', 1),
(32, 3, 'Shariatpur', '', 1),
(33, 3, 'Sherpur', '', 1),
(34, 3, 'Tangail', '', 1),
(35, 4, 'Bagerhat', '', 1),
(36, 4, 'Chuadanga', '', 1),
(37, 4, 'Jessore', '', 1),
(38, 4, 'Jhenaidah', '', 1),
(39, 4, 'Khulna', '', 1),
(40, 4, 'Kushtia', '', 1),
(41, 4, 'Magura', '', 1),
(42, 4, 'Meherpur', '', 1),
(43, 4, 'Narail', '', 1),
(44, 4, 'Satkhira', '', 1),
(45, 5, 'Bogra', '', 1),
(46, 5, 'Joypurhat', '', 1),
(47, 5, 'Naogaon', '', 1),
(48, 5, 'Natore', '', 1),
(49, 5, 'Nawabganj', '', 1),
(50, 5, 'Pabna', '', 1),
(51, 5, 'Rajshahi', '', 1),
(52, 5, 'Sirajganj', '', 1),
(53, 6, 'Dinajpur', '', 1),
(54, 6, 'Gaibandha', '', 1),
(55, 6, 'Kurigram', '', 1),
(56, 6, 'Lalmonirhat', '', 1),
(57, 6, 'Nilphamari', '', 1),
(58, 6, 'Panchagarh', '', 1),
(59, 6, 'Rangpur', '', 1),
(60, 6, 'Thakurgaon', '', 1),
(61, 7, 'Habiganj', '', 1),
(62, 7, 'Maulvibazar', '', 1),
(63, 7, 'Sunamganj', '', 1),
(64, 7, 'Sylhet', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_divition`
--

CREATE TABLE IF NOT EXISTS `tbl_divition` (
  `div_id` int(10) NOT NULL AUTO_INCREMENT,
  `div_name` varchar(50) NOT NULL,
  `remarks` varchar(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`div_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_divition`
--

INSERT INTO `tbl_divition` (`div_id`, `div_name`, `remarks`, `status`) VALUES
(1, 'Barisal Division', '', 1),
(2, 'Chittagong Division', '', 1),
(3, 'Dhaka Division', '', 1),
(4, 'Khulna Division', '', 1),
(5, 'Rajshahi Division', '', 1),
(6, 'Rangpur Division', '', 1),
(7, 'Sylhet Division', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_org_type`
--

CREATE TABLE IF NOT EXISTS `tbl_org_type` (
  `org_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `org_type` varchar(50) NOT NULL,
  `discription` varchar(20) NOT NULL,
  PRIMARY KEY (`org_type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_org_type`
--

INSERT INTO `tbl_org_type` (`org_type_id`, `org_type`, `discription`) VALUES
(1, 'show room', '34'),
(2, 'rent a care', ''),
(4, 'counter', 'big'),
(5, 'df', 'df'),
(6, 'df2', 'df2'),
(7, 'df23', 'df23'),
(8, 'df23411', 'df23411'),
(9, 'df234567', 'df234567'),
(10, 'df2345678', 'df2345678'),
(11, 'df2345678', 'df2345678');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ps`
--

CREATE TABLE IF NOT EXISTS `tbl_ps` (
  `ps_id` int(10) NOT NULL AUTO_INCREMENT,
  `dist_id` int(10) NOT NULL,
  `div_id` int(10) NOT NULL,
  `ps_name` varchar(50) NOT NULL,
  `remarks` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`ps_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=535 ;

--
-- Dumping data for table `tbl_ps`
--

INSERT INTO `tbl_ps` (`ps_id`, `dist_id`, `div_id`, `ps_name`, `remarks`, `status`) VALUES
(1, 1, 1, 'Amtali', '', 1),
(2, 1, 1, 'Bamna', '', 1),
(3, 1, 1, 'Barguna Sadar', '', 1),
(4, 1, 1, 'Betagi', '', 1),
(5, 1, 1, 'Patharghata', '', 1),
(6, 2, 1, 'Agailjhara', '', 1),
(7, 2, 1, 'Babuganj', '', 1),
(8, 2, 1, 'Bakerganj', '', 1),
(9, 2, 1, 'Banaripara', '', 1),
(10, 2, 1, 'Gaurnadi', '', 1),
(11, 2, 1, 'Hizla', '', 1),
(12, 2, 1, 'Barisal Sadar', '', 1),
(13, 2, 1, 'Mehendiganj', '', 1),
(14, 2, 1, 'Muladi', '', 1),
(15, 2, 1, 'Wazirpur', '', 1),
(16, 3, 1, 'Bhola Sadar', '', 1),
(17, 3, 1, 'Burhanuddin', '', 1),
(18, 3, 1, 'Char Fasson', '', 1),
(19, 3, 1, 'Daulatkhan', '', 1),
(20, 3, 1, 'Lalmohan', '', 1),
(21, 3, 1, 'Manpura', '', 1),
(22, 3, 1, 'Tazumuddin', '', 1),
(23, 4, 1, 'Jhalokati Sadar', '', 1),
(24, 4, 1, 'Kathalia', '', 1),
(25, 4, 1, 'Nalchity', '', 1),
(26, 4, 1, 'Rajapur', '', 1),
(27, 5, 1, 'Bauphal', '', 1),
(28, 5, 1, 'Dasmina', '', 1),
(29, 5, 1, 'Galachipa', '', 1),
(30, 5, 1, 'Kalapara', '', 1),
(31, 5, 1, 'Mirzaganj', '', 1),
(32, 5, 1, 'Patuakhali Sadar', '', 1),
(33, 5, 1, 'Dumki', '', 1),
(34, 5, 1, 'Rangabali', '', 1),
(35, 6, 1, 'Mathbaria', '', 1),
(36, 6, 1, 'Bhandaria', '', 1),
(37, 6, 1, 'Nazirpur', '', 1),
(38, 6, 1, 'Kawkhali ', '', 1),
(39, 6, 1, 'Zianogar', '', 1),
(40, 7, 2, 'Ali Kadam', '', 1),
(41, 7, 2, 'Bandarban Sadar', '', 1),
(42, 7, 2, 'Thanchi', '', 1),
(43, 7, 2, 'Lama', '', 1),
(44, 7, 2, 'Naikhongchhari', '', 1),
(45, 7, 2, 'Rowangchhari', '', 1),
(46, 7, 2, 'Ruma', '', 1),
(47, 8, 2, 'Brahmanbaria Sadar', '', 1),
(48, 8, 2, 'Ashuganj', '', 1),
(49, 8, 2, 'Nasirnagar', '', 1),
(50, 8, 2, 'Nabinagar', '', 1),
(51, 8, 2, 'Sarail', '', 1),
(52, 8, 2, 'Kasba', '', 1),
(53, 8, 2, 'Akhaura', '', 1),
(54, 8, 2, 'Bancharampur', '', 1),
(55, 8, 2, 'Bijoynagar', '', 1),
(56, 9, 2, 'Chandpur Sadar', '', 1),
(57, 9, 2, 'Faridganj', '', 1),
(58, 9, 2, 'Haimchar', '', 1),
(59, 9, 2, 'Haziganj', '', 1),
(60, 9, 2, 'Kachua', '', 1),
(61, 9, 2, 'Matlab', '', 1),
(62, 9, 2, 'Shahrasti', '', 1),
(63, 10, 2, 'Anwara', '', 1),
(64, 10, 2, 'Banshkhali', '', 1),
(65, 10, 2, 'Boalkhali', '', 1),
(66, 10, 2, 'Chandanaish', '', 1),
(67, 10, 2, 'Fatikchhari', '', 1),
(68, 10, 2, 'Hathazari', '', 1),
(69, 10, 2, 'Lohagara', '', 1),
(70, 10, 2, 'Mirsharai', '', 1),
(71, 10, 2, 'Patiya', '', 1),
(72, 10, 2, 'Rangunia', '', 1),
(73, 10, 2, 'Raozan', '', 1),
(74, 10, 2, 'Sandwip', '', 1),
(75, 10, 2, 'Satkania', '', 1),
(76, 10, 2, 'Sitakunda', '', 1),
(77, 10, 2, 'Pahartali', '', 1),
(78, 10, 2, 'Panchlaish', '', 1),
(79, 10, 2, 'Chittagong Kotwali', '', 1),
(80, 10, 2, 'Chandgaon', '', 1),
(81, 10, 2, 'Bandar', '', 1),
(82, 10, 2, 'Double Mooring', '', 1),
(83, 10, 2, 'Halishohor', '', 1),
(84, 10, 2, 'Karnafuly', '', 1),
(85, 10, 2, 'Bakoliya', '', 1),
(86, 10, 2, 'Baizid', '', 1),
(87, 10, 2, 'Khulshi', '', 1),
(88, 10, 2, 'Patenga', '', 1),
(89, 10, 2, 'Bhujpur', '', 1),
(90, 11, 2, 'Barura', '', 1),
(91, 11, 2, 'Brahmanpara', '', 1),
(92, 11, 2, 'Burichong', '', 1),
(93, 11, 2, 'Chandina', '', 1),
(94, 11, 2, 'Chauddagram', '', 1),
(95, 11, 2, 'Daudkandi', '', 1),
(96, 11, 2, 'Debidwar', '', 1),
(97, 11, 2, 'Homna', '', 1),
(98, 11, 2, 'Comilla Adarsa Sadar', '', 1),
(99, 11, 2, 'Laksam', '', 1),
(100, 11, 2, 'Monohorgonj', '', 1),
(101, 11, 2, 'Meghna', '', 1),
(102, 11, 2, 'Muradnagar', '', 1),
(103, 11, 2, 'Nangalkot', '', 1),
(104, 10, 2, 'Comilla Sadar South', '', 1),
(105, 11, 2, 'Titas', '', 1),
(106, 11, 2, 'Comilla Sadar South', '', 1),
(107, 12, 2, 'Chakaria', '', 1),
(108, 12, 2, 'Cox''s Bazar Sadar', '', 1),
(109, 12, 2, 'Kutubdia', '', 1),
(110, 12, 2, 'Maheshkhali', '', 1),
(111, 12, 2, 'Ramu', '', 1),
(112, 12, 2, 'Teknaf', '', 1),
(113, 12, 2, 'Ukhia', '', 1),
(114, 12, 2, 'Pekua', '', 1),
(115, 13, 2, 'Feni Sadar', '', 1),
(116, 13, 2, 'Chhagalnaiya', '', 1),
(117, 13, 2, 'Fulgazi', '', 1),
(118, 13, 2, 'Daganbhuiyan', '', 1),
(119, 13, 2, 'Sonagazi', '', 1),
(120, 14, 2, 'Dighinala', '', 1),
(121, 14, 2, 'Khagrachhari', '', 1),
(122, 14, 2, 'Lakshmichhari', '', 1),
(123, 14, 2, 'Mahalchhari', '', 1),
(124, 14, 2, 'Manikchhari', '', 1),
(125, 14, 2, 'Matiranga', '', 1),
(126, 14, 2, 'Panchhari', '', 1),
(127, 14, 2, 'Ramgarh', '', 1),
(128, 15, 2, 'Lakshmipur', '', 1),
(129, 15, 2, 'Raipur', '', 1),
(130, 15, 2, 'Ramganj', '', 1),
(131, 15, 2, 'Ramgati', '', 1),
(132, 15, 2, 'Komol Nagar', '', 1),
(133, 16, 2, 'Begumganj', '', 1),
(134, 16, 2, 'Noakhali Sadar', '', 1),
(135, 16, 2, 'Chatkhil', '', 1),
(136, 16, 2, 'Companiganj', '', 1),
(137, 16, 2, 'Hatiya', '', 1),
(138, 16, 2, 'Senbagh', '', 1),
(139, 16, 2, 'Sonaimuri', '', 1),
(140, 16, 2, 'Subarnachar', '', 1),
(141, 16, 2, 'Kabirhat', '', 1),
(142, 17, 2, 'Baghaichhari', '', 1),
(143, 17, 2, 'Barkal', '', 1),
(144, 17, 2, 'Kawkhali', '', 1),
(145, 17, 2, 'Belaichhari', '', 1),
(146, 17, 2, 'Kaptai', '', 1),
(147, 17, 2, 'Juraichhari', '', 1),
(148, 17, 2, 'Langadu', '', 1),
(149, 17, 2, 'Nannerchar', '', 1),
(150, 17, 2, 'Rajasthali', '', 1),
(151, 17, 2, 'Rangamati Sadar', '', 1),
(152, 19, 3, 'Alfadanga', '', 1),
(153, 19, 3, 'Bhanga', '', 1),
(154, 19, 3, 'Boalmari', '', 1),
(155, 19, 3, 'Charbhadrasan', '', 1),
(156, 19, 3, 'Faridpur Sadar', '', 1),
(157, 19, 3, 'Madhukhali', '', 1),
(158, 19, 3, 'Nagarkanda', '', 1),
(159, 19, 3, 'Sadarpur', '', 1),
(160, 19, 3, 'Saltha', '', 1),
(161, 20, 3, 'Gazipur Sadar', '', 1),
(162, 20, 3, 'Kaliakair', '', 1),
(163, 20, 3, 'Kaliganj', '', 1),
(164, 20, 3, 'Kapasia', '', 1),
(165, 20, 3, 'Tongi', '', 1),
(166, 20, 3, 'Sreepur', '', 1),
(167, 21, 3, 'Gopalganj Sadar', '', 1),
(168, 21, 3, 'Kashiani', '', 1),
(169, 21, 3, 'Kotalipara', '', 1),
(170, 21, 3, 'Muksudpur', '', 1),
(171, 21, 3, 'Tungipara', '', 1),
(172, 22, 3, 'Baksiganj', '', 1),
(173, 22, 3, 'Dewanganj', '', 1),
(174, 22, 3, 'Islampur', '', 1),
(175, 22, 3, 'Jamalpur Sadar', '', 1),
(176, 22, 3, 'Madarganj', '', 1),
(177, 22, 3, 'Melandaha', '', 1),
(178, 22, 3, 'Sarishabari', '', 1),
(179, 23, 3, 'Astagram', '', 1),
(180, 23, 3, 'Bajitpur', '', 1),
(181, 23, 3, 'Bhairab', '', 1),
(182, 23, 3, 'Hossainpur', '', 1),
(183, 23, 3, 'Itna', '', 1),
(184, 23, 3, 'Karimganj', '', 1),
(185, 23, 3, 'Katiadi', '', 1),
(186, 23, 3, 'Kishoreganj Sadar', '', 1),
(187, 23, 3, 'Kuliarchar', '', 1),
(188, 23, 3, 'Mithamain', '', 1),
(189, 23, 3, 'Nikli', '', 1),
(190, 23, 3, 'Pakundia', '', 1),
(191, 23, 3, 'Tarail', '', 1),
(192, 24, 3, 'Rajoir', '', 1),
(193, 24, 3, 'Madaripur Sadar', '', 1),
(194, 24, 3, 'Kalkini', '', 1),
(195, 24, 3, 'Shibchar', '', 1),
(196, 25, 3, 'Daulatpur', '', 1),
(197, 25, 3, 'Ghior', '', 1),
(198, 25, 3, 'Harirampur', '', 1),
(199, 25, 3, 'Manikgonj Sadar', '', 1),
(200, 25, 3, 'Saturia', '', 1),
(201, 25, 3, 'Shivalaya', '', 1),
(202, 25, 3, 'Singair', '', 1),
(203, 26, 3, 'Gazaria', '', 1),
(204, 26, 3, 'Lohaganj', '', 1),
(205, 26, 3, 'Munshiganj Sadar', '', 1),
(206, 26, 3, 'Sirajdikhan', '', 1),
(207, 26, 3, 'Sreenagar', '', 1),
(208, 26, 3, 'Tongibari', '', 1),
(209, 27, 3, 'Bhaluka', '', 1),
(210, 27, 3, 'Dhobaura', '', 1),
(211, 27, 3, 'Fulbaria', '', 1),
(212, 27, 3, 'Gaffargaon', '', 1),
(213, 27, 3, 'Gauripur', '', 1),
(214, 27, 3, 'Haluaghat', '', 1),
(215, 27, 3, 'Ishwarganj', '', 1),
(216, 27, 3, 'Mymensingh Sadar', '', 1),
(217, 27, 3, 'Muktagachha', '', 1),
(218, 27, 3, 'Nandail', '', 1),
(219, 27, 3, 'Phulpur', '', 1),
(220, 27, 3, 'Trishal', '', 1),
(221, 28, 3, 'Araihazar', '', 1),
(222, 28, 3, 'Bandar', '', 1),
(223, 28, 3, 'Narayanganj Sadar', '', 1),
(224, 28, 3, 'Rupganj', '', 1),
(225, 28, 3, 'Sonargaon', '', 1),
(226, 28, 3, 'Fatullah', '', 1),
(227, 28, 3, 'Siddhirganj', '', 1),
(228, 29, 3, 'Belabo', '', 1),
(229, 29, 3, 'Monohardi', '', 1),
(230, 29, 3, 'Narsingdi Sadar', '', 1),
(231, 29, 3, 'Palash', '', 1),
(232, 29, 3, 'Raipura', '', 1),
(233, 29, 3, 'Shibpur', '', 1),
(234, 30, 3, 'Atpara', '', 1),
(235, 30, 3, 'Barhatta', '', 1),
(236, 30, 3, 'Durgapur', '', 1),
(237, 30, 3, 'Khaliajuri', '', 1),
(238, 30, 3, 'Kalmakanda', '', 1),
(239, 30, 3, 'Kendua', '', 1),
(240, 30, 3, 'Madan', '', 1),
(241, 30, 3, 'Mohanganj', '', 1),
(242, 30, 3, 'Netrokona Sadar', '', 1),
(243, 30, 3, 'Purbadhala', '', 1),
(244, 31, 3, 'Baliakandi', '', 1),
(245, 31, 3, 'Goalandaghat', '', 1),
(246, 31, 3, 'Pangsha', '', 1),
(247, 31, 3, 'Rajbari Sadar', '', 1),
(248, 32, 3, 'Bhedarganj', '', 1),
(249, 32, 3, 'Damudya', '', 1),
(250, 32, 3, 'Gosairhat', '', 1),
(251, 32, 3, 'Naria', '', 1),
(252, 32, 3, 'Shariatpur Sadar', '', 1),
(253, 32, 3, 'Zanjira', '', 1),
(254, 32, 3, 'Sokhipur', '', 1),
(255, 33, 3, 'Jhenaigati', '', 1),
(256, 33, 3, 'Nakla', '', 1),
(257, 33, 3, 'Nalitabari', '', 1),
(258, 33, 3, 'Sherpur Sadar', '', 1),
(259, 33, 3, 'Sreebardi', '', 1),
(260, 34, 3, 'Gopalpur', '', 1),
(261, 34, 3, 'Basail', '', 1),
(262, 34, 3, 'Bhuapur', '', 1),
(263, 34, 3, 'Delduar', '', 1),
(264, 34, 3, 'Ghatail', '', 1),
(265, 34, 3, 'Kalihati', '', 1),
(266, 34, 3, 'Madhupur', '', 1),
(267, 34, 3, 'Mirzapur', '', 1),
(268, 34, 3, 'Nagarpur', '', 1),
(269, 34, 3, 'Sakhipur', '', 1),
(270, 34, 3, 'Dhonbari', '', 1),
(271, 34, 3, 'Tangail Sadar', '', 1),
(272, 18, 3, 'Ramna', '', 1),
(273, 18, 3, 'Dhanmondi', '', 1),
(274, 18, 3, 'New Market', '', 1),
(275, 18, 3, 'Lalbagh', '', 1),
(276, 18, 3, 'Kotwali ', '', 1),
(277, 18, 3, 'Hazaribagh', '', 1),
(278, 18, 3, 'Kamrangichor', '', 1),
(279, 18, 3, 'Shutrapur', '', 1),
(280, 18, 3, 'Demra', '', 1),
(281, 18, 3, 'Motijheel', '', 1),
(282, 18, 3, 'Paltan', '', 1),
(283, 18, 3, 'Sabujbag', '', 1),
(284, 18, 3, 'Shampur', '', 1),
(285, 18, 3, 'Khilgaon', '', 1),
(286, 18, 3, 'Uttara', '', 1),
(287, 18, 3, 'Khilkheth', '', 1),
(288, 18, 3, 'Turag', '', 1),
(289, 18, 3, 'Gulshan', '', 1),
(290, 18, 3, 'Cantonment', '', 1),
(291, 18, 3, 'Badda', '', 1),
(292, 18, 3, 'Mohammadpur', '', 1),
(293, 18, 3, 'Adabor', '', 1),
(294, 18, 3, 'Tejgaon', '', 1),
(295, 18, 3, 'Mirpur', '', 1),
(296, 18, 3, 'Shah Ali ', '', 1),
(297, 18, 3, 'Pallabi', '', 1),
(298, 18, 3, 'Kafrul', '', 1),
(299, 18, 3, 'Airport', '', 1),
(300, 18, 3, 'Shahbagh', '', 1),
(301, 18, 3, 'Kadamtali', '', 1),
(302, 18, 3, 'Jatrabari', '', 1),
(303, 18, 3, 'Tejgaon I/A', '', 1),
(304, 18, 3, 'Darus Salam', '', 1),
(305, 18, 3, 'Uttar Khan', '', 1),
(306, 18, 3, 'Dakkhin Khan', '', 1),
(307, 18, 3, 'Rampura', '', 1),
(308, 18, 3, 'Dhamrai', '', 1),
(309, 18, 3, 'Dohar', '', 1),
(310, 18, 3, 'Nawabganj', '', 1),
(311, 18, 3, 'Savar', '', 1),
(312, 35, 4, 'Bagerhat Sadar', '', 1),
(313, 35, 4, 'Chitalmari', '', 1),
(314, 35, 4, 'Fakirhat', '', 1),
(315, 35, 4, 'Kachua', '', 1),
(316, 35, 4, 'Mollahat', '', 1),
(317, 39, 4, 'Batiaghata', '', 1),
(318, 35, 4, 'Morrelganj', '', 1),
(319, 35, 4, 'Rampal', '', 1),
(320, 35, 4, 'Sarankhola', '', 1),
(321, 35, 4, 'Mongla', '', 1),
(322, 36, 4, 'Alamdanga', '', 1),
(323, 36, 4, 'Chuadanga Sadar', '', 1),
(324, 36, 4, 'Damurhuda', '', 1),
(325, 36, 4, 'Jibannagar', '', 1),
(326, 37, 4, 'Avoynagar', '', 1),
(327, 37, 4, 'Bagherpara', '', 1),
(328, 37, 4, 'Chaugachha', '', 1),
(329, 37, 4, 'Jhikargachha', '', 1),
(330, 37, 4, 'Keshabpur', '', 1),
(331, 37, 4, 'Jessore Sadar', '', 1),
(332, 37, 4, 'Manirampur', '', 1),
(333, 37, 4, 'Sharsha', '', 1),
(334, 38, 4, 'Harinakunda', '', 1),
(335, 38, 4, 'Jhenaidah Sadar', '', 1),
(336, 38, 4, 'Kaliganj', '', 1),
(337, 38, 4, 'Kotchandpur', '', 1),
(338, 38, 4, 'Maheshpur', '', 1),
(339, 38, 4, 'Shailkupa', '', 1),
(340, 39, 4, 'Dacope', '', 1),
(341, 39, 4, 'Dumuria', '', 1),
(342, 39, 4, 'Dighalia', '', 1),
(343, 39, 4, 'Koyra', '', 1),
(344, 39, 4, 'Paikgachha', '', 1),
(345, 39, 4, 'Phultala', '', 1),
(346, 39, 4, 'Rupsha', '', 1),
(347, 39, 4, 'Terokhada', '', 1),
(348, 39, 4, 'Khulna Sadar', '', 1),
(349, 40, 4, 'Bheramara', '', 1),
(350, 40, 4, 'Daulatpur', '', 1),
(351, 40, 4, 'Khoksa', '', 1),
(352, 40, 4, 'Kumarkhali', '', 1),
(353, 40, 4, 'Kushtia Sadar', '', 1),
(354, 40, 4, 'Mirpur', '', 1),
(355, 41, 4, 'Magura Sadar', '', 1),
(356, 41, 4, 'Mohammadpur', '', 1),
(357, 41, 4, 'Shalikha', '', 1),
(358, 41, 4, 'Sreepur', '', 1),
(359, 42, 4, 'Gangni', '', 1),
(360, 42, 4, 'Meherpur Sadar', '', 1),
(361, 42, 4, 'Mujibnagar', '', 1),
(362, 43, 4, 'Kalia', '', 1),
(363, 43, 4, 'Lohagara', '', 1),
(364, 43, 4, 'Narail Sadar', '', 1),
(365, 44, 4, 'Assasuni', '', 1),
(366, 44, 4, 'Debhata', '', 1),
(367, 44, 4, 'Kalaroa', '', 1),
(368, 44, 4, 'Kaliganj', '', 1),
(369, 44, 4, 'Satkhira Sadar', '', 1),
(370, 44, 4, 'Shyamnagar', '', 1),
(371, 44, 4, 'Tala', '', 1),
(372, 45, 5, 'Adamdighi', '', 1),
(373, 45, 5, 'Bogra Sadar', '', 1),
(374, 45, 5, 'Dhunat', '', 1),
(375, 45, 5, 'Dupchanchia', '', 1),
(376, 45, 5, 'Gabtali', '', 1),
(377, 45, 5, 'Kahaloo', '', 1),
(378, 45, 5, 'Nandigram', '', 1),
(379, 45, 5, 'Sariakandi', '', 1),
(380, 45, 5, 'Sahajanpur', '', 1),
(381, 45, 5, 'Sherpur', '', 1),
(382, 45, 5, 'Shibganj', '', 1),
(383, 45, 5, 'Sonatala', '', 1),
(384, 46, 5, 'Akkelpur', '', 1),
(385, 46, 5, 'Joypurhat Sadar', '', 1),
(386, 46, 5, 'Kalai', '', 1),
(387, 46, 5, 'Khetlal', '', 1),
(388, 46, 5, 'Panchbibi', '', 1),
(389, 47, 5, 'Atrai', '', 1),
(390, 47, 5, 'Badalgachhi', '', 1),
(391, 47, 5, 'Dhamoirhat', '', 1),
(392, 47, 5, 'Manda', '', 1),
(393, 47, 5, 'Mahadevpur', '', 1),
(394, 47, 5, 'Naogaon Sadar', '', 1),
(395, 47, 5, 'Niamatpur', '', 1),
(396, 47, 5, 'Patnitala', '', 1),
(397, 47, 5, 'Porsha', '', 1),
(398, 47, 5, 'Raninagar', '', 1),
(399, 47, 5, 'Sapahar', '', 1),
(400, 48, 5, 'Bagatipara', '', 1),
(401, 48, 5, 'Baraigram', '', 1),
(402, 48, 5, 'Gurudaspur', '', 1),
(403, 48, 5, 'Lalpur', '', 1),
(404, 48, 5, 'Natore Sadar', '', 1),
(405, 48, 5, 'Singra', '', 1),
(406, 49, 5, 'Bholahat', '', 1),
(407, 49, 5, 'Gomastapur', '', 1),
(408, 49, 5, 'Nachole', '', 1),
(409, 49, 5, 'Nawabganj Sadar', '', 1),
(410, 49, 5, 'Shibganj', '', 1),
(411, 50, 5, 'Atgharia', '', 1),
(412, 50, 5, 'Bera', '', 1),
(413, 50, 5, 'Bhangura', '', 1),
(414, 50, 5, 'Chatmohar', '', 1),
(415, 50, 5, 'Faridpur', '', 1),
(416, 50, 5, 'Ishwardi', '', 1),
(417, 50, 5, 'Pabna Sadar', '', 1),
(418, 50, 5, 'Santhia', '', 1),
(419, 50, 5, 'Sujanagar', '', 1),
(420, 51, 5, 'Bagha', '', 1),
(421, 51, 5, 'Bagmara', '', 1),
(422, 51, 5, 'Charghat', '', 1),
(423, 51, 5, 'Durgapur', '', 1),
(424, 51, 5, 'Godagari', '', 1),
(425, 51, 5, 'Mohanpur', '', 1),
(426, 51, 5, 'Paba', '', 1),
(427, 51, 5, 'Puthia', '', 1),
(428, 51, 5, 'Tanore', '', 1),
(429, 52, 5, 'Belkuchi', '', 1),
(430, 52, 5, 'Chauhali', '', 1),
(431, 52, 5, 'Kamarkhanda', '', 1),
(432, 52, 5, 'Kazipur', '', 1),
(433, 52, 5, 'Raiganj', '', 1),
(434, 52, 5, 'Shahjadpur', '', 1),
(435, 52, 5, 'Sirajganj Sadar', '', 1),
(436, 52, 5, 'Tarash', '', 1),
(437, 52, 5, 'Ullahpara', '', 1),
(438, 53, 6, 'Birampur', '', 1),
(439, 53, 6, 'Birganj', '', 1),
(440, 53, 6, 'Biral', '', 1),
(441, 53, 6, 'Bochaganj', '', 1),
(442, 53, 6, 'Chirirbandar', '', 1),
(443, 53, 6, 'Phulbari', '', 1),
(444, 53, 6, 'Ghoraghat', '', 1),
(445, 53, 6, 'Hakimpur', '', 1),
(446, 53, 6, 'Kaharole', '', 1),
(447, 53, 6, 'Khansama', '', 1),
(448, 53, 6, 'Dinajpur Sadar', '', 1),
(449, 53, 6, 'Nawabganj', '', 1),
(450, 53, 6, 'Parbatipur', '', 1),
(451, 54, 6, 'Phulchhari', '', 1),
(452, 54, 6, 'Gaibandha Sadar', '', 1),
(453, 54, 6, 'Gobindaganj', '', 1),
(454, 54, 6, 'Palashbari', '', 1),
(455, 54, 6, 'Sadullapur', '', 1),
(456, 54, 6, 'Sughatta', '', 1),
(457, 54, 6, 'Sundarganj', '', 1),
(458, 55, 6, 'Bhurungamari', '', 1),
(459, 55, 6, 'Char Rajibpur', '', 1),
(460, 55, 6, 'Chilmari', '', 1),
(461, 55, 6, 'Phulbari', '', 1),
(462, 55, 6, 'Kurigram Sadar', '', 1),
(463, 55, 6, 'Nageshwari', '', 1),
(464, 55, 6, 'Rajarhat', '', 1),
(465, 55, 6, 'Raomari', '', 1),
(466, 55, 6, 'Ulipur', '', 1),
(467, 56, 6, 'Aditmari', '', 1),
(468, 56, 6, 'Hatibandha', '', 1),
(469, 56, 6, 'Kaliganj', '', 1),
(470, 56, 6, 'Lalmonirhat Sadar', '', 1),
(471, 56, 6, 'Patgram', '', 1),
(472, 57, 6, 'Dimla', '', 1),
(473, 57, 6, 'Domar', '', 1),
(474, 57, 6, 'Jaldhaka', '', 1),
(475, 57, 6, 'Kishoreganj', '', 1),
(476, 57, 6, 'Nilphamari Sadar', '', 1),
(477, 57, 6, 'Saidpur', '', 1),
(478, 58, 6, 'Atwari', '', 1),
(479, 58, 6, 'Boda', '', 1),
(480, 58, 6, 'Debiganj', '', 1),
(481, 58, 6, 'Panchagarh Sadar', '', 1),
(482, 58, 6, 'Tetulia', '', 1),
(483, 59, 6, 'Badarganj', '', 1),
(484, 59, 6, 'Gangachhara', '', 1),
(485, 59, 6, 'Kaunia', '', 1),
(486, 59, 6, 'Rangpur Sadar', '', 1),
(487, 59, 6, 'Pirgachha', '', 1),
(488, 59, 6, 'Pirganj', '', 1),
(489, 59, 6, 'Taraganj', '', 1),
(490, 60, 6, 'Baliadangi', '', 1),
(491, 60, 6, 'Haripur', '', 1),
(492, 60, 6, 'Ranisankail', '', 1),
(493, 60, 6, 'Thakurgaon Sadar', '', 1),
(494, 61, 7, 'Ajmiriganj', '', 1),
(495, 61, 7, 'Bahubal', '', 1),
(496, 61, 7, 'Baniyachong', '', 1),
(497, 61, 7, 'Chunarughat', '', 1),
(498, 61, 7, 'Habiganj Sadar', '', 1),
(499, 61, 7, 'Lakhai', '', 1),
(500, 61, 7, 'Madhabpur', '', 1),
(501, 61, 7, 'Nabiganj', '', 1),
(502, 62, 7, 'Barlekha', '', 1),
(503, 62, 7, 'Kamalganj ', '', 1),
(504, 62, 7, 'Kulaura', '', 1),
(505, 62, 7, 'Maulvibazar Sadar', '', 1),
(506, 62, 7, 'Rajnagar', '', 1),
(507, 62, 7, 'Sreemangal', '', 1),
(508, 62, 7, 'Juri', '', 1),
(509, 63, 7, 'Bishwamvarpur', '', 1),
(510, 63, 7, 'Chhatak', '', 1),
(511, 63, 7, 'Derai', '', 1),
(512, 63, 7, 'Dharampasha', '', 1),
(513, 63, 7, 'Dowarabazar', '', 1),
(514, 63, 7, 'Jagannathpur', '', 1),
(515, 63, 7, 'Jamalganj', '', 1),
(516, 63, 7, 'Sullah', '', 1),
(517, 63, 7, 'Sunamganj Sadar', '', 1),
(518, 63, 7, 'Tahirpur', '', 1),
(519, 64, 7, 'Katuwali', '', 1),
(520, 64, 7, 'Jalalabad', '', 1),
(521, 64, 7, 'Shahporan', '', 1),
(522, 64, 7, 'Bimanbondar', '', 1),
(523, 64, 7, 'Maglabazar', '', 1),
(524, 64, 7, 'South Surma', '', 1),
(525, 64, 7, 'Balaganj', '', 1),
(526, 64, 7, 'Beanibazar', '', 1),
(527, 64, 7, 'Bishwanath', '', 1),
(528, 64, 7, 'Fenchuganj', '', 1),
(529, 64, 7, 'Companiganj', '', 1),
(530, 64, 7, 'Golapganj', '', 1),
(531, 64, 7, 'Gowainghat', '', 1),
(532, 64, 7, 'Jaintiapur', '', 1),
(533, 64, 7, 'Kanaighat', '', 1),
(534, 64, 7, 'Zakiganj', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE IF NOT EXISTS `tbl_registration` (
  `regristration_id` int(11) NOT NULL AUTO_INCREMENT,
  `org_type` varchar(50) NOT NULL,
  `org_name` varchar(50) NOT NULL,
  `org_discription` varchar(500) NOT NULL,
  `Phone` varchar(200) NOT NULL,
  `divition` varchar(50) NOT NULL,
  `dstict` varchar(50) NOT NULL,
  `ps` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `fax` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `enter_date_time` datetime NOT NULL,
  `enter_ip` varchar(128) NOT NULL,
  PRIMARY KEY (`regristration_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`regristration_id`, `org_type`, `org_name`, `org_discription`, `Phone`, `divition`, `dstict`, `ps`, `address`, `fax`, `email`, `status`, `enter_date_time`, `enter_ip`) VALUES
(1, '1', 'Bornomala Rent-A-Car', 'All kinds of car, A/C or non A/C microbus, bus & pickup van- available here', '+880 1762 506450, +880 1911 689640', '1', '3', '18', '2, Central Bashaboo, Dhaka-1214.', '', 'bornomala@gmail.com', 1, '0000-00-00 00:00:00', '13'),
(3, '2', 'Saudia Rent-A-Car1', 'All kinds of1 car, A/C or non A/C microbus, bus & pickup van- available here', '+8802 72114267, +8802 8252972, +8801712630730, 01711 644658, 01919 644658', '1', '3', '12', '803/A, Khi1lgaon, Tilpapara, Acota Shorak, Dhaka-1219', '', 'kamrul.khan2010@gmail.com', 0, '2011-12-27 18:22:16', '127.0.0.1'),
(5, '1', 'Easy Rent-A-Car', 'All kinds of car, pickup available here', '+880 1926 880675', '1', '1', '1', '32/1, Central Bashaboo, (dosher mor), Dhaka-1214.', '', '', 0, '2011-12-27 18:47:11', '127.0.0.1'),
(6, '$org_type', '$org_name', '$org_disc', '$phone', '$org_divition', '$org_district', 'org_ps', '$address', '', '$email', 0, '2011-12-27 18:47:33', '127.0.0.1'),
(7, '1', 'Aziz Bearing & Auto Parts', 'All kinds of car bearing & auto parts wholesaler, retailer & Supplier. ', '+88 01720 446794', '1', '1', '1', '84, New Eskaton Road, Adi Market, Banglamotor, Dhaka-1000.', '', '', 0, '2011-12-27 18:47:57', '127.0.0.1'),
(8, '1', 'New Brothers Motors', 'All kinds of Motorcycles Genuine Parts Saller. ', '+88 01717432770, 01716 767595, 01675 703108, 01199 432094', '1', '1', '1', '84, New Eskaton Road, Banglamotor, Dhaka-1000.', '', '', 0, '2011-12-27 18:52:21', '127.0.0.1'),
(9, '1', 'New Saad Car Decoration', '', '+88 01727 107605, 01821 412326', '1', '1', '1', '58, New Eskaton Road, Momtaz Mansion-2, Shop No. J, Banglamotor, Dhaka-1000.', '', '', 0, '2011-12-27 18:52:44', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sellinginfo`
--

CREATE TABLE IF NOT EXISTS `tbl_sellinginfo` (
  `sell_id` int(11) NOT NULL AUTO_INCREMENT,
  `pub_date` date NOT NULL,
  `end_date` date NOT NULL,
  `car_type` varchar(50) NOT NULL,
  `car_model` varchar(50) NOT NULL,
  `car_image` varchar(200) NOT NULL,
  `image_thm` varchar(200) NOT NULL,
  `car_discription` varchar(500) NOT NULL,
  `car_price` varchar(50) NOT NULL,
  `ad_duration` int(10) NOT NULL,
  `contact_no` varchar(200) NOT NULL,
  `contact_address` varchar(200) NOT NULL,
  `entry_by` varchar(50) NOT NULL,
  `entry_by_date_time` datetime NOT NULL,
  `entry_ip` varchar(32) NOT NULL,
  `update_by` varchar(50) NOT NULL,
  `update_by_date_time` datetime DEFAULT NULL,
  `update_ip` varchar(32) DEFAULT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`sell_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_sellinginfo`
--

INSERT INTO `tbl_sellinginfo` (`sell_id`, `pub_date`, `end_date`, `car_type`, `car_model`, `car_image`, `image_thm`, `car_discription`, `car_price`, `ad_duration`, `contact_no`, `contact_address`, `entry_by`, `entry_by_date_time`, `entry_ip`, `update_by`, `update_by_date_time`, `update_ip`, `status`) VALUES
(1, '0000-00-00', '0000-00-00', 'motor cycle', 'Prado Model 98', 'upload/car_1325268220.jpg', 'upload/small/toyota-landcruiser-prado-1996.jpg', 'Toyota Parado jeep model -98, Registration: 2001, CC- 3400, orginal maroon color, full option auto.', 'Negotiable', 0, '+880 1670 336150, +880 1929 348292', '', '', '2011-12-30 18:03:40', '127.0.0.1', 'bijon.bairagi@gmail.com', '2012-01-26 16:49:08', '127.0.0.1', 1),
(2, '0000-00-00', '0000-00-00', '', 'Prado Model 2005', 'upload/car_1325270771.jpg', 'upload/small/05-toyota-prado-4x4-automatic-gas-price-1.980million.jpg', 'Toyota Prado jeep model- 2005, Registration - 2006, cc-2700, showroom condition.', 'Negotiable', 0, '+880 1711 600560', '', '', '2011-12-30 18:46:11', '127.0.0.1', 'kmhasanc@gmail.com', '2011-12-30 18:47:13', '127.0.0.1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_info`
--

CREATE TABLE IF NOT EXISTS `tbl_user_info` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `passwoard` varchar(32) NOT NULL,
  `account_type` varchar(50) NOT NULL,
  `option1` varchar(50) NOT NULL,
  `option2` varchar(50) NOT NULL,
  `option3` varchar(50) NOT NULL,
  `option4` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_user_info`
--

INSERT INTO `tbl_user_info` (`user_id`, `email`, `passwoard`, `account_type`, `option1`, `option2`, `option3`, `option4`) VALUES
(1, 'bijon.bairagi@gmail.com', '123456', 'developer', '', '', '', ''),
(2, 'mshkabir@yahoo.com', '123456', 'admin', '', '', '', ''),
(3, 'kmhasanc@gmail.com', 'diya2010', 'Admin', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_login`
--

CREATE TABLE IF NOT EXISTS `tbl_user_login` (
  `login_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `computer_ip` varchar(128) NOT NULL,
  `date_time` date NOT NULL,
  `login_status` varchar(7) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `tbl_user_login`
--

INSERT INTO `tbl_user_login` (`login_id`, `user_id`, `email`, `computer_ip`, `date_time`, `login_status`) VALUES
(1, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2011-11-15', 'success'),
(2, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2011-11-15', 'success'),
(3, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2011-11-15', 'success'),
(4, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2011-11-15', 'success'),
(5, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2011-11-15', 'success'),
(6, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2011-11-15', 'success'),
(7, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2011-11-15', 'success'),
(8, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2011-11-15', 'success'),
(9, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2011-11-15', 'success'),
(10, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2011-11-16', 'success'),
(11, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2011-11-16', 'success'),
(12, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2011-11-18', 'success'),
(13, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2011-11-20', 'success'),
(14, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2011-11-27', 'success'),
(15, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2011-12-10', 'success'),
(16, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2011-12-10', 'success'),
(17, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2011-12-10', 'success'),
(18, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2011-12-10', 'success'),
(19, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2011-12-11', 'success'),
(20, 3, 'kmhasanc@gmail.com', '127.0.0.1', '2011-12-11', 'success'),
(21, 3, 'kmhasanc@gmail.com', '127.0.0.1', '2011-12-11', 'success'),
(22, 3, 'kmhasanc@gmail.com', '127.0.0.1', '2011-12-12', 'Fail'),
(23, 3, 'kmhasanc@gmail.com', '127.0.0.1', '2011-12-12', 'success'),
(24, 3, 'kmhasanc@gmail.com', '127.0.0.1', '2011-12-12', 'success'),
(25, 3, 'kmhasanc@gmail.com', '127.0.0.1', '2011-12-12', 'success'),
(26, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2011-12-23', 'success'),
(27, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2011-12-23', 'success'),
(28, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2011-12-23', 'success'),
(29, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2011-12-23', 'success'),
(30, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2011-12-23', 'success'),
(31, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2011-12-24', 'success'),
(32, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2011-12-25', 'success'),
(33, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2011-12-25', 'success'),
(34, 3, 'kmhasanc@gmail.com', '127.0.0.1', '2011-12-30', 'success'),
(35, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2012-01-13', 'success'),
(36, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2012-01-17', 'success'),
(37, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2012-01-17', 'success'),
(38, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2012-01-25', 'success'),
(39, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2012-01-26', 'success'),
(40, 1, 'bijon.bairagi@gmail.com', '127.0.0.1', '2012-01-26', 'success');
