-- DROP TABLE schedule;
-- DROP TABLE requests;
-- DROP TABLE users;

-- Admin Password: admin
-- Users Password: user

-- Change Settings For local db and protocols or application may not run.

-- BaseUrl = $config['base_url'] = 'http://localhost:8888/bookingApplication/';
-- Location: application/config/config.php

-- Database: Name: booking-db / User: root / Password: root /
-- Location: application/config/database.php

-- Routes: application/config/routes.php - Shows all controller urls

-- Unit Tests can be viewed
-- Location: http://localhost:8888/bookingApplication/index.php/Testing_Controller
-- Testing_Controller

CREATE TABLE users (
  userID int(11) PRIMARY KEY AUTO_INCREMENT,
  email varchar(255),
  password varchar(255),
  name varchar(255),
  address varchar(255),
  postcode varchar(255),
  score varchar(11),
  role varchar(255)
);


CREATE TABLE requests(
  requestID int(11) PRIMARY KEY AUTO_INCREMENT,
  userID int(11),
  FOREIGN KEY (userID) REFERENCES users(userID),
  service varchar(255),
  bookingDate DATE,
  timeOfDay varchar(255),
  status varchar(255)
);


CREATE TABLE schedule(
  scheduleID int(11) PRIMARY KEY AUTO_INCREMENT,
  userID int(11),
  FOREIGN KEY (userID) REFERENCES users(userID),
  bookingDate DATE,
  service varchar(255),
  startTime varchar(255),
  endTime varchar(255),
  status varchar(255),
  requestID int(11),
  FOREIGN KEY (requestID) REFERENCES requests(requestID)
);

INSERT INTO `users` ( `email`,`password`,`name`,`address`,`postcode`,`score`,`role`)
VALUES ('admin@admin.com', '$2y$10$7DRCuLvadeDW4As.dQEAGeiEKQPVfX53UInSO40TQ/3PqRme/pUAK', 'admin', '3 Manchester Way' , 'M15 7HJ' , 0 , 'admin' );

INSERT INTO `users` ( `email`,`password`,`name`,`address`,`postcode`,`score`,`role`)
VALUES ('user@user.com', '$2y$10$UN8rCLCZhfLS6upTZpiYD.28jjJLXCUvykztskMeijYMtaqRF3FQe', 'user', '0 Manchester Way' , 'M15 7HJ' , 0 , 'customer' );

INSERT INTO `users` ( `email`,`password`,`name`,`address`,`postcode`,`score`,`role`)
VALUES ('user@user1.com', '$2y$10$UN8rCLCZhfLS6upTZpiYD.28jjJLXCUvykztskMeijYMtaqRF3FQe', 'user1', '1 Manchester Way' , 'M15 7HJ' , 0 , 'customer' );

INSERT INTO `users` ( `email`,`password`,`name`,`address`,`postcode`,`score`,`role`)
VALUES ('user@user2.com', '$2y$10$UN8rCLCZhfLS6upTZpiYD.28jjJLXCUvykztskMeijYMtaqRF3FQe', 'user2', '2 Manchester Way' , 'M15 7HJ' , 0 , 'customer' );

INSERT INTO `users` ( `email`,`password`,`name`,`address`,`postcode`,`score`,`role`)
VALUES ('user@user3.com', '$2y$10$UN8rCLCZhfLS6upTZpiYD.28jjJLXCUvykztskMeijYMtaqRF3FQe', 'user3', '3 Manchester Way' , 'M15 7HJ' , 0 , 'customer' );

INSERT INTO `users` ( `email`,`password`,`name`,`address`,`postcode`,`score`,`role`)
VALUES ('user@user4.com', '$2y$10$UN8rCLCZhfLS6upTZpiYD.28jjJLXCUvykztskMeijYMtaqRF3FQe', 'user4', '4 Manchester Way' , 'M15 7HJ' , 0 , 'customer' );

INSERT INTO `users` ( `email`,`password`,`name`,`address`,`postcode`,`score`,`role`)
VALUES ('user@user5.com', '$2y$10$UN8rCLCZhfLS6upTZpiYD.28jjJLXCUvykztskMeijYMtaqRF3FQe', 'user5', '5 Manchester Way' , 'M15 7HJ' , 0 , 'customer' );

INSERT INTO `users` ( `email`,`password`,`name`,`address`,`postcode`,`score`,`role`)
VALUES ('user@user6.com', '$2y$10$UN8rCLCZhfLS6upTZpiYD.28jjJLXCUvykztskMeijYMtaqRF3FQe', 'user6', '6 Manchester Way' , 'M15 7HJ' , 0 , 'customer' );

INSERT INTO `users` ( `email`,`password`,`name`,`address`,`postcode`,`score`,`role`)
VALUES ('user@user7.com', '$2y$10$UN8rCLCZhfLS6upTZpiYD.28jjJLXCUvykztskMeijYMtaqRF3FQe', 'user7', '7 Manchester Way' , 'M15 7HJ' , 0 , 'customer' );

INSERT INTO `users` ( `email`,`password`,`name`,`address`,`postcode`,`score`,`role`)
VALUES ('user@user8.com', '$2y$10$UN8rCLCZhfLS6upTZpiYD.28jjJLXCUvykztskMeijYMtaqRF3FQe', 'user8', '8 Manchester Way' , 'M15 7HJ' , 0 , 'customer' );

INSERT INTO `users` ( `email`,`password`,`name`,`address`,`postcode`,`score`,`role`)
VALUES ('user@user9.com', '$2y$10$UN8rCLCZhfLS6upTZpiYD.28jjJLXCUvykztskMeijYMtaqRF3FQe', 'user9', '9 Manchester Way' , 'M15 7HJ' , 0 , 'customer' );

INSERT INTO `users` ( `email`,`password`,`name`,`address`,`postcode`,`score`,`role`)
VALUES ('user@user10.com', '$2y$10$UN8rCLCZhfLS6upTZpiYD.28jjJLXCUvykztskMeijYMtaqRF3FQe', 'user10', '10 Manchester Way' , 'M15 7HJ' , 0 , 'customer' );


INSERT INTO `requests` ( `userID`,`service`,`bookingDate`,`timeOfDay`,`status`)
VALUES ( '2', 'Service Three', CURDATE() , 'Morning' ,'pending' );

INSERT INTO `requests` ( `userID`,`service`,`bookingDate`,`timeOfDay`,`status`)
VALUES ( '3', 'Service Two', CURDATE() , 'Morning' ,'pending' );

INSERT INTO `requests` ( `userID`,`service`,`bookingDate`,`timeOfDay`,`status`)
VALUES ( '4', 'Service One', CURDATE() , 'Morning' ,'pending' );

INSERT INTO `requests` ( `userID`,`service`,`bookingDate`,`timeOfDay`,`status`)
VALUES ( '5', 'Service Two', CURDATE() , 'Morning' ,'pending' );

INSERT INTO `requests` ( `userID`,`service`,`bookingDate`,`timeOfDay`,`status`)
VALUES ( '6', 'Service Three', CURDATE() , 'Morning' ,'pending' );

INSERT INTO `requests` ( `userID`,`service`,`bookingDate`,`timeOfDay`,`status`)
VALUES ( '7', 'Service One', CURDATE() , 'Morning' ,'pending' );

INSERT INTO `requests` ( `userID`,`service`,`bookingDate`,`timeOfDay`,`status`)
VALUES ( '2', 'Service One', CURDATE() , 'Afternoon' ,'pending' );

INSERT INTO `requests` ( `userID`,`service`,`bookingDate`,`timeOfDay`,`status`)
VALUES ( '3', 'Service Two', CURDATE() , 'Afternoon' ,'pending' );

INSERT INTO `requests` ( `userID`,`service`,`bookingDate`,`timeOfDay`,`status`)
VALUES ( '4', 'Service Three', CURDATE() , 'Afternoon' ,'pending' );

INSERT INTO `requests` ( `userID`,`service`,`bookingDate`,`timeOfDay`,`status`)
VALUES ( '5', 'Service One', CURDATE() , 'Afternoon' ,'pending' );

INSERT INTO `requests` ( `userID`,`service`,`bookingDate`,`timeOfDay`,`status`)
VALUES ( '6', 'Service Two', CURDATE() , 'Afternoon' ,'pending' );

INSERT INTO `requests` ( `userID`,`service`,`bookingDate`,`timeOfDay`,`status`)
VALUES ( '7', 'Service Three', CURDATE() , 'Afternoon' ,'pending' );

INSERT INTO `requests` ( `userID`,`service`,`bookingDate`,`timeOfDay`,`status`)
VALUES ( '8', 'Service Three', CURDATE() , 'Morning' ,'pending' );

INSERT INTO `requests` ( `userID`,`service`,`bookingDate`,`timeOfDay`,`status`)
VALUES ( '8', 'Service Three', CURDATE() , 'Afternoon' ,'pending' );

INSERT INTO `requests` ( `userID`,`service`,`bookingDate`,`timeOfDay`,`status`)
VALUES ( '9', 'Service Two', CURDATE() , 'Morning' ,'pending' );

INSERT INTO `requests` ( `userID`,`service`,`bookingDate`,`timeOfDay`,`status`)
VALUES ( '9', 'Service One', CURDATE() , 'Afternoon' ,'pending' );

INSERT INTO `requests` ( `userID`,`service`,`bookingDate`,`timeOfDay`,`status`)
VALUES ( '10', 'Service Three', CURDATE() , 'Morning' ,'pending' );

INSERT INTO `requests` ( `userID`,`service`,`bookingDate`,`timeOfDay`,`status`)
VALUES ( '10', 'Service One', CURDATE() , 'Afternoon' ,'pending' );
