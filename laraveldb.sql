-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 07, 2022 lúc 01:49 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laraveldb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accounts`
--

CREATE TABLE `accounts` (
  `Username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdEmployee` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdGroup` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `accounts`
--

INSERT INTO `accounts` (`Username`, `Password`, `IdEmployee`, `IdGroup`, `created_at`, `updated_at`) VALUES
('admin', 'admin', '101252', '1', '2022-01-02 05:38:47', '2022-01-02 05:38:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account_groups`
--

CREATE TABLE `account_groups` (
  `idGroup` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GroupName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account_groups`
--

INSERT INTO `account_groups` (`idGroup`, `GroupName`, `created_at`, `updated_at`) VALUES
('1', 'Quản trị viên', '2022-01-02 05:39:05', '2022-01-02 05:39:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `idBill` int(10) UNSIGNED NOT NULL,
  `OrderDate` date NOT NULL,
  `Address` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Total` double NOT NULL,
  `IdCustomer` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdEmployee` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_details`
--

CREATE TABLE `bill_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `IdBill` int(11) NOT NULL,
  `IdProduct` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `idBlog` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Content` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdProduct` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`idBlog`, `Title`, `Content`, `IdProduct`, `created_at`, `updated_at`) VALUES
('1', 'Mắt kính thời trang Nữ Guess GU7606_57_20C', 'Mắt kính nữ Guess GU7606_57_20C mang nét đẹp thanh lịch, tinh tế với kiểu dáng kính tròn trẻ trung, gọng kim loại thanh mảnh màu trắng bạc, điểm nhấn nổi bật của sản phẩm chính là chữ GUESS quen thuộc được khắc ở đầu gọng.\r\nLà thương hiệu đến từ Mỹ, GUESS nổi tiếng trên thế giới trong lĩnh vực thời trang, thương hiệu được sáng lập năm 1981 bởi anh em nhà Marciano. Với 40 năm hình thành và phát triển, GUESS đã gặt hái được không ít thành công trong cách lĩnh vực như thời trang, quần Jeans, đồng hồ,... và mắt kính cũng không ngoại lệ. Những sản phẩm đến từ GUESS mang nét trẻ trung, hiện đại, phong cách tự do, phóng khoáng, phù hợp với lớp trẻ hiện nay.\r\nSở hữu sự trẻ trung, thanh lịch trong thiết kế cùng màu sắc sang trọng, nữ tính, mắt kính nữ Guess GU7606_57_20C sẽ khiến các nàng phải trầm trồ về sức cuốn hút của nó. Mẫu kính nữ này được trang bị gọng kính dài mm làm bằng kim loại màu trắng bạc tinh tế, tròng kính CR39 có độ bền cao, nhẹ nhàng, khó vỡ và có kích cỡ mm, cuối cùng là cầu kính với chiều dài mm.\r\nChiếc kính nữ nhà GUESS này sở hữu tròng đạt tiêu chuẩn UV400 - chống tia UV ở mức cao nhất, giúp bảo vệ đôi mắt của bạn tốt hơn, cho người dùng yên tâm hơn khi di chuyển ngoài trời.', '9', '2022-01-07 04:26:38', '2022-01-07 04:26:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `idCategory` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CategoryName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Imgs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`idCategory`, `CategoryName`, `Imgs`, `created_at`, `updated_at`) VALUES
('1', 'Gọng mắt kính', '1.jpg', '2022-01-02 05:19:00', '2022-01-02 05:19:00'),
('2', 'Kính mát', '4.jpg', '2022-01-02 05:41:53', '2022-01-02 05:41:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `idCustomer` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FullName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`idCustomer`, `FullName`, `Phone`, `Address`, `created_at`, `updated_at`) VALUES
('1', 'Nguyễn Văn A', '0839948573', 'TP.HCM', '2022-01-07 04:19:12', '2022-01-07 04:19:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employees`
--

CREATE TABLE `employees` (
  `idEmployee` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FullName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Sex` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `employees`
--

INSERT INTO `employees` (`idEmployee`, `FullName`, `DateOfBirth`, `Sex`, `Phone`, `Address`, `Email`, `created_at`, `updated_at`) VALUES
('101252', 'Phan Quang Quí', '2001-01-06', 'Nam', '0351212569', 'Long An', 'abc@gmail.com', '2022-01-02 05:37:31', '2022-01-02 05:37:31'),
('10152', 'Trịnh Minh Phúc', '2001-01-28', 'Nam', '0813399818', 'Kiên Giang', 'minhphuc@gmail.com', '2022-01-07 02:01:11', '2022-01-07 02:01:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufacturers`
--

CREATE TABLE `manufacturers` (
  `idManufacturer` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ManufacturerName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `manufacturers`
--

INSERT INTO `manufacturers` (`idManufacturer`, `ManufacturerName`, `created_at`, `updated_at`) VALUES
('1', 'Lucasta', '2022-01-02 05:27:32', '2022-01-02 05:27:32'),
('2', 'Sài gòn', '2022-01-02 05:44:46', '2022-01-02 05:44:46'),
('3', 'Dora', '2022-01-07 01:15:06', '2022-01-07 01:15:06'),
('4', 'Guess', '2022-01-07 02:51:45', '2022-01-07 02:51:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `idProduct` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProductName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` double NOT NULL,
  `Img` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdCategory` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdManufacturer` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`idProduct`, `ProductName`, `Description`, `Price`, `Img`, `IdCategory`, `IdManufacturer`, `created_at`, `updated_at`) VALUES
('1', 'Gọng kính Lucasta LC00114', 'Gọng mắt kính', 480000, '1.jpg', '1', '1', '2022-01-02 05:20:31', '2022-01-02 05:20:31'),
('10', 'Mắt kính thời trang Unisex Guess GU6940_53_08B', 'Kiểu dáng kính aviator với gọng kim loại màu bạc, điểm nhấn là chữ GUESS được khắc ở phần đầu gọng tăng thêm nét tinh tế cho mẫu kính này.\r\nTròng kính nhựa cùng với màu đen đẹp mắt, chống chói hiệu quả.\r\nCông nghệ chống tia UV lên tới 400, bảo vệ mắt khỏi tia UV trong ánh sáng mặt trời.\r\nThương hiệu GUESS đến từ Mỹ.', 2040000, '10.jpg', '2', '4', '2022-01-07 01:52:57', '2022-01-07 01:52:57'),
('11', 'Mắt kính thời trang Nữ Guess GU3046_52_72Z', 'Mắt kính nữ Guess GU3046_52_72Z mang nét thiết kế trẻ trung, nữ tính cùng kiểu dáng tròng tròn xinh xắn, đáng yêu. Thêm vào đó, gọng kính kim loại màu đỏ và dòng chữ GUESS được khắc ở phần đầu gọng càng tô thêm nét thanh lịch, tinh tế cho mẫu kính này.', 1870000, '11.jpg', '2', '4', '2022-01-07 01:54:08', '2022-01-07 01:54:08'),
('12', 'Mắt kính thời trang Nữ Guess GU7621_54_52F', 'Mắt kính nữ Guess GU7621_54_52F mang nét đẹp trẻ trung, thanh lịch với tròng kính dáng browline tinh tế, cá tính. Phần gọng kính có màu vàng nâu đồi mồi phù hợp với các cô nàng có làn da sáng, thêm vào đó, tròng kính màu đen cá tính và điểm nhấn là các chữ G được khắc trên phần gọng kim loại.', 2040000, '12.jpg', '2', '4', '2022-01-07 01:55:07', '2022-01-07 01:55:07'),
('2', 'Gọng kính hiệu Lucasta LC00075 - C5', 'Gọng kính', 450000, '2.jpg', '1', '1', '2022-01-02 05:31:59', '2022-01-02 05:31:59'),
('3', 'Gọng kính hiệu Lucasta LC5009 – C3', 'Gọng kính', 520000, '3.jpg', '1', '1', '2022-01-02 05:41:08', '2022-01-02 05:41:08'),
('4', 'Kính mát nhựa tráng gương', '– Gọng kính bằng nhựa dẻo bền nhẹ và, đeo chắc chắn\r\n– Tròng kính bằng Poly chống vỡ tráng gương giúp bảo vệ mắt tốt hơn mắt thường\r\n– Kiểu dang hơi vếch thời trang phù hợp giới trẻ', 310000, '4.jpg', '2', '2', '2022-01-02 05:44:22', '2022-01-02 05:44:22'),
('5', 'Mắt kính thời trang Nam Dora 7073-C5', 'Thiết kế kính kiểu phi công, gọng kính được làm bằng kim loại tăng thêm độ bền bỉ và sang trọng.\r\nTròng kính được làm bằng nhựa với màu xám đen sang trọng quý phái.\r\nCông nghệ chống tia UV lên đến 400, bảo vệ mắt khỏi ánh sáng mặt trời.\r\nThương hiệu Dora đến từ Việt Nam', 756000, '5.jpg', '2', '3', '2022-01-07 01:17:43', '2022-01-07 01:17:43'),
('6', 'Mắt kính thời trang Nam Dora 7130-C3', 'Thiết kế kính kiểu phi công, gọng kính được làm bằng kim loại tăng thêm độ bền bỉ và sang trọng.\r\nTròng kính được làm bằng nhựa với màu nâu sang trọng quý phái.\r\nCông nghệ chống tia UV lên đến 400, bảo vệ mắt khỏi ánh sáng mặt trời và công nghệ Polarized có khả năng chống lóa chống chói cực tốt.\r\nThương hiệu Dora đến từ Việt Nam.', 1088000, '6.jpg', '2', '3', '2022-01-07 01:20:24', '2022-01-07 01:20:24'),
('7', 'Mắt kính thời trang Nam Guess GU7518S_58_49G', 'Kiểu dáng Aviator nam tính cùng gọng kim loại màu đen nâu sang trọng, hiện đại.\r\nTròng kính nhựa cùng với màu nâu đẹp mắt và chống chói hiệu quả.\r\nCông nghệ chống tia UV lên tới 400 giúp bảo vệ mắt khỏi tia UV trong ánh sáng mặt trời.\r\nThương hiệu GUESS đến từ Mỹ.', 2635000, '7.jpg', '2', '4', '2022-01-07 01:40:39', '2022-01-07 01:40:39'),
('8', 'Mắt kính thời trang Nữ Guess GU7640_57_78Z', 'Kiểu dáng aviator thanh lịch cùng gọng kim loại màu vàng sang trọng, hiện đại.\r\nTròng kính nhựa cùng với màu đen đẹp mắt và chống chói hiệu quả.\r\nCông nghệ chống tia UV lên tới 400 giúp bảo vệ mắt khỏi tia UV trong ánh sáng mặt trời.\r\nThương hiệu GUESS đến từ Mỹ.', 2805000, '8.jpg', '2', '4', '2022-01-07 01:50:45', '2022-01-07 01:50:45'),
('9', 'Mắt kính thời trang Nữ Guess GU7606_57_20C', 'Kiểu dáng tròn xinh xắn cùng gọng kim loại màu trắng bạc sang trọng, hiện đại.\r\nTròng kính nhựa cùng với màu xám đẹp mắt và chống chói hiệu quả.\r\nCông nghệ chống tia UV lên tới 400 giúp bảo vệ mắt khỏi tia UV trong ánh sáng mặt trời.\r\nThương hiệu GUESS đến từ Mỹ.', 2465000, '9.jpg', '2', '4', '2022-01-07 01:51:36', '2022-01-07 01:51:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`Username`);

--
-- Chỉ mục cho bảng `account_groups`
--
ALTER TABLE `account_groups`
  ADD PRIMARY KEY (`idGroup`);

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`idBill`);

--
-- Chỉ mục cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`idBlog`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`idCategory`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`idCustomer`);

--
-- Chỉ mục cho bảng `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`idEmployee`),
  ADD UNIQUE KEY `employees_email_unique` (`Email`);

--
-- Chỉ mục cho bảng `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`idManufacturer`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idProduct`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `idBill` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
