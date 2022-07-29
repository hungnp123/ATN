-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 29, 2022 lúc 05:14 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cp_phihung`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `toy`
--

CREATE TABLE `toy` (
  `toy_id` int(11) NOT NULL,
  `toy_name` varchar(100) NOT NULL,
  `toy_img` varchar(100) NOT NULL,
  `toy_price` varchar(100) NOT NULL,
  `toy_origin` varchar(100) NOT NULL,
  `toy_pic1` varchar(100) NOT NULL,
  `toy_pic2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `toy`
--

INSERT INTO `toy` (`toy_id`, `toy_name`, `toy_img`, `toy_price`, `toy_origin`, `toy_pic1`, `toy_pic2`) VALUES
(1, 'Sank the child - Faded', 'product1.jpg', '20$', 'Korean ', 'product1.1.jpg', 'product1.2.jpg'),
(2, 'Sank the child - Bronze', 'product2.jpg', '29$', 'Korean', 'product2.1.jpg', 'product2.2.jpg'),
(3, 'Sank the child - Vacation', 'product3.jpg', '27$', 'Korean', 'product3.1.jpg', 'product3.2.jpg'),
(4, 'Sank the child - Birthday', 'product4.jpg', '26$', 'Korean', 'product4.1.jpg', 'product4.2.jpg'),
(5, 'Sank the child - Skater', 'product5.jpg', '26$', 'Korean', 'product5.1.jpg', 'product5.2.jpg'),
(6, 'Sank the child - Turbulent', 'product6.jpg', '24$', 'Korean', 'product6.1.jpg', 'product6.2.jpg'),
(7, 'Sank the child - Christmas', 'product7.jpg', '18$', 'Korean', 'product7.1.jpg', 'product7.2.jpg'),
(8, 'Sank the child - Reto boy', 'product8.jpg', '29$', 'Korean', 'product8.1.jpg', 'product8.2.jpg'),
(9, 'Sank the child - Beach', 'product9.jpg', '26$', 'Korean', 'product9.1.jpg', 'product9.2.jpg'),
(10, 'Sank the child - Clowns', 'product10.jpg', '23$', 'Korean\r\n', 'product10.1.jpg', 'product10.2.jpg'),
(11, 'Sank the child - Traveler ', 'product11.jpg', '26$', 'Korean', 'product11.1.jpg', 'product11.2.jpg'),
(12, 'Sank the child - Spectrum ', 'product12.jpg', '27$', 'Korean', 'product12.1.jpg', 'product12.2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(1, 'Hungnp', '123');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `toy`
--
ALTER TABLE `toy`
  ADD PRIMARY KEY (`toy_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
