<?php
  include("../cms/includes/navbar.php");
?>
<link rel="stylesheet" href="toDoList.css">
<div class='toDoList'>
 <form method="post" action="toDoList.php">

  
    <label for="toDo">To Do:</label>
    
    <input type="text"  name="toDo" id="toDo" value="<?php echo $_GET['completedItemId']?>"><br>
 
 
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
  
if(isset($_GET['completedItemId']));/*{
  completeToDoListItem($conn, $_GET['completedItemId']);

   header("Location: toDoList.php");
 
}*/




