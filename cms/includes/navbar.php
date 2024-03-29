<?php
include("utils.php");
?>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="../includes/article.css">  
  <link href="https://startbootstrap.github.io/startbootstrap-clean-blog/css/styles.css" rel="stylesheet">


  <?php
include("utils.php");
include("Article.php");
$conn = connect_to_db("cms");
session_start();
?>



</head>




 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../pages/homepage.php">News Site</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">


      <?php if (isset($_SESSION['username'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="../includes/Logout.php">Logout</a>
          </li>
        <?php } else { ?>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../pages/SignUp.php">Sign Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages/Login.php">Login</a>
          </li>
        <?php } ?>
        
      </ul>
    </div>
  </div>
</nav>

