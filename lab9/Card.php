<?php 
include_once("Article.php");
class Card extends Article {
    public function render() {
        $card = "
        <div class=\"card\">
            <h2>$this->header</h2>
            <p>$this->summary</p>
        </div>";
        echo $card;
    }
}
 
$imagineCard = new Card("Imagine This!", "Imagination!", "paragraph text for imagination");
$visualizeCard = new Card("Visualize This!", "Visualization!", "paragraph text for visualization");
?>
 
<div class="container"> 
    <?php $imagineCard->render(); ?>
    <?php $visualizeCard->render(); ?>
</div>
