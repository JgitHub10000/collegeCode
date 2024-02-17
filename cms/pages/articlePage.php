<?php
include("../includes/navbar.php");
 
$article = Article::getArticleById($conn, $_GET['articleId']);
?>
 
<header class="masthead">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1><?php echo $article->title; ?></h1>
                    <span class="meta">
                        Posted by <?php echo $article->author; ?>
                        on <?php echo $article->publishDate; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>
 
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <?php echo $article->content ?>
            </div>
        </div>
    </div>
</article>


<?php
include("../includes/carousel.php");


?>