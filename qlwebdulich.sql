-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2023 at 08:17 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlwebdulich`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_name`, `Email`, `password`, `Phone`) VALUES
('Austin2200', 'giakhanh@gmail.com', '12345678', '000372032'),
('Ngoc Tran', 'ngoctran@gmail.com', '12345678', '22222222'),
('Nha Triet', 'nhatriet@gmail.com', '12345678', '000372032'),
('Thanh Dat', 'thanhdat@gmail.com', '12345678', '8888888'),
('Tu Quyen', 'TUQUYEN@gmail.com', '12345678', '000372032');

-- --------------------------------------------------------

--
-- Table structure for table `tb_booktour`
--

CREATE TABLE `tb_booktour` (
  `Number` int(11) NOT NULL,
  `MaTour` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `NumberTicket` int(11) NOT NULL,
  `Message` varchar(1000) NOT NULL,
  `Total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_booktour`
--

INSERT INTO `tb_booktour` (`Number`, `MaTour`, `Name`, `Email`, `Phone`, `Date`, `NumberTicket`, `Message`, `Total`) VALUES
(1, 'DN103', 'Khanh', 'Khanh1@gmail.com', '0123617231', '2023/04/01', 4, '', 18000000),
(9, 'HA001', 'Khanh', 'Khanh1@gmail.com', '4353545345', '2023/12/1', 5, '', 25000000),
(11, 'HA001', 'Quyen', 'Quyentran212@gmail.com', '4353545345', '2023/12/02', 6, '', 30000000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `Number` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_contact`
--

INSERT INTO `tb_contact` (`Number`, `Name`, `Email`, `Subject`, `Message`) VALUES
(2, 'Khanh', 'Khanh1@gmail.com', 'Đà lạt', 'contact');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `FName` varchar(20) NOT NULL,
  `LName` varchar(20) NOT NULL,
  `EMail` varchar(30) NOT NULL,
  `PassWord` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`FName`, `LName`, `EMail`, `PassWord`) VALUES
('Nguyen', 'Dat', 'Dauyen203@gmail.com', '12345678'),
('Nguyen', 'Khanh', 'Khanh1@gmail.com', '12345678'),
('Tran', 'Quyen', 'Quyentran212@gmail.com', '12345678'),
('Nguyen', 'Tran', 'Tran213@gmail.com', '12345678'),
('Nha', 'Triet', 'Trietnha123@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tourdulich`
--

CREATE TABLE `tb_tourdulich` (
  `MaTour` varchar(10) NOT NULL,
  `DiaDiem` varchar(50) NOT NULL,
  `ChiTiet` varchar(1000) NOT NULL,
  `SoNgay` int(11) NOT NULL,
  `DoTuoi` int(11) NOT NULL,
  `TheLoai` varchar(50) NOT NULL,
  `GiaTien` float NOT NULL,
  `LinkAnh` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_tourdulich`
--

INSERT INTO `tb_tourdulich` (`MaTour`, `DiaDiem`, `ChiTiet`, `SoNgay`, `DoTuoi`, `TheLoai`, `GiaTien`, `LinkAnh`) VALUES
('DN103', 'Đà Nẵng', 'Đà Nẵng may mắn khi sở hữu nhiều bãi biển đẹp, trải dài thoai thoải và cát trắng miên man. Biển Đà Nẵng được tạp chí Forbes (Mỹ) bình chọn là một trong 6 bãi biển quyến rũ nhất hành tinh. Nếu bạn là người yêu biển chắc chắn sẽ thỏa mãn khi được ngụp lặn trong nước biếc, đùa giỡn với những con sóng hay các trò chơi như lướt ván, chèo thuyền chuối, motor nước\r\nKhông chỉ nổi tiếng với những bãi biển, nơi đây còn mang nét đẹp hấp dẫn khi có bản đảo Sơn Trà vươn mình ra biển, có đèo Hải Vân – “thiên hạ đệ nhất hùng quang” với cảnh quan ngoạn mục. Và không thể không nhắc đến đó là danh thắng Ngũ Hành Sơn, đăc biệt là Bà Nà Hills – cái tên làm nên thương hiệu cho du lịch Đà Nẵng và còn rất nhiều địa danh khác nữa.\r\nĐặc điểm khí hậu, thời tiết  Đà Nẵng nằm trong khu vực khí hậu nhiệt đới gió mùa, nhiệt độ cao và ít bị biến động. Do ở một vị trí khá đắc địa nên khí hậu nơi đây có sự chuyển tiếp, đan xen sữa khí hậu miền Bắc lẫn miền Nam. Tuy nhiên không chia làm 4 mùa rõ rệt như miền Bắc mà', 4, 12, 'Vacation', 4500000, 'https://vcdn1-dulich.vnecdn.net/2022/06/03/cauvang-1654247842-9403-1654247849.jpg?w=1200&h=0&q=100&dpr=1&fit=crop&s=Swd6JjpStebEzT6WARcoOA'),
('HA001', 'Hội An', 'Thành phố Hội An nằm bên bờ bắc hạ lưu sông Thu Bồn. Hội An là một đô thị cổ của Việt Nam', 4, 10, 'Romantic', 5000000, 'https://vcdn1-dulich.vnecdn.net/2022/06/01/Hoi-An-VnExpress-5851-16488048-4863-2250-1654057244.jpg?w=0&h=0&q=100&dpr=1&fit=crop&s=Z2ea_f0O7kgGZllKmJF92g'),
('HN101', 'Hà Nội', 'Hà Nội nằm ở tả ngạn sông Đà và hai bên đồng bằng sông Hồng. Phía Bắc giáp với tỉnh Vĩnh Phúc và Thái Nguyên, phía Nam giáp tỉnh Hòa Bình, phía Đông giáp với tỉnh Bắc Ninh và Hưng Yên, còn phía Tây giáp tỉnh Vĩnh Phúc. Sau khi được mở rộng, Hà Nội nằm trong top 17 Thủ đô có diện tích lớn nhất thế giới với 3.324,92 km2. Với vị trí địa lý thuận lợi này, thành phố này dễ dàng trở thành trung tâm kinh tế – chính trị, văn hóa, khoa học quan trọng của cả nước. Hiện tại, bao gồm 12 quận, 1 thị xã và 17 huyện.\r\nDo có kiểu khí hậu nhiệt đới gió mùa ẩm nên đến du lịch Hà Nội, bạn có thể thưởng thức đủ 4 mùa trong năm. Mỗi mùa đều có những đặc trưng riêng, cho bạn những cảm nhận khác nhau về cuộc sống, về cảnh vật và con người nơi đây. Hà Nội vào đông lạnh thì cũng lạnh lắm, vào hè nóng thì cũng nóng lắm nhưng không vì thế mà mất đi cái đẹp. Song có lẽ, đặc biệt nhất vẫn là mùa xuân, là mùa thu Hà Nội.\r\n', 3, 1, 'Vacation', 4000000, 'https://owa.bestprice.vn/images/destinations/uploads/trung-tam-thanh-pho-ha-noi-603da1f235b38.jpg'),
('VHL010', 'Vịnh Hạ Long', 'Vịnh Hạ Long là một vịnh nhỏ thuộc phần bờ tây vịnh Bắc Bộ tại khu vực biển Đông Bắc Việt Nam, bao gồm vùng biển đảo của thành phố Hạ Long thuộc tỉnh Quảng Ninh', 6, 18, 'Exotic', 70000000, 'https://ik.imagekit.io/tvlk/blog/2022/10/kinh-nghiem-du-lich-vinh-ha-long-1.jpg?tr=dpr-2,w-675'),
('VL101', 'Vĩnh Long', 'Vĩnh Long nằm ở trung tâm đồng bằng sông Cửu Long, giữa sông Tiền và sông Hậu, được mệnh danh là vùng đất “địa linh nhân kiệt”, giàu truyền thống cách mạng, lưu giữ nhiều di tích lịch sử văn hóa độc đáo. Thiên nhiên còn ưu đãi Vĩnh Long khí hậu ôn hòa quanh năm, đất đai màu mỡ, bốn mùa cây trái xanh tươi… tạo nên sự khác biệt, sức hấp dẫn riêng thu hút khách tham quan. Đến Vĩnh Long, du khách có thể hòa mình vào sông nước miệt vườn và trở thành thành viên trong gia đình để cùng khám phá những nét văn hóa, phong tục tập quán của người dân địa phương', 3, 1, 'Vacation', 3000000, 'https://cdn.tgdd.vn/Files/2021/07/03/1365427/23-dia-diem-du-lich-vinh-long-hap-dan-khach-du-lich-202206041228380001.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `tb_booktour`
--
ALTER TABLE `tb_booktour`
  ADD PRIMARY KEY (`Number`),
  ADD KEY `MaTour` (`MaTour`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`Number`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`EMail`);

--
-- Indexes for table `tb_tourdulich`
--
ALTER TABLE `tb_tourdulich`
  ADD PRIMARY KEY (`MaTour`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_booktour`
--
ALTER TABLE `tb_booktour`
  MODIFY `Number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `Number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_booktour`
--
ALTER TABLE `tb_booktour`
  ADD CONSTRAINT `tb_booktour_ibfk_1` FOREIGN KEY (`MaTour`) REFERENCES `tb_tourdulich` (`MaTour`);
COMMIT;

ALTER TABLE 'admins' ADD 'EMAIL' VARCHAR(255) NOT NULL AFTER 'password', ADD 'Phone' INT(255) NOT NULL AFTER 'email';
UPDATE 'admins'  SET `Email` = 'hoangmai@gmail.com', `Phone` = '063835820' WHERE `admins`.`id` = 12312;
UPDATE `admins` SET `Email` = 'austin@gmail.com', `Phone` = '0256874152' WHERE `admins`.`id` = 5233;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
