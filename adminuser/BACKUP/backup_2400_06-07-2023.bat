

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `booking` VALUES("1","1","RAMESHBHAI LUHAR","MEHSANA","MEHSANA","7999","999","2023-06-27 00:00:00","00:00:00","2023-06-29 00:00:00","","2023-06-26","9915253124","P","");
INSERT INTO `booking` VALUES("2","2","kalpesh Prajapati","sidhpur","sidhpur","7999","999","2023-06-29 00:00:00","00:00:00","2023-06-30 00:00:00","","2023-06-27","9912422160","C","");
INSERT INTO `booking` VALUES("3","3","Vijaybhai Shrimali","Deesa","Deesa","7998","998","2023-06-27 00:00:00","00:00:00","2023-06-28 00:00:00","","2023-06-26","9916022180","C","");
INSERT INTO `booking` VALUES("4","4","Nirajbhai Lahuaa","Mehsana","Giridhar","10597","5597","2023-06-28 00:00:00","00:00:00","2023-06-29 00:00:00","","2023-06-27","9916088789","C","");
INSERT INTO `booking` VALUES("5","5","Kiranbhai Rami","mehsana","Mehsana","8999","999","2023-07-03 00:00:00","00:00:00","2023-07-05 00:00:00","","2023-07-03","9916060349","D","");
INSERT INTO `booking` VALUES("6","6","kalpesh","MSH","mahesana","15897","7500","2023-07-04 00:00:00","00:00:00","2023-07-05 00:00:00","test17","2023-07-04","9173900050","P","");
INSERT INTO `booking` VALUES("7","7","mandip","MSH","mahesana","0","2500","2023-07-05 00:00:00","00:00:00","2023-07-06 00:00:00","okk","2023-07-05","6352792567","C","");
INSERT INTO `booking` VALUES("8","8","Mandip","MSH","mahesana","10898","3500","2023-07-06 00:00:00","00:00:00","2023-07-07 00:00:00","okk123","2023-07-05","6352792567","D","");
INSERT INTO `booking` VALUES("9","9","Ramjibhai Rabari","Mehsana","Mehsana","4999","1999","2023-07-06 00:00:00","00:00:00","2023-07-07 00:00:00","","2023-07-06","9926099999","D","");
INSERT INTO `booking` VALUES("10","10","Ramchodbhai Luhar ","sidhpur","sidhpur","6998","1998","2023-07-07 00:00:00","00:00:00","2023-07-08 00:00:00","","2023-07-06","9925266666","D","");
INSERT INTO `booking` VALUES("11","11","Kanjibhai Patel ","ahemdabad","ahemdabad","8999","1999","2023-07-07 00:00:00","00:00:00","2023-07-08 00:00:00","","2023-07-06","9916060366","C","");
INSERT INTO `booking` VALUES("12","12","Nareshbhai Rami","Mehsana","Mehsana","8999","1999","2023-07-07 00:00:00","00:00:00","2023-07-08 00:00:00","","2023-07-06","9925266585","P","");
INSERT INTO `booking` VALUES("13","13","Ojashbhai Tendulkar","Mehsana","Mehsana","11598","1598","2023-07-07 00:00:00","00:00:00","2023-07-08 00:00:00","","2023-07-06","9912545555","P","");
INSERT INTO `booking` VALUES("14","14","Jayeshbhai Mehata","Patan","Patan","16998","6998","2023-07-08 00:00:00","00:00:00","2023-07-09 00:00:00","","2023-07-06","9926033333","P","");
INSERT INTO `booking` VALUES("15","15","Ramanuj Nirjha","Patan","Patan","17998","7998","2023-07-08 00:00:00","00:00:00","2023-07-09 00:00:00","","2023-07-06","9922266548","P","");





CREATE TABLE `booking_history` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `b_id` int(5) NOT NULL,
  `p_id` varchar(5) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
INSERT INTO `booking_history` VALUES("48","8","3","2023-07-07");
INSERT INTO `booking_history` VALUES("47","8","3","2023-07-06");
INSERT INTO `booking_history` VALUES("46","8","1","2023-07-07");
INSERT INTO `booking_history` VALUES("45","8","1","2023-07-06");
INSERT INTO `booking_history` VALUES("49","8","6","2023-07-06");
INSERT INTO `booking_history` VALUES("50","8","6","2023-07-07");
INSERT INTO `booking_history` VALUES("51","9","2","2023-07-06");
INSERT INTO `booking_history` VALUES("52","9","2","2023-07-07");
INSERT INTO `booking_history` VALUES("53","10","4","2023-07-07");
INSERT INTO `booking_history` VALUES("54","10","4","2023-07-08");
INSERT INTO `booking_history` VALUES("55","10","3","2023-07-07");
INSERT INTO `booking_history` VALUES("56","10","3","2023-07-08");
INSERT INTO `booking_history` VALUES("76","15","11","2023-07-09");
INSERT INTO `booking_history` VALUES("75","15","11","2023-07-08");
INSERT INTO `booking_history` VALUES("74","15","10","2023-07-09");
INSERT INTO `booking_history` VALUES("73","15","10","2023-07-08");
INSERT INTO `booking_history` VALUES("61","12","1","2023-07-07");
INSERT INTO `booking_history` VALUES("62","12","1","2023-07-08");
INSERT INTO `booking_history` VALUES("63","12","2","2023-07-07");
INSERT INTO `booking_history` VALUES("64","12","2","2023-07-08");
INSERT INTO `booking_history` VALUES("65","13","5","2023-07-07");
INSERT INTO `booking_history` VALUES("66","13","5","2023-07-08");
INSERT INTO `booking_history` VALUES("67","13","7","2023-07-07");
INSERT INTO `booking_history` VALUES("68","13","7","2023-07-08");
INSERT INTO `booking_history` VALUES("69","14","8","2023-07-08");
INSERT INTO `booking_history` VALUES("70","14","8","2023-07-09");
INSERT INTO `booking_history` VALUES("71","14","9","2023-07-08");
INSERT INTO `booking_history` VALUES("72","14","9","2023-07-09");





CREATE TABLE `border` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `b_id` int(5) NOT NULL,
  `p_id` int(5) NOT NULL,
  `rate` float NOT NULL,
  `sdate` datetime NOT NULL,
  `ldate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
INSERT INTO `border` VALUES("21","8","1","4000","2023-07-06 00:00:00","2023-07-07 00:00:00");
INSERT INTO `border` VALUES("22","8","3","3999","2023-07-06 00:00:00","2023-07-07 00:00:00");
INSERT INTO `border` VALUES("23","8","6","2899","2023-07-06 00:00:00","2023-07-07 00:00:00");
INSERT INTO `border` VALUES("24","9","2","4999","2023-07-06 00:00:00","2023-07-07 00:00:00");
INSERT INTO `border` VALUES("25","10","4","2999","2023-07-07 00:00:00","2023-07-08 00:00:00");
INSERT INTO `border` VALUES("26","10","3","3999","2023-07-07 00:00:00","2023-07-08 00:00:00");
INSERT INTO `border` VALUES("27","11","1","4000","2023-07-07 00:00:00","2023-07-08 00:00:00");
INSERT INTO `border` VALUES("28","11","2","4999","2023-07-07 00:00:00","2023-07-08 00:00:00");
INSERT INTO `border` VALUES("29","12","1","4000","2023-07-07 00:00:00","2023-07-08 00:00:00");
INSERT INTO `border` VALUES("30","12","2","4999","2023-07-07 00:00:00","2023-07-08 00:00:00");
INSERT INTO `border` VALUES("31","13","5","2599","2023-07-07 00:00:00","2023-07-08 00:00:00");
INSERT INTO `border` VALUES("32","13","7","8999","2023-07-07 00:00:00","2023-07-08 00:00:00");
INSERT INTO `border` VALUES("33","14","8","6999","2023-07-08 00:00:00","2023-07-09 00:00:00");
INSERT INTO `border` VALUES("34","14","9","9999","2023-07-08 00:00:00","2023-07-09 00:00:00");
INSERT INTO `border` VALUES("35","15","10","9999","2023-07-08 00:00:00","2023-07-09 00:00:00");
INSERT INTO `border` VALUES("36","15","11","7999","2023-07-08 00:00:00","2023-07-09 00:00:00");





CREATE TABLE `category` (
  `c_id` int(3) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `category` VALUES("1","GENERAL");
INSERT INTO `category` VALUES("2","Sherwani");
INSERT INTO `category` VALUES("4","shuit");
INSERT INTO `category` VALUES("5","Nehru Jacket");





CREATE TABLE `favorite_url` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `fav_icon` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid` (`uid`,`url`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;






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
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
INSERT INTO `payment_history` VALUES("20","8","P","3500","2023-07-05","1");
INSERT INTO `payment_history` VALUES("21","8","P","3500","2023-07-05","1");
INSERT INTO `payment_history` VALUES("22","9","P","1999","2023-07-06","1");
INSERT INTO `payment_history` VALUES("23","9","P","1999","2023-07-06","1");
INSERT INTO `payment_history` VALUES("24","10","P","1998","2023-07-06","1");
INSERT INTO `payment_history` VALUES("25","10","P","1998","2023-07-06","1");
INSERT INTO `payment_history` VALUES("26","11","P","1999","2023-07-06","1");
INSERT INTO `payment_history` VALUES("27","11","P","1999","2023-07-06","1");
INSERT INTO `payment_history` VALUES("28","12","P","1999","2023-07-06","1");
INSERT INTO `payment_history` VALUES("29","12","P","1999","2023-07-06","1");
INSERT INTO `payment_history` VALUES("30","13","P","1598","2023-07-06","1");
INSERT INTO `payment_history` VALUES("31","13","P","1598","2023-07-06","1");
INSERT INTO `payment_history` VALUES("32","14","P","6998","2023-07-06","1");
INSERT INTO `payment_history` VALUES("33","14","P","6998","2023-07-06","1");
INSERT INTO `payment_history` VALUES("34","9","D","3000","2023-07-06","1");
INSERT INTO `payment_history` VALUES("35","8","D","7398","2023-07-06","1");
INSERT INTO `payment_history` VALUES("36","10","D","5000","2023-07-06","1");
INSERT INTO `payment_history` VALUES("37","11","D","0","2023-07-06","1");
INSERT INTO `payment_history` VALUES("38","11","C","0","2023-07-06","1");
INSERT INTO `payment_history` VALUES("39","15","P","7998","2023-07-06","1");
INSERT INTO `payment_history` VALUES("40","15","P","7998","2023-07-06","1");





CREATE TABLE `pre_sms` (
  `id` int(11) NOT NULL,
  `custome` varchar(255) NOT NULL,
  `sec` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `pre_sms` VALUES("1","Your order  *[B]* of Sherwani is Booked successfully  & will reach you shortly ?
Thanks [C]

Thanks for shopping with us! ?","0");





CREATE TABLE `product` (
  `p_id` int(3) NOT NULL AUTO_INCREMENT,
  `c_id` int(3) NOT NULL,
  `s_id` int(3) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_specification` varchar(255) NOT NULL,
  `p_rate` varchar(255) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
INSERT INTO `product` VALUES("23","5","7","Bold Brown Waist Coat","23_2400.jpg","","3999");
INSERT INTO `product` VALUES("24","5","7","Dark Blue Self Design Jacket","24_2400.jpg","","5959");
INSERT INTO `product` VALUES("25","5","7","Floral Embroidered Jacket","25_2400.jpg","","4999");
INSERT INTO `product` VALUES("26","5","7","Light Colored Floral Jacket","26_2400.jpg","","6500");
INSERT INTO `product` VALUES("27","5","7","Majestic Maroon Party Wear Jacket","27_2400.jpg","","4000");
INSERT INTO `product` VALUES("28","5","7","Navy Blue Floral Patterned Half Jacket","28_2400.jpg","","2999");
INSERT INTO `product` VALUES("29","5","7","Pink Self Embroidered Jacket","29_2400.jpg","","2900");
INSERT INTO `product` VALUES("30","5","7","Royal-Blue-Self-Print-Jacket","30_2400.jpg","","2000");
INSERT INTO `product` VALUES("31","5","7","Vibrant Blue Jacket","31_2400.jpg","","3299");





CREATE TABLE `profile` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `admin_id` int(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `c_address` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `profile` VALUES("1","1","Shiv Store","Mehsana","9915222124","shreehari@gmail.com");





CREATE TABLE `sms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sms` varchar(1000) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `status` enum('N','Y') NOT NULL,
  `senttime` datetime NOT NULL,
  `timestamp` datetime NOT NULL,
  `type` varchar(255) NOT NULL,
  `wp_status` enum('pending','done') NOT NULL,
  `wp_senttime` datetime NOT NULL,
  `sms_status` enum('pending','done') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `sms` VALUES("1","Your order *[Order No.] of *[Product name]* for *[Amount]* has been confirmed & will reach you shortly ?

Thanks for shopping with us! ?","6352792567","N","0000-00-00 00:00:00","2023-06-29 08:54:45","CSV","done","2023-06-29 15:34:16","done");
INSERT INTO `sms` VALUES("7","Good morning Kalpesh","8905686440","N","0000-00-00 00:00:00","2023-06-29 08:54:45","CSV","done","2023-06-29 15:34:17","done");
INSERT INTO `sms` VALUES("8","Good morning Mandip","6352792567","N","0000-00-00 00:00:00","2023-06-29 09:53:28","CSV","done","2023-06-29 15:34:18","done");
INSERT INTO `sms` VALUES("9","Good morning Kalpesh","8905686440","N","0000-00-00 00:00:00","2023-06-29 09:53:28","CSV","done","2023-06-29 15:34:19","done");
INSERT INTO `sms` VALUES("10","Your order *[A] of *Sherwani* for 550  has been confirmed & will reach you shortly ?

Thanks for shopping with us! ?","6352792567","N","0000-00-00 00:00:00","2023-06-29 10:13:53","CSV","done","2023-06-29 15:43:59","done");
INSERT INTO `sms` VALUES("11","Your order *[A] of *Sherwani* for 550  has been confirmed & will reach you shortly ?

Thanks for shopping with us! ?","8905686440","N","0000-00-00 00:00:00","2023-06-29 10:13:53","CSV","done","2023-06-29 15:44:00","done");
INSERT INTO `sms` VALUES("12","Your order *[A] of *Sherwani* for 550  has been confirmed & will reach you shortly ?

Thanks for shopping with us! ?","9825211673","N","0000-00-00 00:00:00","2023-06-29 10:13:53","CSV","done","2023-06-29 15:44:01","done");
INSERT INTO `sms` VALUES("13","Your order *10045123 of *Sherwani is Booked successfully  & will reach you shortly ?
Thanks Mandip

Thanks for shopping with us! ?","6352792567","N","0000-00-00 00:00:00","2023-06-29 10:18:07","CSV","done","2023-06-29 15:48:11","done");
INSERT INTO `sms` VALUES("14","Your order *10045123 of *Sherwani is Booked successfully  & will reach you shortly ?
Thanks Kalpesh

Thanks for shopping with us! ?","8905686440","N","0000-00-00 00:00:00","2023-06-29 10:18:07","CSV","done","2023-06-29 15:48:11","done");
INSERT INTO `sms` VALUES("15","Your order *10045123 of *Sherwani is Booked successfully  & will reach you shortly ?
Thanks Hiral

Thanks for shopping with us! ?","9825211673","N","0000-00-00 00:00:00","2023-06-29 10:18:07","CSV","done","2023-06-29 15:48:12","done");
INSERT INTO `sms` VALUES("16","Your order *Kalpesh  Prajapti of *Sherwani is Booked successfully  & will reach you shortly ?
Thanks 5900

Thanks for shopping with us! ?","8905686440","N","0000-00-00 00:00:00","2023-07-06 10:27:24","CSV","done","2023-07-06 15:57:46","done");
INSERT INTO `sms` VALUES("17","Your order *Yash Prajapati of *Sherwani is Booked successfully  & will reach you shortly ?
Thanks 5900

Thanks for shopping with us! ?","9512892544","N","0000-00-00 00:00:00","2023-07-06 10:27:24","CSV","done","2023-07-06 15:57:47","done");
INSERT INTO `sms` VALUES("18","Your order *Hiral Panchal of *Sherwani is Booked successfully  & will reach you shortly ?
Thanks 5900

Thanks for shopping with us! ?","9825211673","N","0000-00-00 00:00:00","2023-07-06 10:27:24","CSV","done","2023-07-06 15:57:48","done");
INSERT INTO `sms` VALUES("19","Your order *Kalpesh  Prajapti of *Sherwani is Booked successfully  & will reach you shortly ?
Thanks GREEN CIRCLE TECHNOLOGY

Thanks for shopping with us! ?","8905686440","N","0000-00-00 00:00:00","2023-07-06 10:29:54","CSV","done","2023-07-06 15:59:57","done");
INSERT INTO `sms` VALUES("20","Your order *Yash Prajapati of *Sherwani is Booked successfully  & will reach you shortly ?
Thanks GREEN CIRCLE TECHNOLOGY

Thanks for shopping with us! ?","9512892544","N","0000-00-00 00:00:00","2023-07-06 10:29:54","CSV","done","2023-07-06 15:59:57","done");
INSERT INTO `sms` VALUES("21","Your order *Hiral Panchal of *Sherwani is Booked successfully  & will reach you shortly ?
Thanks GREEN CIRCLE TECHNOLOGY

Thanks for shopping with us! ?","9825211673","N","0000-00-00 00:00:00","2023-07-06 10:29:54","CSV","done","2023-07-06 15:59:58","done");
INSERT INTO `sms` VALUES("22","Your order *Kalpesh  Prajapti *of Sherwani is Booked successfully  & will reach you shortly ?
Thanks GREEN CIRCLE TECHNOLOGY

Thanks for shopping with us! ?","8905686440","N","0000-00-00 00:00:00","2023-07-06 10:30:37","CSV","done","2023-07-06 16:01:05","done");
INSERT INTO `sms` VALUES("23","Your order *Yash Prajapati *of Sherwani is Booked successfully  & will reach you shortly ?
Thanks GREEN CIRCLE TECHNOLOGY

Thanks for shopping with us! ?","9512892544","N","0000-00-00 00:00:00","2023-07-06 10:30:37","CSV","done","2023-07-06 16:01:05","done");
INSERT INTO `sms` VALUES("24","Your order *Hiral Panchal *of Sherwani is Booked successfully  & will reach you shortly ?
Thanks GREEN CIRCLE TECHNOLOGY

Thanks for shopping with us! ?","9825211673","N","0000-00-00 00:00:00","2023-07-06 10:30:37","CSV","done","2023-07-06 16:01:06","done");
INSERT INTO `sms` VALUES("25","Your order *Kalpesh  Prajapti *of Sherwani is Booked successfully  & will reach you shortly ?
Thanks GREEN CIRCLE TECHNOLOGY

Thanks for shopping with us! ?","8905686440","N","0000-00-00 00:00:00","2023-07-06 10:30:47","CSV","done","2023-07-06 16:01:07","done");
INSERT INTO `sms` VALUES("26","Your order *Yash Prajapati *of Sherwani is Booked successfully  & will reach you shortly ?
Thanks GREEN CIRCLE TECHNOLOGY

Thanks for shopping with us! ?","9512892544","N","0000-00-00 00:00:00","2023-07-06 10:30:47","CSV","done","2023-07-06 16:01:07","done");
INSERT INTO `sms` VALUES("27","Your order *Hiral Panchal *of Sherwani is Booked successfully  & will reach you shortly ?
Thanks GREEN CIRCLE TECHNOLOGY

Thanks for shopping with us! ?","9825211673","N","0000-00-00 00:00:00","2023-07-06 10:30:47","CSV","done","2023-07-06 16:01:15","done");
INSERT INTO `sms` VALUES("28","Your order *Kalpesh  Prajapti*of Sherwani is Booked successfully  & will reach you shortly ?
Thanks GREEN CIRCLE TECHNOLOGY

Thanks for shopping with us! ?","8905686440","N","0000-00-00 00:00:00","2023-07-06 10:31:02","CSV","done","2023-07-06 16:01:16","done");
INSERT INTO `sms` VALUES("29","Your order *Yash Prajapati*of Sherwani is Booked successfully  & will reach you shortly ?
Thanks GREEN CIRCLE TECHNOLOGY

Thanks for shopping with us! ?","9512892544","N","0000-00-00 00:00:00","2023-07-06 10:31:02","CSV","done","2023-07-06 16:01:17","done");
INSERT INTO `sms` VALUES("30","Your order *Hiral Panchal*of Sherwani is Booked successfully  & will reach you shortly ?
Thanks GREEN CIRCLE TECHNOLOGY

Thanks for shopping with us! ?","9825211673","N","0000-00-00 00:00:00","2023-07-06 10:31:02","CSV","done","2023-07-06 16:01:17","done");
INSERT INTO `sms` VALUES("31","Your order  *Kalpesh  Prajapti* of Sherwani is Booked successfully  & will reach you shortly ?
Thanks GREEN CIRCLE TECHNOLOGY

Thanks for shopping with us! ?","8905686440","N","0000-00-00 00:00:00","2023-07-06 10:32:25","CSV","done","2023-07-06 16:02:27","done");
INSERT INTO `sms` VALUES("32","Your order  *Yash Prajapati* of Sherwani is Booked successfully  & will reach you shortly ?
Thanks GREEN CIRCLE TECHNOLOGY

Thanks for shopping with us! ?","9512892544","N","0000-00-00 00:00:00","2023-07-06 10:32:25","CSV","done","2023-07-06 16:02:28","done");
INSERT INTO `sms` VALUES("33","Your order  *Hiral Panchal* of Sherwani is Booked successfully  & will reach you shortly ?
Thanks GREEN CIRCLE TECHNOLOGY

Thanks for shopping with us! ?","9825211673","N","0000-00-00 00:00:00","2023-07-06 10:32:25","CSV","done","2023-07-06 16:02:29","done");





CREATE TABLE `sms_setting` (
  `sms_id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `wp_url` varchar(255) NOT NULL,
  `wp_instance` varchar(255) NOT NULL,
  `wp_token` varchar(255) NOT NULL,
  PRIMARY KEY (`sms_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `sms_setting` VALUES("1","panel.msgclub.net","https://app.gctsoft.in/api/send?number=[number]&type=text&message=[msg]&instance_id=[inst]&access_token=[token]","64A634B035EC5","6484694c6ba0b");





CREATE TABLE `specification` (
  `s_id` int(3) NOT NULL AUTO_INCREMENT,
  `c_id` int(3) NOT NULL,
  `specification` varchar(255) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `specification` VALUES("1","1","GENERAL");
INSERT INTO `specification` VALUES("2","2","Kurta Pajama");
INSERT INTO `specification` VALUES("3","2","Kurta Jacket Set");
INSERT INTO `specification` VALUES("4","2","Kurta");
INSERT INTO `specification` VALUES("5","2","Nehru Jacket");
INSERT INTO `specification` VALUES("6","4","Men-suit");
INSERT INTO `specification` VALUES("7","5","Nehru Jacket");





CREATE TABLE `token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` text NOT NULL,
  `imei` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;




