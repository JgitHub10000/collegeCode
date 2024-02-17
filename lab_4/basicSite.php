<html>
    <?php
        include("header.php");
    ?>
<body>
    <h1>Welcome to a basic site</h1>

    <?php
      $toggleParagraphs = false;

      for ($i=0;$i<10;$i++ )  { 
        if ($i % 2 == 0){
            echo "<div style=\"width:100px;height:100px;border:1px solid #000; display: inline-block; margin: 5px; background-color: black;\"></div>";

      } else { 
        echo "<div style=\"width:100px;height:100px;border:1px solid #000; display: inline-block; margin: 5px; background-color: white;\"></div>";
      }
    
      } 
      
      if ($toggleParagraphs) {
        echo "<p>Currently I'm displaying this paragraph</p>";
      } else {
        echo "<p>Now I'm displaying a different one</p>";
      }
      $name = "";
      $favoriteNumber = "";
      $fullNameErr = "";
   
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["fullName"])) {
          $fullNameErr = "Name is required";
        } else {
          $name = clean_input($_POST["fullName"]);
        }
        $favoriteNumber = clean_input($_POST["number"]);
        if (!is_numeric($favoriteNumber)) {
          $numErr = "Input must be a number";
          $favoriteNumber = ""; // clear invalid result for $favoriteNumber

      }
    }
   
      function clean_input($data) {
        $data = trim($data); // removes whitespace
        $data = stripslashes($data); // strips slashes
        $data = htmlspecialchars($data); // replaces html chars
        return $data;
      }
  

    
      ?>
      
      <style>
    .error {color: #FF0000;}
  </style>
  <p><span class="error">* required field</span></p>
  <form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="fullName">Name:</label>
    <input type="text" name="fullName" id="fullName" required>
    <span class="error">* <?php echo $fullNameErr;?></span><br>
    <label for="number">Favorite Number:</label>
    <input type="text" name="number" id="number"><br>
    <span class="error">* <?php echo $numErr;?></span><br>
    <input type="submit" value="Submit">
  </form>
  <p>Name: <?php echo $name; ?> </p>
  <p>Your favorite number is: <?php echo $favoriteNumber ?> </p>




Reload the page










</body>
</html>
