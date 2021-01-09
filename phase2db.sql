
CREATE TABLE `tblusers` (
  `userId` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `userpassword` varchar(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB;

CREATE TABLE `tblproducts` (
  `productId` int(10) NOT NULL AUTO_INCREMENT,
  `productName` varchar(25) NOT NULL,
  `productPrice` float(18,2) NOT NULL,
  `productCode` varchar(10) NOT NULL,
  `productInstock` tinyint(1) NOT NULL,
  `productDiscount` float(18,2) NOT NULL,
  `productSizes` varchar(25) NOT NULL,
  `productDetails` tinytext NOT NULL,
  `userId` int(15) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`productId`),
  KEY `userId` (`userId`),
  CONSTRAINT `tblproducts_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `tblusers` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB;


