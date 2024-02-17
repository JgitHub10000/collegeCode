DROP DATABASE IF EXISTS midtermJordanSmith;
CREATE DATABASE midtermJordanSmith;
use midtermJordanSmith;
 
DROP TABLE IF EXISTS reviews;
CREATE TABLE reviews(
    reviewId INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    reviewText VARCHAR(255),
    numstars INT
);

INSERT INTO reviews (reviewText, numStars)
VALUES 
("Product did not meet expectations", 1),
("Great product, works well", 5);




/*SELECT * FROM reviews;*/
 
SELECT * FROM reviews WHERE numStars< 3;
