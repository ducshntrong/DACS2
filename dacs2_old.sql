-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 11, 2022 lúc 05:15 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dacs2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `checkout`
--

CREATE TABLE `checkout` (
  `id` int(30) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `town_city` varchar(1000) NOT NULL,
  `orderdate` datetime NOT NULL,
  `postcode_zip` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `checkout`
--

INSERT INTO `checkout` (`id`, `firstname`, `lastname`, `country`, `address`, `town_city`, `orderdate`, `postcode_zip`, `phone`, `email`) VALUES
(22, 'thạnh', 'dương', 'Việt Nam', '470 tran dai nghia', 'da nang', '2022-09-05 09:49:15', '123', '0975722555', 'thanhdz@gmail.com'),
(23, 'chanh', 'pham', 'Việt Nam', '470 tran dai nghia', 'da nang', '2022-09-05 09:49:58', '123', '0975722555', 'thanhdz@gmail.com'),
(24, 'dung', 'pham', 'Việt Nam', '470 tran dai nghia', 'da nang', '2022-09-05 17:14:04', '123', '0975722555', 'thanhdz@gmail.com'),
(25, 'Hai', 'pham', 'Việt Nam', '470 tran dai nghia', 'da nang', '2022-09-09 09:57:55', '123', '0975722555', 'thanhdz@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `product_id`, `num`, `price`) VALUES
(20, 22, 12, 1, 43),
(21, 23, 12, 1, 43),
(22, 23, 2, 1, 43),
(23, 24, 10, 1, 43),
(24, 25, 10, 1, 43),
(25, 25, 12, 1, 43),
(26, 25, 2, 1, 43);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(30) NOT NULL,
  `price` int(20) NOT NULL,
  `des` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `img`, `price`, `des`) VALUES
('1', 'Piqué Biker Jacket', 'product-2.jpg', 67, 'Coat with quilted lining and an adjustable hood. Featuring long sleeves with adjustable cuff tabs, adjustable asymmetric hem with elastic side tabs and a front zip fastening with placket.'),
('10', 'Piqué Biker Jacket', 'product-5.jpg', 43, 'Coat with quilted lining and an adjustable hood. Featuring long sleeves with adjustable cuff tabs, adjustable asymmetric hem with elastic side tabs and a front zip fastening with placket.'),
('11', 'Piqué Biker Jacket', 'product-6.jpg', 43, 'Coat with quilted lining and an adjustable hood. Featuring long sleeves with adjustable cuff tabs, adjustable asymmetric hem with elastic side tabs and a front zip fastening with placket.'),
('12', 'Piqué Biker Jacket', 'product-7.jpg', 43, 'Coat with quilted lining and an adjustable hood. Featuring long sleeves with adjustable cuff tabs, adjustable asymmetric hem with elastic side tabs and a front zip fastening with placket.'),
('2', 'Multi-pocket Chest Bag', 'product-3.jpg', 43, 'Coat with quilted lining and an adjustable hood. Featuring long sleeves with adjustable cuff tabs, adjustable asymmetric hem with elastic side tabs and a front zip fastening with placket.'),
('3', 'Multi-pocket Chest Bag', 'product-4.jpg', 43, 'Coat with quilted lining and an adjustable hood. Featuring long sleeves with adjustable cuff tabs, adjustable asymmetric hem with elastic side tabs and a front zip fastening with placket.'),
('4', 'Multi-pocket Chest Bag', 'product-5.jpg', 67, 'Coat with quilted lining and an adjustable hood. Featuring long sleeves with adjustable cuff tabs, adjustable asymmetric hem with elastic side tabs and a front zip fastening with placket.'),
('5', 'Multi-pocket Chest Bag', 'product-6.jpg', 43, 'Coat with quilted lining and an adjustable hood. Featuring long sleeves with adjustable cuff tabs, adjustable asymmetric hem with elastic side tabs and a front zip fastening with placket.'),
('6', 'Multi-pocket Chest Bag', 'product-7.jpg', 67, 'Coat with quilted lining and an adjustable hood. Featuring long sleeves with adjustable cuff tabs, adjustable asymmetric hem with elastic side tabs and a front zip fastening with placket.'),
('7', 'Piqué Biker Jacket', 'product-5.jpg', 67, 'Coat with quilted lining and an adjustable hood. Featuring long sleeves with adjustable cuff tabs, adjustable asymmetric hem with elastic side tabs and a front zip fastening with placket.'),
('8', 'Multi-pocket Chest Bag', 'product-4.jpg', 43, 'Coat with quilted lining and an adjustable hood. Featuring long sleeves with adjustable cuff tabs, adjustable asymmetric hem with elastic side tabs and a front zip fastening with placket.'),
('9', 'Piqué Biker Jacket', 'product-5.jpg', 43, 'Coat with quilted lining and an adjustable hood. Featuring long sleeves with adjustable cuff tabs, adjustable asymmetric hem with elastic side tabs and a front zip fastening with placket.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
