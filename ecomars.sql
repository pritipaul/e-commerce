-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 04:33 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomars`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `idc` int(3) NOT NULL,
  `name` text NOT NULL,
  `add` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `ph` int(11) NOT NULL,
  `amount` int(100) NOT NULL,
  `card` int(20) NOT NULL,
  `date` date NOT NULL,
  `holder` varchar(20) NOT NULL,
  `typec` varchar(10) NOT NULL,
  `date of sub` datetime(4) NOT NULL DEFAULT current_timestamp(4)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`idc`, `name`, `add`, `email`, `ph`, `amount`, `card`, `date`, `holder`, `typec`, `date of sub`) VALUES
(36, 'Tina Das', 'Bisnu', '', 0, 0, 0, '0000-00-00', '', 'Visa', '2021-03-31 09:28:41.1369'),
(37, '', '', '', 0, 0, 0, '0000-00-00', '', 'Visa', '2021-03-31 09:30:02.3365'),
(38, 'dsfsudfh', 'dfdsfdsf', 'dfdsfsdff@hgfh', 0, 0, 0, '0000-00-00', '', 'Visa', '2021-03-31 09:37:21.3934'),
(39, 'Gayatri Paul', 'Rajarhat Bhatenda', 'paulpriti877@gmail.c', 2147483647, 400, 2147483647, '2021-03-31', 'rtyrtutyu', 'Creadit Ca', '2021-03-31 11:04:09.2076'),
(40, 'Priti Paul', 'Rajarhat Bhatenda', 'paulpriti877@gmail.c', 2147483647, 400, 741852963, '2021-06-21', 'Ranjit Paul', 'Rupay', '2021-06-21 21:52:33.3885'),
(41, 'Priti Paul', 'Rajarhat Bhatenda', 'paulpriti877@gmail.c', 2147483647, 400, 789456123, '2021-06-25', 'tani ', 'Rupay', '2021-06-25 17:47:25.0597');

-- --------------------------------------------------------

--
-- Table structure for table `caseon`
--

CREATE TABLE `caseon` (
  `idax` int(3) NOT NULL,
  `name` text NOT NULL,
  `add` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `ph` int(11) NOT NULL,
  `amount` int(10) NOT NULL,
  `Code` int(5) NOT NULL,
  `date of submit` datetime(4) NOT NULL DEFAULT current_timestamp(4)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `caseon`
--

INSERT INTO `caseon` (`idax`, `name`, `add`, `email`, `ph`, `amount`, `Code`, `date of submit`) VALUES
(1, 'titin', 'rajarhat', '', 741852963, 100, 741, '2021-03-31 10:53:31.0000'),
(2, 'yiui ', 'Rajarhat Bhatenda', 'paulpriti877@gmail.c', 2147483647, 963, 0, '2021-03-31 11:01:51.3909'),
(3, 'yiui ', 'Rajarhat Bhatenda', 'paulpriti877@gmail.c', 2147483647, 963, 53508, '2021-03-31 11:02:06.0788'),
(4, 'Gayatri Paul', 'Rajarhat Bhatenda', 'paulpriti877@gmail.c', 2147483647, 400, 18006, '2021-03-31 11:04:43.0081');

-- --------------------------------------------------------

--
-- Table structure for table `chat45`
--

CREATE TABLE `chat45` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `para` varchar(5000) NOT NULL,
  `date and time` datetime(4) NOT NULL DEFAULT current_timestamp(4)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat45`
--

INSERT INTO `chat45` (`id`, `name`, `para`, `date and time`) VALUES
(125, 'Ranjit Pal upaday', 'ok', '2021-03-24 00:29:33.1735'),
(126, 'Ranjit Pal upaday', 'thanku', '2021-03-24 00:29:35.4654'),
(127, 'lili', 'hi', '2021-04-01 07:40:20.2473'),
(128, 'lili', 'ujjghj', '2021-04-01 07:40:23.8581');

-- --------------------------------------------------------

--
-- Table structure for table `chat candited`
--

CREATE TABLE `chat candited` (
  `idn` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date of reply` datetime(4) NOT NULL DEFAULT current_timestamp(4)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat candited`
--

INSERT INTO `chat candited` (`idn`, `name`, `date of reply`) VALUES
(1, 'rita', '2021-03-23 11:26:00.0000'),
(2, 'priti paul', '2021-03-23 11:29:59.4949'),
(3, 'priti paul', '2021-03-23 11:30:05.1265'),
(4, 'priti paul', '2021-03-23 11:30:41.3744'),
(5, 'priti paul', '2021-03-23 11:30:56.1716'),
(6, 'priti paul', '2021-03-23 11:37:28.8160'),
(7, 'priti paul', '2021-03-23 11:42:14.0411'),
(8, 'priti paul', '2021-03-23 12:05:27.9785'),
(9, 'priti paul', '2021-03-23 12:14:04.9062'),
(10, 'priti paul', '2021-03-23 12:18:48.3832'),
(11, 'Superna Paul', '2021-03-23 12:20:59.3094'),
(12, 'priti paul', '2021-03-23 12:23:43.3295'),
(13, 'Superna Paul', '2021-03-23 12:28:46.1814'),
(14, 'Gopal Paul', '2021-03-24 00:23:37.2690'),
(15, 'Ranjit Pal upaday', '2021-03-24 00:24:42.9173'),
(16, 'lili', '2021-04-01 07:40:13.2250');

-- --------------------------------------------------------

--
-- Table structure for table `saree`
--

CREATE TABLE `saree` (
  `nol` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `picture` varchar(20) NOT NULL,
  `codeno` int(20) NOT NULL,
  `date of submetion` datetime(4) NOT NULL DEFAULT current_timestamp(4)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saree`
--

INSERT INTO `saree` (`nol`, `name`, `picture`, `codeno`, `date of submetion`) VALUES
(1, 'broo1', 'sareeA.jpg', 16001, '2021-04-01 10:20:12.0000'),
(2, 'broo2', 'sareeB.jpg', 16002, '2021-04-01 10:21:53.0000'),
(3, 'broo3', 'sareeC.png', 16003, '2021-04-01 10:22:18.0000'),
(4, 'broo4', 'sareeD.jpg', 16004, '2021-04-01 10:22:55.0000'),
(5, 'broo5', 'sareeE.webp', 16005, '2021-04-01 10:23:14.0000'),
(6, 'broo6', 'sareeE.webp', 16006, '2021-04-01 10:23:41.0000'),
(7, 'broo7', 'sareeF.jpg', 16007, '2021-04-01 10:24:23.0000'),
(8, 'broo8', 'sareeG.jpg', 16008, '2021-04-01 10:24:41.0000'),
(9, 'broo9', 'sareeH.jpg', 16009, '2021-04-01 10:25:11.0000'),
(10, 'broo10', 'sareeI.jpg', 16010, '2021-04-01 10:26:34.0000'),
(11, 'broo11', 'sareeJ.jpg', 16011, '2021-04-01 10:26:56.0000'),
(12, 'broo12', 'sareeK.jpg', 16012, '2021-04-01 10:27:29.0000'),
(13, 'broo13', 'sareeL.jpg', 16013, '2021-04-01 10:27:59.0000'),
(14, 'broo14', 'sareeL.webp', 16014, '2021-04-01 10:28:31.0000'),
(15, 'broo15', 'sareeM.jpg', 16015, '2021-04-01 10:29:03.0000'),
(16, 'broo16', 'sareeN.jpg', 16016, '2021-04-01 10:29:29.0000'),
(17, 'broo17', 'sareeO.jpg', 16017, '2021-04-01 10:31:06.0000'),
(18, 'broo18', 'sareeP.jpg', 16018, '2021-04-01 10:31:55.0000'),
(19, 'broo19', 'sareeQ.jpg', 16019, '2021-04-01 10:32:26.0000'),
(20, 'broo20', 'sareeR.jpg', 16020, '2021-04-01 10:32:46.0000'),
(21, 'bro21', 'sareeS.jpg', 16021, '2021-04-01 10:33:17.0000'),
(22, 'broo22', 'sareeT.jpg', 16022, '2021-04-01 10:34:14.0000'),
(23, 'broo23', 'sareeU.jpg', 16023, '2021-04-01 10:34:50.0000'),
(24, 'broo24', 'sareeV.jpg', 16024, '2021-04-01 10:35:09.0000'),
(25, 'broo25', 'sareeW.jpg', 16025, '2021-04-01 10:35:37.0000'),
(26, 'broo26', 'sareeX.jpg', 16026, '2021-04-01 10:36:04.0000'),
(27, 'broo27', 'sareeY.jpg', 16027, '2021-04-01 10:36:34.0000'),
(28, 'broo28', 'sareeZ.jpg', 16028, '2021-04-01 10:37:00.0000'),
(29, 'broo29', 'sareeVA.jpg', 16029, '2021-04-01 10:37:26.0000'),
(30, 'broo29', 'sareeVB.jpg', 16029, '2021-04-01 10:37:54.0000'),
(31, 'broo31', 'sareeVC.jpg', 16031, '0000-00-00 00:00:00.0000'),
(32, 'broo32', 'sareeVD.jpg', 16032, '2021-04-01 10:38:53.0000'),
(33, 'broo32', 'sareeVE.jpg', 16032, '2021-04-01 10:39:23.0000'),
(34, 'broo34', 'sareeVF.jpg', 16034, '2021-04-01 10:39:46.0000'),
(36, 'broo36', 'sareeVG.jpg', 16036, '2021-04-01 10:40:15.0000'),
(37, 'broo37', 'sareeVI.jpg', 16037, '2021-04-01 10:41:11.0000'),
(38, 'broo38', 'sareeVH.jpg', 16038, '2021-04-01 10:41:37.0000'),
(39, 'broo39', 'sareeVJ.jpeg', 16039, '2021-04-01 10:42:01.0000'),
(40, 'broo40', 'sareeVK.jpeg', 16040, '2021-04-01 10:42:33.0000'),
(41, 'broo41', 'sareeVH.jpg', 16041, '2021-04-01 10:42:56.0000'),
(42, 'broo42', 'sareeVJ.jpeg', 16042, '2021-04-01 10:43:33.0000'),
(43, 'broo43', 'sareeVK.jpeg', 16043, '2021-04-01 10:43:53.0000'),
(44, 'broo44', 'sareeVL.jpeg', 16044, '2021-04-01 10:44:22.0000'),
(45, 'broo45', 'sareeVM.jpg', 16045, '2021-04-01 10:44:46.0000'),
(46, 'broo46', 'sareeVN.jpg', 16045, '2021-04-01 10:45:27.0000'),
(47, 'broo47', 'sareeVO.jpg', 16047, '2021-04-01 10:45:46.0000'),
(48, 'broo48', 'sareeVP.webp', 16048, '2021-04-01 10:46:10.0000'),
(49, 'broo49', 'sareeVQ.jpg', 16049, '2021-04-01 10:46:49.0000'),
(50, 'broo50', 'sareeVS.jpg', 16050, '2021-04-01 10:47:29.0000');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date of submetion` datetime(4) NOT NULL DEFAULT current_timestamp(4)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `name`, `username`, `password`, `email`, `date of submetion`) VALUES
(113, 'sdhfhff', 'priti2', 'priti2', 'fddfdsf@dfg', '2021-04-02 07:25:51.1218');

-- --------------------------------------------------------

--
-- Table structure for table `top`
--

CREATE TABLE `top` (
  `no` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `code` int(10) NOT NULL,
  `date of order` datetime(4) NOT NULL DEFAULT current_timestamp(4)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `top`
--

INSERT INTO `top` (`no`, `name`, `picture`, `code`, `date of order`) VALUES
(1, 'top1 ', 'croptop1.webp', 17001, '2021-04-01 09:02:00.0000'),
(2, 'top2 ', 'croptop13.webp', 17002, '2021-04-01 09:02:26.0000'),
(3, 'top3 ', 'croptop14.webp', 17003, '2021-04-01 09:03:12.0000'),
(4, 'top4 ', 'croptop7.jpg', 17004, '2021-04-01 09:04:45.0000'),
(5, 'top5 ', 'croptop8.jpg', 17005, '2021-04-01 09:06:59.0000'),
(6, 'top6 ', 'croptop10.jpg', 17006, '2021-04-01 09:08:01.0000'),
(7, 'top7 ', 'croptop29.jpg', 17007, '2021-04-01 09:08:30.0000'),
(8, 'top8 ', 'croptop19.jpg', 17008, '2021-04-01 09:08:59.0000'),
(9, 'top9', 'croptop16.jpeg', 17009, '2021-04-01 09:09:27.0000'),
(10, 'top10', 'croptop21.jpg', 17010, '2021-04-01 09:09:51.0000'),
(11, 'top11', 'croptop22.jpg', 17011, '2021-04-01 09:10:31.0000'),
(12, 'top12', 'croptop25.jpg', 17012, '2021-04-01 09:10:56.0000'),
(13, 'top13', 'croptop27.jpg', 17013, '2021-04-01 09:11:48.0000'),
(14, 'top14', ' croptop28.jpg', 17014, '2021-04-01 09:12:25.0000'),
(15, 'top15', 'croptop15.jpg', 17015, '2021-04-01 09:12:52.0000'),
(16, 'top16', 'croptop30.jpg', 17016, '2021-04-01 09:13:22.0000'),
(17, 'top17', 'cropA.jpg', 17017, '2021-04-01 09:14:06.0000'),
(18, 'top18', 'cropB.jpg', 17018, '2021-04-01 09:14:45.0000'),
(19, 'top19', 'cropI.jpg', 17019, '2021-04-01 09:15:10.0000'),
(20, 'top20', 'cropD.jpg', 17020, '2021-04-01 09:15:35.0000'),
(21, 'top21', 'croptop.jpg', 17021, '2021-04-01 09:16:03.0000'),
(22, 'top22', 'cropE.webp', 17022, '2021-04-01 09:16:44.0000'),
(23, 'top23', 'cropC.jpg', 17023, '2021-04-01 09:17:30.0000'),
(24, 'top24', 'cropF.webp', 17024, '2021-04-01 09:17:49.0000'),
(25, 'top25', 'cropH.webp', 17025, '2021-04-01 09:19:26.0000'),
(26, 'top26', 'cropJ.jpg', 17026, '2021-04-01 09:19:50.0000'),
(27, 'top27', 'cropK.jpg', 17027, '2021-04-01 09:20:25.0000'),
(28, 'top28', 'cropL.webp', 17028, '2021-04-01 09:21:05.0000'),
(30, 'top30', 'cropM.jpg', 17030, '2021-04-01 09:22:42.0000'),
(31, 'top31', 'dress9.jpg', 17031, '2021-04-01 09:23:09.0000'),
(32, 'top32', 'dress1.webp', 17032, '2021-04-01 09:23:51.0000'),
(33, 'top33', 'dress10.jpg', 17032, '2021-04-01 09:24:25.0000'),
(34, 'top34', 'dress17.jpg', 17034, '2021-04-01 09:24:58.0000'),
(35, 'top35', 'dressA.webp', 17035, '2021-04-01 09:25:35.0000'),
(36, 'top36', 'dressB.webp', 17036, '2021-04-01 09:26:02.0000'),
(37, 'top37', 'dressC.jpg', 17037, '2021-04-01 09:26:41.0000'),
(38, 'top38', 'dressD.jpg', 17038, '2021-04-01 09:27:11.0000'),
(39, 'top39', 'dressE.webp', 17039, '2021-04-01 09:27:37.0000'),
(40, 'top40', 'dressF.jpg', 17040, '2021-04-01 09:28:08.0000'),
(41, 'top41', 'dressG.jpg', 17041, '2021-04-01 09:28:40.0000'),
(42, 'top42', 'dressH.jpg', 1704, '2021-04-01 09:29:05.0000');

-- --------------------------------------------------------

--
-- Table structure for table `weding`
--

CREATE TABLE `weding` (
  `idj` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `picture` varchar(30) NOT NULL,
  `codeno` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weding`
--

INSERT INTO `weding` (`idj`, `name`, `picture`, `codeno`) VALUES
(1, 'saree1', 'eisa1.jpg', 18000),
(2, 'saree2', 'eisa8.jpg', 18001),
(3, 'saree3', 'eisa4.jpg', 18002),
(4, 'saree4', 'eisa3.webp', 18004),
(5, 'saree5', 'eisa5.jpg', 18005),
(6, 'saree6', 'eisa6.jpg', 18006),
(7, 'saree7', 'eisa7.jpg', 18007),
(8, 'saree8', 'eisa2.jpeg', 18008),
(9, 'saree9', 'eisa16.jpg', 18009),
(10, 'saree10', 'eisa10.jpg', 18010),
(11, 'saree11', 'eisa11.jpg', 18011),
(12, 'saree12', 'eisa12.jpg', 18012),
(13, 'saree13', 'eisa13.jpg', 18013),
(14, 'saree14', 'eisa15.jpg', 18014),
(15, 'saree15', 'eisa9.jpg', 18015),
(16, 'saree16', 'eisa18.jpg', 18016),
(17, 'saree17', 'eisa17.jpg', 18017),
(18, 'saree18', 'eisa19.jpg', 18018),
(19, 'saree19', 'eisa21.jpg', 18019),
(20, 'saree20', 'eisa22.jpg', 18020),
(21, 'saree21', 'eisa27.jpg', 18027),
(22, 'saree22', 'eisa20.jpg', 18022),
(23, 'saree23', 'eisa24.webp', 18023),
(24, 'saree24', 'eisa23.jpg', 18024),
(25, 'saree25', 'eisa25.jpg', 18025),
(26, 'saree26', 'eisa26.jpg', 18026),
(27, 'saree27', 'eis14.jpg', 18027),
(28, 'saree28', 'eisa33.webp', 18028),
(29, 'saree29', 'eisa30.webp', 18028),
(30, 'saree30', 'eisa30.webp', 18030),
(31, 'saree31', 'eisa31.jpg', 18031),
(32, 'saree32', 'eisa32.jpg', 18032),
(33, 'saree33', 'eisa28.jpg', 18033),
(34, 'saree34', 'eisa29.webp', 18034),
(35, 'saree35', 'eisa34.jpg', 18035),
(36, 'saree36', 'eisa35.jpg', 18036),
(38, 'saree38', 'eisa35.jpg', 18038),
(39, 'saree39', 'eisa36.jpg', 18039),
(40, 'saree40', 'eisa36.jpg', 18040),
(41, 'saree41', 'grown28.jpg', 18041),
(42, 'saree42', 'grown30.jpg', 18042),
(43, 'saree43', 'eisa44.jpg', 18043),
(44, 'saree44', 'eisa38.webp', 18044),
(45, 'saree45', 'eias39.jpg', 18045),
(46, 'saree46', 'eisa41.jpg', 18046),
(47, 'saree47', 'eisa42.jpg', 18047),
(48, 'saree48', 'isa40.jpg', 18048),
(49, 'saree49', 'eisa43.jpg', 18049);

-- --------------------------------------------------------

--
-- Table structure for table `westurn`
--

CREATE TABLE `westurn` (
  `no` int(3) NOT NULL,
  `name` varchar(10) NOT NULL,
  `picture` varchar(10) NOT NULL,
  `codeno` int(10) NOT NULL,
  `date of order` datetime(4) NOT NULL DEFAULT current_timestamp(4)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `westurn`
--

INSERT INTO `westurn` (`no`, `name`, `picture`, `codeno`, `date of order`) VALUES
(1, 'saree1 ', 'west2.jpg', 19000, '2021-04-01 07:52:27.0000'),
(2, 'saree2 ', 'west4.webp', 19001, '2021-04-01 07:53:33.0000'),
(3, 'saree3 ', 'west3.webp', 19003, '2021-04-01 07:54:08.0000'),
(4, 'saree4', 'west5.jpg', 19004, '0000-00-00 00:00:00.0000'),
(5, 'saree5', 'west6.jpeg', 19005, '2021-04-01 07:55:24.0000'),
(6, 'saree6', 'west7.jpg', 19006, '2021-04-01 07:56:00.0000'),
(7, 'saree7', 'west14.jpg', 19007, '2021-04-01 07:57:06.0000'),
(8, 'saree8', 'west13.jpg', 19008, '2021-04-01 07:58:52.0000'),
(9, 'saree9', 'west16.jpg', 19009, '2021-04-01 07:59:22.0000'),
(10, 'saree10', 'west21.jpg', 19010, '2021-04-01 07:59:54.0000'),
(11, 'saree11', 'west24.jpg', 19011, '2021-04-01 08:00:40.0000'),
(12, 'saree12', 'west26.jpg', 19012, '2021-04-01 08:01:17.0000'),
(13, 'saree13', 'west30.jpg', 19013, '0000-00-00 00:00:00.0000'),
(14, 'saree14', 'west30.web', 19014, '2021-04-01 08:02:38.0000'),
(15, 'saree15', 'west31.jpg', 19015, '2021-04-01 08:03:45.0000'),
(16, 'saree16 ', 'west32.jpg', 19016, '2021-04-01 08:06:10.0000'),
(17, 'saree17', 'westA.jpg', 19017, '2021-04-01 08:07:26.0000'),
(18, 'saree18', 'westB.jpg', 19018, '2021-04-01 08:07:54.0000'),
(19, 'saree19', 'weatQ.jpg', 19019, '2021-04-01 08:08:45.0000'),
(20, 'saree20', 'westP.png', 19020, '2021-04-01 08:09:18.0000'),
(21, 'saree21', 'westO.jpg', 19021, '2021-04-01 08:10:05.0000'),
(22, 'sare22', 'westN.jpg', 19022, '2021-04-01 08:10:34.0000'),
(23, 'saree23', 'westL.jpg', 19023, '0000-00-00 00:00:00.0000'),
(24, 'saree24', 'westM.jpg', 19024, '2021-04-01 08:12:22.0000'),
(25, 'saree25', 'westC.jpg', 19025, '2021-04-01 08:13:25.0000'),
(26, 'saree26', 'westD.png', 19026, '2021-04-01 08:14:32.0000'),
(27, 'saree27', 'westE.jpg', 19027, '2021-04-01 08:15:11.0000'),
(28, 'saree28', 'westF.jpg', 19028, '2021-04-01 08:15:44.0000'),
(29, 'saree29', 'westG.jpg', 19029, '2021-04-01 08:17:02.0000'),
(30, 'saree30', 'westH.jpg', 19030, '2021-04-01 08:18:03.0000'),
(31, 'saree31', 'westI.jpg', 19031, '2021-04-01 08:18:29.0000'),
(32, 'saree32', 'westJ.jpg', 19032, '2021-04-01 08:18:59.0000'),
(33, 'saree33', 'westK.jpg', 19033, '2021-04-01 08:19:25.0000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`idc`);

--
-- Indexes for table `caseon`
--
ALTER TABLE `caseon`
  ADD PRIMARY KEY (`idax`);

--
-- Indexes for table `chat45`
--
ALTER TABLE `chat45`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat candited`
--
ALTER TABLE `chat candited`
  ADD PRIMARY KEY (`idn`);

--
-- Indexes for table `saree`
--
ALTER TABLE `saree`
  ADD PRIMARY KEY (`nol`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `top`
--
ALTER TABLE `top`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `weding`
--
ALTER TABLE `weding`
  ADD PRIMARY KEY (`idj`);

--
-- Indexes for table `westurn`
--
ALTER TABLE `westurn`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `idc` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `caseon`
--
ALTER TABLE `caseon`
  MODIFY `idax` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chat45`
--
ALTER TABLE `chat45`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `chat candited`
--
ALTER TABLE `chat candited`
  MODIFY `idn` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `saree`
--
ALTER TABLE `saree`
  MODIFY `nol` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `top`
--
ALTER TABLE `top`
  MODIFY `no` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `weding`
--
ALTER TABLE `weding`
  MODIFY `idj` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `westurn`
--
ALTER TABLE `westurn`
  MODIFY `no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
