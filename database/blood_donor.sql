-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 06:27 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_blood`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blood_donor`
--

CREATE TABLE `blood_donor` (
  `bd_id` int(11) NOT NULL,
  `bd_name` varchar(50) NOT NULL,
  `bd_sex` varchar(5) DEFAULT NULL,
  `bd_age` int(11) NOT NULL,
  `bd_bgroup` varchar(5) NOT NULL,
  `bd_reg_date` date NOT NULL DEFAULT current_timestamp(),
  `bd_phno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `blood_donor`
--

INSERT INTO `blood_donor` (`bd_id`, `bd_name`, `bd_sex`, `bd_age`, `bd_bgroup`, `bd_reg_date`, `bd_phno`) VALUES
(1, 'Nguyễn Văn Phú', 'Nam', 20, 'B', '2021-10-21', '034229xxxx]'),
(2, 'Nguyễn Văn Tâm', 'Nam', 20, 'A', '2021-10-21', '034229xxxx]'),
(3, 'Nguyễn Văn Kiên', 'Nam', 20, 'O', '2021-10-21', '034229xxxx]'),
(4, 'Nguyễn Văn Đức', 'Nam', 20, 'A', '2021-10-21', '034229xxxx]'),
(5, 'Nguyễn Văn Phương', 'Nữ', 20, 'AB', '2021-10-21', '034229xxxx]'),
(6, 'Nguyễn Văn Duy', 'Nam', 20, 'B', '2021-10-21', '034229xxxx]');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blood_donor`
--
ALTER TABLE `blood_donor`
  ADD PRIMARY KEY (`bd_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blood_donor`
--
ALTER TABLE `blood_donor`
  MODIFY `bd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
