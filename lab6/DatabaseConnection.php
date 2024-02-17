<?php
$servername = "localhost";
$username = "root";
$password = "";
 
try {
  $conn = new PDO("mysql:host=$servername;dbname=lab6", $username, $password);
  //echo "Connected successfully";
  $olympians = "SELECT * FROM Olympians";
  $stmt = $conn->prepare($olympians);
  $stmt->execute();
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  //print_r($stmt->fetchAll());
    //print_r($stmt->fetchAll());
    foreach($stmt->fetchAll() as $allOlympians) {
        echo "<br>";
        foreach($allOlympians as $olympian) {
          echo "$olympian <br>";
        }
      }
      
  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


