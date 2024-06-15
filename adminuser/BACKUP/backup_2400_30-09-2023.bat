

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
) ENGINE=MyISAM AUTO_INCREMENT=107 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `acc_ledger` VALUES("7","Loan_Interest_Acc","","","12","0","0","0","0","Y","","","","","","","","","0000-00-00 00:00:00","0000-00-00 00:00:00","");
INSERT INTO `acc_ledger` VALUES("1","Cash","","","1","0","0","0","0","Y","","","","","","","","","0000-00-00 00:00:00","0000-00-00 00:00:00","");
INSERT INTO `acc_ledger` VALUES("2","Purchase Account","","","22","0","0","0","0","Y","","","","","","","","","0000-00-00 00:00:00","0000-00-00 00:00:00","");
INSERT INTO `acc_ledger` VALUES("3","Sales Account","","","21","0","0","0","0","Y","","","","","","","","","0000-00-00 00:00:00","0000-00-00 00:00:00","");
INSERT INTO `acc_ledger` VALUES("4","Loan Interest","","","27","0","0","0","0","Y","","","","","","","","","0000-00-00 00:00:00","0000-00-00 00:00:00","");
INSERT INTO `acc_ledger` VALUES("5","Penalty","","","28","0","0","0","0","Y","","","","","","","","","0000-00-00 00:00:00","0000-00-00 00:00:00","");
INSERT INTO `acc_ledger` VALUES("6","File Charge","","","11","0","0","0","0","Y","","","","","","","","","0000-00-00 00:00:00","0000-00-00 00:00:00","");
INSERT INTO `acc_ledger` VALUES("101","Vishnu","","","3","0","0","3","0","Y","","","","","","","","","2023-09-09 21:05:41","2023-09-09 21:05:41","");
INSERT INTO `acc_ledger` VALUES("102","1_Arav_LOAN_AC.","","","30","0","0","0","1","Y","","","","","","","","","2023-09-09 21:08:31","2023-09-09 21:08:31","");
INSERT INTO `acc_ledger` VALUES("103","1_Arav_LOAN_INTEREST_AC.","","","12","0","1","1","1","Y","","","","","","","","","2023-09-09 21:08:31","2023-09-09 21:08:31","");
INSERT INTO `acc_ledger` VALUES("104","Water bill","","","20","0","0","20","0","Y","","","","","","","","","2023-09-09 21:15:37","2023-09-09 21:15:37","");
INSERT INTO `acc_ledger` VALUES("105","2_MUKESH_LOAN_AC.","","","30","0","0","0","2","Y","","","","","","","","","2023-09-30 11:15:53","2023-09-30 11:15:53","");
INSERT INTO `acc_ledger` VALUES("106","2_MUKESH_LOAN_INTEREST_AC.","","","12","0","1","1","2","Y","","","","","","","","","2023-09-30 11:15:53","2023-09-30 11:15:53","");





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

INSERT INTO `acc_payment` VALUES("1","101","0","Cash","Credit","1000000","0","1970-01-01","","2023-09-09","0","1","0","0","0");
INSERT INTO `acc_payment` VALUES("2","104","1","Cash","Debit","200","0","0000-00-00","","2023-09-09","0","2","0","0","0");





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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;






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
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `acc_transaction_2023-2024` VALUES("1","101","0","1","0","0","ACCOUNT OPENING","0","2023-03-31","2023-09-09 21:05:41","2023-09-09 21:05:41","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("2","1","4","0","-1000000","2","","1","2023-09-09","2023-09-09 21:07:09","2023-09-09 21:07:09","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("3","101","4","1","1000000","2","","1","2023-09-09","2023-09-09 00:00:00","2023-09-09 21:07:09","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("4","102","3","0","-10000","3","","1","2023-09-01","2023-09-09 21:13:28","2023-09-09 21:13:28","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("5","103","3","1","1000","3","","1","2023-09-01","2023-09-09 21:13:28","2023-09-09 21:13:28","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("6","1","3","1","9000","3","","1","2023-09-01","2023-09-09 21:13:28","2023-09-09 21:13:28","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("7","104","0","0","0","0","ACCOUNT OPENING","0","2023-03-31","2023-09-09 21:15:37","2023-09-09 21:15:37","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("8","1","5","1","200","4","","2","2023-09-09","2023-09-09 21:16:49","2023-09-09 21:16:49","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("9","104","5","0","-200","4","","2","2023-09-09","2023-09-09 00:00:00","2023-09-09 21:16:49","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("10","1","4","0","-300","5","","1","2023-09-04","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("11","102","4","1","300","5","","1","2023-09-04","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("12","1","4","0","-300","6","","1","2023-09-04","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("13","102","4","1","300","6","","1","2023-09-04","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("14","1","4","0","-200","7","","1","2023-09-09","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("15","102","4","1","200","7","","1","2023-09-09","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("16","1","4","0","-9200","8","","1","2023-09-10","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("17","102","4","1","9200","8","","1","2023-09-10","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("18","102","3","0","-15000","9","","2","2023-09-09","2023-09-09 21:32:46","2023-09-09 21:32:46","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("19","103","3","1","1500","9","","2","2023-09-09","2023-09-09 21:32:46","2023-09-09 21:32:46","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("20","1","3","1","13500","9","","2","2023-09-09","2023-09-09 21:32:46","2023-09-09 21:32:46","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("24","1","5","0","-20000","10","","2","2023-09-15","2023-09-15 16:04:21","2023-09-15 16:04:21","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("23","102","5","1","20000","10","","1","2023-09-15","2023-09-15 16:04:21","2023-09-15 16:04:21","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("25","105","3","0","-10000","11","","3","2023-09-30","2023-09-30 11:18:00","2023-09-30 11:18:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("26","106","3","1","1000","11","","3","2023-09-30","2023-09-30 11:18:00","2023-09-30 11:18:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("27","1","3","1","9000","11","","3","2023-09-30","2023-09-30 11:18:00","2023-09-30 11:18:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("28","1","4","0","-500","12","","3","2023-10-01","0000-00-00 00:00:00","0000-00-00 00:00:00","0");
INSERT INTO `acc_transaction_2023-2024` VALUES("29","105","4","1","500","12","","3","2023-10-01","0000-00-00 00:00:00","0000-00-00 00:00:00","0");





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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `admin` VALUES("1","admin","admin","","","","","Y","Y","Y","Y","Y");





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
  `finance` enum('N','Y') NOT NULL,
  `inst_cal` enum('N','Y') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `truck_avg` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `admin_right` VALUES("1","1","Y","Y","Y","Y","Y","Y","Y","Y","Y","Y","Y","Y","Y","Y","Y","Y");





CREATE TABLE `area` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `area_name` varchar(255) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `area` VALUES("1","Bhildi");
INSERT INTO `area` VALUES("2","PLN");





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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `customer` VALUES("1","1","","","","10000","1000","9000","2023-09-01","","","1","SCH1","100","2023-09-02","Y","Y","","N","0","0.00","0","0","","","","","","","","","","","0","","","0","100","N","2023-09-09 21:13:28");
INSERT INTO `customer` VALUES("2","1","","","","15000","1500","13500","2023-09-09","","","1","SCH1","150","2023-09-10","Y","Y","","N","0","0.00","0","0","","","","","","","","","","","0","","","0","150","Y","2023-09-09 21:32:46");
INSERT INTO `customer` VALUES("3","2","","","","10000","1000","9000","2023-09-30","","","2","SCH1","100","2023-10-01","Y","Y","","N","0","0.00","0","0","","","","","","","","","","","0","","","0","100","Y","2023-09-30 11:18:00");





CREATE TABLE `customer_details` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `area_id` int(11) NOT NULL,
  `remark` varchar(255) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `customer_details` VALUES("1","Arav","7456685367","1","");
INSERT INTO `customer_details` VALUES("2","MUKESH","9909735097","2","");





CREATE TABLE `customer_fin` (
  `cf_id` int(5) NOT NULL AUTO_INCREMENT,
  `id` int(4) NOT NULL,
  `p_date` date NOT NULL,
  `p_type` enum('Cash','Cheque') NOT NULL,
  `ttype` enum('credit','debit') NOT NULL,
  `p_ci` varchar(255) NOT NULL,
  `p_amount` float NOT NULL,
  `inst_rate` float NOT NULL,
  `p_ch` varchar(255) NOT NULL,
  `p_bank` int(2) NOT NULL,
  `che_date` date NOT NULL,
  `p_desc` varchar(500) NOT NULL,
  `active` enum('Y','N') NOT NULL,
  PRIMARY KEY (`cf_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;






CREATE TABLE `favorite_url` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `fav_icon` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid` (`uid`,`url`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;






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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;






CREATE TABLE `sms_setting` (
  `sms_id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `wp_url` varchar(255) NOT NULL,
  `wp_instance` varchar(255) NOT NULL,
  `wp_token` varchar(255) NOT NULL,
  `whatsapp` enum('Y','N') NOT NULL,
  PRIMARY KEY (`sms_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;






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



