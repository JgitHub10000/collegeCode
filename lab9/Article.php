<?php 
class Article {
    protected $header;
    protected $summary;
    protected $fullText;
 
    function __construct($header, $summary, $fullText) {
        $this->header = $header;
        $this->summary = $summary;
        $this->fullText = $fullText;
    }
 
    function __destruct() {}
 
    public function render() {
        $card = "
        <div class=\"article\">
            <h1>$this->header</h1>
            <p>$this->summary</p>
            <p>$this->fullText</p>
        </div>";
        echo $card;
    }
}
 
$fullArticle = new Article("This is a full article", "summary for full article", "full paragraph text for full article");

$newArticle = new Article("This is new article", "summary for new article", "full paragraph text for new article");

?>
<link rel="stylesheet" href="article.css">
 
<div class="container"> 
    <?php $fullArticle->render(); 
        $newArticle->render();
    
    ?>
    
</div>
