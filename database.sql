DROP table bookings
DROP table users


CREATE TABLE users (
  userID int(11) PRIMARY KEY AUTO_INCREMENT,
  email varchar(255),
  password varchar(255),
  name varchar(255),
  address varchar(255),
  postcode varchar(255)
);


CREATE TABLE bookings(
  bookingID int(11) PRIMARY KEY AUTO_INCREMENT,
  userID int(11),
  FOREIGN KEY (userID) REFERENCES users(userID),
  service varchar(255),
  bookingDate DATE,
  bookingTimes varchar(255),
  status varchar(255)
);

INSERT INTO `users` ( `email`,`password`,`name`,`address`,`postcode`)
VALUES ('admin@admin.com', 'admin', 'admin', '3 Manchester Way' , 'M15 7HJ' );

INSERT INTO `users` ( `email`,`password`,`name`,`address`,`postcode`)
VALUES ('user@user.com', 'user', 'user', '4 Manchester Way' , 'M15 7HJ' );
