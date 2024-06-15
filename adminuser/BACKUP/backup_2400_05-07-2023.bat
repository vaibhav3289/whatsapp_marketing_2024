

CREATE TABLE `admin` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `admin` VALUES("1","admin","admin");





CREATE TABLE `booking` (
  `b_id` int(5) NOT NULL AUTO_INCREMENT,
  `bill_no` int(5) NOT NULL,
  `party_name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `party_address` varchar(500) NOT NULL,
  `total` float NOT NULL,
  `deposite` float NOT NULL,
  `date` datetime NOT NULL,
  `time` time NOT NULL,
  `rdate` datetime NOT NULL,
  `other` text NOT NULL,
  `bdate` date NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `status` enum('P','D','C','CA','R') NOT NULL,
  `mobile2` varchar(255) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `booking` VALUES("1","1","RAMESHBHAI LUHAR","MEHSANA","MEHSANA","7999","999","2023-06-27 00:00:00","00:00:00","2023-06-29 00:00:00","","2023-06-26","9915253124","P","");
INSERT INTO `booking` VALUES("2","2","kalpesh Prajapati","sidhpur","sidhpur","7999","999","2023-06-29 00:00:00","00:00:00","2023-06-30 00:00:00","","2023-06-27","9912422160","C","");
INSERT INTO `booking` VALUES("3","3","Vijaybhai Shrimali","Deesa","Deesa","7998","998","2023-06-27 00:00:00","00:00:00","2023-06-28 00:00:00","","2023-06-26","9916022180","C","");
INSERT INTO `booking` VALUES("4","4","Nirajbhai Lahuaa","Mehsana","Giridhar","10597","5597","2023-06-28 00:00:00","00:00:00","2023-06-29 00:00:00","","2023-06-27","9916088789","C","");
INSERT INTO `booking` VALUES("5","5","Kiranbhai Rami","mehsana","Mehsana","8999","999","2023-07-03 00:00:00","00:00:00","2023-07-05 00:00:00","","2023-07-03","9916060349","D","");
INSERT INTO `booking` VALUES("6","6","kalpesh","MSH","mahesana","15897","7500","2023-07-04 00:00:00","00:00:00","2023-07-05 00:00:00","test17","2023-07-04","9173900050","P","");
INSERT INTO `booking` VALUES("7","7","mandip","MSH","mahesana","0","2500","2023-07-05 00:00:00","00:00:00","2023-07-06 00:00:00","okk","2023-07-05","6352792567","C","");





CREATE TABLE `booking_history` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `b_id` int(5) NOT NULL,
  `p_id` varchar(5) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `booking_history` VALUES("1","1","1","2023-06-27");
INSERT INTO `booking_history` VALUES("2","1","1","2023-06-28");
INSERT INTO `booking_history` VALUES("3","1","1","2023-06-29");
INSERT INTO `booking_history` VALUES("4","1","3","2023-06-27");
INSERT INTO `booking_history` VALUES("5","1","3","2023-06-28");
INSERT INTO `booking_history` VALUES("6","1","3","2023-06-29");
INSERT INTO `booking_history` VALUES("24","5","2","2023-07-03");
INSERT INTO `booking_history` VALUES("23","5","1","2023-07-05");
INSERT INTO `booking_history` VALUES("22","5","1","2023-07-04");
INSERT INTO `booking_history` VALUES("21","5","1","2023-07-03");
INSERT INTO `booking_history` VALUES("27","6","3","2023-07-04");
INSERT INTO `booking_history` VALUES("26","5","2","2023-07-05");
INSERT INTO `booking_history` VALUES("25","5","2","2023-07-04");
INSERT INTO `booking_history` VALUES("32","6","7","2023-07-05");
INSERT INTO `booking_history` VALUES("31","6","7","2023-07-04");
INSERT INTO `booking_history` VALUES("30","6","6","2023-07-05");
INSERT INTO `booking_history` VALUES("29","6","6","2023-07-04");
INSERT INTO `booking_history` VALUES("28","6","3","2023-07-05");





CREATE TABLE `border` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `b_id` int(5) NOT NULL,
  `p_id` int(5) NOT NULL,
  `rate` float NOT NULL,
  `sdate` datetime NOT NULL,
  `ldate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `border` VALUES("1","1","1","4000","2023-06-27 00:00:00","2023-06-29 00:00:00");
INSERT INTO `border` VALUES("2","1","3","3999","2023-06-27 00:00:00","2023-06-29 00:00:00");
INSERT INTO `border` VALUES("3","2","1","4000","2023-06-29 00:00:00","2023-06-30 00:00:00");
INSERT INTO `border` VALUES("4","2","3","3999","2023-06-29 00:00:00","2023-06-30 00:00:00");
INSERT INTO `border` VALUES("5","3","2","4999","2023-06-27 00:00:00","2023-06-28 00:00:00");
INSERT INTO `border` VALUES("6","3","4","2999","2023-06-27 00:00:00","2023-06-28 00:00:00");
INSERT INTO `border` VALUES("7","4","2","4999","2023-06-28 00:00:00","2023-06-29 00:00:00");
INSERT INTO `border` VALUES("8","4","4","2999","2023-06-28 00:00:00","2023-06-29 00:00:00");
INSERT INTO `border` VALUES("9","4","5","2599","2023-06-28 00:00:00","2023-06-29 00:00:00");
INSERT INTO `border` VALUES("10","5","1","4000","2023-07-03 00:00:00","2023-07-05 00:00:00");
INSERT INTO `border` VALUES("11","5","2","4999","2023-07-03 00:00:00","2023-07-05 00:00:00");
INSERT INTO `border` VALUES("12","6","3","3999","2023-07-04 00:00:00","2023-07-05 00:00:00");
INSERT INTO `border` VALUES("13","6","6","2899","2023-07-04 00:00:00","2023-07-05 00:00:00");
INSERT INTO `border` VALUES("14","6","7","8999","2023-07-04 00:00:00","2023-07-05 00:00:00");
INSERT INTO `border` VALUES("19","7","4","2999","2023-07-05 00:00:00","2023-07-06 00:00:00");
INSERT INTO `border` VALUES("20","7","5","2599","2023-07-05 00:00:00","2023-07-06 00:00:00");





CREATE TABLE `category` (
  `c_id` int(3) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `category` VALUES("1","GENERAL");
INSERT INTO `category` VALUES("2","Sherwani");
INSERT INTO `category` VALUES("4","shuit");





CREATE TABLE `info_con` (
  `val` varchar(255) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `shop_address` varchar(500) NOT NULL,
  `shop_mobile` varchar(255) NOT NULL,
  `shop_logo` varchar(255) NOT NULL,
  `inst_date` datetime NOT NULL,
  `number` int(3) NOT NULL,
  `key` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;






CREATE TABLE `payment_history` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `b_id` int(5) NOT NULL,
  `status` varchar(255) NOT NULL,
  `rs` float NOT NULL,
  `date` date NOT NULL,
  `credit_debit` enum('1','0') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `payment_history` VALUES("1","1","P","999","2023-06-26","1");
INSERT INTO `payment_history` VALUES("2","2","P","999","2023-06-27","1");
INSERT INTO `payment_history` VALUES("3","3","P","998","2023-06-26","1");
INSERT INTO `payment_history` VALUES("4","4","P","5597","2023-06-27","1");
INSERT INTO `payment_history` VALUES("5","4","D","7500","2023-06-30","1");
INSERT INTO `payment_history` VALUES("6","4","C","-2500","2023-06-30","0");
INSERT INTO `payment_history` VALUES("7","3","D","8500","2023-06-30","1");
INSERT INTO `payment_history` VALUES("8","3","C","-1500","2023-06-30","0");
INSERT INTO `payment_history` VALUES("9","2","D","9500","2023-06-30","1");
INSERT INTO `payment_history` VALUES("10","2","C","-2500","2023-06-30","0");
INSERT INTO `payment_history` VALUES("11","5","P","999","2023-07-03","1");
INSERT INTO `payment_history` VALUES("12","5","P","999","2023-07-03","1");
INSERT INTO `payment_history` VALUES("13","5","D","8000","2023-07-03","1");
INSERT INTO `payment_history` VALUES("14","6","P","7500","2023-07-04","1");
INSERT INTO `payment_history` VALUES("15","6","P","7500","2023-07-04","1");
INSERT INTO `payment_history` VALUES("16","7","P","2500","2023-07-05","1");
INSERT INTO `payment_history` VALUES("17","7","P","2500","2023-07-05","1");
INSERT INTO `payment_history` VALUES("18","7","D","3098","2023-07-05","1");
INSERT INTO `payment_history` VALUES("19","7","C","0","2023-07-05","1");





CREATE TABLE `product` (
  `p_id` int(3) NOT NULL AUTO_INCREMENT,
  `c_id` int(3) NOT NULL,
  `s_id` int(3) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_specification` varchar(255) NOT NULL,
  `p_rate` varchar(255) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `product` VALUES("1","2","2","Black Self Embroidered Kurta Pajama","1_2400.jpg","","4000");
INSERT INTO `product` VALUES("2","2","2","Bottle Green Chikankari Kurta","2_2400.jpg","","4999");
INSERT INTO `product` VALUES("3","2","2","Light Pink Jacquard Kurta Set","3_2400.jpg","","3999");
INSERT INTO `product` VALUES("4","2","2","Merlot Red Jacquard Kurta Set","4_2400.jpg","","2999");
INSERT INTO `product` VALUES("5","2","2","Purple Jacquard Kurta Set","5_2400.jpg","","2599");
INSERT INTO `product` VALUES("6","2","2","Sapphire Blue Jacquard Kurta Set","6_2400.jpg","","2899");
INSERT INTO `product` VALUES("7","2","3","Black Draped Kurta Jacket Set","7_2400.jpg","","8999");
INSERT INTO `product` VALUES("8","2","3","Denim-Blue-Festive-Kurta-Jacket-With-White-Pajama","8_2400.jpg","","6999");
INSERT INTO `product` VALUES("9","2","3","Lavish Cream Kurta Jacket Set","9_2400.jpg","","9999");
INSERT INTO `product` VALUES("10","2","3","Moss Green Printed Kurta Jacket Set","10_2400.jpg","","9999");
INSERT INTO `product` VALUES("11","2","3","Multicolored Jacket With Lime Green Kurta Set","11_2400.jpg","","7999");
INSERT INTO `product` VALUES("12","2","3","Paisley Blue Kurta Jacket Set","12_2400.jpg","","7999");
INSERT INTO `product` VALUES("13","2","3","Powder Blue Self Design Kurta Jacket Set","13_2400.jpg","","7999");
INSERT INTO `product` VALUES("14","2","3","White Floral Print Kurta Jacket Set","14_2400.jpg","","7999");
INSERT INTO `product` VALUES("15","2","4","Biscuit Kurta With Designed Collar","15_2400.jpg","","3999");
INSERT INTO `product` VALUES("16","2","4","Black Side Open Floral Print Kurta","16_2400.jpg","","2499");
INSERT INTO `product` VALUES("17","2","4","Dark Blue Wave Print Kurta","17_2400.jpg","","1999");
INSERT INTO `product` VALUES("18","2","4","Floral Kurta In Maroon & Black","18_2400.jpg","","1599");
INSERT INTO `product` VALUES("19","2","4","Minimalist Blue Cotton Blend Kurta","19_2400.jpg","","1999");
INSERT INTO `product` VALUES("20","2","4","Summer Essential White Kurta","20_2400.jpg","","1999");
INSERT INTO `product` VALUES("21","2","4","White Booti Print Short Kurta","21_2400.jpg","","1599");
INSERT INTO `product` VALUES("22","2","4","Wine Self Design Kurta","22_2400.jpg","","2999");





CREATE TABLE `profile` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `admin_id` int(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `c_address` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `profile` VALUES("1","1","Shree Hari","Mehsana","9915222124","shreehari@gmail.com");





CREATE TABLE `specification` (
  `s_id` int(3) NOT NULL AUTO_INCREMENT,
  `c_id` int(3) NOT NULL,
  `specification` varchar(255) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `specification` VALUES("1","1","GENERAL");
INSERT INTO `specification` VALUES("2","2","Kurta Pajama");
INSERT INTO `specification` VALUES("3","2","Kurta Jacket Set");
INSERT INTO `specification` VALUES("4","2","Kurta");
INSERT INTO `specification` VALUES("5","2","Nehru Jacket");
INSERT INTO `specification` VALUES("6","4","Men-suit");



