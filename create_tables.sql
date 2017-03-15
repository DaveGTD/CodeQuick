
CREATE DATABASE code_quick;
USE code_quick;

CREATE TABLE users(
	user_id INT NOT NULL AUTO_INCREMENT,
	username VARCHAR(255) NOT NULL,
	email VARCHAR(255),
	password VARCHAR(255) NOT NULL,
	PRIMARY KEY (user_id)
);
