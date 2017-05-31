-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 11 May 2017, 04:33:20
-- Sunucu sürümü: 10.1.21-MariaDB
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `cengbank`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `account`
--

CREATE TABLE `account` (
  `AccountId` int(4) NOT NULL,
  `AccountBalance` int(8) NOT NULL,
  `AccountNumber` int(10) NOT NULL,
  `AvaliableBalance` int(11) NOT NULL,
  `CompanyId` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `accountflow`
--

CREATE TABLE `accountflow` (
  `OperationId` int(3) NOT NULL,
  `OperationType` varchar(10) NOT NULL,
  `SenderAccountId` int(10) NOT NULL,
  `ReceiverAccountId` int(10) NOT NULL,
  `Amount` int(10) NOT NULL,
  `Validation` tinyint(1) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `AdminId` int(3) NOT NULL,
  `AdminName` varchar(10) NOT NULL,
  `AdminPassword` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`AdminId`, `AdminName`, `AdminPassword`) VALUES
(1, 'ahmet', ''),
(4, 'süleyman', ''),
(5, 'süleyman', ''),
(6, 'enes', '2222'),
(7, 'enes', '2222');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `company`
--

CREATE TABLE `company` (
  `Name` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `EMail` varchar(30) NOT NULL,
  `CompanyId` int(4) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `UserName` varchar(10) NOT NULL,
  `CreditId` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `company`
--

INSERT INTO `company` (`Name`, `Address`, `Phone`, `EMail`, `CompanyId`, `Password`, `UserName`, `CreditId`) VALUES
('cosmos', 'karacabey', '22323', '', 98, '112233', '', 0),
('cosmos', 'karacabey', '22323', '', 99, '112233', '', 0),
('süleyman gü', 'hatay', '05434543437', 'smeagol@', 106, 'cash', 'godoman', 1),
('süleyman gü', 'hatay', '05434543437', 'smeagol@', 107, 'cash', 'godoman', 1),
('süleyman gü', 'hatay', '05434543437', 'smeagol@', 108, 'cash', 'godoman', 1),
('süleyman gü', 'hatay', '05434543437', 'smeagol@', 109, 'cash', 'godoman', 1),
('ahmet', 'hatay', '1244', '123', 110, '6543', 'scarface', 1),
('ahmet', 'hatay', '1244', '123', 111, '6543', 'scarface', 1),
('ahmet', 'hatay', '1244', '123', 112, '6543', 'scarface', 1),
('ahmet', 'hatay', '1244', '123', 113, '6543', 'scarface', 1),
('cosmos', 'karacabey', '4', 'hgf', 114, '112233', 'scarface', 1),
('cosmos', 'karacabey', '4', 'hgf', 115, '112233', 'scarface', 1),
('cosmos', 'karacabey', '4', 'hgf', 116, '112233', 'scarface', 1),
('adnabn', 'hatay', '', '', 117, '', '', 0),
('adnabn', 'hatay', '', '', 118, '', '', 0),
('adnabn', 'hatay', '', '', 119, '', '', 0),
('adnabn', 'hatay', '', '', 120, '', '', 0),
('ahsu tur', '', '', '', 130, '', '', 0),
('ahsu tur', '', '', '', 131, '', '', 0),
('ahsu tur', '', '', '', 132, '', '', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `creditcard`
--

CREATE TABLE `creditcard` (
  `AccountNum` int(10) NOT NULL,
  `CreditCardId` int(10) NOT NULL,
  `Password` int(4) NOT NULL,
  `Debt` int(10) NOT NULL,
  `ExpirationDate` varchar(10) NOT NULL,
  `AccountId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`AccountId`),
  ADD KEY `CompanyId` (`CompanyId`);

--
-- Tablo için indeksler `accountflow`
--
ALTER TABLE `accountflow`
  ADD PRIMARY KEY (`OperationId`);

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminId`);

--
-- Tablo için indeksler `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`CompanyId`);

--
-- Tablo için indeksler `creditcard`
--
ALTER TABLE `creditcard`
  ADD PRIMARY KEY (`CreditCardId`),
  ADD KEY `AccountId` (`AccountId`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `account`
--
ALTER TABLE `account`
  MODIFY `AccountId` int(4) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `accountflow`
--
ALTER TABLE `accountflow`
  MODIFY `OperationId` int(3) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Tablo için AUTO_INCREMENT değeri `company`
--
ALTER TABLE `company`
  MODIFY `CompanyId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
--
-- Tablo için AUTO_INCREMENT değeri `creditcard`
--
ALTER TABLE `creditcard`
  MODIFY `CreditCardId` int(10) NOT NULL AUTO_INCREMENT;
--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `creditcard`
--
ALTER TABLE `creditcard`
  ADD CONSTRAINT `creditcard_ibfk_1` FOREIGN KEY (`AccountId`) REFERENCES `account` (`AccountId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
