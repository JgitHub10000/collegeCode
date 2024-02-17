<html>
    <?php
        include("style.php");
    ?>

  

  <?php

      $mpg = "";
      $groceries ="";
      $mpgErr = "";
      $numErr = "";
      $commute="";
     
      $octane="";
      $total="";
      $discountTotal="";

       $octaneDiscount="";
       $discount="";
       $octaneDiscount87="";
       $octaneDiscount89="";
        $octaneDiscount92="";
      
       
      
      
      
      
      
   
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mpg= clean_input($_POST["mpg"]);
        if (!is_numeric($mpg)) {
          $numErr = "Input must be a number";
          $mpg="";
        } 
          
        $groceries = clean_input($_POST["groceries"]);
        if (!is_numeric($groceries)) {
          $numErr = "Input must be a number";
          $groceries = ""; // clear invalid result for $favoriteNumber */
        }
        $commute = clean_input($_POST["commute"]);
        if (!is_numeric($commute)) {
          $numErr = "Input must be a number";
          $commute = ""; // clear invalid result for $favoriteNumber

        }

            
  $octane = clean_input($_POST["octane"]);
  if (!is_numeric($octane)) {
    $numErr = "Input must be a number";
    $octane = ""; // clear invalid result for $favoriteNumber
  }        

        $octaneDiscount87 = clean_input($_POST["octaneDiscount87"]);
        if (!is_numeric($octaneDiscount87)) {
        $numErr = "Input must be a number";
         $octaneDiscount87=""; // clear invalid result for $favoriteNumber
          }

        $octaneDiscount89 = clean_input($_POST["octaneDiscount89"]);
        if (!is_numeric($octaneDiscount89)) {
        $numErr = "Input must be a number";
          $octaneDiscount89 =""; // clear invalid result for $favoriteNumber
          }

        $octaneDiscount92 = clean_input($_POST["octaneDiscount92"]);
        if (!is_numeric($octaneDiscount92)) {
          $numErr = "Input must be a number";
          $octaneDiscount92 =""; // clear invalid result for $favoriteNumber
        }


    }

    
      
      
   
      function clean_input($data) {
        $data = trim($data); // removes whitespace
        $data = stripslashes($data); // strips slashes
        $data = htmlspecialchars($data); // replaces html chars
        return $data;
      }

     
      
      
      

?>






<form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <label for="mpg">mpg:</label>
    <input type="text" name="mpg" id="mpg" required><br>
    <span class="error">* <?php echo $numErr;?></span><br>

    


   <label for="groceries">groceries:</label>
    <input type="text" name="groceries" id="groceries"><br>
    <span class="error">* <?php echo $numErr;?></span><br>-->
    

    <label for="commute">commute:</label>
    <input type="text" name="commute" id="commute"><br>
    <span class="error">* <?php echo $numErr;?></span><br><br><br>

    
    
   


        <label for="octane">Octane:(select grade)</label><br>  

        <input  name="octane" value="1.89" id="octane" type="radio"><br>For 87 octane select above<br><br>
        <input  name="octane" value="1.99" id="octane" type="radio"><br>For 89 octane select above<br><br>
        <input  name="octane" value="2.09" id="octane" type="radio"><br>For 92 octane select above<br><br><br>

        <label for="octaneDiscount87">Discount octane:(select grade)</label><br>

<input  name="octaneDiscount87" value="<?php echo (floor($groceries / 100)) * (.1);?>" id="octaneDiscount87" type="radio"><br>For Dicount 87 octane select above<br>
<input  name="octaneDiscount89" value="<?php echo (floor($groceries / 100)) * (.1);?>" id="octaneDiscount89" type="radio"><br>For Dicount 89 octane select above<br>
<input  name="octaneDiscount92" value="<?php echo (floor($groceries / 100)) * (.1);?>" id="octaneDiscount92" type="radio"><br>For Dicount 92 octane select above<br><br><br>
       
        


        
    <input type="submit" value="Submit" >



  </form>
<html>
  <p>mpg: <?php echo $mpg; ?> </p>
  <p>cost of groceries: <?php echo $groceries ?> </p>
  <p>commute(Miles): <?php echo $commute?> </p>
  <p>octane: <?php echo $octane?> </p>
  <p>discount:<?php  echo floor($groceries / 100) * 100/1000;?> per gallon </p>   

  
 
  <p>Total: $ <?php  echo $total = ($commute / $mpg)*$octane;?></p>

  <p>Discount total: $ <?php 
   
  
 
if($octaneDiscount87){
  echo $discountTotal=(1.89-$octaneDiscount87)*($commute / $mpg);

}
if($octaneDiscount89){
  echo $discountTotal=(1.99-$octaneDiscount89)*($commute / $mpg);

}
  
if($octaneDiscount92){
  echo $discountTotal=(2.09-$octaneDiscount92)*($commute / $mpg);

}?></p>

  </html>

  

  
  
  