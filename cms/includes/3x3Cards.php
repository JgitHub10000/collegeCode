<div class="container">
  <div class="row">
    <?php
        $data = Article::getArticlesFromDb($conn, 9);
        foreach ($data as $article) {
    ?>
      <div class="col-12 col-md-4">
      <a class="card-wrapper"
href="../pages/articlePage.php?articleId=<?php echo $article->articleId ?>">
        <div class="card">
            <h2><?php echo $article->title ?></h2>
            <p><?php echo $article->author ?></p>
        </div>
    </a>
</div>
    <?php
        }
    ?>
  </div>
</div>



