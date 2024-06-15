

CREATE TABLE `admin` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `admin` VALUES("1","admin","admin");





CREATE TABLE `booking` (
  `b_id` int(5) NOT NULL AUTO_INCREMENT,
  `bill_no` int(5) NOT NULL,
  `party_name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `party_address` varchar(500) NOT NULL,
  `total` float NOT NULL,
  `deposite` float NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `rdate` date NOT NULL,
  `other` text NOT NULL,
  `bdate` date NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `status` enum('P','D','C','CA','R') NOT NULL,
  `mobile2` varchar(255) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO `booking` VALUES("1","1","test17","msh","mahesana","8500","500","2023-06-20","00:00:00","2023-06-21","okk","2023-06-19","6352792567","C","9725674557");
INSERT INTO `booking` VALUES("2","2","kalpesh","siddhpur","mahesana","11500","1500","2023-06-21","00:00:00","2023-06-22","test123","2023-06-19","6389752416","C","9754654564");
INSERT INTO `booking` VALUES("3","3","yash","Patan","siddhpur","13500","4500","2023-06-21","00:00:00","2023-06-22","test17","2023-06-19","6356449645","C","9724565645");
INSERT INTO `booking` VALUES("4","4","test17","msn","mahesana","0","500","2023-06-23","00:00:00","2023-06-24","test23","2023-06-19","9745452452","C","6335675675");
INSERT INTO `booking` VALUES("5","5","test name","msn","msn","0","500","2023-06-21","00:00:00","2023-06-22","test","2023-06-20","9825742322","P","");
INSERT INTO `booking` VALUES("6","6","test17","MSH","mahesana","11699","45000","2023-06-22","00:00:00","2023-06-23","test2","2023-06-21","6354278756","P","");
INSERT INTO `booking` VALUES("7","7","kalpesh","PTN","mahesana","29500","9500","2023-06-17","00:00:00","2023-06-20","okk","2023-06-17","9787454545","D","");
INSERT INTO `booking` VALUES("8","8","harun","msh","mehasana","8699","5000","2023-06-29","00:00:00","2023-06-30","test","2023-06-22","6345245757","C","");
INSERT INTO `booking` VALUES("9","9","dev","MSH","visnagar","24499","8500","2023-06-22","00:00:00","2023-06-23","test17","2023-06-22","6356877789","C","");
INSERT INTO `booking` VALUES("10","10","mehul","MSH","mahesana","15999","7500","2023-06-27","00:00:00","2023-06-28","test-chk","2023-06-22","9756454564","C","");
INSERT INTO `booking` VALUES("11","11","mandip","MSH","mahesana","0","5100","2023-06-23","00:00:00","2023-06-24","okk123","2023-06-23","9173900050","P","");
INSERT INTO `booking` VALUES("12","12","kalpesh","MSH","mahesana","13049","4400","2023-07-04","00:00:00","2023-07-05","test-chk","2023-07-04","9173900050","P","");
INSERT INTO `booking` VALUES("13","13","mandip","MSH","mahesana","0","35000","2023-07-05","00:00:00","2023-07-06","okk","2023-07-05","6352792567","C","");
INSERT INTO `booking` VALUES("14","14","kalpesh","msh","mahesana","18549","15500","2023-07-07","00:00:00","2023-07-08","test2","2023-07-06","6635575857","D","6533575757");
INSERT INTO `booking` VALUES("15","15","kalpesh p","msn","mahesana","199","5000","2023-07-07","00:00:00","2023-07-08","","2023-07-06","6357457857","P","9787575424");





CREATE TABLE `booking_history` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `b_id` int(5) NOT NULL,
  `p_id` varchar(5) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=109 DEFAULT CHARSET=latin1;

INSERT INTO `booking_history` VALUES("16","6","2","2023-06-23");
INSERT INTO `booking_history` VALUES("15","6","2","2023-06-22");
INSERT INTO `booking_history` VALUES("17","6","3","2023-06-22");
INSERT INTO `booking_history` VALUES("103","14","3","2023-07-07");
INSERT INTO `booking_history` VALUES("102","14","1","2023-07-08");
INSERT INTO `booking_history` VALUES("100","5","1","2023-06-22");
INSERT INTO `booking_history` VALUES("99","5","1","2023-06-21");
INSERT INTO `booking_history` VALUES("101","14","1","2023-07-07");
INSERT INTO `booking_history` VALUES("18","6","3","2023-06-23");
INSERT INTO `booking_history` VALUES("19","7","5","2023-06-22");
INSERT INTO `booking_history` VALUES("20","7","5","2023-06-23");
INSERT INTO `booking_history` VALUES("21","7","6","2023-06-22");
INSERT INTO `booking_history` VALUES("22","7","6","2023-06-23");
INSERT INTO `booking_history` VALUES("108","15","3","2023-07-08");
INSERT INTO `booking_history` VALUES("107","15","3","2023-07-07");
INSERT INTO `booking_history` VALUES("106","14","5","2023-07-08");
INSERT INTO `booking_history` VALUES("105","14","5","2023-07-07");
INSERT INTO `booking_history` VALUES("104","14","3","2023-07-08");
INSERT INTO `booking_history` VALUES("36","11","4","2023-06-24");
INSERT INTO `booking_history` VALUES("35","11","4","2023-06-23");
INSERT INTO `booking_history` VALUES("37","12","1","2023-07-04");
INSERT INTO `booking_history` VALUES("38","12","1","2023-07-05");
INSERT INTO `booking_history` VALUES("39","12","3","2023-07-04");
INSERT INTO `booking_history` VALUES("40","12","3","2023-07-05");
INSERT INTO `booking_history` VALUES("41","12","6","2023-07-04");
INSERT INTO `booking_history` VALUES("42","12","6","2023-07-05");





CREATE TABLE `border` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `b_id` int(5) NOT NULL,
  `p_id` int(5) NOT NULL,
  `rate` float NOT NULL,
  `sdate` datetime NOT NULL,
  `ldate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

INSERT INTO `border` VALUES("1","1","1","8500","2023-06-20 00:00:00","2023-06-21 00:00:00");
INSERT INTO `border` VALUES("2","2","1","11500","2023-06-21 00:00:00","2023-06-22 00:00:00");
INSERT INTO `border` VALUES("3","3","1","13500","2023-06-21 00:00:00","2023-06-22 00:00:00");
INSERT INTO `border` VALUES("6","4","1","8500","2023-06-23 00:00:00","2023-06-24 00:00:00");
INSERT INTO `border` VALUES("7","4","2","11500","2023-06-23 00:00:00","2023-06-24 00:00:00");
INSERT INTO `border` VALUES("8","6","2","11500","2023-06-22 00:00:00","2023-06-23 00:00:00");
INSERT INTO `border` VALUES("9","6","3","199","2023-06-22 00:00:00","2023-06-23 00:00:00");
INSERT INTO `border` VALUES("10","7","5","17500","2023-06-22 00:00:00","2023-06-23 00:00:00");
INSERT INTO `border` VALUES("11","7","6","12000","2023-06-22 00:00:00","2023-06-23 00:00:00");
INSERT INTO `border` VALUES("12","8","1","8500","2023-06-29 00:00:00","2023-06-30 00:00:00");
INSERT INTO `border` VALUES("13","8","3","199","2023-06-29 00:00:00","2023-06-30 00:00:00");
INSERT INTO `border` VALUES("14","9","1","8500","2023-06-22 00:00:00","2023-06-23 00:00:00");
INSERT INTO `border` VALUES("15","9","4","15999","2023-06-22 00:00:00","2023-06-23 00:00:00");
INSERT INTO `border` VALUES("16","10","4","15999","2023-06-27 00:00:00","2023-06-28 00:00:00");
INSERT INTO `border` VALUES("18","11","4","15999","2023-06-23 00:00:00","2023-06-24 00:00:00");
INSERT INTO `border` VALUES("19","12","1","850","2023-07-04 00:00:00","2023-07-05 00:00:00");
INSERT INTO `border` VALUES("20","12","3","199","2023-07-04 00:00:00","2023-07-05 00:00:00");
INSERT INTO `border` VALUES("21","12","6","12000","2023-07-04 00:00:00","2023-07-05 00:00:00");
INSERT INTO `border` VALUES("46","13","2","1150","2023-07-05 00:00:00","2023-07-06 00:00:00");
INSERT INTO `border` VALUES("47","13","5","17500","2023-07-05 00:00:00","2023-07-06 00:00:00");
INSERT INTO `border` VALUES("48","13","4","15999","2023-07-05 00:00:00","2023-07-06 00:00:00");
INSERT INTO `border` VALUES("49","13","7","85500","2023-07-05 00:00:00","2023-07-06 00:00:00");
INSERT INTO `border` VALUES("50","5","1","8500","2023-06-21 00:00:00","2023-06-22 00:00:00");
INSERT INTO `border` VALUES("51","14","1","850","2023-07-07 00:00:00","2023-07-08 00:00:00");
INSERT INTO `border` VALUES("52","14","3","199","2023-07-07 00:00:00","2023-07-08 00:00:00");
INSERT INTO `border` VALUES("53","14","5","17500","2023-07-07 00:00:00","2023-07-08 00:00:00");
INSERT INTO `border` VALUES("54","15","3","199","2023-07-07 00:00:00","2023-07-08 00:00:00");





CREATE TABLE `category` (
  `c_id` int(3) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `category` VALUES("1","GENERAL");
INSERT INTO `category` VALUES("2","okk");
INSERT INTO `category` VALUES("3","test123");





CREATE TABLE `favorite_url` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `fav_icon` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid` (`uid`,`url`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;






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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `payment_history` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `b_id` int(5) NOT NULL,
  `status` varchar(255) NOT NULL,
  `rs` float NOT NULL,
  `date` date NOT NULL,
  `credit_debit` enum('1','0') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

INSERT INTO `payment_history` VALUES("1","1","P","500","2023-06-19","1");
INSERT INTO `payment_history` VALUES("2","2","P","1500","2023-04-19","1");
INSERT INTO `payment_history` VALUES("3","2","D","9500","2023-06-19","1");
INSERT INTO `payment_history` VALUES("4","2","C","0","2023-06-19","1");
INSERT INTO `payment_history` VALUES("5","3","P","4500","2023-04-19","1");
INSERT INTO `payment_history` VALUES("6","3","D","450","2023-06-19","1");
INSERT INTO `payment_history` VALUES("7","1","D","9000","2023-06-19","1");
INSERT INTO `payment_history` VALUES("8","4","P","500","2023-04-19","1");
INSERT INTO `payment_history` VALUES("9","5","P","500","2023-06-20","1");
INSERT INTO `payment_history` VALUES("10","4","D","19500","2023-06-21","1");
INSERT INTO `payment_history` VALUES("11","3","C","8550","2023-06-21","1");
INSERT INTO `payment_history` VALUES("12","1","C","-1000","2023-06-21","0");
INSERT INTO `payment_history` VALUES("13","6","P","45000","2023-06-21","1");
INSERT INTO `payment_history` VALUES("14","7","P","9500","2023-06-21","1");
INSERT INTO `payment_history` VALUES("15","8","P","5000","2023-06-22","1");
INSERT INTO `payment_history` VALUES("16","8","D","1500","2023-04-22","1");
INSERT INTO `payment_history` VALUES("17","9","P","8500","2023-06-22","1");
INSERT INTO `payment_history` VALUES("18","10","P","7500","2023-06-22","1");
INSERT INTO `payment_history` VALUES("19","11","P","5100","2023-06-23","1");
INSERT INTO `payment_history` VALUES("20","10","D","5000","2023-06-27","1");
INSERT INTO `payment_history` VALUES("21","8","C","2199","2023-06-27","1");
INSERT INTO `payment_history` VALUES("22","12","P","4400","2023-07-04","1");
INSERT INTO `payment_history` VALUES("23","12","P","4400","2023-07-04","1");
INSERT INTO `payment_history` VALUES("24","13","P","35000","2023-07-05","1");
INSERT INTO `payment_history` VALUES("25","13","P","35000","2023-07-05","1");
INSERT INTO `payment_history` VALUES("26","0","D","20500","2023-07-05","1");
INSERT INTO `payment_history` VALUES("27","0","D","20500","2023-07-05","1");
INSERT INTO `payment_history` VALUES("28","0","D","20500","2023-07-05","1");
INSERT INTO `payment_history` VALUES("29","0","D","20500","2023-07-05","1");
INSERT INTO `payment_history` VALUES("30","13","D","20500","2023-07-05","1");
INSERT INTO `payment_history` VALUES("31","13","C","64649","2023-07-05","1");
INSERT INTO `payment_history` VALUES("32","9","D","8500","2023-07-05","1");
INSERT INTO `payment_history` VALUES("33","9","C","7499","2023-07-05","1");
INSERT INTO `payment_history` VALUES("34","10","C","3499","2023-07-05","1");
INSERT INTO `payment_history` VALUES("35","4","C","0","2023-07-05","1");
INSERT INTO `payment_history` VALUES("36","14","P","15500","2023-07-06","1");
INSERT INTO `payment_history` VALUES("37","15","P","5000","2023-07-06","1");
INSERT INTO `payment_history` VALUES("38","14","D","1500","2023-07-06","1");





CREATE TABLE `pre_sms` (
  `id` int(11) NOT NULL,
  `custome` varchar(255) NOT NULL,
  `sec` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `pre_sms` VALUES("1","Your order *[B] of *Sherwani is Booked successfully  & will reach you shortly ?
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `product` VALUES("1","1","1","mgdhsgfokkk","","glamorous","850");
INSERT INTO `product` VALUES("2","2","2","okkkk","","WHITE_2k23","1150");
INSERT INTO `product` VALUES("3","1","1","t-shirt","","glamorous","199");
INSERT INTO `product` VALUES("4","1","1","demo","","glamorous-biscuit-color-sherwani","15999");
INSERT INTO `product` VALUES("5","1","1","Men-shuit","","M","17500");
INSERT INTO `product` VALUES("6","1","1","manyavar23","","color-sherwani","12000");
INSERT INTO `product` VALUES("7","1","1","manyavar20256","","glamorous","85500");





CREATE TABLE `profile` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `admin_id` int(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `c_address` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `profile` VALUES("1","1","GREEN","mahesana","6353792525","green123@gmail.com");





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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

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
INSERT INTO `sms` VALUES("16","Your order *10045123 of *Sherwani is Booked successfully  & will reach you shortly ?
Thanks Kalpesh

Thanks for shopping with us! ?","8905686440","N","0000-00-00 00:00:00","2023-07-05 10:10:08","CSV","pending","0000-00-00 00:00:00","pending");
INSERT INTO `sms` VALUES("17","Your order *10045123 of *Sherwani is Booked successfully  & will reach you shortly ?
Thanks Mandip

Thanks for shopping with us! ?","6352792567","N","0000-00-00 00:00:00","2023-07-05 10:11:04","CSV","pending","0000-00-00 00:00:00","pending");
INSERT INTO `sms` VALUES("18","Your order *10045123 of *Sherwani is Booked successfully  & will reach you shortly ?
Thanks Mandip

Thanks for shopping with us! ?","6352792567","N","0000-00-00 00:00:00","2023-07-05 10:13:04","CSV","pending","0000-00-00 00:00:00","pending");
INSERT INTO `sms` VALUES("19","Your order *10045123 of *Sherwani is Booked successfully  & will reach you shortly ?
Thanks Mandip

Thanks for shopping with us! ?","6352792567","N","0000-00-00 00:00:00","2023-07-05 10:13:38","CSV","pending","0000-00-00 00:00:00","pending");
INSERT INTO `sms` VALUES("20","","6352792567","N","0000-00-00 00:00:00","2023-07-06 16:54:50","CUSTOME","pending","0000-00-00 00:00:00","pending");





CREATE TABLE `sms_setting` (
  `sms_id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `wp_url` varchar(255) NOT NULL,
  `wp_instance` varchar(255) NOT NULL,
  `wp_token` varchar(255) NOT NULL,
  PRIMARY KEY (`sms_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `sms_setting` VALUES("1","panel.msgclub.net","https://app.gctsoft.in/api/send?number=[number]&type=text&message=[msg]&instance_id=[inst]&access_token=[token]","","5902712cb40886b7c1d56426380df484fe4e515361d6cee6fb52ab05456faa73");





CREATE TABLE `specification` (
  `s_id` int(3) NOT NULL AUTO_INCREMENT,
  `c_id` int(3) NOT NULL,
  `specification` varchar(255) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `specification` VALUES("1","1","GENERAL");
INSERT INTO `specification` VALUES("2","2","test");
INSERT INTO `specification` VALUES("3","3","demo");





CREATE TABLE `token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` text NOT NULL,
  `imei` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




