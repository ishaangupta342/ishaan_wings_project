Create DATABASE IF NOT EXISTS database_1;
use database_1;
CREATE TABLE IF NOT EXISTS `database_1`.`passengers` ( `Names` VARCHAR(100) NOT NULL , `Airpno` VARCHAR(20) NOT NULL , `DDate` VARCHAR(20) NOT NULL , `phone` VARCHAR(20) NOT NULL , `email` VARCHAR(20) NOT NULL , `class` VARCHAR(20) NOT NULL ) ENGINE = InnoDB;
