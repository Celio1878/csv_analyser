CREATE DATABASE IF NOT EXISTS import;
USE import;
CREATE TABLE IF NOT EXISTS csv (
id INT(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  tempo varchar(10) NOT NULL,
  temperatura_1 VARCHAR(20) NOT NULL,
  temperatura_2 VARCHAR(20) NOT NULL,
  temperatura_3 VARCHAR(20) NOT NULL,
  temperatura_4 VARCHAR(20) NOT NULL,
  temperatura_5 VARCHAR(20) NOT NULL,
  temperatura_6 VARCHAR(20) NOT NULL,
  temperatura_7 VARCHAR(20) NOT NULL,
  temperatura_8 VARCHAR(20) NOT NULL,
  temperatura_9 VARCHAR(20) NOT NULL,
  temperatura_10 VARCHAR(20) NOT NULL,
  temperatura_11 VARCHAR(20) NOT NULL,
  temperatura_12 VARCHAR(20) NOT NULL);
SELECT * FROM csv;