CREATE TABLE users (
  userID int(11) PRIMARY KEY AUTO_INCREMENT,
  email varchar(255),
  password varchar(255),
  name varchar(255),
  address varchar(255),
  postcode varchar(255)
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

INSERT INTO `users` ( `email`,`password`,`name`,`address`,`postcode`)
VALUES ('admin@admin.com', 'admin', '$2y$10$7DRCuLvadeDW4As.dQEAGeiEKQPVfX53UInSO40TQ/3PqRme/pUAK', '3 Manchester Way' , 'M15 7HJ' );

INSERT INTO `users` ( `email`,`password`,`name`,`address`,`postcode`)
VALUES ('user@user.com', 'user', '$2y$10$UN8rCLCZhfLS6upTZpiYD.28jjJLXCUvykztskMeijYMtaqRF3FQe', '4 Manchester Way' , 'M15 7HJ' );
