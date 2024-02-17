DROP TABLE movies;

CREATE TABLE movies(
primaryKey INT,
title VARCHAR(255),
director VARCHAR(255),
releaseDate DATE);
INSERT INTO movies(primaryKey, title, director, releaseDate)
VALUES
(1, "Lawrence of Arabia", "David Lean", "1969-12-16");
INSERT INTO movies (primaryKey, title, director, releaseDate)
VALUES
(2, "Troll 2", "Claudio Fragasoo", "1990-10-12);
select * from movies; 
