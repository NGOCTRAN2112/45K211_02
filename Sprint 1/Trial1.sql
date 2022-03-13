
create database Trial1 
use Trial1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(200) NOT NULL,
`id` int(11) NOT NULL,
  `taikhoan` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `admin` (`email`, `id`, `taikhoan`, `matkhau`) VALUES
('dangngoctran2112@gmail.com', 2, '191121521146', 'ngoctran123'),
('tuongvi21240801@gmail.com', 3, '191121521155', 'tuongvi123');

select * from admin

CREATE TABLE IF NOT EXISTS `dongsanpham` (
`id` int(11) NOT NULL,
  `tendongsp` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `dongsanpham` (`id`, `tendongsp`) VALUES
(1, 'The thang'),
(2, 'The ky');


CREATE TABLE IF NOT EXISTS `sanpham` (
  `baohanh` varchar(12) NOT NULL,
`id` int(11) NOT NULL,
  `tensanpham` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `gia` int(10) NOT NULL,
  `safeoff` int(10) NOT NULL,
  `category` varchar(3) NOT NULL,
  `avaibiliti` bit(1) NOT NULL DEFAULT b'1',
  `mota` text NOT NULL,
  `soluong` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO `sanpham` (`baohanh`, `id`, `tensanpham`, `url`, `gia`, `safeoff`, `category`, `avaibiliti`, `mota`, `soluong`) VALUES
('1', 2, 'Ve xe thang 1', 'images/vethang1.jpg', 20000, 0, 'The thang', b'1', 'Xin han hanh duoc phuc vu!', '1000'),
('1', 3, 'Ve xe thang 3', 'images/vethang3.jpg', 20000, 0, 'The thang', b'1', ' Xin han hanh duoc phuc vu!', '1000'),
('1', 7, 'Ve xe thang 4', 'images/vethang4.jpg', 20000, 0, 'The thang', b'0', 'Xin han hanh duoc phuc vu! ', '0');
select * from sanpham
CREATE TABLE IF NOT EXISTS `taikhoan` (
`id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dienthoai` varchar(13) NOT NULL,
  `ngaysinh` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO `taikhoan` (`id`, `username`, `password`, `address`, `gender`, `fname`, `lname`, `email`, `dienthoai`, `ngaysinh`) VALUES
(7, 'thanhdat', 'thanhdat123', 'Da Nang', 'Nam', 'Nguyen', 'Thanh Dat', 'thanhdat@gmail.com', '0905789456', '2001-01-15'),
(8, 'daicao', 'daicao123', 'Da Nang', 'Nam', 'Truong', 'Dai Cao', 'daicao@gmail.com', '0905908678', '2001-05-10');


ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

ALTER TABLE `dongsanpham`
 ADD PRIMARY KEY (`id`);

ALTER TABLE `sanpham`
 ADD PRIMARY KEY (`id`);

ALTER TABLE `taikhoan`
 ADD PRIMARY KEY (`id`);

ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;

ALTER TABLE `dongsanpham`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;

ALTER TABLE `sanpham`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;

ALTER TABLE `taikhoan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;


select * from admin
select * from dongsanpham
select * from sanpham
select * from taikhoan

