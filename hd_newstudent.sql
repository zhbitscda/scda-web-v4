-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 02 月 01 日 13:54
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `hd_newstudent`
--

-- --------------------------------------------------------

--
-- 表的结构 `hd_student`
--

CREATE TABLE IF NOT EXISTS `hd_student` (
  `studentID` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(30) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `birth` varchar(30) NOT NULL,
  `hometown` varchar(30) NOT NULL,
  `nation` varchar(10) NOT NULL,
  `academy` varchar(50) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `dormitory` varchar(30) NOT NULL,
  `phonenumber` varchar(30) NOT NULL,
  `qq` varchar(20) NOT NULL,
  `development1` varchar(30) NOT NULL,
  `development2` varchar(30) DEFAULT NULL,
  `STSwap` varchar(10) NOT NULL,
  `hobby` text NOT NULL,
  `introduction` text NOT NULL,
  PRIMARY KEY (`studentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `hd_student`
--

INSERT INTO `hd_student` (`studentID`, `sname`, `sex`, `birth`, `hometown`, `nation`, `academy`, `profession`, `dormitory`, `phonenumber`, `qq`, `development1`, `development2`, `STSwap`, `hobby`, `introduction`) VALUES
(1, '王杞辛', '女', '1995年01月01日', '辽宁', '汉', '计算机学院', '软件工程', '3栋206', '13750059822', '844130791', '传媒', '', '否', '谁谁谁谁谁谁水水水水谁谁谁', '去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去水水水水谁谁谁水水水水水水水水谁谁谁水水水水谁谁谁谁谁谁水水水水谁谁谁'),
(2, 'sss', 'ss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', '宣传部', '传媒部', '1', 'sss', 'sss'),
(3, 'sss', 'ss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', '宣传部', '传媒部', '1', 'sss', 'sss'),
(4, 'sss', 'ss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', '宣传部', '传媒部', '1', 'sss', 'sss'),
(5, 'sss', 'ss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', '宣传部', '传媒部', '1', 'sss', 'sss'),
(6, 'sss', 'ss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', '宣传部', '传媒部', '1', 'sss', 'sss'),
(7, 'sss', 'ss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', '宣传部', '传媒部', '1', 'sss', 'sss'),
(8, 'sss', 'ss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', '宣传部', '传媒部', '1', 'sss', 'sss'),
(9, 'sss', 'ss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', '宣传部', '传媒部', '1', 'sss', 'sss'),
(10, 'sss', 'ss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', '宣传部', '传媒部', '1', 'sss', 'sss'),
(11, 'sss', 'ss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', '宣传部', '传媒部', '1', 'sss', 'sss'),
(12, 'sss', 'ss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', '宣传部', '传媒部', '1', 'sss', 'sss'),
(13, 'sss', 'ss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', '宣传部', '传媒部', '1', 'sss', 'sss'),
(14, 'sss', 'ss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', '宣传部', '传媒部', '1', 'sss', 'sss'),
(15, 'sss', 'ss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', '宣传部', '传媒部', '1', 'sss', 'sss'),
(16, 'sss', 'ss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', '宣传部', '传媒部', '1', 'sss', 'sss'),
(17, 'sss', 'ss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', 'sss', '宣传部', '传媒部', '1', 'sss', 'sss'),
(18, 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', '传媒部', '', '1', 'aaa', 'aaaa'),
(19, '王杞辛', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', '传媒部', '', '1', 'aaa', 'aaaa'),
(20, '王杞辛', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', '传媒部', '', '1', 'aaa', 'aaaa'),
(21, '王杞辛', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', '传媒部', '', '1', 'aaa', 'aaaa'),
(22, '王杞辛', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', '传媒部', '', '1', 'aaa', 'aaaa'),
(23, '王杞辛', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', '传媒部', '', '1', 'aaa', 'aaaa'),
(24, '王杞辛', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', '传媒部', '', '1', 'aaa', 'aaaa'),
(25, 'xxxx', 'aaaa', 'aaa', 'xxxxxxxxxxxxxxxxaa', 'aaaaa', 'aaaaaaaa', 'aaa', 'aaa', 'aaa', 'aaa', '传媒部', '传媒部', '1', 'aaa', 'aaaa'),
(26, 'aaaaaaaa', 'aaa', 'aa', 'aaa', 'aaa', 'aaa', 'aa', 'aa', 'aaa', 'aa', '办公室', '传媒部', '1', 'aaa', 'aaaaaaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- 表的结构 `hd_user`
--

CREATE TABLE IF NOT EXISTS `hd_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) CHARACTER SET latin1 NOT NULL,
  `password` varchar(40) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `hd_user`
--

INSERT INTO `hd_user` (`id`, `username`, `password`) VALUES
(1, 'scda', 'SCDAnet061122');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
