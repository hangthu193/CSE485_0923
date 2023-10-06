-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 06, 2023 lúc 06:27 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlybaihat`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `id` int(11) NOT NULL,
  `tenTheLoai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`id`, `tenTheLoai`) VALUES
(61, 'Anton Moppettt'),
(63, 'Eberto Hakewell'),
(64, 'Seamus Summerskill'),
(65, 'Adolpho Crannell'),
(66, 'Arluene Scapelhorn'),
(67, 'Joela Penbarthy'),
(68, 'Dela Clipston'),
(69, 'Allianora D\'Elias'),
(70, 'Findley Guerrieri'),
(71, 'Sarene Dodson'),
(72, 'Bea Delahunty'),
(73, 'Mariette Evelyn'),
(74, 'Audry Checo'),
(75, 'Frederique Gadesby'),
(76, 'Darleen Popworth'),
(77, 'Karolina Ridgeway'),
(78, 'Riva Jadczak'),
(79, 'Myrtle Hamlin'),
(80, 'Dannie Dracey'),
(81, 'Rikki Ducham'),
(82, 'Bert Kroll'),
(83, 'Lexie Wims'),
(84, 'Kelsy Brient'),
(85, 'Lanny Tassel'),
(86, 'Farr Giddons'),
(87, 'Trudie Klimecki'),
(88, 'Basilio Rives'),
(89, 'Elspeth Nesbit'),
(90, 'Nellie Tethacot'),
(91, 'Angelica Sleith'),
(92, 'Luca Clee'),
(93, 'Lynn Espine'),
(94, 'Clarabelle Mauditt'),
(95, 'Obed Gwilym');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
