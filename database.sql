DROP Users

CREATE TABLE users (
  GUID int(11) PRIMARY KEY AUTO_INCREMENT,
  name varchar(255),
  email varchar(255),
  password varchar(255),
  address varchar(255),
  postcode varchar(255)
);
