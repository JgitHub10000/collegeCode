<?php
  include("../includes/navbar.php");
?>
 
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Welcome to News Site</h1>
    <p class="lead">Catch up on breaking news, hot gossip, and everything you need to start your day.</p>
  </div>
</div>

<?php
/*$articles = Article::getArticlesFromDb($conn);
foreach ($articles as $article) {
  print_r($article);
  echo "<br>";
}*/
include("../includes/3x3Cards.php");
?>




