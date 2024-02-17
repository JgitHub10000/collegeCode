<?php
  include("../cms/includes/navbar.php");
?>
<link rel="stylesheet" href="toDoList.css">
<div class='reviewText'>
  <form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="toDo">Product Review:</label>
    <input type="text" name="toDo" id="toDo"><br>


    </div> <fieldset class="form-group"> <legend>Rating</legend> <div class="form-check"> 
    <label for="stars">select stars</label><br>  

        <label for="stars" class="form-check-label"> <input type="radio" class="form-check-input" name="stars" id="stars"  value="*" checked>1 Star (Poor) </input><br /> 
        <label for="stars"  class="form-check-label"> <input type="radio" class="form-check-input" name="stars" id="stars" value="**" checked>2 Star (Fair) </input><br />
        <label for="stars"  class="form-check-label"> <input type="radio" class="form-check-input" name="stars" id="stars" value="***" checked>3 Star (Good)</input><br />
        <label  for="stars" class="form-check-label"> <input type="radio" class="form-check-input" name="stars" id="stars" value="****" checked>4 Star (Great)</input><br />
        <label  for="stars" class="form-check-label"> <input type="radio" class="form-check-input" name="stars" id="stars" value="*****" checked>5 Star (Perfect) </input><br />
 
 
    <input type="submit" class="btn btn-primary" value="Submit">
   
   
  </form>

 
  
 
<?php
$toDoItem = "";
$isDone = false;
$stars= "stars";
$stary="";

 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (clean_input($_POST['toDo'])) {
        $toDoItem = clean_input($_POST['toDo']);
    }
    if (isset($_POST['isDone'])) {
        $isDone = true;
    }
}
/*
if (empty($_POST["stars"])) {
  $inputError = "Input required";
  $stars = "";
} else {
  $stars= clean_input ($_POST["stars"]);
}


if (empty($_POST["stars"])) {

  $stary = "";
} else {
  $stary = clean_input ($_POST["stars"]);
}
*/


 
$conn = connect_to_db("toDoList");
if (!empty($toDoItem)) {
  addToDoListItem($conn, $toDoItem, $isDone);
}
 
if(isset($_GET['completedItemId'])) {
  completeToDoListItem($conn, $_GET['completedItemId']);

}elseif (isset($_GET['deletedItemId'])) {
  deleteToDoListItem($conn, $_GET['deletedItemId']);
}



printToDoList($conn);




 
function printToDoList($conn) {
    $selectItem = "SELECT * FROM items";
    $stmt = $conn->prepare($selectItem);
    $stmt->execute();
 
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach($stmt->fetchAll() as $listRow) {
      echo "<div class='toDoListItem row'>";
      $itemId = $listRow['itemId'];
      $item = $listRow['toDoItem'];
      $isDone = $listRow['isDone'] ? 'To Do': '*****';

     /*wanted stars where the ****** is. couldnt connect id of radio button to display value of stars*/



      echo "<p class='col-4 offset-1'>$item</p>";
      if ($isDone === "Product Review") {
          echo "
          <p class='col-2'>$isDone</p>

          <a class='btn btn-success col-1' href='editItem.php?completedItemId=$itemId'>Edit</a>

          <a class='btn btn-danger offset-1 col-1' href='toDoList.php?deletedItemId=$itemId'>Delete</a> </br>";
      } else {
          echo "<p class='col-2'>$isDone</p>
          <a class='btn btn-danger offset-2 col-1' href='toDoList.php?deletedItemId=$itemId'>Delete</a> </br>";
      }        
      echo "</div>";
  }
}

function addToDoListItem($conn, $item, $isDone) {
  $isDone = (int) $isDone;
  $insert = "INSERT INTO items (toDoItem,isDone)
  VALUES (:item, :isDone)";
  $stmt = $conn->prepare($insert);
  $stmt->bindParam(':item', $item);
  $stmt->bindParam(':isDone', $isDone, PDO::PARAM_BOOL);
  $stmt->execute();
}




deleteToDoListItem($conn, "1");

function deleteToDoListItem($conn, $itemId) {
    $delete = "DELETE FROM items WHERE itemId=:itemId";
    $stmt = $conn->prepare($delete);
    $stmt->bindParam(':itemId', $itemId);
    $stmt->execute();
}

?>