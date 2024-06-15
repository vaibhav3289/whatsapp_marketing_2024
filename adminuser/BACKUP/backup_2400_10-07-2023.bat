

CREATE TABLE `acc_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `bal_shit` enum('Y','N') NOT NULL,
  `pro_loss` enum('Y','N') NOT NULL,
  `both` enum('E','I','B') NOT NULL,
  `sr_no` int(11) NOT NULL,
  `guj_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `side` enum('Credit','Debit') NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `acc_category` VALUES("1","Cash","Y","N","B","8","
રોકડ હાથ પર","Debit");
INSERT INTO `acc_category` VALUES("2","Bank","Y","N","B","7","બેંક","Debit");
INSERT INTO `acc_category` VALUES("3","Capital","Y","N","B","1","મૂડી","Credit");
INSERT INTO `acc_category` VALUES("5","Fixed Assets","Y","N","B","1","
સ્થાવર મિલકતો","Debit");
INSERT INTO `acc_category` VALUES("6","Current Assets","Y","N","B","2","
ચાલુ મિલકતો","Debit");
INSERT INTO `acc_category` VALUES("7","Loan (Liabilities)","Y","N","B","2","
લોન -જવાબદારીઓ","Credit");
INSERT INTO `acc_category` VALUES("8","Indirect Exepence","N","Y","E","8","	 
પરોક્ષ ખર્ચ","Debit");
INSERT INTO `acc_category` VALUES("9","Salary","N","Y","E","9","પગાર","Debit");
INSERT INTO `acc_category` VALUES("10","Investment","Y","N","E","4","રોકાણ","Debit");
INSERT INTO `acc_category` VALUES("11","Indirect Income","N","Y","I","5","	
પરોક્ષ આવક","Credit");
INSERT INTO `acc_category` VALUES("14","General Expence","N","Y","E","14","	 
જનરલ ખર્ચ","Debit");
INSERT INTO `acc_category` VALUES("15","Advertisement Exp","N","Y","B","15","જાહેરાત ખર્ચ","Debit");
INSERT INTO `acc_category` VALUES("16","Advertisement Inc","N","Y","I","1","	
જાહેરાત ઇન્કમ","Credit");
INSERT INTO `acc_category` VALUES("18","Creditor","Y","N","B","4","
લેણદાર","Credit");
INSERT INTO `acc_category` VALUES("19","Debtors","Y","N","B","6","દેવાદારો","Debit");
INSERT INTO `acc_category` VALUES("20","Office Expence","N","Y","E","20","
ઓફિસ ખર્ચ","Debit");
INSERT INTO `acc_category` VALUES("21","Sales A/c","N","Y","B","2","વેચાણ ખાત","Credit");
INSERT INTO `acc_category` VALUES("22","Purchase A/c","N","Y","E","22","
ખરીદ ખાતું","Debit");
INSERT INTO `acc_category` VALUES("23","Bank Occ","Y","N","E","5","
બેંક ઓ.સી.સી","Credit");
INSERT INTO `acc_category` VALUES("24","Bank Odd","Y","N","E","6","
બેંક ઓ.ડી.ડી","Credit");
INSERT INTO `acc_category` VALUES("25","Current Liabilities","Y","N","B","3","
ચાલુ જવાબદારીઓ","Credit");
INSERT INTO `acc_category` VALUES("26","Deposite Assets","Y","N","B","5","
મિલકતો જમા કરો","Debit");
INSERT INTO `acc_category` VALUES("27","Income","N","Y","I","4","	 
આવક","Credit");
INSERT INTO `acc_category` VALUES("28","Expenses","N","Y","E","36","	 
ખર્ચ","Debit");
INSERT INTO `acc_category` VALUES("29","Duties & Taxes","N","Y","E","29","	 
ફરજો અને કરવેરા","Debit");
INSERT INTO `acc_category` VALUES("30","Loan & Advance (Assets)","Y","N","E","3","	
લોન અને એડવાન્સ - મિલકતો","Debit");
INSERT INTO `acc_category` VALUES("32","Misc Expenses","N","Y","E","32","	
મિક્સ ખર્ચ","Debit");
INSERT INTO `acc_category` VALUES("33","Bed Depts","N","Y","B","33","
ખરાબ દેવું","Debit");
INSERT INTO `acc_category` VALUES("34","Depreciation","N","Y","B","34","ઘસારો","Debit");
INSERT INTO `acc_category` VALUES("12","Loan Interest ","N","Y","B","3","","Credit");





CREATE TABLE `acc_category_old` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `both` enum('E','I','B') NOT NULL,
  `sr_no` int(11) NOT NULL,
  `guj_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pro_loss` enum('Y','N') NOT NULL,
  `side` enum('Credit','Debit') NOT NULL,
  `bal_shit` enum('Y','N') NOT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `sr_no` (`sr_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;






CREATE TABLE `acc_expense` (
  `exp_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `sub_cat` int(11) NOT NULL,
  `pay_type` enum('Cash','Cheque') NOT NULL,
  `amount` float NOT NULL,
  `bname` varchar(255) NOT NULL,
  `che_no` int(11) NOT NULL,
  `che_date` date NOT NULL,
  `desc` text NOT NULL,
  `date` date NOT NULL,
  `bank` int(11) NOT NULL,
  PRIMARY KEY (`exp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;






CREATE TABLE `acc_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sr_no` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `guj_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pro_loss` enum('Y','N') NOT NULL,
  `side` enum('Credit','Debit') NOT NULL,
  `bal_shit` enum('Y','N') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sr_no` (`sr_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;






CREATE TABLE `acc_income` (
  `inc_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `sub_cat` int(11) NOT NULL,
  `pay_type` enum('Cash','Cheque') NOT NULL,
  `amount` float NOT NULL,
  `bname` varchar(255) NOT NULL,
  `che_no` int(11) NOT NULL,
  `che_date` date NOT NULL,
  `desc` text NOT NULL,
  `date` date NOT NULL,
  `bank` int(11) NOT NULL,
  PRIMARY KEY (`inc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;






CREATE TABLE `acc_ledger` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `acc_group_id` int(11) NOT NULL,
  `opening` int(11) NOT NULL,
  `side` int(11) NOT NULL,
  `acc_type` int(11) NOT NULL,
  `ref_id` int(11) NOT NULL,
  `active` enum('Y','N') NOT NULL,
  `detail_1` varchar(255) NOT NULL,
  `detail_2` varchar(255) NOT NULL,
  `detail_3` varchar(255) NOT NULL,
  `detail_4` varchar(255) NOT NULL,
  `detail_5` varchar(255) NOT NULL,
  `detail_6` varchar(255) NOT NULL,
  `detail_7` varchar(255) NOT NULL,
  `detail_8` varchar(255) NOT NULL,
  `creted_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `remarks` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=156 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `acc_ledger` VALUES("7","cheque","palanpur","24819619","24","0","0","0","0","Y","","","","","","","","","0000-00-00 00:00:00","0000-00-00 00:00:00","great");
INSERT INTO `acc_ledger` VALUES("1","Cash","","","1","66500","0","0","0","Y","","","","","","","","","0000-00-00 00:00:00","0000-00-00 00:00:00","");
INSERT INTO `acc_ledger` VALUES("2","Purchase Account","","","22","0","0","0","0","Y","","","","","","","","","0000-00-00 00:00:00","0000-00-00 00:00:00","");
INSERT INTO `acc_ledger` VALUES("3","Sales Account","","","21","0","0","0","0","Y","","","","","","","","","0000-00-00 00:00:00","0000-00-00 00:00:00","");
INSERT INTO `acc_ledger` VALUES("4","Loan Interest","","","27","0","0","0","0","Y","","","","","","","","","0000-00-00 00:00:00","0000-00-00 00:00:00","");
INSERT INTO `acc_ledger` VALUES("5","Penalty","","","28","0","0","0","0","Y","","","","","","","","","0000-00-00 00:00:00","0000-00-00 00:00:00","");
INSERT INTO `acc_ledger` VALUES("6","File Charge","","","11","0","0","0","0","Y","","","","","","","","","0000-00-00 00:00:00","0000-00-00 00:00:00","");
INSERT INTO `acc_ledger` VALUES("129","13_kalpesh Prajapati_LOAN_INTEREST_AC.","","","12","0","1","1","13","Y","","","","","","","","","2023-07-04 14:35:02","2023-07-04 14:35:02","");
INSERT INTO `acc_ledger` VALUES("128","13_kalpesh Prajapati_LOAN_AC.","","","30","0","0","0","13","Y","","","","","","","","","2023-07-04 14:35:02","2023-07-04 14:35:02","");
INSERT INTO `acc_ledger` VALUES("103","2_RANA JIGNESHBHAI_LOAN_AC.","","","30","0","0","0","2","Y","","","","","","","","","2023-06-29 12:36:25","2023-06-29 12:36:25","");
INSERT INTO `acc_ledger` VALUES("104","2_RANA JIGNESHBHAI_LOAN_INTEREST_AC.","","","12","0","1","1","2","Y","","","","","","","","","2023-06-29 12:36:25","2023-06-29 12:36:25","");
INSERT INTO `acc_ledger` VALUES("105","3_LOAN_AC.","","","30","20000","0","0","3","Y","","","","","","","","","2023-06-29 12:46:25","2023-06-29 12:46:25","");
INSERT INTO `acc_ledger` VALUES("106","3_LOAN_INTEREST_AC.","","","12","0","1","1","3","Y","","","","","","","","","2023-06-29 12:46:25","2023-06-29 12:46:25","");
INSERT INTO `acc_ledger` VALUES("107","RAJESHBHAI PATEL","","","3","0","0","3","0","Y","","","","","","","","","2023-06-29 14:55:26","2023-07-05 12:51:08","");
INSERT INTO `acc_ledger` VALUES("144","Hiren Rami 1231321321","","","30","0","0","0","21","Y","","","","","","","","","2023-07-05 12:56:20","2023-07-05 12:56:20","");
INSERT INTO `acc_ledger` VALUES("108","CHIRAGBHAI JAIN","","","3","100000","0","3","0","Y","","","","","","","","","2023-06-29 14:56:38","2023-06-29 14:56:38","");
INSERT INTO `acc_ledger` VALUES("109","4_JAINAMBHAI JANI_LOAN_AC.","","","30","0","0","0","4","Y","","","","","","","","","2023-06-29 16:04:30","2023-06-29 16:04:30","");
INSERT INTO `acc_ledger` VALUES("110","4_JAINAMBHAI JANI_LOAN_INTEREST_AC.","","","12","0","1","1","4","Y","","","","","","","","","2023-06-29 16:04:30","2023-06-29 16:04:30","");
INSERT INTO `acc_ledger` VALUES("111","5_ABCD_LOAN_AC.","","","30","0","0","0","5","Y","","","","","","","","","2023-06-29 16:05:26","2023-06-29 16:05:26","");
INSERT INTO `acc_ledger` VALUES("112","5_ABCD_LOAN_INTEREST_AC.","","","12","0","1","1","5","Y","","","","","","","","","2023-06-29 16:05:26","2023-06-29 16:05:26","");
INSERT INTO `acc_ledger` VALUES("113","pihu","","","15","0","0","15","0","Y","","","","","","","","","2023-06-30 14:10:23","2023-06-30 14:10:47","ok");
INSERT INTO `acc_ledger` VALUES("126","12_dharmishta2023_LOAN_AC.","","","30","0","0","0","12","Y","","","","","","","","","2023-07-04 14:31:59","2023-07-04 14:31:59","");
INSERT INTO `acc_ledger` VALUES("127","12_dharmishta2023_LOAN_INTEREST_AC.","","","12","0","1","1","12","Y","","","","","","","","","2023-07-04 14:31:59","2023-07-04 14:31:59","");
INSERT INTO `acc_ledger` VALUES("118","8_JIGNESHBHAI RATHOD_LOAN_AC.","","","30","0","0","0","8","Y","","","","","","","","","2023-07-04 11:15:03","2023-07-04 11:15:03","");
INSERT INTO `acc_ledger` VALUES("119","8_JIGNESHBHAI RATHOD_LOAN_INTEREST_AC.","","","12","0","1","1","8","Y","","","","","","","","","2023-07-04 11:15:03","2023-07-04 11:15:03","");
INSERT INTO `acc_ledger` VALUES("120","GANESHBHAI PATEL_GANESHBHAI PATEL_AC.","","","30","0","0","0","9","Y","","","","","","","","","2023-07-04 11:45:45","2023-07-04 11:45:45","");
INSERT INTO `acc_ledger` VALUES("121","GANESHBHAI PATEL_GANESHBHAI PATEL_INTEREST_AC.","","","12","0","1","1","9","Y","","","","","","","","","2023-07-04 11:45:45","2023-07-04 11:45:45","");
INSERT INTO `acc_ledger` VALUES("131","mohanbhai Suthar_Mohanbhai Suthar_INTEREST_AC.","","","12","0","1","1","14","Y","","","","","","","","","2023-07-04 14:38:19","2023-07-04 14:38:19","");
INSERT INTO `acc_ledger` VALUES("130","mohanbhai Suthar_Mohanbhai Suthar_AC.","","","30","0","0","0","14","Y","","","","","","","","","2023-07-04 14:38:19","2023-07-04 14:38:19","");
INSERT INTO `acc_ledger` VALUES("155","26_Tejashbhai Prajapati_LOAN_INTEREST_AC.","","","12","0","1","1","26","Y","","","","","","","","","2023-07-08 12:54:48","2023-07-08 12:54:48","");
INSERT INTO `acc_ledger` VALUES("149","23_Yogeshbhai Padikal","","","12","0","1","1","23","Y","","","","","","","","","2023-07-07 09:55:27","2023-07-07 09:55:27","");
INSERT INTO `acc_ledger` VALUES("148","23_Yogeshbhai Padikal","","","30","0","0","0","23","Y","","","","","","","","","2023-07-07 09:55:27","2023-07-07 09:55:27","");
INSERT INTO `acc_ledger` VALUES("150","24_Narayanbhai Patel_LOAN_AC.","","","30","0","0","0","24","Y","","","","","","","","","2023-07-07 10:31:10","2023-07-07 10:31:10","");
INSERT INTO `acc_ledger` VALUES("140","Nayan Rabari","","","30","0","0","0","19","Y","","","","","","","","","2023-07-04 17:12:39","2023-07-04 17:12:39","");
INSERT INTO `acc_ledger` VALUES("141","Nayan Rabari","","","12","0","1","1","19","Y","","","","","","","","","2023-07-04 17:12:39","2023-07-04 17:12:39","");
INSERT INTO `acc_ledger` VALUES("145","Hiren Rami 1231321321","","","12","0","1","1","21","Y","","","","","","","","","2023-07-05 12:56:20","2023-07-05 12:56:20","");
INSERT INTO `acc_ledger` VALUES("154","26_Tejashbhai Prajapati_LOAN_AC.","","","30","0","0","0","26","Y","","","","","","","","","2023-07-08 12:54:48","2023-07-08 12:54:48","");
INSERT INTO `acc_ledger` VALUES("151","24_Narayanbhai Patel_LOAN_INTEREST_AC.","","","12","0","1","1","24","Y","","","","","","","","","2023-07-07 10:31:10","2023-07-07 10:31:10","");





CREATE TABLE `acc_payment` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `receipt_no` int(11) NOT NULL,
  `ptype` enum('Cash','Cheque','Bad Depts','Transaction') NOT NULL,
  `type` enum('Credit','Debit') NOT NULL,
  `amount` float NOT NULL,
  `che_no` int(11) NOT NULL,
  `che_date` date NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `bank` int(11) NOT NULL,
  `bill_no` varchar(255) NOT NULL,
  `t_id` int(11) NOT NULL,
  `tra_id` int(11) NOT NULL,
  `bad_debt` float NOT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `acc_payment` VALUES("1","108","1","Cash","Debit","20000","0","0000-00-00","","2023-07-04","0","1","0","0","0");
INSERT INTO `acc_payment` VALUES("2","107","0","Cash","Credit","150000","0","1970-01-01","","2023-07-05","0","2","0","0","0");





CREATE TABLE `acc_sub_category` (
  `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `sub_category` varchar(255) NOT NULL,
  PRIMARY KEY (`sub_cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;






CREATE TABLE `acc_transaction_2022-2023` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `acc_id` int(11) NOT NULL,
  `tran_type` varchar(255) NOT NULL COMMENT '3 = Loan , 4 = Installment ,1 = Payament ,2 = Payable ,5 = Transaction',
  `cred_debit` enum('0','1') NOT NULL,
  `amount` int(11) NOT NULL,
  `tran_id` int(11) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `ref_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `creted_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `remaining` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `acc_id` (`acc_id`),
  KEY `tran_id` (`tran_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `acc_transaction_2022-2023` VALUES("1","105","3","0","-20000","1","","1","2023-06-20","2023-06-29 12:55:48","2023-06-29 12:55:48","0");
INSERT INTO `acc_transaction_2022-2023` VALUES("2","106","3","1","2000","1","","1","2023-06-20","2023-06-29 12:55:48","2023-06-29 12:55:48","0");
INSERT INTO `acc_transaction_2022-2023` VALUES("3","1","3","1","18000","1","","1","2023-06-20","2023-06-29 12:55:48","2023-06-29 12:55:48","0");
INSERT INTO `acc_transaction_2022-2023` VALUES("4","103","3","0","-50000","2","","2","2023-05-29","2023-06-29 12:56:44","2023-06-29 12:56:44","0");
INSERT INTO `acc_transaction_2022-2023` VALUES("5","104","3","1","1500","2","","2","2023-05-29","2023-06-29 12:56:44","2023-06-29 12:56:44","0");
INSERT INTO `acc_transaction_2022-2023` VALUES("6","1","3","1","48500","2","","2","2023-05-29","2023-06-29 12:56:44","2023-06-29 12:56:44","0");
INSERT INTO `acc_transaction_2022-2023` VALUES("9","107","0","0","0","0","ACCOUNT OPENING","0","2022-03-31","2023-06-29 14:55:26","2023-06-29 14:55:26","0");
INSERT INTO `acc_transaction_2022-2023` VALUES("10","108","0","1","100000","0","ACCOUNT OPENING","0","2022-03-31","2023-06-29 14:56:38","2023-06-29 14:56:38","0");
INSERT INTO `acc_transaction_2022-2023` VALUES("20","1","3","1","9000","3","","5","2023-07-03","2023-07-03 12:43:06","2023-07-03 12:43:06","0");
INSERT INTO `acc_transaction_2022-2023` VALUES("14","113","0","1","0","0","ACCOUNT OPENING","0","2022-03-31","2023-06-30 14:10:23","2023-06-30 14:10:47","0");
INSERT INTO `acc_transaction_2022-2023` VALUES("19","117","3","1","1000","3","","5","2023-07-03","2023-07-03 12:43:06","2023-07-03 12:43:06","0");
INSERT INTO `acc_transaction_2022-2023` VALUES("18","116","3","0","-10000","3","","5","2023-07-03","2023-07-03 12:43:06","2023-07-03 12:43:06","0");





CREATE TABLE `acc_transaction_2023-2024` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `acc_id` int(11) NOT NULL,
  `tran_type` varchar(255) NOT NULL COMMENT '3 = Loan , 4 = Installment ,1 = Payament ,2 = Payable ,5 = Transaction',
  `cred_debit` enum('0','1') NOT NULL,
  `amount` int(11) NOT NULL,
  `tran_id` int(11) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `ref_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `creted_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `remaining` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `acc_id` (`acc_id`),
  KEY `tran_id` (`tran_id`)
) ENGINE=MyISAM AUTO_INCREMENT=126 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `acc_transaction_2023-2024` VALUES("1","1","0","1","66500","0","ACCOUNT OPENING","0","2023-03-31","2023-07-03 12:31:41","2023-07-03 12:31:41","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("2","103","0","1","-50000","0","ACCOUNT OPENING","0","2023-03-31","2023-07-03 12:31:41","2023-07-03 12:31:41","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("3","105","0","0","-20000","0","ACCOUNT OPENING","0","2023-03-31","2023-07-03 12:31:41","2023-07-03 12:31:41","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("4","108","0","1","100000","0","ACCOUNT OPENING","0","2023-03-31","2023-07-03 12:31:41","2023-07-03 12:31:41","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("81","1","4","0","-200","18","","8","2023-07-05","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("77","107","4","1","150000","16","","2","2023-07-05","2023-07-05 00:00:00","2023-07-05 12:49:30","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("51","1","3","1","9000","7","","12","2023-07-04","2023-07-04 14:32:22","2023-07-04 14:32:22","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("49","126","3","0","-10000","7","","12","2023-07-04","2023-07-04 14:32:22","2023-07-04 14:32:22","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("50","127","3","1","1000","7","","12","2023-07-04","2023-07-04 14:32:22","2023-07-04 14:32:22","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("21","120","3","0","-15000","3","","8","2023-07-01","2023-07-04 11:47:15","2023-07-04 11:47:15","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("22","121","3","1","2000","3","","8","2023-07-01","2023-07-04 11:47:15","2023-07-04 11:47:15","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("23","1","3","1","13000","3","","8","2023-07-01","2023-07-04 11:47:15","2023-07-04 11:47:15","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("80","126","4","1","1000","17","","12","2023-07-05","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("76","1","4","0","-150000","16","","2","2023-07-05","2023-07-05 12:49:30","2023-07-05 12:49:30","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("101","1","4","0","-7000","27","","19","2023-08-01","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("100","1","3","1","100000","26","","19","1970-01-01","2023-07-08 11:40:25","2023-07-08 11:40:25","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("99","128","3","0","-100000","26","","19","1970-01-01","2023-07-08 11:40:25","2023-07-08 11:40:25","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("38","120","4","1","600","6","","8","2023-07-04","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("37","1","4","0","-600","6","","8","2023-07-04","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("79","1","4","0","-1000","17","","12","2023-07-05","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("78","107","0","1","0","0","ACCOUNT OPENING","0","2023-03-31","2023-07-05 12:51:08","2023-07-05 12:51:08","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("67","136","3","0","-10000","12","","16","2023-07-04","2023-07-04 14:54:32","2023-07-04 14:54:32","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("68","137","3","1","1000","12","","16","2023-07-04","2023-07-04 14:54:32","2023-07-04 14:54:32","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("69","1","3","1","9000","12","","16","2023-07-04","2023-07-04 14:54:32","2023-07-04 14:54:32","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("73","140","3","0","-20000","14","","18","2023-07-04","2023-07-04 17:12:56","2023-07-04 17:12:56","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("74","141","3","1","2000","14","","18","2023-07-04","2023-07-04 17:12:56","2023-07-04 17:12:56","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("75","1","3","1","18000","14","","18","2023-07-04","2023-07-04 17:12:56","2023-07-04 17:12:56","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("82","120","4","1","200","18","","8","2023-07-05","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("83","1","4","0","-1300","19","","18","2023-07-05","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("84","140","4","1","1300","19","","18","2023-07-05","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("85","1","4","0","-1000","20","","12","2023-07-06","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("86","126","4","1","1000","20","","12","2023-07-06","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("87","1","4","0","-1300","21","","18","2023-07-06","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("88","140","4","1","1300","21","","18","2023-07-06","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("89","1","4","0","-200","22","","8","2023-07-06","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("90","120","4","1","200","22","","8","2023-07-06","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("91","1","4","0","-1000","23","","12","2023-07-07","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("92","126","4","1","1000","23","","12","2023-07-07","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("96","140","4","1","1300","24","","18","2023-07-07","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("95","1","4","0","-1300","24","","18","2023-07-07","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("97","1","4","0","-200","25","","8","2023-07-07","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("98","120","4","1","200","25","","8","2023-07-07","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("102","128","4","1","0","27","","19","2023-08-01","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("103","129","4","1","7000","27","","19","2023-08-01","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("104","1","4","0","-1000","28","","19","2023-09-01","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("105","128","4","1","0","28","","19","2023-09-01","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("106","129","4","1","1000","28","","19","2023-09-01","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("107","154","3","0","-50000","29","","20","2023-07-01","2023-07-08 12:55:35","2023-07-08 12:55:35","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("108","155","3","1","1000","29","","20","2023-07-01","2023-07-08 12:55:35","2023-07-08 12:55:35","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("109","1","3","1","49000","29","","20","2023-07-01","2023-07-08 12:55:35","2023-07-08 12:55:35","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("115","1","4","0","-1000","31","","12","2023-07-08","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("114","120","4","1","200","30","","8","2023-07-08","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("113","1","4","0","-200","30","","8","2023-07-08","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("116","126","4","1","1000","31","","12","2023-07-08","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("117","1","4","0","0","32","","19","2023-02-01","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("118","128","4","1","0","32","","19","2023-02-01","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("119","129","4","1","-7000","32","","19","2023-02-01","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("120","1","4","0","-2000","33","","19","2023-04-01","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("121","128","4","1","0","33","","19","2023-04-01","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("122","129","4","1","2000","33","","19","2023-04-01","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("123","1","4","0","0","34","","19","2023-04-01","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("124","128","4","1","0","34","","19","2023-04-01","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("125","129","4","1","0","34","","19","2023-04-01","0000-00-00 00:00:00","0000-00-00 00:00:00","0");





CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `u_add` enum('N','Y') NOT NULL,
  `u_update` enum('N','Y') NOT NULL,
  `u_del` enum('N','Y') NOT NULL,
  `u_view` enum('N','Y') NOT NULL,
  `u_print` enum('N','Y') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `admin` VALUES("1","admin","admin","","","","","Y","Y","Y","Y","Y");
INSERT INTO `admin` VALUES("9","green1","green2","green1","1111111111","mahesana","mahesana","Y","N","N","Y","Y");
INSERT INTO `admin` VALUES("10","kalpesh","kalpesh","kalpesh","2222222222","sidhpur","sidhpur","Y","Y","Y","Y","Y");





CREATE TABLE `admin_right` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(255) NOT NULL,
  `area` enum('N','Y') NOT NULL,
  `customer` enum('N','Y') NOT NULL,
  `loan` enum('N','Y') NOT NULL,
  `installment` enum('N','Y') NOT NULL,
  `customer_remaining` enum('N','Y') NOT NULL,
  `monthly_report` enum('N','Y') NOT NULL,
  `daily_report` enum('N','Y') NOT NULL,
  `transaction` enum('N','Y') NOT NULL,
  `ledger_acc_view` enum('N','Y') NOT NULL,
  `ledger_opening` enum('N','Y') NOT NULL,
  `daily_book` enum('N','Y') NOT NULL,
  `balance_sheet` enum('N','Y') NOT NULL,
  `profit_loss` enum('N','Y') NOT NULL,
  `change_password` enum('N','Y') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `truck_avg` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `admin_right` VALUES("1","1","Y","Y","Y","Y","Y","Y","Y","Y","Y","Y","Y","Y","Y","Y");





CREATE TABLE `area` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `area_name` varchar(255) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `area` VALUES("1","Ahmedabad");
INSERT INTO `area` VALUES("2","Amreli");
INSERT INTO `area` VALUES("3","Anand");
INSERT INTO `area` VALUES("4","Aravalli");
INSERT INTO `area` VALUES("5","Banaskantha");
INSERT INTO `area` VALUES("6","Bharuch");
INSERT INTO `area` VALUES("7","Bhavnagar");
INSERT INTO `area` VALUES("8","Botad");
INSERT INTO `area` VALUES("9","Chhota Udaipur");
INSERT INTO `area` VALUES("10","Dahod");
INSERT INTO `area` VALUES("11","Dang");
INSERT INTO `area` VALUES("12","Deesa");
INSERT INTO `area` VALUES("13","Devbhoomi Dwarka");
INSERT INTO `area` VALUES("14","Gandhinagar");
INSERT INTO `area` VALUES("15","Gir Somnath");
INSERT INTO `area` VALUES("16","Jamnagar");
INSERT INTO `area` VALUES("17","Junagadh");
INSERT INTO `area` VALUES("18","Kheda");
INSERT INTO `area` VALUES("19","Kutch");
INSERT INTO `area` VALUES("20","Mahisagar");
INSERT INTO `area` VALUES("21","Mehsana");
INSERT INTO `area` VALUES("22","Morbi");
INSERT INTO `area` VALUES("23","Narmada");
INSERT INTO `area` VALUES("24","Navsari");
INSERT INTO `area` VALUES("25","Panchmahal");
INSERT INTO `area` VALUES("26","Patan");
INSERT INTO `area` VALUES("27","Porbandar");
INSERT INTO `area` VALUES("28","Rajkot");
INSERT INTO `area` VALUES("29","Sabarkantha");
INSERT INTO `area` VALUES("30","Surat");
INSERT INTO `area` VALUES("31","Surendranagar");
INSERT INTO `area` VALUES("32","Tapi");
INSERT INTO `area` VALUES("33","Vadodara");
INSERT INTO `area` VALUES("34","Valsad");
INSERT INTO `area` VALUES("69","Jamalpur AHM");
INSERT INTO `area` VALUES("70","SIDHPUR");





CREATE TABLE `balance` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `b_name` varchar(255) NOT NULL,
  `amount` double NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;






CREATE TABLE `bank_statement` (
  `bs_id` int(11) NOT NULL AUTO_INCREMENT,
  `b_id` int(11) NOT NULL,
  `rs` float(10,2) NOT NULL,
  `detail` text NOT NULL,
  `date` date NOT NULL,
  `type` enum('D','W') NOT NULL,
  PRIMARY KEY (`bs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;






CREATE TABLE `customer` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `loan` varchar(255) NOT NULL,
  `interest` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `a_id` int(11) NOT NULL,
  `cust_type` varchar(255) NOT NULL,
  `Installment` varchar(255) NOT NULL,
  `idate` date NOT NULL,
  `status` enum('Y','N') NOT NULL,
  `c_stutas` enum('Y','N') NOT NULL,
  `other` text NOT NULL,
  `del` enum('N','Y') NOT NULL,
  `cat_id` int(11) NOT NULL,
  `ope` decimal(10,2) NOT NULL,
  `state` int(11) NOT NULL,
  `pincode` int(11) NOT NULL,
  `con_type` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `bill_type` varchar(255) NOT NULL,
  `gst_no` varchar(255) NOT NULL,
  `type` enum('','Credit','Debit') NOT NULL,
  `ac_no` varchar(255) NOT NULL,
  `isfc` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `cdays` int(11) NOT NULL,
  `services` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `emi_interest` int(11) NOT NULL,
  `emi_total` int(11) NOT NULL,
  `active` enum('Y','N') NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `customer` VALUES("2","2","","","","50000","1500","48500","2023-05-29","","","69","SCH4","500","2023-06-29","Y","Y","","N","0","0.00","0","0","","","","","","","","","","","0","","","0","500","Y","2023-06-29 12:56:44");
INSERT INTO `customer` VALUES("8","9","","","","15000","2000","13000","2023-07-01","","","1","SCH1","200","2023-07-02","Y","Y","","N","0","0.00","0","0","","","","","","","","","","","0","","","0","200","Y","2023-07-04 11:47:15");
INSERT INTO `customer` VALUES("12","12","","","","10000","1000","9000","2023-07-04","","","1","SCH1","1000","2023-07-05","Y","Y","","N","0","0.00","0","0","","","","","","","","","","","0","","","0","1000","Y","2023-07-04 14:32:22");
INSERT INTO `customer` VALUES("18","19","","","","20000","2000","18000","2023-07-04","","","1","SCH1","1300","2023-07-05","Y","Y","","N","0","0.00","0","0","","","","","","","","","","","0","","","0","1300","Y","2023-07-04 17:12:56");
INSERT INTO `customer` VALUES("19","13","","","","100000","0","100000","1970-01-01","","","70","SCH4","0","1970-02-01","Y","Y","","N","0","0.00","0","0","","","","","","","","","","","0","","","1000","1000","Y","2023-07-08 11:40:25");
INSERT INTO `customer` VALUES("20","26","","","","50000","1000","49000","2023-07-01","","","5","SCH4","2000","2023-08-01","Y","Y","","N","0","0.00","0","0","","","","","","","","","","","0","","","100","2100","Y","2023-07-08 12:55:35");





CREATE TABLE `customer_details` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `area_id` int(11) NOT NULL,
  `remark` varchar(255) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `customer_details` VALUES("13","kalpesh Prajapati","8905686440","70","");
INSERT INTO `customer_details` VALUES("2","RANA JIGNESHBHAI","9914603422","69","");
INSERT INTO `customer_details` VALUES("3","HARISHBHAI JADEJA","9916022177","1","");
INSERT INTO `customer_details` VALUES("4","JAINAMBHAI JANI","9916052673","2","");
INSERT INTO `customer_details` VALUES("5","ABCD","9926060350","1","");
INSERT INTO `customer_details` VALUES("12","dharmishta2023","9558335124","1","");
INSERT INTO `customer_details` VALUES("8","JIGNESHBHAI RATHOD","9916022160","1","Test");
INSERT INTO `customer_details` VALUES("9","GANESHBHAI PATEL","9920603101","1","Test");
INSERT INTO `customer_details` VALUES("14","Mohanbhai Suthar","9912542565","1","");
INSERT INTO `customer_details` VALUES("26","Tejashbhai Prajapati","9958555555","5","\\");
INSERT INTO `customer_details` VALUES("23","Yogeshbhai Padikal","9922222222","4","");
INSERT INTO `customer_details` VALUES("19","Nayan Rabari","9926060349","1","");
INSERT INTO `customer_details` VALUES("21","Hiren Rami 1231321321","9916076099","70","Test");
INSERT INTO `customer_details` VALUES("24","Narayanbhai Patel","9922252555","1","");





CREATE TABLE `favorite_url` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `fav_icon` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid` (`uid`,`url`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `favorite_url` VALUES("4","","area","areamanage","07/07/2023 12:06:15","");





CREATE TABLE `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `db_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `vat` varchar(255) NOT NULL,
  `cst` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mail_id` varchar(255) NOT NULL,
  `email_pass` varchar(255) NOT NULL,
  `juri` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `office_no` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `bank_ac` varchar(255) NOT NULL,
  `isfc` varchar(255) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `gstn` varchar(255) NOT NULL,
  `gstn_type` varchar(255) NOT NULL,
  `tagline` text NOT NULL,
  `install_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `u_type` enum('S','M') NOT NULL,
  `status` enum('A','D') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `profile` VALUES("1","greendvc_daybook_v1_1","Pramukh Building Material Supplier","Patan Shihori Road","9898983106","","","vishnupatelpramukh1976@gmail.com","gctsoft365@gmail.com","Green@2021","PATAN","2401_1_1.jpg","384265","24","PATAN","7567430187","The Mehsana Urban Co-Operative Bank Ltd.","00431101000124","MSNU0000043","BNQPP0347B1Z6","24BNQPP0347B1Z6","Composition","PATAN","0000-00-00","0000-00-00","M","A");





CREATE TABLE `schem` (
  `sc_id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `loan_amount` float NOT NULL,
  `interest` float NOT NULL,
  `paid_amount` float NOT NULL,
  `installment_amount` float NOT NULL,
  `total_installment_amount` float NOT NULL,
  `date` date NOT NULL,
  `sch_date` date NOT NULL,
  `type` varchar(10) NOT NULL,
  `fine_days` int(11) NOT NULL,
  `fine_amt` float NOT NULL,
  `other` text NOT NULL,
  `ptype` enum('Cash','Cheque') NOT NULL,
  `che_no` varchar(255) NOT NULL,
  `bank` int(11) NOT NULL,
  `che_date` date NOT NULL,
  `pre_sms` enum('N','Y') NOT NULL,
  `due_sms` enum('N','Y') NOT NULL,
  PRIMARY KEY (`sc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;






CREATE TABLE `sms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sec` int(11) NOT NULL,
  `sms` varchar(1000) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `status` enum('N','Y') NOT NULL,
  `senttime` datetime NOT NULL,
  `timestamp` datetime NOT NULL,
  `track` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `s_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `a_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `wp_status` enum('pending','done') NOT NULL,
  `wp_senttime` datetime NOT NULL,
  `sms_status` enum('pending','done') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `sms` VALUES("14","0","hiii Dharmishta","9558335124","N","0000-00-00 00:00:00","2023-07-03 12:42:11","","CSV","0","0","0000-00-00","0","done","2023-07-03 12:42:18","done");
INSERT INTO `sms` VALUES("15","0","*Dear dharmishta,*
 Your Loan With Loan ID No.*5* has been apporved. ","","N","0000-00-00 00:00:00","2023-07-03 12:43:07","","Order Status (  ) ","0","0","0000-00-00","0","done","2023-07-03 12:43:07","done");
INSERT INTO `sms` VALUES("16","0","*Dear ABCD,*
 Installment Of RS.*1000* From Your Loan Has Been Received. ","","N","0000-00-00 00:00:00","2023-07-04 11:18:44","","Order Status (  ) ","0","0","0000-00-00","0","done","2023-07-04 11:18:44","done");
INSERT INTO `sms` VALUES("17","0","*Dear ABCD,*
 Installment Of RS.*1000* From Your Loan Has Been Received. ","","N","0000-00-00 00:00:00","2023-07-04 11:18:53","","Order Status (  ) ","0","0","0000-00-00","0","done","2023-07-04 11:18:53","done");
INSERT INTO `sms` VALUES("18","0","goood morning Dharmishta","9558335124","N","0000-00-00 00:00:00","2023-07-04 11:19:37","","CSV","0","0","0000-00-00","0","done","2023-07-04 11:19:39","done");
INSERT INTO `sms` VALUES("19","0","*Dear dharmishta,*
 Your Loan With Loan ID No.*6* has been apporved. ","","N","0000-00-00 00:00:00","2023-07-04 11:20:12","","Order Status (  ) ","0","0","0000-00-00","0","done","2023-07-04 11:20:12","done");
INSERT INTO `sms` VALUES("20","0","*Dear KALPESH PRAJAPATI,*
 Installment Of RS.*2000* From Your Loan Has Been Received. ","","N","0000-00-00 00:00:00","2023-07-04 11:39:08","","Order Status (  ) ","0","0","0000-00-00","0","done","2023-07-04 11:39:08","done");
INSERT INTO `sms` VALUES("21","0","*Dear dharmishta,*
 Your Loan With Loan ID No.*7* has been apporved. ","","N","0000-00-00 00:00:00","2023-07-04 11:45:27","","Order Status (  ) ","0","0","0000-00-00","0","done","2023-07-04 11:45:27","done");
INSERT INTO `sms` VALUES("22","0","*Dear dharmishta,*
 Installment Of RS.*1000* From Your Loan Has Been Received. ","","N","0000-00-00 00:00:00","2023-07-04 11:45:48","","Order Status (  ) ","0","0","0000-00-00","0","done","2023-07-04 11:45:48","done");
INSERT INTO `sms` VALUES("23","0","*Dear GANESHBHAI PATEL,*
 Your Loan With Loan ID No.*8* has been apporved. ","","N","0000-00-00 00:00:00","2023-07-04 11:47:17","","Order Status (  ) ","0","0","0000-00-00","0","done","2023-07-04 11:47:17","done");
INSERT INTO `sms` VALUES("24","0","*Dear HARDIKBHAI RAHANE,*
 Your Loan With Loan ID No.*9* has been apporved. ","","N","0000-00-00 00:00:00","2023-07-04 12:44:42","","Order Status (  ) ","0","0","0000-00-00","0","done","2023-07-04 12:44:42","done");
INSERT INTO `sms` VALUES("25","0","*Dear KALPESH PRAJAPATI,*
 Your Loan With Loan ID No.*10* has been apporved. ","","N","0000-00-00 00:00:00","2023-07-04 12:51:07","","Order Status (  ) ","0","0","0000-00-00","0","done","2023-07-04 12:51:07","done");





CREATE TABLE `sms_setting` (
  `sms_id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `wp_url` varchar(255) NOT NULL,
  `wp_instance` varchar(255) NOT NULL,
  `wp_token` varchar(255) NOT NULL,
  `whatsapp` enum('Y','N') NOT NULL,
  PRIMARY KEY (`sms_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `sms_setting` VALUES("1","panel.msgclub.net","https://app.gctsoft.in/api/send?number=[number]&type=text&message=[msg]&instance_id=[inst]&access_token=[token]","64A253FC5BEC7","648847e7ca9d3","Y");





CREATE TABLE `soft_db_file` (
  `soft_file` varchar(255) NOT NULL,
  `log` varchar(255) NOT NULL,
  `val` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;






CREATE TABLE `state_code` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(200) NOT NULL,
  `tin_no` varchar(11) NOT NULL,
  `s_code` varchar(100) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `state_code` VALUES("1","Andaman and Nicobar Islands","35","AN");
INSERT INTO `state_code` VALUES("2","Andhra Pradesh","28","AP
");
INSERT INTO `state_code` VALUES("3","Andhra Pradesh (New)","37","AD");
INSERT INTO `state_code` VALUES("4","Arunachal Pradesh ","12","AR");
INSERT INTO `state_code` VALUES("5","Assam ","18","AS
");
INSERT INTO `state_code` VALUES("6","Bihar","10","BH
");
INSERT INTO `state_code` VALUES("7","Chandigarh","4","CH");
INSERT INTO `state_code` VALUES("8","Chattisgarh","22","CT");
INSERT INTO `state_code` VALUES("9","Dadra and Nagar Haveli ","26","DN
");
INSERT INTO `state_code` VALUES("10","Daman and Diu","25","DD
");
INSERT INTO `state_code` VALUES("11","Delhi","7","DL
");
INSERT INTO `state_code` VALUES("12","Goa","30","GA");
INSERT INTO `state_code` VALUES("13","Gujarat","24","GJ");
INSERT INTO `state_code` VALUES("14","Haryana ","6","HR
");
INSERT INTO `state_code` VALUES("15","Himachal Pradesh","2","HP");
INSERT INTO `state_code` VALUES("16","Jammu and Kashmir","1","JK");
INSERT INTO `state_code` VALUES("17","Jharkhand ","20","JH");
INSERT INTO `state_code` VALUES("18","Karnataka","29","KA
");
INSERT INTO `state_code` VALUES("19","Kerala ","32","KL");
INSERT INTO `state_code` VALUES("20","Lakshadweep Islands","31","LD");
INSERT INTO `state_code` VALUES("21","Madhya Pradesh","23","MP");
INSERT INTO `state_code` VALUES("22","Maharashtra","27","MH");
INSERT INTO `state_code` VALUES("23","Manipur","14","MN");
INSERT INTO `state_code` VALUES("24","Meghalaya","17","ME");
INSERT INTO `state_code` VALUES("25","Mizoram","15","MI");
INSERT INTO `state_code` VALUES("27","Nagaland ","13","NL");
INSERT INTO `state_code` VALUES("28","Odisha ","21","OR");
INSERT INTO `state_code` VALUES("29","Pondicherry","34","PY");
INSERT INTO `state_code` VALUES("30","Punjab ","3","PB");
INSERT INTO `state_code` VALUES("31","Rajasthan","8","RJ");
INSERT INTO `state_code` VALUES("32","Sikkim ","11","SK");
INSERT INTO `state_code` VALUES("33","Tamil Nadu","33","TN");
INSERT INTO `state_code` VALUES("34","Telangana","36","TS");
INSERT INTO `state_code` VALUES("35","Tripura","16","TR");
INSERT INTO `state_code` VALUES("36","Uttar Pradesh ","9","UP");
INSERT INTO `state_code` VALUES("37","Uttarakhand ","5","UT");
INSERT INTO `state_code` VALUES("38","West Bengal ","19","WB");





CREATE TABLE `token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` text NOT NULL,
  `imei` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;






CREATE TABLE `year` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `year` VALUES("1","2022-2023");
INSERT INTO `year` VALUES("2","2023-2024");



