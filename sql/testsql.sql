CREATE EXTENSION IF NOT EXISTS pgcrypto;

DROP SEQUENCE IF EXISTS users_id_seq cascade;
CREATE SEQUENCE users_id_seq START 1000;

DROP TABLE IF EXISTS testusers;
CREATE TABLE testusers (
		id INT PRIMARY KEY DEFAULT nextval('users_id_seq'),
		EmailAddress VARCHAR(255) unique,
		Password varchar(255) not null,
		FirstName varchar(120),
		LastName varchar(126),
		LastAccess TIMESTAMP,
		EnrolDate TIMESTAMP
		-- Enable Boolean,
		-- TYPE VARCHAR(2)


);

INSERT INTO testusers (EmailAddress, Password, FirstName, LastName, LastAccess, EnrolDate, Enable, type) VALUES (
'jdoo@dcmail.ca', crypt('some_password',gen_salt('bf')), --NOTE: bf stand for blowfish
'John', 'Doe', '2020-08-22 19:10:25','2020-09-22 11:11:11'
);

INSERT INTO testusers (EmailAddress, Password, FirstName, LastName, LastAccess, EnrolDate, Enable, type) VALUES (
'mSccot@dcmail.ca', crypt('theoffice',gen_salt('bf')), --NOTE: bf stand for blowfish
'Micheal', 'Sccot', '2020-02-22 19:10:25','2020-08-22 15:43:11'
);

INSERT INTO testusers (EmailAddress, Password, FirstName, LastName, LastAccess, EnrolDate, Enable, type) VALUES (
'DSchrute@dcmail.ca', crypt('bearsbeatsgrills',gen_salt('bf')), --NOTE: bf stand for blowfish
'Dwight', 'Schrute', '2020-08-22 12:43:25','2020-06-19 11:11:11'
);



select * from "testusers";
