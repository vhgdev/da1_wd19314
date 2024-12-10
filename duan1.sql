-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 10, 2024 at 02:57 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `cate_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `type` tinyint(1) NOT NULL,
  `soft_delete` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cate_name`, `type`, `soft_delete`) VALUES
(1, 'Laptop Gaming', 1, 0),
(2, 'Laptop văn phòng', 1, 0),
(5, 'Bàn phím', 0, 0),
(6, 'Tai nghe', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `payment_method` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `status`, `payment_method`, `total_price`, `created_at`) VALUES
(7, 10, '3', 'cod', '26988000.00', '2024-12-08 16:49:39'),
(8, 10, '3', 'cod', '46649000.00', '2024-12-09 06:30:55'),
(9, 10, '2', 'bank', '54439000.00', '2024-12-09 06:53:36'),
(10, 10, '1', 'bank', '50640000.00', '2024-12-09 07:14:38'),
(11, 11, '2', 'cod', '18949000.00', '2024-12-10 13:47:46'),
(12, 10, '3', 'bank', '17799000.00', '2024-12-10 14:21:55'),
(13, 11, '4', 'bank', '32450000.00', '2024-12-10 14:44:42'),
(14, 11, '3', 'cod', '13950000.00', '2024-12-10 14:45:27');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int NOT NULL,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `price` bigint NOT NULL,
  `quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `price`, `quantity`) VALUES
(1, 1, 37, 13950000, 1),
(2, 3, 37, 13950000, 1),
(3, 5, 37, 13950000, 1),
(4, 7, 39, 1999000, 1),
(5, 7, 44, 4999000, 1),
(6, 7, 43, 19990000, 1),
(7, 8, 42, 16700000, 1),
(8, 8, 37, 13950000, 1),
(9, 8, 36, 15999000, 1),
(10, 9, 37, 13950000, 1),
(11, 9, 42, 16700000, 1),
(12, 9, 43, 19990000, 1),
(13, 9, 39, 1999000, 1),
(14, 9, 38, 1800000, 1),
(15, 10, 37, 13950000, 1),
(16, 10, 42, 16700000, 1),
(17, 10, 43, 19990000, 1),
(18, 11, 37, 13950000, 1),
(19, 11, 44, 4999000, 1),
(20, 12, 36, 15999000, 1),
(21, 12, 38, 1800000, 1),
(22, 13, 37, 13950000, 1),
(23, 13, 38, 1800000, 1),
(24, 13, 42, 16700000, 1),
(25, 14, 37, 13950000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` bigint NOT NULL,
  `quantity` int NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `category_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `quantity`, `description`, `status`, `category_id`) VALUES
(36, 'ASUS ROG Strix G15', 'images/s-l1200 (1).jpg', 15999000, 100, 'ASUS ROG Strix G15 là một laptop gaming hiệu suất cao, được thiết kế dành riêng cho game thủ với cấu hình mạnh mẽ và thiết kế hầm hố. Máy được trang bị vi xử lý AMD Ryzen hoặc Intel Core thế hệ mới nhất, kết hợp với GPU NVIDIA GeForce RTX, đảm bảo hiệu năng vượt trội trong các tựa game AAA và ứng dụng đồ họa nặng.\r\n\r\nMàn hình 15.6 inch Full HD có tần số quét lên đến 300Hz, mang lại trải nghiệm chơi game mượt mà và sắc nét. Hệ thống làm mát tiên tiến với công nghệ keo tản nhiệt kim loại lỏng giúp duy trì hiệu suất ổn định. Bàn phím RGB Per-Key tùy chỉnh qua Aura Sync, thiết kế khung máy chắc chắn, và âm thanh sống động từ Dolby Atmos nâng cao trải nghiệm toàn diện.\r\n\r\nASUS ROG Strix G15 là lựa chọn lý tưởng cho game thủ yêu cầu sức mạnh và thẩm mỹ.', 1, 1),
(37, 'Laptop ASUS Vivobook 15', 'images/75759_laptop_hp_14s_ep0110tu__8c5k9pa____2_ (1).jpg', 13950000, 100, 'ASUS VivoBook 15 là một chiếc laptop đa dụng, phù hợp cho học tập, làm việc và giải trí, với thiết kế mỏng nhẹ, hiện đại. Máy được trang bị màn hình 15.6 inch Full HD với viền NanoEdge siêu mỏng, mang lại trải nghiệm hiển thị rộng rãi, sắc nét.\r\n\r\nCấu hình linh hoạt với bộ vi xử lý Intel Core hoặc AMD Ryzen (tùy phiên bản), kết hợp với RAM lên đến 16GB và ổ cứng SSD, giúp xử lý các tác vụ nhanh chóng và mượt mà. Bàn phím công thái học với đèn nền, hành trình phím êm ái, hỗ trợ làm việc trong điều kiện thiếu sáng.\r\n\r\nMáy có nhiều cổng kết nối, bao gồm USB-C, USB-A, HDMI, và đầu đọc thẻ microSD, đáp ứng nhu cầu đa dạng. Pin bền bỉ và hỗ trợ sạc nhanh, VivoBook 15 là lựa chọn đáng giá cho người dùng cần sự linh hoạt và hiệu năng ổn định.', 1, 2),
(38, 'Airpods 2', 'images/image_2019-03-29_09-12-07_2.webp', 1800000, 123, 'AirPods 2 là tai nghe không dây của Apple, mang lại sự tiện lợi và chất lượng âm thanh ấn tượng. Sản phẩm sử dụng chip H1, giúp kết nối nhanh hơn và ổn định với các thiết bị Apple, đồng thời hỗ trợ điều khiển bằng giọng nói \"Hey Siri\".\r\n\r\nAirPods 2 có thiết kế nhỏ gọn, thoải mái, vừa vặn với tai người dùng. Thời lượng pin cho phép nghe nhạc liên tục 5 giờ, và hộp sạc cung cấp thêm 24 giờ sử dụng. Hộp sạc có hai phiên bản: sạc thường và sạc không dây, phù hợp với mọi nhu cầu. Đây là lựa chọn hoàn hảo cho trải nghiệm âm thanh tiện lợi, liền mạch và phong cách.', 1, 6),
(39, 'Aula F75', 'images/61saIDfK1CL.jpg', 1999000, 100, 'Aula F75 là một bàn phím cơ chuyên dụng dành cho game thủ, nổi bật với thiết kế mạnh mẽ và hiệu suất cao. Bàn phím có layout full-size với 104 phím, phù hợp cho cả chơi game và làm việc. Trang bị switch cơ học (có nhiều loại để lựa chọn), Aula F75 mang lại cảm giác gõ nhạy, độ bền cao, và phản hồi tốt.\r\n\r\nĐặc biệt, hệ thống đèn RGB đa dạng với các chế độ tùy chỉnh giúp tăng tính thẩm mỹ và tạo không gian chơi game sống động. Bàn phím còn hỗ trợ anti-ghosting toàn phần, đảm bảo nhận đủ mọi thao tác. Với thiết kế khung kim loại chắc chắn và khả năng kết nối qua cổng USB, Aula F75 là lựa chọn lý tưởng cho game thủ chuyên nghiệp.', 1, 5),
(41, 'Airpods 3', 'images/tai-nghe-bluetooth-airpods-3-lightning-charge-apple-mpny3-trang-2-750x500 (1).jpg', 2950000, 123, 'AirPods 3 là tai nghe không dây cao cấp của Apple, thiết kế gọn nhẹ, tinh tế với thân ngắn hơn và cảm ứng lực nhạy bén. Sản phẩm hỗ trợ âm thanh không gian (Spatial Audio) cho trải nghiệm âm thanh sống động, bao quanh. AirPods 3 được trang bị chip H1, mang lại khả năng kết nối nhanh chóng, ổn định, và chuyển đổi giữa các thiết bị Apple mượt mà. Thời lượng pin lên đến 6 giờ nghe liên tục, hộp sạc MagSafe cung cấp thêm 24 giờ sử dụng. Chống nước và mồ hôi đạt chuẩn IPX4, phù hợp cho luyện tập và di chuyển hàng ngày.\r\n', 1, 6),
(42, 'Laptop HP Windows 11', 'images/surfacelaptop5_2 (1).jpg', 16700000, 123, 'Laptop HP chạy Windows 11 mang đến trải nghiệm mượt mà với giao diện hiện đại, tối ưu hóa cho đa nhiệm và năng suất. Được trang bị các bộ vi xử lý mạnh mẽ như Intel Core hoặc AMD Ryzen, kết hợp với RAM lớn và ổ cứng SSD, các laptop HP đảm bảo hiệu suất vượt trội cho công việc và giải trí. Tính năng bảo mật cao như nhận diện vân tay và camera IR, cùng với các cổng kết nối đa dạng, giúp người dùng linh hoạt và bảo mật hơn. Windows 11 tăng cường trải nghiệm gaming và sáng tạo nội dung.', 1, 2),
(43, 'Microsoft Surface Laptop 13.8', 'images/71p-M3sPhhL (1).jpg', 19990000, 123, 'Microsoft Surface Laptop 13.8\" là một chiếc laptop mỏng nhẹ, sở hữu màn hình PixelSense cảm ứng 13.8 inch với độ phân giải cao, mang đến trải nghiệm hình ảnh sắc nét. Máy được trang bị vi xử lý Intel Core mạnh mẽ, hiệu suất ổn định cho công việc và giải trí. Thiết kế thanh lịch, cùng bàn phím có đèn nền, mang lại sự thoải mái khi sử dụng. Pin lâu dài giúp sử dụng cả ngày. Cài sẵn Windows 11, máy là lựa chọn lý tưởng cho người dùng cần tính di động và hiệu năng cao trong công việc và học tập.', 1, 2),
(44, 'Apple Magic Keyboard', 'images/Ban-Phim-Apple-Magic-Keyboard-2-1 (1).jpg', 4999000, 100, 'Apple lần đầu giới thiệu bàn phím không dây vào năm 2007 và Apple Magic Keyboard 2 là thế hệ tiếp theo đã được nâng cấp. Apple Magic Keyboard 2 làm người dùng khá hài lòng với sự mỏng nhẹ và pin tích hợp có thể sạc lại giúp công việc trở nên thuận tiện hơn.\r\n\r\nThương hiệu: Apple\r\nLoại SP: Bàn phím\r\nChất liệu: Hợp kim Nhôm\r\nKích thước: 27.9 x 11.49 x (0.41-1.09) cm\r\nTrọng lượng: 0,231kg\r\nKết nối: Bluetooth 4.0, Lightning USB\r\nPin: Li-Ion\r\nThời gian sử dụng: 30 ngày\r\nThời gian sạc: 2 giờ\r\nHỗ trợ: Mac OS X 10.11\r\nBảo hành: 12 Tháng', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `fullname` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(199) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(199) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('admin','user') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'user',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `password`, `email`, `phone`, `address`, `role`, `active`, `created_at`, `updated_at`) VALUES
(7, 'Vũ Hoàng Hiệp', '$2y$10$5sOqVPWeS0Ea/dMl/xQIrelLC0e.c040mMTe.3.ksgJWACc0phLjG', 'hiepvhph53582@gmail.com', '0868882950', 'Van Tien Dung', 'admin', 1, '2024-11-30 01:25:42', '2024-11-30 01:25:42'),
(10, 'admin', '$2y$10$BbmBhL4SZWSCTRrk8jPdU.CRR8Y7Hlip1YIuEeUoSOb1dl619KBza', 'vhghip2905@gmail.com', '0868882950', 'Van Tien Dung', 'admin', 1, '2024-12-08 15:19:29', '2024-12-08 15:19:29'),
(11, 'Vũ Hoàng Hiệp', '$2y$10$ekArAN3SQjk97JxPahSqBuuCrFQZu73u/VxKV3Nm0Zgs7SuXEMesa', '123@gmail.com', '0868882950', 'Van Tien Dung', 'user', 1, '2024-12-10 13:47:24', '2024-12-10 13:47:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
