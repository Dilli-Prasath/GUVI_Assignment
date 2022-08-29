---------------------------------------------DATABASE SCHEMA---------------------------------------------

CREATE DATABASE `dilli` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

---------------------------------------------TABLE SCHEMAS-----------------------------------------------

CREATE TABLE `tbl_customerinfo` (
  `cust_id` int NOT NULL AUTO_INCREMENT,
  `email_id` varchar(100) DEFAULT NULL,
  `cust_password` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci

CREATE TABLE `tbl_registrationinfo` (
  `reg_id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phoneno` varchar(15) DEFAULT NULL,
  `alternatephoneno` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci




