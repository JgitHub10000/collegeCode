DROP DATABASE IF EXISTS cms;
CREATE DATABASE cms;
use cms;
 
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
    FOREIGN KEY (siteRole) REFERENCES roles(roleId) ON DELETE CASCADE
);
 
DROP TABLE IF EXISTS articles;
CREATE TABLE articles (
    articleId INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    title VARCHAR(255),
    authorId INT,
    content VARCHAR(10000),
    summary VARCHAR(500),
    publishDate DATE,
    isPublished BOOL,
    FOREIGN KEY (authorId) REFERENCES users(userId) ON DELETE CASCADE
);
 
INSERT INTO roles (roleName)
VALUES
("admin"),
("author"),
("editor");
 
INSERT INTO users (username, fullName, siteRole)
VALUES
("robinclo", "Robin Clower", 1),
("darnellkin", "Darnell King", 2),
("slavanov", "Slava Novik", 3);
 
INSERT INTO articles (title, authorId, content, summary, publishDate, isPublished)
VALUES
("Lorem ipsum dolor sit", 1, "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum", "Lorem ipsum dolor sit amet", "2021-10-31", 1),
("Sit dolor ipsum lorem", 2, "Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum", "Adipiscing elit, sed do eiusmod", "2022-03-31", 0),
("Dolar ipsum lorem", 2, "Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum", "Incididunt ut labore et dolore magna aliqua", "2022-02-12", 1);
 
select* from roles;
select * from users;
select * from articles;

/*SELECT articles.title, articles.publishDate, users.fullName, users.username
FROM articles
LEFT JOIN users ON users.userId=articles.authorId;
 
SELECT articles.title, articles.publishDate, users.fullName, users.username
FROM articles
RIGHT JOIN users ON users.userId=articles.authorId;
*/

/*SELECT users.username, users.fullName, users.siteRole roles.*
FROM users
LEFT JOIN roles ON roles.admin=users.admin     
WHERE users.admin=admin; */
/*
SELECT roles.roleName, users.*
FROM roles
LEFT JOIN users ON users.siteRole=roles.roleId
WHERE roles.roleId=1;*/

/*SELECT u.userId, u.fullName, a.title, a.publishDate
FROM users AS u
LEFT JOIN articles AS a ON u.userId=a.authorId
WHERE u.userId=1*/

/*SELECT u.username, r.roleName
FROM users AS u
INNER JOIN roles AS r ON r.roleId=u.siteRole;*/

