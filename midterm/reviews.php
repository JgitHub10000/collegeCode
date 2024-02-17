<html>
<body>

<?php 
  include("../cms/includes/navbar.php");

$conn = connect_to_db("midtermJordanSmith");?>


<form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<label for="textReview">Write your Product Review here:</label>

<textarea id="textReview" name="textReview"required rows="4" cols="50">

</textarea><br><br>




<label for="rateProduct">select product rating:</label>

        <input type="radio" name="rateProduct" value="1"required>1
        <input type="radio" name="rateProduct"value="2">2
        <input type="radio" name="rateProduct"value="3">3
        <input type="radio" name="rateProduct"value="4">4
        <input type="radio" name="rateProduct" value="5">5
        
        <input type="submit" value="Submit">






 
    
  </form>

 
  
  <p> your review:<?php echo htmlspecialchars($_POST["textReview"]); ?> </p>

  <p>your product rating:<?php  echo htmlspecialchars($_POST["rateProduct"]);?> </P>


  </body>
</html>

<?php

  /*include("../cms/includes/navbar.php");

$conn = connect_to_db("midtermJordanSmith");

    $textReview= "";
    $rateProduct = "false";
   
    
     
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (clean_input($_POST['textReview'])) {
            $textReview = clean_input($_POST['textReview']);
        }
        if (isset($_POST['rateProduct'])) {
            $rateProduct = true;
        }
    }
     
    $conn = connect_to_db("midtermJordanSmith");
    if (!empty($textReview)) {
      addToDoListItem($conn, $textReview, $rateProduct);
    }
     
    if(isset($_GET['completedItemId'])) {
      completeToDoListItem($conn, $_GET['completedItemId']);
    
    }elseif (isset($_GET['deletedItemId'])) {
      deleteToDoListItem($conn, $_GET['deletedItemId']);
    }
    
    
    
    printToDoList($conn);


    
 
    */
  



/*
<?php
function addToDoListItem($conn, reviewText, $rateProduct) {
    $rateProduct = (int) $rateProduct;
    $insert = "INSERT INTO items (reviewText,rateProduct)
    VALUES (:reviewText, :numStars)";
    $stmt = $conn->prepare($insert);
    $stmt->bindParam(':reviewText', $reviewText);
    $stmt->bindParam(':rateProduct', $rateProduct, PDO::PARAM_BOOL);
    $stmt->execute();
  }

?>*/





