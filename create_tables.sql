
CREATE DATABASE code_quick;
USE code_quick;

CREATE TABLE users(
	username VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL,
	user_create_time TIMESTAMP NOT NULL,
	PRIMARY KEY (email)
);


CREATE TABLE specialty(
	specialty_name VARCHAR(255) NOT NULL,
	support_wns VARCHAR(255),
	e_and_m_price VARCHAR(255),
	procedure_price VARCHAR(255),
	PRIMARY KEY(specialty_name)
);

CREATE TABLE customer_files(
	file_id INT NOT NULL AUTO_INCREMENT,
	full_upload_name TEXT NOT NULL,
	username VARCHAR(255) NOT NULL,
	file_name VARCHAR(255) NOT NULL,
	batch_id INT NOT NULL,
	uploaded_to_azure TINYINT(1) DEFAULT 0,
	ready_for_download TINYINT(1) DEFAULT 0,
	full_download_name TEXT,
	time_of_upload DATETIME,
	time_of_completion DATETIME,
	time_of_download DATETIME,
	downloaded TINYINT(1) DEFAULT 0,
	comment TEXT,
	PRIMARY KEY(file_id)
);

CREATE TABLE users_all(
	email VARCHAR(255) NOT NULL,
	username VARCHAR(255) NOT NULL,
	full_name VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL,
	user_create_time TIMESTAMP NOT NULL,
	practice VARCHAR(255) NOT NULL,
	specialties TEXT,
	specialties_custom TEXT,
	insurance TEXT,
	insurance_custom TEXT,
	ehr TEXT,
	ehr_custom TEXT,
	address TEXT,
	city VARCHAR(255) NOT NULL,
	state VARCHAR(255) NOT NULL,
	zip VARCHAR(255) NOT NULL,
	patients TEXT,
	trial_period TINYINT(1) DEFAULT 1,
	stripe_active TINYINT(1) DEFAULT 0,
	stripe_token_used VARCHAR(255),
	customer_id VARCHAR(255),
	outstanding_balance INT,
	total_charged INT,
	last_charged DATETIME,
	PRIMARY KEY(email)
);
