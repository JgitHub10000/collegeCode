CREATE DATABASE IF NOT EXISTS toDoList;
USE toDoList;
 
DROP TABLE IF EXISTS items;
CREATE TABLE items (
  itemId INT PRIMARY KEY AUTO_INCREMENT,
  toDoItem VARCHAR(255), 
  isDone BOOL
);
 
INSERT INTO items (toDoItem, isDone)
VALUES
("Finish lab 7", false),
("Learn how to update records", false),
("Graduate first grade", true);
 
SELECT * FROM items;