<?php
function clean_input($data) {
    $data = trim($data); // removes whitespace
    $data = stripslashes($data); // strips slashes
    $data = htmlspecialchars($data); // replaces html chars
    return $data;
}
 
function connect_to_db($dbName) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    try {
        return new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);      
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
