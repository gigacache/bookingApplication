DROP Users

CREATE TABLE users (
  userID int(11) PRIMARY KEY AUTO_INCREMENT,
  name varchar(255),
  email varchar(255),
  password varchar(255),
  address varchar(255),
  postcode varchar(255)
);


CREATE TABLE bookings(
  bookingID int(11) PRIMARY KEY AUTO_INCREMENT,
  userID int(11),
  FOREIGN KEY (userID) REFERENCES users(userID),
  service varchar(255),
  dayDate date(),
  dayTimes time(),
  status varchar(255)
);
