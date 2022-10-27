 Server: localhost -  Database: ptud
-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2022 at 04:50 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `ptud`
--

-- --------------------------------------------------------

--
-- Table structure for table `benhvien`
--

CREATE TABLE `benhvien` (
  `Mabv` int(10) unsigned NOT NULL auto_increment,
  `Tenbv` varchar(100) collate utf8_unicode_ci NOT NULL,
  `Tang` int(10) NOT NULL,
  `Soluongf0` int(100) NOT NULL,
  `Diachi` varchar(200) collate utf8_unicode_ci NOT NULL,
  `F0max` int(10) NOT NULL,
  PRIMARY KEY  (`Mabv`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `benhvien`
--

INSERT INTO `benhvien` (`Mabv`, `Tenbv`, `Tang`, `Soluongf0`, `Diachi`, `F0max`) VALUES
(1, 'Benh Vien 175', 2, 12, '123 Ho Chi Minh', 1);

-- --------------------------------------------------------

--
-- Table structure for table `f0`
--

CREATE TABLE `f0` (
  `MaF0` int(10) unsigned NOT NULL auto_increment,
  `HoTen` varchar(100) collate utf8_unicode_ci NOT NULL,
  `NamSinh` varchar(244) collate utf8_unicode_ci NOT NULL,
  `Provincial` varchar(100) collate utf8_unicode_ci NOT NULL,
  `District` varchar(100) collate utf8_unicode_ci NOT NULL,
  `Ward` varchar(100) collate utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(100) collate utf8_unicode_ci NOT NULL,
  `SDT` int(10) NOT NULL,
  `CMND` int(10) NOT NULL,
  `SoTang` varchar(100) collate utf8_unicode_ci NOT NULL,
  `TrangThai` varchar(100) collate utf8_unicode_ci NOT NULL,
  `Mabv` int(10) NOT NULL,
  PRIMARY KEY  (`MaF0`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `f0`
--

INSERT INTO `f0` (`MaF0`, `HoTen`, `NamSinh`,  `DiaChi`, `SDT`, `CMND`, `SoTang`, `TrangThai`, `Mabv`) VALUES
(9, 'Nguyen Van B', '15/08/2001', '33/20', 912345678, 123456754, '1', 'ÄÃ£ khá»i bá»‡ná¸¥', 0),
(11, 'Nguyen Nhat Hieu', '15/08/2001','33/20 Duong so 1', 912345678, 436453634, '3', 'ÄÃ£ khá»i bá»‡ná¸¥', 0),
(15, 'Le Thuy Trang', '12/1/2005', '33/20 ???ng s? 1', 812313121, 2147483647, '5', 'ÄÃ£ khá»i bá»‡ná¸¥', 0),
(16, 'Nguyen Van C', '22/01/1993', 'So 4 Nguyễn Văn Bảo', 353242424, 2147483647, '2', 'Đang điều trị', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lichkham`
--

CREATE TABLE `lichkham` (
  `MaLich` int(10) unsigned NOT NULL auto_increment,
  `TenBenhNhan` varchar(100) collate utf8_unicode_ci NOT NULL,
  `ThoiGian` date NOT NULL,
  `DiaDiem` varchar(200) collate utf8_unicode_ci NOT NULL,
  `MaF0` int(10) NOT NULL,
  PRIMARY KEY  (`MaLich`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `lichkham`
--

INSERT INTO `lichkham` (`MaLich`, `TenBenhNhan`, `ThoiGian`, `DiaDiem`, `MaF0`) VALUES
(1, 'NguyenVanA', '2022-05-13', 'Thu Duc', 0),
(2, 'NguyenVanB', '2022-05-19', 'Thu Duc', 1),
(3, 'NguyenVanC', '2022-05-13', 'Thu Duc', 0);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoanbenhvien`
--

CREATE TABLE `taikhoanbenhvien` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `username` varchar(100) collate utf8_unicode_ci NOT NULL,
  `password` varchar(100) collate utf8_unicode_ci NOT NULL,
  `phanquyen` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `password` (`password`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `taikhoanbenhvien`
--

INSERT INTO `taikhoanbenhvien` (`id`, `username`, `password`, `phanquyen`) VALUES
(1, 'nhathieu', 'e10adc3949ba59abbe56e057f20f883e', 1),
(3, 'Benhvien175', 'e10adc3949ba59abbe56e057f20f883e', 1);

