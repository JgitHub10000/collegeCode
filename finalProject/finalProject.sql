DROP DATABASE IF EXISTS finalProjectJordanSmith;
CREATE DATABASE finalProjectJordanSmith;
use finalProjectJordanSmith;
 
DROP TABLE IF EXISTS roles;
CREATE TABLE roles (
    roleId INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    roleName VARCHAR(255)
);

 
DROP TABLE IF EXISTS users;
CREATE TABLE users (
    userId INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    username VARCHAR(255),
    userPassword VARCHAR(255),
    fullName VARCHAR(255),
    siteRole INT,
    FOREIGN KEY (siteRole) REFERENCES roles(roleId)
);
 
DROP TABLE IF EXISTS scalePatterns;
CREATE TABLE scalePatterns (
	scaleId INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    scaleType VARCHAR(255),
    scalePosition INT,
    horizontalPosition INT,
    verticalPosition INT,
    scaleImage VARBINARY(8000),
    FOREIGN KEY (scaleId) REFERENCES users(userId)
);
 
INSERT INTO roles (roleName)
VALUES
("admin"),
("student"),
("teacher");
 
INSERT INTO users (username, fullName, siteRole)
VALUES
("jordan", "Jordan Smith", 1),
("tim", "Tim Cummiskey", 2),
("stan", "Stan Smith", 3);
 
INSERT INTO scalePatterns ( scaleType, scalePosition, horizontalPosition, verticalPosition)
VALUES
("Ionian Scales", 1, 4, 6),
("Aeolian Scales", 2, 3, 2),
("Harmonic Minor", 3, 7, 9);
 
select* from roles;
select * from users;
select * from scalePatterns;
