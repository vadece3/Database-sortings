CREATE DATABASE IF NOT EXISTS VAD;

USE VAD;



create table IF NOT EXISTS idnumber(`id` int auto_increment primary key, `vidnumber` varchar(20) );
insert into idnumber (`vidnumber`) values ('ABC123'),('CDE456'),('VFR789'),('Fgg321'),('6hvm54'),('4ytu58'),('65gkg1'),('24gul9'),('32kyk6'),('47gfhf8'),('9fghfg52'),('0hjfh23'),('65sfh7'),('98sfg4');

create table IF NOT EXISTS travelling_option(`id` int auto_increment primary key, `vtravelling_option` char(20) );
insert into travelling_option (`vtravelling_option`) values ('YAOUNDE'),('DOUALA'),('YAOUNDE VIP'),('DOUALA VIP');

create table IF NOT EXISTS rtime(`id` int auto_increment primary key, `vtime` varchar(20) );
insert into rtime (`vtime`) values ('6AM'),('9AM'),('1PM'),('5PM'),('10PM');

create table IF NOT EXISTS payment(`id` int auto_increment primary key, `vpayment` char(20) );
insert into payment (`vpayment`) values ('CASH'),('MOBILE');

create table IF NOT EXISTS seatNumber(`id` int auto_increment primary key, `vseatNumber` int(1) );
insert into seatNumber (`vseatNumber`) values (1),(2),(3),(4),(5);




CREATE TABLE IF NOT EXISTS records (
  `generated_ID` int(20) NOT NULL,
  `id_number` varchar(20) DEFAULT NULL,
  `travelling_option` char(20) DEFAULT NULL,
  `date` timestamp  NULL          DEFAULT CURRENT_TIMESTAMP,
  `time` varchar(20) DEFAULT NULL,
  `payment` char(20) DEFAULT NULL,
  `seatNumber` int(1) DEFAULT NULL,
  `cost` int(20) DEFAULT NULL,
  PRIMARY KEY (`generated_ID`)
) ;


DELIMITER $$
CREATE PROCEDURE generate_data()
BEGIN
  DECLARE i INT DEFAULT 0;
  WHILE i < 1000 DO
    INSERT INTO records (`generated_ID`, `id_number`, `travelling_option`, `date`, `time`, `payment`, `seatNumber`, `cost`) VALUES (
      FLOOR(1+ rand()*9999),
      (select vidnumber from idnumber order by rand() limit 1),
       (select vtravelling_option from travelling_option order by rand() limit 1),
      FROM_UNIXTIME(UNIX_TIMESTAMP('2020-01-01 01:00:00')+FLOOR(RAND()*31536000)),
      (select vtime from rtime order by rand() limit 1),
       (select vpayment from payment order by rand() limit 1),
       (select vseatNumber from seatNumber order by rand() limit 1),
       (select vseatNumber from seatNumber order by rand() limit 1)
    );
    SET i = i + 1;
  END WHILE;
END$$
DELIMITER ;

CALL generate_data();


DROP PROCEDURE generate_data;



 /* CREATE TABLE `data` 
(
  `id`         bigint(20) NOT NULL      AUTO_INCREMENT,
  `datetime`   timestamp  NULL          DEFAULT CURRENT_TIMESTAMP,
  `channel`    int(11)                  DEFAULT NULL,
  `value`      float                    DEFAULT NULL,

  PRIMARY KEY (`id`)
);


DELIMITER $$
CREATE PROCEDURE generate_data()
BEGIN
  DECLARE i INT DEFAULT 0;
  WHILE i < 1000 DO
    INSERT INTO `data` (`datetime`,`value`,`channel`) VALUES (
      FROM_UNIXTIME(UNIX_TIMESTAMP('2014-01-01 01:00:00')+FLOOR(RAND()*31536000)),
      ROUND(RAND()*100,2),
      1
    );
    SET i = i + 1;
  END WHILE;
END$$
DELIMITER ;

CALL generate_data();
*/