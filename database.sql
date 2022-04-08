-- DROP TABLE schedule;
-- DROP TABLE requests;
-- DROP TABLE users;

-- Admin Password: admin
-- User Password: user

-- Change Setting For local db and protocols of application may not run.

-- BaseUrl = $config['base_url'] = 'http://localhost:8888/bookingApplication/';
-- Location: application/config/config.php

-- Database: Name: booking-db / User: root / Password: root /
-- Location: application/config/database.php

-- Routes: application/config/routes.php - Shows all controller urls


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
VALUES ('user@user.com', '$2y$10$UN8rCLCZhfLS6upTZpiYD.28jjJLXCUvykztskMeijYMtaqRF3FQe', 'user', '4 Manchester Way' , 'M15 7HJ' , 0 , 'customer' );
