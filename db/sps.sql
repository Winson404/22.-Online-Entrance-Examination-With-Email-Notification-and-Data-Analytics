-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2023 at 07:44 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sps`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`cat_Id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `questions_added` varchar(255) NOT NULL DEFAULT '0',
  `no_of_items` int(11) NOT NULL,
  `time_limit` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_Id`, `cat_name`, `questions_added`, `no_of_items`, `time_limit`) VALUES
(6, 'English', '60', 60, '20 minutes'),
(7, 'Mathematics', '60', 60, '20 minutes'),
(10, 'Science', '60', 60, '20 minutes');

-- --------------------------------------------------------

--
-- Table structure for table `customization`
--

CREATE TABLE IF NOT EXISTS `customization` (
`customID` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `status` varchar(150) NOT NULL DEFAULT 'Inactive',
  `date_added` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `customization`
--

INSERT INTO `customization` (`customID`, `picture`, `status`, `date_added`) VALUES
(7, '6207ad7e34af5.jpg', 'Active', '2022-11-27'),
(8, 'wallpaperflare.com_wallpaper (1).jpg', 'Inactive', '2022-11-27'),
(10, 'wallpaperflare.com_wallpaper.jpg', 'Inactive', '2022-11-27'),
(11, 'minimalism-1644666519306-6515.jpg', 'Inactive', '2022-11-27'),
(18, 'logo.png', 'Inactive', '2022-11-27'),
(19, '12.jpg', 'Inactive', '2022-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
`exam_Id` int(11) NOT NULL,
  `user_Id` int(11) NOT NULL,
  `q1` int(11) NOT NULL,
  `q1_remarks` int(11) NOT NULL,
  `q2` int(11) NOT NULL,
  `q2_remarks` int(11) NOT NULL,
  `q3` int(11) NOT NULL,
  `q3_remarks` int(11) NOT NULL,
  `q4` int(11) NOT NULL,
  `q4_remarks` int(11) NOT NULL,
  `q5` int(11) NOT NULL,
  `q5_remarks` int(11) NOT NULL,
  `q6` int(11) NOT NULL,
  `q6_remarks` int(11) NOT NULL,
  `q7` int(11) NOT NULL,
  `q7_remarks` int(11) NOT NULL,
  `q8` int(11) NOT NULL,
  `q8_remarks` int(11) NOT NULL,
  `q9` int(11) NOT NULL,
  `q9_remarks` int(11) NOT NULL,
  `q10` int(11) NOT NULL,
  `q10_remarks` int(11) NOT NULL,
  `q11` int(11) NOT NULL,
  `q11_remarks` int(11) NOT NULL,
  `q12` int(11) NOT NULL,
  `q12_remarks` int(11) NOT NULL,
  `q13` int(11) NOT NULL,
  `q13_remarks` int(11) NOT NULL,
  `q14` int(11) NOT NULL,
  `q14_remarks` int(11) NOT NULL,
  `q15` int(11) NOT NULL,
  `q15_remarks` int(11) NOT NULL,
  `q16` int(11) NOT NULL,
  `q16_remarks` int(11) NOT NULL,
  `q17` int(11) NOT NULL,
  `q17_remarks` int(11) NOT NULL,
  `q18` int(11) NOT NULL,
  `q18_remarks` int(11) NOT NULL,
  `q19` int(11) NOT NULL,
  `q19_remarks` int(11) NOT NULL,
  `q20` int(11) NOT NULL,
  `q20_remarks` int(11) NOT NULL,
  `q21` int(11) NOT NULL,
  `q21_remarks` int(11) NOT NULL,
  `q22` int(11) NOT NULL,
  `q22_remarks` int(11) NOT NULL,
  `q23` int(11) NOT NULL,
  `q23_remarks` int(11) NOT NULL,
  `q24` int(11) NOT NULL,
  `q24_remarks` int(11) NOT NULL,
  `q25` int(11) NOT NULL,
  `q25_remarks` int(11) NOT NULL,
  `q26` int(11) NOT NULL,
  `q26_remarks` int(11) NOT NULL,
  `q27` int(11) NOT NULL,
  `q27_remarks` int(11) NOT NULL,
  `q28` int(11) NOT NULL,
  `q28_remarks` int(11) NOT NULL,
  `q29` int(11) NOT NULL,
  `q29_remarks` int(11) NOT NULL,
  `q30` int(11) NOT NULL,
  `q30_remarks` int(11) NOT NULL,
  `q31` int(11) NOT NULL,
  `q31_remarks` int(11) NOT NULL,
  `q32` int(11) NOT NULL,
  `q32_remarks` int(11) NOT NULL,
  `q33` int(11) NOT NULL,
  `q33_remarks` int(11) NOT NULL,
  `q34` int(11) NOT NULL,
  `q34_remarks` int(11) NOT NULL,
  `q35` int(11) NOT NULL,
  `q35_remarks` int(11) NOT NULL,
  `q36` int(11) NOT NULL,
  `q36_remarks` int(11) NOT NULL,
  `q37` int(11) NOT NULL,
  `q37_remarks` int(11) NOT NULL,
  `q38` int(11) NOT NULL,
  `q38_remarks` int(11) NOT NULL,
  `q39` int(11) NOT NULL,
  `q39_remarks` int(11) NOT NULL,
  `q40` int(11) NOT NULL,
  `q40_remarks` int(11) NOT NULL,
  `q41` int(11) NOT NULL,
  `q41_remarks` int(11) NOT NULL,
  `q42` int(11) NOT NULL,
  `q42_remarks` int(11) NOT NULL,
  `q43` int(11) NOT NULL,
  `q43_remarks` int(11) NOT NULL,
  `q44` int(11) NOT NULL,
  `q44_remarks` int(11) NOT NULL,
  `q45` int(11) NOT NULL,
  `q45_remarks` int(11) NOT NULL,
  `q46` int(11) NOT NULL,
  `q46_remarks` int(11) NOT NULL,
  `q47` int(11) NOT NULL,
  `q47_remarks` int(11) NOT NULL,
  `q48` int(11) NOT NULL,
  `q48_remarks` int(11) NOT NULL,
  `q49` int(11) NOT NULL,
  `q49_remarks` int(11) NOT NULL,
  `q50` int(11) NOT NULL,
  `q50_remarks` int(11) NOT NULL,
  `q51` int(11) NOT NULL,
  `q51_remarks` int(11) NOT NULL,
  `q52` int(11) NOT NULL,
  `q52_remarks` int(11) NOT NULL,
  `q53` int(11) NOT NULL,
  `q53_remarks` int(11) NOT NULL,
  `q54` int(11) NOT NULL,
  `q54_remarks` int(11) NOT NULL,
  `q55` int(11) NOT NULL,
  `q55_remarks` int(11) NOT NULL,
  `q56` int(11) NOT NULL,
  `q56_remarks` int(11) NOT NULL,
  `q57` int(11) NOT NULL,
  `q57_remarks` int(11) NOT NULL,
  `q58` int(11) NOT NULL,
  `q58_remarks` int(11) NOT NULL,
  `q59` int(11) NOT NULL,
  `q59_remarks` int(11) NOT NULL,
  `q60` int(11) NOT NULL,
  `q60_remarks` int(11) NOT NULL,
  `q61` int(11) NOT NULL,
  `q61_remarks` int(11) NOT NULL,
  `q62` int(11) NOT NULL,
  `q62_remarks` int(11) NOT NULL,
  `q63` int(11) NOT NULL,
  `q63_remarks` int(11) NOT NULL,
  `q64` int(11) NOT NULL,
  `q64_remarks` int(11) NOT NULL,
  `q65` int(11) NOT NULL,
  `q65_remarks` int(11) NOT NULL,
  `q66` int(11) NOT NULL,
  `q66_remarks` int(11) NOT NULL,
  `q67` int(11) NOT NULL,
  `q67_remarks` int(11) NOT NULL,
  `q68` int(11) NOT NULL,
  `q68_remarks` int(11) NOT NULL,
  `q69` int(11) NOT NULL,
  `q69_remarks` int(11) NOT NULL,
  `q70` int(11) NOT NULL,
  `q70_remarks` int(11) NOT NULL,
  `q71` int(11) NOT NULL,
  `q71_remarks` int(11) NOT NULL,
  `q72` int(11) NOT NULL,
  `q72_remarks` int(11) NOT NULL,
  `q73` int(11) NOT NULL,
  `q73_remarks` int(11) NOT NULL,
  `q74` int(11) NOT NULL,
  `q74_remarks` int(11) NOT NULL,
  `q75` int(11) NOT NULL,
  `q75_remarks` int(11) NOT NULL,
  `q76` int(11) NOT NULL,
  `q76_remarks` int(11) NOT NULL,
  `q77` int(11) NOT NULL,
  `q77_remarks` int(11) NOT NULL,
  `q78` int(11) NOT NULL,
  `q78_remarks` int(11) NOT NULL,
  `q79` int(11) NOT NULL,
  `q79_remarks` int(11) NOT NULL,
  `q80` int(11) NOT NULL,
  `q80_remarks` int(11) NOT NULL,
  `q81` int(11) NOT NULL,
  `q81_remarks` int(11) NOT NULL,
  `q82` int(11) NOT NULL,
  `q82_remarks` int(11) NOT NULL,
  `q83` int(11) NOT NULL,
  `q83_remarks` int(11) NOT NULL,
  `q84` int(11) NOT NULL,
  `q84_remarks` int(11) NOT NULL,
  `q85` int(11) NOT NULL,
  `q85_remarks` int(11) NOT NULL,
  `q86` int(11) NOT NULL,
  `q86_remarks` int(11) NOT NULL,
  `q87` int(11) NOT NULL,
  `q87_remarks` int(11) NOT NULL,
  `q88` int(11) NOT NULL,
  `q88_remarks` int(11) NOT NULL,
  `q89` int(11) NOT NULL,
  `q89_remarks` int(11) NOT NULL,
  `q90` int(11) NOT NULL,
  `q90_remarks` int(11) NOT NULL,
  `q91` int(11) NOT NULL,
  `q91_remarks` int(11) NOT NULL,
  `q92` int(11) NOT NULL,
  `q92_remarks` int(11) NOT NULL,
  `q93` int(11) NOT NULL,
  `q93_remarks` int(11) NOT NULL,
  `q94` int(11) NOT NULL,
  `q94_remarks` int(11) NOT NULL,
  `q95` int(11) NOT NULL,
  `q95_remarks` int(11) NOT NULL,
  `q96` int(11) NOT NULL,
  `q96_remarks` int(11) NOT NULL,
  `q97` int(11) NOT NULL,
  `q97_remarks` int(11) NOT NULL,
  `q98` int(11) NOT NULL,
  `q98_remarks` int(11) NOT NULL,
  `q99` int(11) NOT NULL,
  `q99_remarks` int(11) NOT NULL,
  `q100` int(11) NOT NULL,
  `q100_remarks` int(11) NOT NULL,
  `q101` int(11) NOT NULL,
  `q101_remarks` int(11) NOT NULL,
  `q102` int(11) NOT NULL,
  `q102_remarks` int(11) NOT NULL,
  `q103` int(11) NOT NULL,
  `q103_remarks` int(11) NOT NULL,
  `q104` int(11) NOT NULL,
  `q104_remarks` int(11) NOT NULL,
  `q105` int(11) NOT NULL,
  `q105_remarks` int(11) NOT NULL,
  `q106` int(11) NOT NULL,
  `q106_remarks` int(11) NOT NULL,
  `q107` int(11) NOT NULL,
  `q107_remarks` int(11) NOT NULL,
  `q108` int(11) NOT NULL,
  `q108_remarks` int(11) NOT NULL,
  `q109` int(11) NOT NULL,
  `q109_remarks` int(11) NOT NULL,
  `q110` int(11) NOT NULL,
  `q110_remarks` int(11) NOT NULL,
  `q111` int(11) NOT NULL,
  `q111_remarks` int(11) NOT NULL,
  `q112` int(11) NOT NULL,
  `q112_remarks` int(11) NOT NULL,
  `q113` int(11) NOT NULL,
  `q113_remarks` int(11) NOT NULL,
  `q114` int(11) NOT NULL,
  `q114_remarks` int(11) NOT NULL,
  `q115` int(11) NOT NULL,
  `q115_remarks` int(11) NOT NULL,
  `q116` int(11) NOT NULL,
  `q116_remarks` int(11) NOT NULL,
  `q117` int(11) NOT NULL,
  `q117_remarks` int(11) NOT NULL,
  `q118` int(11) NOT NULL,
  `q118_remarks` int(11) NOT NULL,
  `q119` int(11) NOT NULL,
  `q119_remarks` int(11) NOT NULL,
  `q120` int(11) NOT NULL,
  `q120_remarks` int(11) NOT NULL,
  `q121` int(11) NOT NULL,
  `q121_remarks` int(11) NOT NULL,
  `q122` int(11) NOT NULL,
  `q122_remarks` int(11) NOT NULL,
  `q123` int(11) NOT NULL,
  `q123_remarks` int(11) NOT NULL,
  `q124` int(11) NOT NULL,
  `q124_remarks` int(11) NOT NULL,
  `q125` int(11) NOT NULL,
  `q125_remarks` int(11) NOT NULL,
  `q126` int(11) NOT NULL,
  `q126_remarks` int(11) NOT NULL,
  `q127` int(11) NOT NULL,
  `q127_remarks` int(11) NOT NULL,
  `q128` int(11) NOT NULL,
  `q128_remarks` int(11) NOT NULL,
  `q129` int(11) NOT NULL,
  `q129_remarks` int(11) NOT NULL,
  `q130` int(11) NOT NULL,
  `q130_remarks` int(11) NOT NULL,
  `q131` int(11) NOT NULL,
  `q131_remarks` int(11) NOT NULL,
  `q132` int(11) NOT NULL,
  `q132_remarks` int(11) NOT NULL,
  `q133` int(11) NOT NULL,
  `q133_remarks` int(11) NOT NULL,
  `q134` int(11) NOT NULL,
  `q134_remarks` int(11) NOT NULL,
  `q135` int(11) NOT NULL,
  `q135_remarks` int(11) NOT NULL,
  `q136` int(11) NOT NULL,
  `q136_remarks` int(11) NOT NULL,
  `q137` int(11) NOT NULL,
  `q137_remarks` int(11) NOT NULL,
  `q138` int(11) NOT NULL,
  `q138_remarks` int(11) NOT NULL,
  `q139` int(11) NOT NULL,
  `q139_remarks` int(11) NOT NULL,
  `q140` int(11) NOT NULL,
  `q140_remarks` int(11) NOT NULL,
  `q141` int(11) NOT NULL,
  `q141_remarks` int(11) NOT NULL,
  `q142` int(11) NOT NULL,
  `q142_remarks` int(11) NOT NULL,
  `q143` int(11) NOT NULL,
  `q143_remarks` int(11) NOT NULL,
  `q144` int(11) NOT NULL,
  `q144_remarks` int(11) NOT NULL,
  `q145` int(11) NOT NULL,
  `q145_remarks` int(11) NOT NULL,
  `q146` int(11) NOT NULL,
  `q146_remarks` int(11) NOT NULL,
  `q147` int(11) NOT NULL,
  `q147_remarks` int(11) NOT NULL,
  `q148` int(11) NOT NULL,
  `q148_remarks` int(11) NOT NULL,
  `q149` int(11) NOT NULL,
  `q149_remarks` int(11) NOT NULL,
  `q150` int(11) NOT NULL,
  `q150_remarks` int(11) NOT NULL,
  `q151` int(11) NOT NULL,
  `q151_remarks` int(11) NOT NULL,
  `q152` int(11) NOT NULL,
  `q152_remarks` int(11) NOT NULL,
  `q153` int(11) NOT NULL,
  `q153_remarks` int(11) NOT NULL,
  `q154` int(11) NOT NULL,
  `q154_remarks` int(11) NOT NULL,
  `q155` int(11) NOT NULL,
  `q155_remarks` int(11) NOT NULL,
  `q156` int(11) NOT NULL,
  `q156_remarks` int(11) NOT NULL,
  `q157` int(11) NOT NULL,
  `q157_remarks` int(11) NOT NULL,
  `q158` int(11) NOT NULL,
  `q158_remarks` int(11) NOT NULL,
  `q159` int(11) NOT NULL,
  `q159_remarks` int(11) NOT NULL,
  `q160` int(11) NOT NULL,
  `q160_remarks` int(11) NOT NULL,
  `q161` int(11) NOT NULL,
  `q161_remarks` int(11) NOT NULL,
  `q162` int(11) NOT NULL,
  `q162_remarks` int(11) NOT NULL,
  `q163` int(11) NOT NULL,
  `q163_remarks` int(11) NOT NULL,
  `q164` int(11) NOT NULL,
  `q164_remarks` int(11) NOT NULL,
  `q165` int(11) NOT NULL,
  `q165_remarks` int(11) NOT NULL,
  `q166` int(11) NOT NULL,
  `q166_remarks` int(11) NOT NULL,
  `q167` int(11) NOT NULL,
  `q167_remarks` int(11) NOT NULL,
  `q168` int(11) NOT NULL,
  `q168_remarks` int(11) NOT NULL,
  `q169` int(11) NOT NULL,
  `q169_remarks` int(11) NOT NULL,
  `q170` int(11) NOT NULL,
  `q170_remarks` int(11) NOT NULL,
  `q171` int(11) NOT NULL,
  `q171_remarks` int(11) NOT NULL,
  `q172` int(11) NOT NULL,
  `q172_remarks` int(11) NOT NULL,
  `q173` int(11) NOT NULL,
  `q173_remarks` int(11) NOT NULL,
  `q174` int(11) NOT NULL,
  `q174_remarks` int(11) NOT NULL,
  `q175` int(11) NOT NULL,
  `q175_remarks` int(11) NOT NULL,
  `q176` int(11) NOT NULL,
  `q176_remarks` int(11) NOT NULL,
  `q177` int(11) NOT NULL,
  `q177_remarks` int(11) NOT NULL,
  `q178` int(11) NOT NULL,
  `q178_remarks` int(11) NOT NULL,
  `q179` int(11) NOT NULL,
  `q179_remarks` int(11) NOT NULL,
  `q180` int(11) NOT NULL,
  `q180_remarks` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `math` int(11) NOT NULL,
  `science` int(11) NOT NULL,
  `date_of_exam` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_Id`, `user_Id`, `q1`, `q1_remarks`, `q2`, `q2_remarks`, `q3`, `q3_remarks`, `q4`, `q4_remarks`, `q5`, `q5_remarks`, `q6`, `q6_remarks`, `q7`, `q7_remarks`, `q8`, `q8_remarks`, `q9`, `q9_remarks`, `q10`, `q10_remarks`, `q11`, `q11_remarks`, `q12`, `q12_remarks`, `q13`, `q13_remarks`, `q14`, `q14_remarks`, `q15`, `q15_remarks`, `q16`, `q16_remarks`, `q17`, `q17_remarks`, `q18`, `q18_remarks`, `q19`, `q19_remarks`, `q20`, `q20_remarks`, `q21`, `q21_remarks`, `q22`, `q22_remarks`, `q23`, `q23_remarks`, `q24`, `q24_remarks`, `q25`, `q25_remarks`, `q26`, `q26_remarks`, `q27`, `q27_remarks`, `q28`, `q28_remarks`, `q29`, `q29_remarks`, `q30`, `q30_remarks`, `q31`, `q31_remarks`, `q32`, `q32_remarks`, `q33`, `q33_remarks`, `q34`, `q34_remarks`, `q35`, `q35_remarks`, `q36`, `q36_remarks`, `q37`, `q37_remarks`, `q38`, `q38_remarks`, `q39`, `q39_remarks`, `q40`, `q40_remarks`, `q41`, `q41_remarks`, `q42`, `q42_remarks`, `q43`, `q43_remarks`, `q44`, `q44_remarks`, `q45`, `q45_remarks`, `q46`, `q46_remarks`, `q47`, `q47_remarks`, `q48`, `q48_remarks`, `q49`, `q49_remarks`, `q50`, `q50_remarks`, `q51`, `q51_remarks`, `q52`, `q52_remarks`, `q53`, `q53_remarks`, `q54`, `q54_remarks`, `q55`, `q55_remarks`, `q56`, `q56_remarks`, `q57`, `q57_remarks`, `q58`, `q58_remarks`, `q59`, `q59_remarks`, `q60`, `q60_remarks`, `q61`, `q61_remarks`, `q62`, `q62_remarks`, `q63`, `q63_remarks`, `q64`, `q64_remarks`, `q65`, `q65_remarks`, `q66`, `q66_remarks`, `q67`, `q67_remarks`, `q68`, `q68_remarks`, `q69`, `q69_remarks`, `q70`, `q70_remarks`, `q71`, `q71_remarks`, `q72`, `q72_remarks`, `q73`, `q73_remarks`, `q74`, `q74_remarks`, `q75`, `q75_remarks`, `q76`, `q76_remarks`, `q77`, `q77_remarks`, `q78`, `q78_remarks`, `q79`, `q79_remarks`, `q80`, `q80_remarks`, `q81`, `q81_remarks`, `q82`, `q82_remarks`, `q83`, `q83_remarks`, `q84`, `q84_remarks`, `q85`, `q85_remarks`, `q86`, `q86_remarks`, `q87`, `q87_remarks`, `q88`, `q88_remarks`, `q89`, `q89_remarks`, `q90`, `q90_remarks`, `q91`, `q91_remarks`, `q92`, `q92_remarks`, `q93`, `q93_remarks`, `q94`, `q94_remarks`, `q95`, `q95_remarks`, `q96`, `q96_remarks`, `q97`, `q97_remarks`, `q98`, `q98_remarks`, `q99`, `q99_remarks`, `q100`, `q100_remarks`, `q101`, `q101_remarks`, `q102`, `q102_remarks`, `q103`, `q103_remarks`, `q104`, `q104_remarks`, `q105`, `q105_remarks`, `q106`, `q106_remarks`, `q107`, `q107_remarks`, `q108`, `q108_remarks`, `q109`, `q109_remarks`, `q110`, `q110_remarks`, `q111`, `q111_remarks`, `q112`, `q112_remarks`, `q113`, `q113_remarks`, `q114`, `q114_remarks`, `q115`, `q115_remarks`, `q116`, `q116_remarks`, `q117`, `q117_remarks`, `q118`, `q118_remarks`, `q119`, `q119_remarks`, `q120`, `q120_remarks`, `q121`, `q121_remarks`, `q122`, `q122_remarks`, `q123`, `q123_remarks`, `q124`, `q124_remarks`, `q125`, `q125_remarks`, `q126`, `q126_remarks`, `q127`, `q127_remarks`, `q128`, `q128_remarks`, `q129`, `q129_remarks`, `q130`, `q130_remarks`, `q131`, `q131_remarks`, `q132`, `q132_remarks`, `q133`, `q133_remarks`, `q134`, `q134_remarks`, `q135`, `q135_remarks`, `q136`, `q136_remarks`, `q137`, `q137_remarks`, `q138`, `q138_remarks`, `q139`, `q139_remarks`, `q140`, `q140_remarks`, `q141`, `q141_remarks`, `q142`, `q142_remarks`, `q143`, `q143_remarks`, `q144`, `q144_remarks`, `q145`, `q145_remarks`, `q146`, `q146_remarks`, `q147`, `q147_remarks`, `q148`, `q148_remarks`, `q149`, `q149_remarks`, `q150`, `q150_remarks`, `q151`, `q151_remarks`, `q152`, `q152_remarks`, `q153`, `q153_remarks`, `q154`, `q154_remarks`, `q155`, `q155_remarks`, `q156`, `q156_remarks`, `q157`, `q157_remarks`, `q158`, `q158_remarks`, `q159`, `q159_remarks`, `q160`, `q160_remarks`, `q161`, `q161_remarks`, `q162`, `q162_remarks`, `q163`, `q163_remarks`, `q164`, `q164_remarks`, `q165`, `q165_remarks`, `q166`, `q166_remarks`, `q167`, `q167_remarks`, `q168`, `q168_remarks`, `q169`, `q169_remarks`, `q170`, `q170_remarks`, `q171`, `q171_remarks`, `q172`, `q172_remarks`, `q173`, `q173_remarks`, `q174`, `q174_remarks`, `q175`, `q175_remarks`, `q176`, `q176_remarks`, `q177`, `q177_remarks`, `q178`, `q178_remarks`, `q179`, `q179_remarks`, `q180`, `q180_remarks`, `total`, `english`, `math`, `science`, `date_of_exam`) VALUES
(17, 75, 29, 1, 30, 0, 31, 0, 32, 1, 33, 0, 34, 0, 35, 0, 36, 0, 37, 0, 38, 0, 39, 0, 40, 0, 41, 1, 42, 1, 43, 0, 44, 0, 45, 0, 46, 0, 47, 0, 48, 0, 91, 1, 92, 1, 93, 0, 94, 0, 95, 0, 96, 0, 97, 0, 97, 0, 99, 0, 100, 1, 101, 0, 102, 0, 103, 0, 104, 0, 105, 0, 106, 0, 107, 0, 108, 0, 109, 0, 110, 0, 111, 0, 112, 0, 113, 0, 114, 0, 115, 0, 116, 0, 117, 0, 118, 0, 119, 0, 120, 0, 121, 0, 122, 0, 123, 0, 124, 0, 125, 0, 126, 1, 127, 0, 128, 0, 129, 1, 130, 0, 71, 0, 72, 0, 73, 0, 74, 0, 75, 0, 76, 0, 77, 0, 78, 0, 79, 0, 80, 0, 81, 0, 82, 0, 83, 0, 84, 0, 85, 0, 86, 0, 87, 0, 88, 0, 89, 0, 90, 0, 132, 0, 133, 0, 134, 0, 175, 0, 176, 0, 177, 0, 178, 0, 179, 0, 180, 0, 181, 0, 182, 0, 183, 0, 184, 0, 185, 0, 186, 0, 187, 0, 188, 0, 189, 0, 190, 0, 191, 0, 192, 0, 193, 0, 194, 0, 195, 0, 196, 0, 197, 0, 198, 0, 199, 0, 200, 0, 201, 0, 202, 0, 203, 0, 204, 0, 205, 0, 206, 0, 207, 0, 208, 0, 209, 0, 210, 0, 211, 0, 50, 0, 51, 0, 52, 0, 53, 0, 54, 0, 55, 0, 56, 0, 57, 0, 58, 0, 59, 0, 60, 0, 61, 0, 62, 0, 63, 0, 64, 0, 65, 0, 66, 0, 67, 0, 68, 0, 69, 0, 135, 0, 136, 0, 137, 0, 138, 0, 139, 0, 140, 0, 141, 0, 142, 0, 143, 0, 144, 0, 145, 0, 146, 0, 147, 0, 148, 0, 149, 0, 150, 0, 151, 0, 152, 0, 153, 0, 154, 0, 155, 0, 156, 0, 157, 0, 158, 0, 159, 0, 160, 0, 161, 0, 162, 0, 163, 0, 164, 0, 165, 0, 166, 0, 167, 0, 168, 0, 169, 0, 170, 0, 171, 0, 172, 0, 173, 0, 174, 0, 136, 136, 0, 0, '2023-04-05'),
(18, 75, 29, 0, 30, 0, 31, 0, 32, 0, 33, 0, 34, 0, 35, 0, 36, 0, 37, 0, 38, 0, 39, 0, 40, 0, 41, 0, 42, 0, 43, 0, 44, 0, 45, 0, 46, 0, 47, 0, 48, 0, 91, 0, 92, 0, 93, 0, 94, 0, 95, 0, 96, 0, 97, 0, 97, 0, 99, 0, 100, 0, 101, 0, 102, 0, 103, 0, 104, 0, 105, 0, 106, 0, 107, 0, 108, 0, 109, 0, 110, 0, 111, 0, 112, 0, 113, 0, 114, 0, 115, 0, 116, 0, 117, 0, 118, 0, 119, 0, 120, 0, 121, 0, 122, 0, 123, 0, 124, 0, 125, 0, 126, 0, 127, 0, 128, 0, 129, 0, 130, 0, 71, 0, 72, 0, 73, 0, 74, 0, 75, 0, 76, 0, 77, 0, 78, 0, 79, 0, 80, 0, 81, 0, 82, 0, 83, 0, 84, 0, 85, 0, 86, 0, 87, 0, 88, 0, 89, 0, 90, 0, 132, 0, 133, 0, 134, 0, 175, 0, 176, 0, 177, 0, 178, 0, 179, 0, 180, 0, 181, 0, 182, 0, 183, 0, 184, 0, 185, 0, 186, 0, 187, 0, 188, 0, 189, 0, 190, 0, 191, 0, 192, 0, 193, 0, 194, 0, 195, 0, 196, 0, 197, 0, 198, 0, 199, 0, 200, 0, 201, 0, 202, 0, 203, 0, 204, 0, 205, 0, 206, 0, 207, 0, 208, 0, 209, 0, 210, 0, 211, 0, 50, 0, 51, 0, 52, 0, 53, 0, 54, 0, 55, 0, 56, 0, 57, 0, 58, 0, 59, 0, 60, 0, 61, 0, 62, 0, 63, 0, 64, 0, 65, 0, 66, 0, 67, 0, 68, 0, 69, 0, 135, 0, 136, 0, 137, 0, 138, 0, 139, 0, 140, 0, 141, 0, 142, 0, 143, 0, 144, 0, 145, 0, 146, 0, 147, 0, 148, 0, 149, 0, 150, 0, 151, 0, 152, 0, 153, 0, 154, 0, 155, 0, 156, 0, 157, 0, 158, 0, 159, 0, 160, 0, 161, 0, 162, 0, 163, 0, 164, 0, 165, 0, 166, 0, 167, 0, 168, 0, 169, 0, 170, 0, 171, 0, 172, 0, 173, 0, 174, 0, 0, 0, 0, 0, '2023-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `exam_bookings`
--

CREATE TABLE IF NOT EXISTS `exam_bookings` (
`bookingsId` int(11) NOT NULL,
  `bookingsUserId` int(11) NOT NULL,
  `bookingsSchedID` int(11) NOT NULL,
  `bookingsStatus` varchar(20) NOT NULL DEFAULT 'Pending',
  `date_booked` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `exam_bookings`
--

INSERT INTO `exam_bookings` (`bookingsId`, `bookingsUserId`, `bookingsSchedID`, `bookingsStatus`, `date_booked`) VALUES
(4, 40, 1, 'Confirmed', ''),
(5, 76, 1, 'Pending', '2022-12-13'),
(6, 75, 1, 'Confirmed', '2022-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
`quest_Id` int(11) NOT NULL,
  `quest_category_Id` int(11) NOT NULL,
  `question` text NOT NULL,
  `choice_one` varchar(255) NOT NULL,
  `choice_two` varchar(255) NOT NULL,
  `choice_three` varchar(255) NOT NULL,
  `choice_four` varchar(255) NOT NULL,
  `correct_answer` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=212 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`quest_Id`, `quest_category_Id`, `question`, `choice_one`, `choice_two`, `choice_three`, `choice_four`, `correct_answer`) VALUES
(29, 6, 'I wish I _____ those words. But now it''s too late.', 'not having said', 'never said', 'have never said', 'had never said', 'never said'),
(30, 6, 'The woman, who has been missing for 10 days, is believed _____.', 'to be abducted', 'to have been abducted', 'to be abducting', 'to have been abducting', 'to be abducted'),
(31, 6, 'They didn''t reach an agreement ______ their differences.', 'on account of', 'because', 'due', 'owing', 'because'),
(32, 6, 'I''m very happy _____ in India. I really miss being there.', 'to live', 'to have lived', 'to be lived', 'to be living', 'to live'),
(33, 6, 'She was working on her computer with her baby next to _____.', 'herself', 'her', 'her own', 'hers', 'hers'),
(34, 6, '_____ to offend anyone, she said both cakes were equally good.', 'Not wanting', 'As not wanting', 'She didn''t want', 'Because not wanting', 'Not wanting'),
(35, 6, '_____ in trying to solve this problem. It''s clearly unsolvable.', 'There''s no point', 'There isn''t point', 'It''s no point', 'It''s no need', 'It''s no point'),
(36, 6, 'Last year, when I last met her, she told me she _____ a letter every day for the last two months.', 'had written', 'had been writing', 'has written', 'wrote', 'had been writing'),
(37, 6, 'He _____ robbed as he was walking out of the bank.', 'had', 'did', 'got', 'were', 'did'),
(38, 6, '_____ forced to do anything. He acted of his own free will.', 'In no way was he', 'No way he was', 'In any way he was', 'In any way was he', 'In any way he was'),
(39, 6, 'It _____ the best idea to pay for those tickets by credit card. It was too risky.', 'may not have been', 'might not be', 'may not be', 'must not have been', 'must not have been'),
(40, 6, 'They _____ in the basement for three months.', 'were made sleeping', 'were made sleep', 'were made to sleep', 'made to sleep', 'were made sleeping'),
(41, 6, 'We''ll never know what might have happened _____ the email earlier.', 'if he sent', 'had he sent', 'if he has sent', 'did he sent', 'if he has sent'),
(42, 6, 'If success _____, we need to prepare ourselves for every possible scenario.', 'is to be achieved', 'is achieved', 'will be achieved', 'is due to achieve', 'is due to achieve'),
(43, 6, '______ gifts to the judges.', 'It''s not allowed offering', 'It''s not permitted offering', 'It''s not permitted to offer', 'It''s not allowed to offer', 'It''s not permitted offering'),
(44, 6, 'I ______ bus on Mondays.', '''m going to work with', '''m going to work by', 'go to work with', 'go to work by', '''m going to work with'),
(45, 6, 'Sorry, but this chair is ______.', 'me', 'my', 'mine', 'our', 'mine'),
(46, 6, 'A: ''How old ______?''   B: ''I ______ .''', 'are you / am 20 years old.', 'are you / am 20 years.', 'have you / have 20 years old', 'do you have / have 20 years.', 'are you / am 20 years old.'),
(47, 6, 'I ______ to the cinema.', 'not usually go', 'don''t go usually', 'don''t usually go', 'do not go usually', 'do not go usually'),
(48, 6, 'Where ______ ?', 'your sister works', 'does your sister work', 'your sister work', 'do your sister work', 'does your sister work'),
(50, 7, 'Which is greater than 4?', '5', '-5', '-1/2', '-25', '5'),
(51, 7, 'Which is the smallest?', '-1', '-1/2', '0', '3', '-1'),
(52, 7, 'Combine terms: 12a + 26b -4b â€“ 16a.', '4a + 22b', '-28a + 30b', '-4a + 22b', '28a + 30b', '-4a + 22b'),
(53, 7, 'Simplify: (4 â€“ 5) â€“ (13 â€“ 18 + 2)', '-1', 'â€“2', '1', '2', '2'),
(54, 7, 'What is |-26|?', '-26', '26', '0', '1', '26'),
(55, 7, 'Multiply: (x â€“ 4)(x + 5)', 'x2 + 5x - 20', 'x2 - 4x - 20', 'x2 - x - 20', 'x2 + x - 20', 'x2 + x - 20'),
(56, 7, 'Factor: 5x2 â€“ 15x â€“ 20.', '5(x-4)(x+1)', '-2(x-4)(x+5)', '-5(x+4)(x-1)', '5(x+4)(x+1)', '5(x-4)(x+1)'),
(57, 7, 'Factor: 3y(x â€“ 3) -2(x â€“ 3)', '(x â€“ 3)(x â€“ 3)', '(x â€“ 3)2', '(x â€“ 3)(3y â€“ 2)', '3y(x â€“ 3)', '(x â€“ 3)(3y â€“ 2)'),
(58, 7, 'Solve for x: 2x â€“ y = (3/4)x + 6.', '(y + 6)/5', '4(y + 6)/5', '(y + 6)', '4(y - 6)/5', '4(y + 6)/5'),
(59, 7, 'Find the value of 3 + 2 â€¢ (8 â€“ 3)', '25', '13', '17', '24', '24'),
(60, 7, '121 Divided by 11 is ', '11', '10', '18', '18', '11'),
(61, 7, '60 Times of 8 Equals to', '480', '300', '250', '400', '480'),
(62, 7, 'Find the Missing Term in Multiples of 6 : 6, 12, 18, 24, _, 36, 42, _ 54, 60.', '32, 45', '30, 48', '24, 40', '25, 49', '30, 48'),
(63, 7, 'What is the Next Prime Number after 7 ?', '13', '12', '14', '11', '11'),
(64, 7, 'The Product of 131 Ã— 0 Ã— 300 Ã— 4', '11', '0', '46', '45', '0'),
(65, 7, 'Solve 3 + 6 Ã— ( 5 + 4) Ã· 3 - 7', '11', '16', '14', '15', '14'),
(66, 7, 'Solve 23 + 3 Ã· 3', '24', '25', '26', '27', '24'),
(67, 7, 'What is 6% Equals to', '0.06', '0.6', '0.006', '0.0006', '0.06'),
(68, 7, 'How Many Years are there in a Decade?', '5 years ', '10 years', '15 years', '20 years', '10 years'),
(69, 7, 'How Many Months Make a Century?', '12', '120', '1200', '12000', '1200'),
(71, 10, 'Which animal lays eggs?', 'Dog', 'Cat', 'Duck', 'Sheep', 'Duck'),
(72, 10, 'A male cow is called?', 'Ox', 'Dog', 'Sheep', 'Monkey', 'Ox'),
(73, 10, 'All animals need food, air, and ____ to survive.', 'House', 'Water', 'Chocolate', 'Fruits', 'Water'),
(74, 10, 'Which one is a fur-bearing animal?', 'Hen', 'Crocodile', 'Tortoise', 'Cat', 'Cat'),
(75, 10, 'What is Earthâ€™s only natural satellite?', 'Sun', 'Mars', 'Venus', 'Moon', 'Moon'),
(76, 10, 'The tree has a branch filled with green _____.', 'Hair', 'Root', 'Leaves', 'Trunk', 'Leaves'),
(77, 10, 'What part of the body helps you move?', 'Eyes', 'Lungs', 'Pancreas', 'Muscles', 'Muscles'),
(78, 10, 'The two holes of the nose are called?', 'Eyelids', 'Nostrils', 'Nails', 'Hair', 'Nostrils'),
(79, 10, 'What star shines in the day and provides light?', 'Moon', 'Venus', 'Mars', 'Sun', 'Sun'),
(80, 10, 'Legs have feet and arms have ___.', 'Ankles', 'Pelvis', 'Hands', 'Skull', 'Hands'),
(81, 10, 'Which organ covers the entire body and protects it?', 'Liver', 'Heart', 'Skin', 'Brain', 'Skin'),
(82, 10, 'Which shape is a round?', 'Rectangle', 'Circle', 'Square', 'Triangle', 'Circle'),
(83, 10, 'Who invented the first functional telephone?', 'Albert Einstein', 'Nikola Tesla', 'Thomas Alva Edison', 'Alexander Graham Bell', 'Alexander Graham Bell'),
(84, 10, 'What is the young one of a cow called?', 'Puppy', 'Kitten', 'Calf', 'Baby', 'Calf'),
(85, 10, 'Dark rain clouds can give out lightning and ____.', 'Thunder', 'Snow', 'Sunlight', 'Wind', 'Thunder'),
(86, 10, 'Your hands have four fingers and a ____.', 'Knee', 'Ankle', 'Elbow', 'Thumb', 'Thumb'),
(87, 10, 'Which part of the bird lets it fly high in the sky?', 'Beak', 'Feet', 'Wings', 'Claws', 'Wings'),
(88, 10, 'Animals that suckle their young one are called ____.', 'Reptiles', 'Birds', 'Amphibians', 'Mammals', 'Mammals'),
(89, 10, 'What part of the plant conducts photosynthesis?', 'Branch', 'Leaf', 'Root', 'Trunk', 'Leaf'),
(90, 10, 'What is the boiling point of water?', '25Â°C', '50Â°C', '75Â°C', '100Â°C', '100Â°C'),
(91, 6, 'Whose death sparked World War I?', 'Kaiser Wilhelm', 'Archbishop Ussher', 'Queen Victoria', 'Archduke Franz Ferdinand', 'Archduke Franz Ferdinand'),
(92, 6, 'Which of these nations was neutral in World War I?', 'Germany', 'Norway', 'Italy', 'England', 'Norway'),
(93, 6, 'Which of these ships was sunk by a German submarine?', 'Arizona', 'Lusitania', 'Titanic', 'Andrea Doria', 'Lusitania'),
(94, 6, 'Which weapon was first used at the Battle of the Somme in World War I?', 'Submarine', 'Tank', 'Jet fighter', 'Chariot', 'Tank'),
(95, 6, 'World War I ended in:', '1925', '1918', '1920', '1915', '1918'),
(96, 6, 'Which of these people was a spy in World War I?', 'James Bond', 'Mata Hari', 'Benedict Arnold', 'Serge Plekhanov', 'Mata Hari'),
(97, 6, 'How many republics made up the former Soviet Union?', '15', '12', '20', '10', '15'),
(98, 6, 'When was the first Nobel Prize in economics awarded?', '1969', '1949', '1909', '1929', '1969'),
(99, 6, 'Which book was written by NiccolÃ² Machiavelli?', 'The Once and Future King', 'The Prince', 'The Good Earth', 'War and Peace', 'The Prince'),
(100, 6, 'Of what country was SimÃ³n BolÃ­var president?', 'Bolivia', 'Peru', 'Argentina', 'Chile', 'Peru'),
(101, 6, 'Which Indian president was involved in the struggle for Irish independence?', 'V.V. Giri', 'Neelam Sanjiva Reddy', 'Gulzarilal Nanda', 'S. Radhakrishnan', 'V.V. Giri'),
(102, 6, 'Who was Karl Marxâ€™s associate and fellow political theoretician?', 'Friedrich Nietzsche', 'Friedrich II', 'Friedrich Engels', 'Friedrich Reich', 'Friedrich Engels'),
(103, 6, 'Where were the Aegean Bronze Age civilizations located?', 'Algeria', 'India', 'Greece', 'Spain', 'Greece'),
(104, 6, 'Which of these battles did not involve Roman soldiers?', 'Arretium', 'Chalons', 'Cannae', 'Thermopylae', 'Thermopylae'),
(105, 6, 'Through which national park does the Continental Divide not pass?', 'Yellowstone', 'Rocky Mountain', 'Glacier', 'Yosemite', 'Yosemite'),
(106, 6, 'On what peninsula in Washington would you find the Olympic Mountains?', 'Seattle Peninsula', ' Puget Peninsula', 'Washington Peninsula', 'Olympic Peninsula', 'Olympic Peninsula'),
(107, 6, 'Who was the first U.S. president to appear on television?', 'Richard Nixon', 'Ronald Reagan', 'Abraham Lincoln', 'Franklin Delano Roosevelt', 'Franklin Delano Roosevelt'),
(108, 6, 'What automobile was named after Henry Fordâ€™s only son?', 'Buick', 'Oldsmobile', 'Isuzu', 'Edsel', 'Edsel'),
(109, 6, 'In what American state would you find Denali?', 'Alabama', 'Arkansas', 'Alaska', 'Arizona', 'Alaska'),
(110, 6, 'Which state seceded from Virginia in 1863?', 'the District of Columbia', 'North Carolina', 'West Virginia', 'Maryland', 'West Virginia'),
(111, 6, 'Ang kambal katinig ay...?  ', 'Pares Minimal', 'Klaster', 'Diptonggo', 'Salawikain', 'Pares Minimal'),
(112, 6, 'Kilala bilang "Huseng Batute" ', 'Gregorio H. del Pilar', 'Melchora Aquino', 'Apolinario Mabini', 'Jose Corazon de Hesus', 'Melchora Aquino'),
(113, 6, 'Tumatanggap ng kilos sa isang pangungusap ', 'Di - tuwirang layon', ' Tuwirang layon', 'Simuno', 'Panaguri', 'Simuno'),
(114, 6, 'Pahapyaw na pagbasa ', 'Sintaksis', 'Skimming', 'Sesura', 'Sukat', 'Sukat'),
(115, 6, 'Awit na panghehele ', 'Lullaby', 'Sesura', 'Bugtong', 'Oyayi', 'Lullaby'),
(116, 6, 'Ito ang mga salitang tumutukoy sa tao, bagay, hayop, lugar at pangyayari.', 'PANGAHALIP', 'PANGALAN', 'PANGNGALAN', 'KLASTER', 'PANGNGALAN'),
(117, 6, 'Aling pangngalan ang naiiba sa pangkat?', 'KALABAW', 'MANOK', 'PUNO', 'KABAYO', 'MANOK'),
(118, 6, 'Nagpunta kami sa parke at namasyal. Alin ang PANGNGALAN sa pangungusap?', 'KAMI', 'PARKE', 'NAMASYAL', 'NAGPUNTA', 'NAGPUNTA'),
(119, 6, 'Lapis, Pantasa, Papel at Aklat. Ano ang kategorya ng Pangngalan?', 'TAO', 'LUGAR', 'BAGAY', 'PANGYAYARI', 'LUGAR'),
(120, 6, 'Ito ay mga pangngalang tiyak at sigurado.', 'PAMBALANA', 'PANTANGI', 'KONGKRETO', 'PANGALAN', 'PANGALAN'),
(121, 6, 'Aling titik ang gamit ng mga pangngalang pambalana?', 'MALIIT', 'MALIIT AT MALAKI', 'MALAKI', 'ALPABETO', 'MALIIT'),
(122, 6, 'Ito ang mga pangngalang hindi tiyak o sigurado.', 'PANTANGI', 'PAMBALANA', 'PANGALAN', 'DIPTONGGO', 'DIPTONGGO'),
(123, 6, 'Alin ang pangngalang pambalana ng salitang NIKE?', 'LAPIS', 'SAPATOS', 'KOMPYUTER', 'PAGKAIN', 'PAGKAIN'),
(124, 6, 'Ipinagmamalaki ko ang aking mga KAIBIGAN.', 'BAGAY', 'PANGYAYARI', 'LUGAR', 'TAO', 'TAO'),
(125, 6, 'Ibibili ko ng sapatos si kuya sa PALENGKE.', 'BAGAY', 'LUGAR', 'PANGYAYARI ', 'TAO', 'PANGYAYARI '),
(126, 6, 'Sabay sabay kaming nagdarasal sa simbahan tuwing KAARAWAN ni Lolo.', 'BAGAY', 'LUGAR', 'PANGYAYARI', 'TAO', 'TAO'),
(127, 6, 'Nagluto si ATE ng spagetti noong pasko.', 'BAGAY', 'LUGAR', 'PANGYAYARI', 'TAO', 'BAGAY'),
(128, 6, 'Ang mga anyong tubig at lupa ay biyaya ng Diyos sa atin.', 'pantangi', 'tahas', 'basal', 'lansakan', 'tahas'),
(129, 6, 'Maipagmamalaki nang husto ng mga Pilipino ang kagandahan ng ating bansa. ', 'pantangi', 'tahas', 'basal', 'lansakan', 'lansakan'),
(130, 6, 'Sa Pamantasan ng De La Salle nag-aaral ang mga nanalo sa volleball. ', 'pantangi', 'tahas', 'basal', 'lansakan', 'lansakan'),
(132, 10, 'gfdgfd', 'gfdgdf', 'fdgdfg', 'gdfgdfg', 'fdgfdgdfg', 'fdgdfg'),
(133, 10, 'fds', 'fdsfds', 'dsfds', 'fdsf', 'dsfsdf', 'dsfds'),
(134, 10, 'fdsfsdfdsfdsf', 'sfdsfds', 'fsfsfs', 'fdsdss', 'fsss', 'fdsdss'),
(135, 7, 'What is the value of 6 + 4?', '10', '14', '12', '15', '12'),
(136, 7, 'What is the value of 12 - 5?', '32', '43', '43', '43', '43'),
(137, 7, 'What is the value of 5 x 3?', '8', '12', '15', '18', '15'),
(138, 7, 'What is the value of 21 Ã· 7?', '3', '22', '32', '34', '3'),
(139, 7, 'What is the value of 2Â²?', '2', '3', '4', '6', '4'),
(140, 7, 'What is the value of âˆš16?', '3', '4', '5', '32', '4'),
(141, 7, 'What is the value of 3Â³?', '3', '4', '2', '9', '9'),
(142, 7, 'What is the value of 10Â²?', '100', '4', '2', '7', '100'),
(143, 7, 'What is the value of 5% of 100?', '5', '15', '13', '1', '5'),
(144, 7, 'What is the value of 3/4 as a decimal?', '0.25', '0.50', '0.75', '0.22', '0.75'),
(145, 7, 'What is the value of 0.5 as a fraction in its simplest form?', '1/2', '5/10', '2/5', '10/20', '1/2'),
(146, 7, 'What is the value of 8.25 rounded to the nearest whole number?', '8', '9', '8.5', '9.5', '8'),
(147, 7, 'What is the value of -3 + 8?', '2', '4', '5', '6', '5'),
(148, 7, 'What is the value of -10 - (-6)?', ' -4', '-16', '4', '16', '-16'),
(149, 7, 'What is the value of -2 x (-4)?', '-8', '8', '-10', '10', '-10'),
(150, 7, 'What is the value of 25 Ã· (-5)?', '23', '22', '36', '46', '36'),
(151, 7, 'What is the value of (-2)Â²?', '-2', '2', '-4', '4', '4'),
(152, 7, 'What is the value of âˆš25?', '5', '15', '10', '25', '5'),
(153, 7, 'What is the value of 10Â³?', '10000', '1000', '12', '13333', '1000'),
(154, 7, 'What is the value of 20% of 50?', '4', '43', '35', '23', '23'),
(155, 7, 'What is the value of 0.6 as a fraction in its simplest form?', '22', '53', '44', '224', '22'),
(156, 7, 'What is 2 + 2?', '3', '22', '4', '5', '4'),
(157, 7, 'What is the value of x in the equation 3x - 5 = 16?', '5', '7', '9', '11', '5'),
(158, 7, 'What is the area of a rectangle with length 6 and width 9?', '12', '15', '18', '24', '24'),
(159, 7, 'What is the square root of 64?', '8', '4', '66', '3', '8'),
(160, 7, 'What is the perimeter of a square with side length 5?', '23', '3', '8', '6', '8'),
(161, 7, 'What is 20% of 80?', '12', '16', '20', '24', '24'),
(162, 7, 'What is the slope of the line that passes through the points (2, 4) and (6, 10)?', '1', '2', '3', '4', '2'),
(163, 7, 'What is the sum of the angles in a triangle?', '90 degrees', '180 degrees', '270 degrees', '360 degrees', '90 degrees'),
(164, 7, 'What is the product of 6 and 7?', '12', '26', '36', '42', '42'),
(165, 7, 'What is the value of x in the equation 5x + 7 = 32?', '3', '5', '6', '8', '3'),
(166, 7, 'What is the circumference of a circle with radius 5?', '1', '5', '6', '63', '1'),
(167, 7, 'What is the midpoint between (4, 7) and (10, 13)?', '23', '22', '244', '26', '22'),
(168, 7, 'What is the area of a triangle with base 8 and height 6?', '11', '55', '22', '33', '55'),
(169, 7, 'What is the reciprocal of 1/3?', '111', '222', '444', '3334', '444'),
(170, 7, 'What is the value of x in the equation 4x - 3 = 13?', '23', '44', '67', '43', '23'),
(171, 7, 'What is the volume of a cube with side length 4?\r\n', '1', '2', '3', '4', '1'),
(172, 7, 'What is the slope-intercept form of the equation of a line with slope 2 and y-intercept 3?', '1', '3', '2', '4', '3'),
(173, 7, 'What is the value of x in the equation 7x - 8 = 22?', '24', '244', '242', '54', '24'),
(174, 7, 'What is the area of a circle with radius 6?', '12Ï€', '18Ï€', '16Ï€', '20Ï€', '20Ï€'),
(175, 10, 'What is the primary source of energy for the sun?', 'Nuclear Fusion', 'Nuclear Fission', 'Solar Flares', 'Chemical Reactions', 'Nuclear Fusion'),
(176, 10, 'What is the smallest unit of matter?', 'Atom', 'Cell', 'Molecule', 'Organism', 'Organism'),
(177, 10, 'What is the process by which plants make their own food called?', 'Respiration', 'Photosynthesis', 'Digestion', 'Fermentation', 'Digestion'),
(178, 10, 'What is the state of matter that has a definite volume but not a definite shape?', 'Solid', 'Liquid', 'Gas', 'Plasma', 'Plasma'),
(179, 10, 'What is the process by which a solid turns directly into a gas?', 'Condensation', 'Evaporation', 'Sublimation', 'Melting', 'Condensation'),
(180, 10, 'Which gas is the most abundant in the Earth''s atmosphere?', 'Oxygen', 'Nitrogen', 'Carbon Dioxide', 'Methane', 'Methane'),
(181, 10, 'Which planet in our solar system is the largest?', 'Jupiter', 'Saturn', 'Uranus', 'Neptune', 'Jupiter'),
(182, 10, 'Which of the following is NOT a type of rock?', 'Igneous', 'Sedimentary', 'Metamorphic', 'Magma', 'Igneous'),
(183, 10, 'What is the term for the process by which water changes from a liquid to a gas?', 'Melting', 'Condensation', 'Evaporation', 'Sublimation', 'Melting'),
(184, 10, 'What is the unit of measurement for force?', 'Newton', 'Joule', 'Watt', 'Meter', 'Watt'),
(185, 10, 'fdf', 'dsfsdfsf', 'fd', 'dfdf', 'dfd', 'fd'),
(186, 10, 'fdsfdsfsdfsfds', 'dd', 'd', 'daf', 'da', 'dd'),
(187, 10, 'fsdgdfgdfgd', 'fd', 'aw', 'd', 'ADA', 'ADA'),
(188, 10, 'YTJGHDSDD', 'dfds', 'fsd', 'dwr', 'asa', 'dwr'),
(189, 10, 'fdsfsdf', 'sfdsfdsA', 'SCvd', 'SA', 'EWQD', 'sfdsfdsA'),
(190, 10, 'fdsfsfsdfs', 'ssa', 'fsg', 'aaa', 'fdf', 'fsg'),
(191, 10, 'sfdhgfhfghgf', 'ff', 'fdss', 'sfr', 'aa', 'aa'),
(192, 10, 'gfdhgfhfhf', 'aa', 'w', 'sa', 'sae', 'aa'),
(193, 10, 'dsaas', 'dsat4w', 'gf', 'gfdgdg', 'fss', 'gfdgdg'),
(194, 10, 'dasdada', 'aa', 'ds', 'df', 'ssd', 'ds'),
(195, 10, 'dasdaa', 'asa', 'dxz', 'sd', 'das', 'dxz'),
(196, 10, 'fwfghfjghf', 'ffd', 'd', 'dfd', 'sa', 'sa'),
(197, 10, 'dsacxzc', 'xzcxzc', 'zczx', 'czx', 'cxz', 'zczx'),
(198, 10, 'cxzcx', 'sa', 'sa', 'aa', 'xc', 'aa'),
(199, 10, 'saczx', 'xz', 'dc', 'zxzsa', 'zcada', 'xz'),
(200, 10, 'cxzvza', 'zczcz', 'asdsa', 'cxzc', 'asd', 'asdsa'),
(201, 10, 'dsavqa', 'xa', 'cxzc', 'zcxz', 'czxc', 'czxc'),
(202, 10, 'adassa', 'sa', 'dsad', 'sadsa', 'cass', 'sa'),
(203, 10, 'aassa', 'cxzcx', 'cx', 'cxc', 'cx', 'cx'),
(204, 10, 'sadascxW', 'SDSA', 'XZC', 'vdsffds', 'fds', 'vdsffds'),
(205, 10, 'fdfaw', 'xzc', 'xzas', 'dsad', 'adas', 'dsad'),
(206, 10, 'asdafadfd', 'xzczx', 'cxzc', 'xac', 'xc', 'xc'),
(207, 10, 'asffdwdc', 'vvaa', 'aasa', 'x', 'dsaewq', 'aasa'),
(208, 10, 'afadfvx', 'xa', 'sd', 'axsadsa', 'dsd', 'xa'),
(209, 10, 'fvx', 'cxc', 'as', 'xc', 'c', 'c'),
(210, 10, 'dafd', 'faa', 'a', 'ds', 'ss', 'faa'),
(211, 10, 'fdsfsd', 'acxz', 'cxz', 'dwq', 'cx', 'acxz');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
`schedID` int(11) NOT NULL,
  `schedDate` varchar(50) NOT NULL,
  `schedTimeStart` varchar(20) NOT NULL,
  `schedTimeEnd` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedID`, `schedDate`, `schedTimeStart`, `schedTimeEnd`) VALUES
(1, '2022-11-29', '19:10', '23:09'),
(3, '2022-12-24', '19:34', '19:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_Id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `civilstatus` varchar(20) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `age` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `parentsName` varchar(255) NOT NULL,
  `parentsContact` varchar(50) NOT NULL,
  `parentsEmail` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `examineeCategory` varchar(255) NOT NULL,
  `interestedAt` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'user.png',
  `receiptImage` varchar(255) NOT NULL,
  `receiptImage_Status` int(11) NOT NULL DEFAULT '0' COMMENT '0=Unverified, 1=Verified',
  `user_type` varchar(20) NOT NULL DEFAULT 'Examinee',
  `verification_code` varchar(255) NOT NULL,
  `date_registered` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_Id`, `firstname`, `middlename`, `lastname`, `suffix`, `gender`, `civilstatus`, `religion`, `nationality`, `dob`, `age`, `address`, `parentsName`, `parentsContact`, `parentsEmail`, `email`, `contact`, `school`, `examineeCategory`, `interestedAt`, `password`, `image`, `receiptImage`, `receiptImage_Status`, `user_type`, `verification_code`, `date_registered`) VALUES
(40, 'Erwin', 'Cabag', 'Son', '', 'Male', 'Single', 'Bible Baptist', 'Filipino', '2022-12-07', '5 days old', 'Sitio Upper Landing, Daanlungsod, Medellin, Cebus', '', '', '', 'admin@gmail.com', '9359428963', 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', '', '', '0192023a7bbd73250516f069df18b500', 'b.jpg', '', 0, 'Admin', '374025', '2022-09-10'),
(75, 'Sample', 'Sample', 'Sample', '', 'Male', 'Married', 'Sample', 'Sample', '2022-12-07', '6 days old', 'Sample', 'Sample', '9269228230', 'Sample@gmail.com', 'sonerwin12@gmail.com', '9359428963', 'SampleSample', 'Senior High School', 'Academic: Accountancy, Business and Management (ABM)', '0192023a7bbd73250516f069df18b500', 'user.jpg', '25.jpg', 1, 'Examinee', '110710', '2022-12-13'),
(76, 'Erwin Ko', 'Erwin Ko', 'Erwin Ko', '', 'Male', 'Married', 'Erwin Ko', 'Erwin Ko', '2022-12-10', '4 days old', 'Erwin Ko', 'Erwin Ko', '9269228230', 'Norlyngelig16@gmail.com', 'ErwinKo@gmail.com', '9359428963', 'Erwin KoErwin Ko', 'Senior High School', 'Academic: General Acamedic Strand (GAS)', '67af224ffee74247f0303003ea25deb4', 'user.jpg', '', 0, 'Examinee', '536592', '2022-12-14'),
(77, 'Congf', 'Cong', 'Cong', '', 'Male', 'Married', 'Cong', 'Cong', '2022-12-09', '5 days old', 'Cong', 'Cong', '9269228230', 'Norlyngelig16@gmail.com', 'Cong@gmail.com', '9359428963', 'CongCong', 'College', 'Assosiate in Hotel and Restaurant Management', '43ac56b75eff4549c18403486d57cf7e', 'user.jpg', '25.jpg', 1, 'Examinee', '', '2022-12-14'),
(78, 'Vivy', 'Vivy', 'Vivy', '', 'Female', 'Married', 'Vivy', 'Vivy', '2022-12-09', '5 days old', 'Vivy', 'Vivy', '9269228230', 'VivyVivy@gmail.com', 'Vivy@gmail.com', '9359428963', 'VivyVivy', 'Law', '', 'cfbcad95f98118447be7d77d410015b1', 'user.jpg', '', 0, 'Examinee', '', '2022-12-14'),
(79, 'Norlyn', 'Son', 'Gelig', '', 'Male', 'Married', 'fdsfs', 'fsfsd', '2022-12-02', '1 week old', 'Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'd', '9269228230', 'Norlyngelig16@gmail.com', 'Norlyngelfdsfsig16@gmail.com', '9359428963', 'dssfsdfsfdsfsd', 'Law', '', 'a9e49c7aefe022f0a8540361cce7575c', 'user.jpg', '25.jpg', 0, 'Examinee', '', '2022-12-14'),
(80, 'dsad', 'dsaddsad', 'dsad', '', 'Male', 'Single', '9359428963', '9359428963', '2010-02-10', '13 years old', '9359428963', '9359428963', '9359428963', 'dsa9359428963d@gmail.com', 'clubOfficedsaddsadr@gmail.com', '9359428963', '9359428963', '', '', 'b8f3b1b6c743a9dcc34f03753f9d600b', 'user.png', '13.jpg', 0, 'Examinee', '', '2023-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `user_answers`
--

CREATE TABLE IF NOT EXISTS `user_answers` (
`ans_Id` int(11) NOT NULL,
  `user_Id` int(11) NOT NULL,
  `q1_answer` text NOT NULL,
  `q2_answer` text NOT NULL,
  `q3_answer` text NOT NULL,
  `q4_answer` text NOT NULL,
  `q5_answer` text NOT NULL,
  `q6_answer` text NOT NULL,
  `q7_answer` text NOT NULL,
  `q8_answer` text NOT NULL,
  `q9_answer` text NOT NULL,
  `q10_answer` text NOT NULL,
  `q11_answer` text NOT NULL,
  `q12_answer` text NOT NULL,
  `q13_answer` text NOT NULL,
  `q14_answer` text NOT NULL,
  `q15_answer` text NOT NULL,
  `q16_answer` text NOT NULL,
  `q17_answer` text NOT NULL,
  `q18_answer` text NOT NULL,
  `q19_answer` text NOT NULL,
  `q20_answer` text NOT NULL,
  `q21_answer` text NOT NULL,
  `q22_answer` text NOT NULL,
  `q23_answer` text NOT NULL,
  `q24_answer` text NOT NULL,
  `q25_answer` text NOT NULL,
  `q26_answer` text NOT NULL,
  `q27_answer` text NOT NULL,
  `q28_answer` text NOT NULL,
  `q29_answer` text NOT NULL,
  `q30_answer` text NOT NULL,
  `q31_answer` text NOT NULL,
  `q32_answer` text NOT NULL,
  `q33_answer` text NOT NULL,
  `q34_answer` text NOT NULL,
  `q35_answer` text NOT NULL,
  `q36_answer` text NOT NULL,
  `q37_answer` text NOT NULL,
  `q38_answer` text NOT NULL,
  `q39_answer` text NOT NULL,
  `q40_answer` text NOT NULL,
  `q41_answer` text NOT NULL,
  `q42_answer` text NOT NULL,
  `q43_answer` text NOT NULL,
  `q44_answer` text NOT NULL,
  `q45_answer` text NOT NULL,
  `q46_answer` text NOT NULL,
  `q47_answer` text NOT NULL,
  `q48_answer` text NOT NULL,
  `q49_answer` text NOT NULL,
  `q50_answer` text NOT NULL,
  `q51_answer` text NOT NULL,
  `q52_answer` text NOT NULL,
  `q53_answer` text NOT NULL,
  `q54_answer` text NOT NULL,
  `q55_answer` text NOT NULL,
  `q56_answer` text NOT NULL,
  `q57_answer` text NOT NULL,
  `q58_answer` text NOT NULL,
  `q59_answer` text NOT NULL,
  `q60_answer` text NOT NULL,
  `q61_answer` text NOT NULL,
  `q62_answer` text NOT NULL,
  `q63_answer` text NOT NULL,
  `q64_answer` text NOT NULL,
  `q65_answer` text NOT NULL,
  `q66_answer` text NOT NULL,
  `q67_answer` text NOT NULL,
  `q68_answer` text NOT NULL,
  `q69_answer` text NOT NULL,
  `q70_answer` text NOT NULL,
  `q71_answer` text NOT NULL,
  `q72_answer` text NOT NULL,
  `q73_answer` text NOT NULL,
  `q74_answer` text NOT NULL,
  `q75_answer` text NOT NULL,
  `q76_answer` text NOT NULL,
  `q77_answer` text NOT NULL,
  `q78_answer` text NOT NULL,
  `q79_answer` text NOT NULL,
  `q80_answer` text NOT NULL,
  `q81_answer` text NOT NULL,
  `q82_answer` text NOT NULL,
  `q83_answer` text NOT NULL,
  `q84_answer` text NOT NULL,
  `q85_answer` text NOT NULL,
  `q86_answer` text NOT NULL,
  `q87_answer` text NOT NULL,
  `q88_answer` text NOT NULL,
  `q89_answer` text NOT NULL,
  `q90_answer` text NOT NULL,
  `q91_answer` text NOT NULL,
  `q92_answer` text NOT NULL,
  `q93_answer` text NOT NULL,
  `q94_answer` text NOT NULL,
  `q95_answer` text NOT NULL,
  `q96_answer` text NOT NULL,
  `q97_answer` text NOT NULL,
  `q98_answer` text NOT NULL,
  `q99_answer` text NOT NULL,
  `q100_answer` text NOT NULL,
  `q101_answer` text NOT NULL,
  `q102_answer` text NOT NULL,
  `q103_answer` text NOT NULL,
  `q104_answer` text NOT NULL,
  `q105_answer` text NOT NULL,
  `q106_answer` text NOT NULL,
  `q107_answer` text NOT NULL,
  `q108_answer` text NOT NULL,
  `q109_answer` text NOT NULL,
  `q110_answer` text NOT NULL,
  `q111_answer` text NOT NULL,
  `q112_answer` text NOT NULL,
  `q113_answer` text NOT NULL,
  `q114_answer` text NOT NULL,
  `q115_answer` text NOT NULL,
  `q116_answer` text NOT NULL,
  `q117_answer` text NOT NULL,
  `q118_answer` text NOT NULL,
  `q119_answer` text NOT NULL,
  `q120_answer` text NOT NULL,
  `q121_answer` text NOT NULL,
  `q122_answer` text NOT NULL,
  `q123_answer` text NOT NULL,
  `q124_answer` text NOT NULL,
  `q125_answer` text NOT NULL,
  `q126_answer` text NOT NULL,
  `q127_answer` text NOT NULL,
  `q128_answer` text NOT NULL,
  `q129_answer` text NOT NULL,
  `q130_answer` text NOT NULL,
  `q131_answer` text NOT NULL,
  `q132_answer` text NOT NULL,
  `q133_answer` text NOT NULL,
  `q134_answer` text NOT NULL,
  `q135_answer` text NOT NULL,
  `q136_answer` text NOT NULL,
  `q137_answer` text NOT NULL,
  `q138_answer` text NOT NULL,
  `q139_answer` text NOT NULL,
  `q140_answer` text NOT NULL,
  `q141_answer` text NOT NULL,
  `q142_answer` text NOT NULL,
  `q143_answer` text NOT NULL,
  `q144_answer` text NOT NULL,
  `q145_answer` text NOT NULL,
  `q146_answer` text NOT NULL,
  `q147_answer` text NOT NULL,
  `q148_answer` text NOT NULL,
  `q149_answer` text NOT NULL,
  `q150_answer` text NOT NULL,
  `q151_answer` text NOT NULL,
  `q152_answer` text NOT NULL,
  `q153_answer` text NOT NULL,
  `q154_answer` text NOT NULL,
  `q155_answer` text NOT NULL,
  `q156_answer` text NOT NULL,
  `q157_answer` text NOT NULL,
  `q158_answer` text NOT NULL,
  `q159_answer` text NOT NULL,
  `q160_answer` text NOT NULL,
  `date_of_exam` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `user_answers`
--

INSERT INTO `user_answers` (`ans_Id`, `user_Id`, `q1_answer`, `q2_answer`, `q3_answer`, `q4_answer`, `q5_answer`, `q6_answer`, `q7_answer`, `q8_answer`, `q9_answer`, `q10_answer`, `q11_answer`, `q12_answer`, `q13_answer`, `q14_answer`, `q15_answer`, `q16_answer`, `q17_answer`, `q18_answer`, `q19_answer`, `q20_answer`, `q21_answer`, `q22_answer`, `q23_answer`, `q24_answer`, `q25_answer`, `q26_answer`, `q27_answer`, `q28_answer`, `q29_answer`, `q30_answer`, `q31_answer`, `q32_answer`, `q33_answer`, `q34_answer`, `q35_answer`, `q36_answer`, `q37_answer`, `q38_answer`, `q39_answer`, `q40_answer`, `q41_answer`, `q42_answer`, `q43_answer`, `q44_answer`, `q45_answer`, `q46_answer`, `q47_answer`, `q48_answer`, `q49_answer`, `q50_answer`, `q51_answer`, `q52_answer`, `q53_answer`, `q54_answer`, `q55_answer`, `q56_answer`, `q57_answer`, `q58_answer`, `q59_answer`, `q60_answer`, `q61_answer`, `q62_answer`, `q63_answer`, `q64_answer`, `q65_answer`, `q66_answer`, `q67_answer`, `q68_answer`, `q69_answer`, `q70_answer`, `q71_answer`, `q72_answer`, `q73_answer`, `q74_answer`, `q75_answer`, `q76_answer`, `q77_answer`, `q78_answer`, `q79_answer`, `q80_answer`, `q81_answer`, `q82_answer`, `q83_answer`, `q84_answer`, `q85_answer`, `q86_answer`, `q87_answer`, `q88_answer`, `q89_answer`, `q90_answer`, `q91_answer`, `q92_answer`, `q93_answer`, `q94_answer`, `q95_answer`, `q96_answer`, `q97_answer`, `q98_answer`, `q99_answer`, `q100_answer`, `q101_answer`, `q102_answer`, `q103_answer`, `q104_answer`, `q105_answer`, `q106_answer`, `q107_answer`, `q108_answer`, `q109_answer`, `q110_answer`, `q111_answer`, `q112_answer`, `q113_answer`, `q114_answer`, `q115_answer`, `q116_answer`, `q117_answer`, `q118_answer`, `q119_answer`, `q120_answer`, `q121_answer`, `q122_answer`, `q123_answer`, `q124_answer`, `q125_answer`, `q126_answer`, `q127_answer`, `q128_answer`, `q129_answer`, `q130_answer`, `q131_answer`, `q132_answer`, `q133_answer`, `q134_answer`, `q135_answer`, `q136_answer`, `q137_answer`, `q138_answer`, `q139_answer`, `q140_answer`, `q141_answer`, `q142_answer`, `q143_answer`, `q144_answer`, `q145_answer`, `q146_answer`, `q147_answer`, `q148_answer`, `q149_answer`, `q150_answer`, `q151_answer`, `q152_answer`, `q153_answer`, `q154_answer`, `q155_answer`, `q156_answer`, `q157_answer`, `q158_answer`, `q159_answer`, `q160_answer`, `date_of_exam`) VALUES
(16, 75, 'never said', 'to have been abducting', 'on account of', 'to live', 'herself', 'Because not wanting', 'It''s no point', 'NA', 'were', 'NA', 'NA', 'were made to sleep', 'if he has sent', 'is due to achieve', 'NA', 'go to work with', 'NA', 'NA', 'don''t usually go', 'NA', 'Archduke Franz Ferdinand', 'Norway', 'NA', 'Chariot', '1915', 'James Bond', 'NA', 'NA', 'The Once and Future King', 'Peru', 'Gulzarilal Nanda', 'NA', 'NA', 'NA', 'Glacier', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'TAO', 'NA', 'pantangi', 'lansakan', 'basal', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'Root', '75Â°C', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'Meter', 'dsfsdfsf', 'NA', 'NA', 'NA', 'NA', 'ssa', 'ff', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'ssa', 'ff', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'Meter', 'NA', 'NA', 'NA', 'NA', 'NA', 'ssa', 'ff', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'Meter', 'dsfsdfsf', 'NA', 'NA', 'NA', 'NA', 'NA', 'ff', '2023-04-02'),
(17, 75, 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', '2023-04-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`cat_Id`);

--
-- Indexes for table `customization`
--
ALTER TABLE `customization`
 ADD PRIMARY KEY (`customID`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
 ADD PRIMARY KEY (`exam_Id`);

--
-- Indexes for table `exam_bookings`
--
ALTER TABLE `exam_bookings`
 ADD PRIMARY KEY (`bookingsId`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
 ADD PRIMARY KEY (`quest_Id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
 ADD PRIMARY KEY (`schedID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_Id`);

--
-- Indexes for table `user_answers`
--
ALTER TABLE `user_answers`
 ADD PRIMARY KEY (`ans_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `cat_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `customization`
--
ALTER TABLE `customization`
MODIFY `customID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
MODIFY `exam_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `exam_bookings`
--
ALTER TABLE `exam_bookings`
MODIFY `bookingsId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
MODIFY `quest_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=212;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
MODIFY `schedID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `user_answers`
--
ALTER TABLE `user_answers`
MODIFY `ans_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
