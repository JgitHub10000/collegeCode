<?php
  include("../cms/includes/navbar.php");
?>
<link rel="stylesheet" href="toDoList.css">
<div class='toDoList'>
  <form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="toDo">To Do:</label>
    <input type="text" name="toDo" id="toDo"><br>
 
    <input type="checkbox" name="isDone" id="isDone" value="true">
    <label for="isDone">Is Done</label>
 
    <input type="submit" class="btn btn-primary" value="Submit">
   
   
  </form>
 
<?php
$toDoItem = "";
$isDone = false;

 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (clean_input($_POST['toDo'])) {
        $toDoItem = clean_input($_POST['toDo']);
    }
    if (isset($_POST['isDone'])) {
        $isDone = true;
    }
}
 
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
      $isDone = $listRow['isDone'] ? 'Done' : 'To Do';


      echo "<p class='col-4 offset-1'>$item</p>";
      if ($isDone === "To Do") {
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


function completeToDoListItem($conn, $itemId) {
  $update = "UPDATE items
      SET isDone = true
      WHERE itemId=:itemId";
  $stmt = $conn->prepare($update);
  $stmt->bindParam(':itemId', $itemId);
  $stmt->execute();
}


deleteToDoListItem($conn, "1");

function deleteToDoListItem($conn, $itemId) {
    $delete = "DELETE FROM items WHERE itemId=:itemId";
    $stmt = $conn->prepare($delete);
    $stmt->bindParam(':itemId', $itemId);
    $stmt->execute();
}
