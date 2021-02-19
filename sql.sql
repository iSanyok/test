CREATE DATABASE testtask;
CREATE TABLE users(id BIGINT(20) AUTO_INCREMENT, name varchar(255), surname varchar(255), patronymic varchar(255), updated_at timestamp, PRIMARY KEY (id));
CREATE TABLE phones (id BIGINT(20), user_id BIGINT (20), phone INT, PRIMARY KEY (id), FOREIGN KEY (user_id) REFERENCES users(id));
