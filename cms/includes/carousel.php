<?php
$numSlides = 5;
 
$articles = Article::getArticlesFromDb($conn, $numSlides);
$numSlides = count($articles) < $numSlides ? count($articles) : $numSlides;
if ($numSlides > 0) {
    ?>
     
        <div id="carouselExampleDark" class="carousel carousel-dark slide"             
          data-bs-ride="carousel">
            
 

        <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>

      <?php
        for ($i=1; $i<$numSlides; $i++) {
    ?>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?php echo $i; ?>" aria-label="Slide <?php echo $i + 1; ?>"></button>
 
    <?php
        }// this is closing } for our "for loop"
    ?>
</div> // this the closing tag for .carousel-indicators


<div class="carousel-inner">
      <?php
        foreach ($articles as $index => $article) {
      ?>
            <div class="carousel-item <?php echo ($index == 0 ? 'active"' : '"'); ?> data-bs-interval="10000">
               <a href="articlePage.php?articleId=<?php echo $article->articleId ?>">
                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect></svg>
                <div class="carousel-caption d-xs-block">
                    <h3><?php echo $article->title; ?></h3>
                    <span><?php echo $article->author; ?></span>
                </div>
  </a>
            </div>
        <?php
        }
        ?>
  </div> // this is the closing tag for .carousel-inner
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  


</div> // this is the closing tag for #carouselExampleDark
<?php
} // this is the closing tag for our "if ($numSlides > 0) {"
?>
























/*
Remember, our ternary operator is the same thing as this demo code:
if (count($articles) < $numSlides) {
  $numSlides = count($articles);
} else {
  $numSlides = $numSlides;
}*/


?>