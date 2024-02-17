DROP DATABASE IF EXISTS midtermJordanSmith;
CREATE DATABASE midtermJordanSmith;
use midtermJordanSmith;
 
DROP TABLE IF EXISTS reviews;
CREATE TABLE reviews(
    reviewId INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    reviewText VARCHAR(255),
    numstars INT
);


INSERT INTO reviews (numStars)
VALUES
("1"),
("5");


 
 SELECT * FROM reviews WHERE numStars< 3;

