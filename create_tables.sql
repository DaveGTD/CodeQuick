
CREATE DATABASE code_quick;
USE code_quick;

CREATE TABLE users(
	user_id INT NOT NULL AUTO_INCREMENT,
	username VARCHAR(255) NOT NULL,
	email VARCHAR(255),
	password VARCHAR(255) NOT NULL,
	user_create_date DATETIME NOT NULL,
	PRIMARY KEY (user_id)
);


CREATE TABLE specialty(
	specialty_name VARCHAR(255) NOT NULL,
	support_wns VARCHAR(255),
	e_and_m_price VARCHAR(255),
	procedure_price VARCHAR(255),
	PRIMARY KEY(specialty_name)
);

CREATE TABLE customer_files(
	customer_email VARCHAR(255) NOT NULL,
	file_name VARCHAR(255) NOT NULL,
	ready_for_download TINYINT(1) DEFAULT 0,
	comment TEXT,
	PRIMARY KEY(customer_email)
)
