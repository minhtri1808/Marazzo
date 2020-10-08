-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2020 at 02:49 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_duanmau`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_order`
--

CREATE TABLE `cart_order` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` double(10,2) NOT NULL,
  `phuongthuc` tinyint(1) NOT NULL COMMENT '1. COD / 2.Bank / 3.Paypal',
  `name1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_order`
--

INSERT INTO `cart_order` (`id`, `name`, `phone`, `email`, `address`, `total`, `phuongthuc`, `name1`, `phone1`, `address1`) VALUES
(1, 'da', ' dasd', 'mtmusic2015100@gmail.com', ' dasd', 10900000.00, 1, NULL, NULL, NULL),
(2, 'DAS', ' DAS', 'mtmusic2015100@gmail.com', ' DASD', 10900000.00, 1, NULL, NULL, NULL),
(3, 'da', ' das', 'mtmusic2015100@gmail.com', ' dad', 23990000.00, 1, NULL, NULL, NULL),
(4, 'da', ' das', 'mtmusic2015100@gmail.com', ' dad', 23990000.00, 1, NULL, NULL, NULL),
(5, 'DADA', ' DASD', 'mtmusic2015100@gmail.com', ' DASD', 7500000.00, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` tinyint(4) DEFAULT 0,
  `sethome` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `parent_id`, `sethome`) VALUES
(9, 'Điện thoại di động', 0, 0),
(11, 'Laptop - Macbook', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `catalog_producer`
--

CREATE TABLE `catalog_producer` (
  `id_producer` int(11) NOT NULL,
  `id_catalog` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catalog_producer`
--

INSERT INTO `catalog_producer` (`id_producer`, `id_catalog`) VALUES
(1, 9),
(2, 9),
(3, 9),
(4, 9),
(5, 9),
(6, 9),
(8, 11),
(10, 11);

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `name`, `color`) VALUES
(1, 'Black', '#000000'),
(2, 'White', '#FFFFFF'),
(3, 'Red', '#FF0000'),
(4, 'Gray(Xám)', '#808080	'),
(5, 'Blue', '#0000FF	'),
(6, 'Yellow', '#FFFF00	'),
(7, 'Silver', '#C0C0C0'),
(8, 'hồng', '#FF00FF	'),
(9, 'Xanh Lục', '#00ff00'),
(10, 'Tím', '#8c1aff');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `group_producer`
--

CREATE TABLE `group_producer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_parent_name` int(11) DEFAULT 0,
  `id_producer` int(11) DEFAULT 0,
  `id_catalog` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_producer`
--

INSERT INTO `group_producer` (`id`, `name`, `id_parent_name`, `id_producer`, `id_catalog`) VALUES
(1, 'Nhà sản xuất', 0, 0, 9),
(2, '', 1, 2, 9),
(3, '', 1, 3, 9),
(4, '', 1, 4, 9),
(5, '', 1, 5, 9),
(6, '', 1, 6, 9),
(8, 'Apple', 0, 0, 9),
(9, '', 1, 1, 9),
(10, 'Nhà sản xuất', 0, 0, 11),
(16, '', 10, 8, 11),
(17, '', 10, 9, 11),
(18, '', 10, 10, 11),
(19, '', 10, 11, 11),
(20, '', 10, 12, 11),
(21, '', 10, 13, 11);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `id` int(11) NOT NULL,
  `rangePrice` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `rangePrice`, `status`) VALUES
(1, '0-3000000', 1),
(2, '3000000-10000000', 1),
(3, '10000000-15000000 ', 1),
(5, '15000000-30000000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `producer`
--

CREATE TABLE `producer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `producer`
--

INSERT INTO `producer` (`id`, `name`) VALUES
(0, 'unknown'),
(1, 'Apple'),
(2, 'Samsung'),
(3, 'Xiaomi'),
(4, 'Realme'),
(5, 'Nokia'),
(6, 'Huawei'),
(8, 'DELL'),
(9, 'LENOVO'),
(10, 'ASUS'),
(11, 'HP'),
(12, 'ACER'),
(13, 'IOS'),
(14, 'Oppo');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sale` int(3) DEFAULT 0,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `id_producer` int(11) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` int(11) DEFAULT 0,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_catalog` int(11) NOT NULL,
  `hot` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `sale`, `image`, `date`, `id_producer`, `note`, `view`, `detail`, `id_catalog`, `hot`) VALUES
(1, 'Samsung Galaxy A51', 0, 'SamsungGalaxyA51-xanh.png,Samsung Galaxy A51-den.png,Samsung Galaxy A51-hong.png,Samsung Galaxy A51-trang.png', '2020-06-06', 2, NULL, 0, 'Giá đặc biệt đến 07/06: 6,690,000đ\r\n\r\nTrả góp 0%, trả trước chỉ từ 799,000đ\r\nTặng suất mua Đồng hồ thời trang giảm đến 40% Xem chi tiết\r\nBảo hành mở rộng:\r\n\r\nMua gói bảo hành chính hãng mở rộng 24 tháng giá 429,000đ.', 9, 0),
(2, 'iPhone XR 64GB', 0, 'iPhone XR 64GB-den.png,iPhone XR 64GB-do.png,iPhone XR 64GB-vang.png,iPhone XR 64GB-trang.png', '2020-06-06', 1, NULL, 0, 'Giá đặc biệt khi mua Online đến 07/06: 15,490,000đ\r\n\r\nHoặc mua giá thường: 16,990,000đ\r\n\r\nTrả góp 0%\r\nThu cũ đổi mới tiết kiệm đến 14 triệu Xem chi tiết\r\nKhách hàng được khuyến mại thêm:\r\n\r\nTặng PMH 500,000đ mua Airpods\r\nGiảm đến 40% bộ sạc nhanh thương hiệu Umetravel khi mua kèm máy Xem chi tiết\r\nTặng suất mua Đồng hồ thời trang giảm đến 40% Xem chi tiết\r\nGiảm thêm 200,000đ khi thanh toán 100% giá trị đơn hàng qua VNPay-QR Xem chi tiết', 9, 2),
(5, 'Oppo Reno3 8GB-128GB', 0, 'Oppo Reno3 8GB-128GB-den.png,Oppo Reno3 8GB-128GB-trang.png,Oppo Reno3 8GB-128GB-xanh.png ', '0000-00-00', 14, NULL, 0, NULL, 9, 0),
(6, 'Acer Nitro AN515-43-R84R/NH.Q5XSV.001', 0, 'Acer Nitro AN515-1.png,Acer Nitro AN515-2.png,Acer Nitro AN515-3.png,Acer Nitro AN515-4.png,Acer Nitro AN515-5.jpg', '0000-00-00', 12, NULL, 0, 'Giá đặc biệt đến 18/06: 16,490,000đ\r\n\r\nHoặc mua giá thường: 17,990,000đ\r\n\r\nKhách hàng chọn 1 trong 2 khuyến mại sau:\r\n\r\nKM1:\r\n\r\nTrả góp 0%/0đ + Giảm ngay 50,000đ\r\nKM2:\r\n\r\nTặng Tai nghe Gaming Acer Predator\r\nTặng Balo Gaming Acer SUV\r\nTặng Chuột Gaming Acer Centus 300\r\nKhách hàng được khuyến mại thêm:\r\n\r\nTặng Balo Laptop\r\nMua kèm Laptop: Microsoft 365 Personal chỉ còn 690,000đ\r\nGiảm 20% Combo bảo vệ Laptop (Combo MDMH và Phần mềm Diệt virus Eset) khi mua kèm máy\r\nTặng suất mua Đồng hồ thời trang giảm đến 40%', 11, 0),
(7, 'Huawei P40 Pro (Không có Google)', 0, 'Huawei P40 Pro (Không có Google)-xanh.png,Huawei P40 Pro (Không có Google)-xam.png, ,', '0000-00-00', 6, NULL, 0, 'Khuyến mại đặc biệt (SL có hạn)\r\n\r\nTrả góp 0%\r\nTặng suất mua Đồng hồ thời trang giảm đến 40% Xem chi tiết\r\nBảo hành mở rộng:\r\n\r\nMua gói bảo hành chính hãng mở rộng 24 tháng giá 1,299,000đ.', 9, 0),
(8, 'iPhone 11 128GB', 0, 'iPhone 11 128GB-do.png,iPhone 11 128GB-den.png,iPhone 11 128GB-trang.png,iPhone 11 128GB-trang-xanhluc.png,iPhone 11 128GB-trang-vang.png,iPhone 11 128GB-trang-tim.png', '0000-00-00', 1, NULL, 0, 'Khuyến mại đặc biệt (SL có hạn)\r\n\r\nKhách hàng chọn 1 trong 2 khuyến mại sau:\r\n\r\nKM1:\r\n\r\nTrả góp 0%\r\nKM2:\r\n\r\nTặng 1,000 kWh điện trị giá 2,000,000đ\r\nKhách hàng được khuyến mại thêm:\r\n\r\nThu cũ đổi mới tiết kiệm đến 14 triệu Xem chi tiết\r\nTặng PMH 500,000đ mua Airpods\r\nGiảm đến 40% bộ sạc nhanh thương hiệu Umetravel khi mua kèm máy Xem chi tiết\r\nTặng suất mua Đồng hồ thời trang giảm đến 40% Xem chi tiết\r\nGiảm thêm 200,000đ khi thanh toán 100% giá trị đơn hàng qua VNPay-QR', 9, 1),
(9, 'Realme 6i 4GB-128GB', 0, 'Realme 6i 4GB-128GB-xanh.png,Realme 6i 4GB-128GB-trang.png', '0000-00-00', 4, NULL, 0, 'Khuyến mại đặc biệt (SL có hạn)\r\n\r\nTrả góp 0%\r\nTặng suất mua Đồng hồ thời trang giảm đến 40% Xem chi tiết\r\nBảo hành mở rộng:\r\n\r\nMua gói bảo hành chính hãng mở rộng 24 tháng giá 269,000đ.', 9, 2),
(12, 'Asus ZenBook Duo UX481FL-BM048T i5 10210U/8GB/512G', 0, 'Asus ZenBook Duo.png,Asus ZenBook Duo1.png,Asus ZenBook Duo2.png,Asus ZenBook Duo3.jpg,Asus ZenBook Duo4.png,', '2020-06-18', 10, NULL, 0, 'Khuyến mại đặc biệt (SL có hạn)  Trả góp 0% Tặng suất mua Đồng hồ thời trang giảm đến 40% Xem chi tiết Bảo hành mở rộng:  Mua gói bảo hành chính hãng mở rộng 24 tháng giá 269,000đ.', 11, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_color` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT 0,
  `price-old` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`id`, `id_product`, `id_color`, `image`, `price`, `price-old`) VALUES
(1, 1, 5, 'Samsung Galaxy A51-xanh1.png,Samsung Galaxy A51-xanh2.png,Samsung Galaxy A51-xanh3.png,Samsung Galaxy A51-xanh4.png', 7500000, 7999000),
(2, 1, 1, 'Samsung Galaxy A51-den1.png,Samsung Galaxy A51-den2.png,Samsung Galaxy A51-den3.png,Samsung Galaxy A51-den4.png', 7500000, 7999000),
(3, 1, 8, 'Samsung Galaxy A51-hong1.png,Samsung Galaxy A51-hong2.jpeg', 7500000, 7999000),
(4, 1, 2, 'Samsung Galaxy A51-trang1.jpeg,Samsung Galaxy A51-trang2.png,Samsung Galaxy A51-trang3.png,Samsung Galaxy A51-trang4.png', 7500000, 7999000),
(10, 2, 1, 'iPhone XR 64GB-den1.png,iPhone XR 64GB-den2.png,iPhone XR 64GB-den3.png', 23500000, 25500000),
(13, 2, 3, 'iPhone XR 64GB-do1.png,iPhone XR 64GB-do2.png,iPhone XR 64GB-do3.png', 23500000, 25500000),
(14, 2, 6, 'iPhone XR 64GB-vang1.png,iPhone XR 64GB-vang2.png,iPhone XR 64GB-vang3.png', 23500000, 25500000),
(15, 2, 2, 'iPhone XR 64GB-trang1.png,iPhone XR 64GB-trang2.png,iPhone XR 64GB-trang3.png', 23500000, 25500000),
(18, 5, 1, 'Oppo Reno3 8GB-128GB-den1.png,Oppo Reno3 8GB-128GB-den2.png,Oppo Reno3 8GB-128GB-den2.png', 15500000, 16690000),
(19, 5, 2, 'Oppo Reno3 8GB-128GB-trang1.png,Oppo Reno3 8GB-128GB-trang2.png,Oppo Reno3 8GB-128GB-trang3.png', 15500000, 16690000),
(20, 5, 5, 'Oppo Reno3 8GB-128GB-xanh1.png,Oppo Reno3 8GB-128GB-xanh2.png,Oppo Reno3 8GB-128GB-xanh3.png', 15500000, 16690000),
(21, 6, 1, 'Acer Nitro AN515-1.png,Acer Nitro AN515-2.png,Acer Nitro AN515-3.png,Acer Nitro AN515-4.png,Acer Nitro AN515-5.jpeg', 17990000, 18900000),
(22, 7, 5, 'Khuyến mại đặc biệt (SL có hạn)-xanh1.png,Khuyến mại đặc biệt (SL có hạn)-xanh2.png,Khuyến mại đặc biệt (SL có hạn)-xanh3.png,Khuyến mại đặc biệt (SL có hạn)-xanh4.png', 23990000, 24400000),
(23, 7, 4, 'Huawei P40 Pro (Không có Google)-xam1.png,Huawei P40 Pro (Không có Google)-xam2.png,Huawei P40 Pro (Không có Google)-xam3.png,Huawei P40 Pro (Không có Google)-xam4.png', 23990000, 24400000),
(24, 8, 3, 'iPhone 11 128GB-do1.png', 23990000, 24400000),
(25, 8, 1, 'iPhone 11 128GB-den1.png', 23990000, 24400000),
(26, 8, 2, 'iPhone 11 128GB-trang.png', 23990000, 24400000),
(27, 8, 9, 'iPhone 11 128GB-xanhluc.png', 23990000, 24400000),
(28, 8, 6, 'iPhone 11 128GB-vang.png', 23990000, 24400000),
(29, 8, 10, 'iPhone 11 128GB-tim.png', 23990000, 24400000),
(30, 9, 5, 'Realme 6i 4GB-128GB-xanh.png,Realme 6i 4GB-128GB-xanh1.png,Realme 6i 4GB-128GB-xanh2.png,Realme 6i 4GB-128GB-xanh3.png,Realme 6i 4GB-128GB-xanh4.png', 10900000, 24000000),
(31, 9, 2, 'Realme 6i 4GB-128GB-trang.png,Realme 6i 4GB-128GB-trang1.png,Realme 6i 4GB-128GB-trang2.png,Realme 6i 4GB-128GB-trang3.png,Realme 6i 4GB-128GB-trang4.png', 10900000, 24000000),
(32, 12, 1, 'Asus ZenBook Duo.png,Asus ZenBook Duo1.png,Asus ZenBook Duo2.png,Asus ZenBook Duo3.jpg,Asus ZenBook Duo4.png,', 27000000, 27900000);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `stt` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`, `stt`) VALUES
(1, 'MỚI', 0),
(2, 'ĐẶC BIỆT', 2),
(3, 'HOT', 1),
(4, 'KHUYẾN MẠI', 3),
(5, 'BÁN CHẠY', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`, `phone`, `address`, `role`) VALUES
(10, '', '202cb962ac59075b964b07152d234b70', 'mtmusic2015100@gmail.com', ' ', ' ', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_order`
--
ALTER TABLE `cart_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catalog_producer`
--
ALTER TABLE `catalog_producer`
  ADD PRIMARY KEY (`id_producer`,`id_catalog`),
  ADD KEY `FK_group_cata` (`id_catalog`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_comment_product` (`id_product`),
  ADD KEY `FK_comment_user` (`id_user`);

--
-- Indexes for table `group_producer`
--
ALTER TABLE `group_producer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_group_catalog` (`id_catalog`) USING BTREE,
  ADD KEY `PK_Producer` (`id_producer`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id_order`,`id_product`),
  ADD KEY `FK_order_product_detail` (`id_product`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producer`
--
ALTER TABLE `producer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_product_catalog` (`id_catalog`),
  ADD KEY `FK_product_producer` (`id_producer`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_product_detail` (`id_product`),
  ADD KEY `PK_color` (`id_color`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_order`
--
ALTER TABLE `cart_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `group_producer`
--
ALTER TABLE `group_producer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `producer`
--
ALTER TABLE `producer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `catalog_producer`
--
ALTER TABLE `catalog_producer`
  ADD CONSTRAINT `FK_group_cata` FOREIGN KEY (`id_catalog`) REFERENCES `catalog` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_group_cata2` FOREIGN KEY (`id_producer`) REFERENCES `producer` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_comment_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `FK_comment_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `group_producer`
--
ALTER TABLE `group_producer`
  ADD CONSTRAINT `PK_Producer` FOREIGN KEY (`id_producer`) REFERENCES `producer` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `PK_idcatalog` FOREIGN KEY (`id_catalog`) REFERENCES `catalog` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_product_catalog` FOREIGN KEY (`id_catalog`) REFERENCES `catalog` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_product_producer` FOREIGN KEY (`id_producer`) REFERENCES `producer` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD CONSTRAINT `PK_color` FOREIGN KEY (`id_color`) REFERENCES `color` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `PK_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
