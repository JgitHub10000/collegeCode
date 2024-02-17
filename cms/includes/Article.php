<?php


/*if (isset($_GET['articleId'])) {
    try {
        $article = Article::getArticleById($conn, $_GET['articleId']);
    } catch(Exception) {
        header("Location: 404.php");
    }
   
    if(!$article->isPublished) {
        header("Location: 404.php");
    }
} else {
    header("Location: 404.php");
}*/


class Article {
    // parameters
    public $conn;
    public $articleId;
    public $title;
    public $author;
    public $content;
    public $publishDate;
    public $isPublished;
 
    function __construct($conn, $articleInfo) {
        $this->conn = $conn;
        $this->articleId = $articleInfo['articleId'];
        $this->title = $articleInfo['title'];
        $this->author = $articleInfo['author'];
        $this->content = $articleInfo['content'];
        $this->publishDate = $articleInfo['publishDate'];
        $this->isPublished = $articleInfo['isPublished'];
    }
 
    function __destruct() { }


    static function getArticlesFromDb($conn, $numArticles = 20) {
        $selectArticles = "SELECT articles.*, users.fullName AS author FROM Articles LEFT JOIN (users) 
        ON users.userId=articles.authorId
         WHERE isPublished=true 
         ORDER BY publishDate DESC
         LIMIT :numArticles";
    


        $stmt = $conn->prepare($selectArticles);
    
        $stmt->bindParam(':numArticles', $numArticles, PDO::PARAM_INT);
        $stmt->execute();
       
        $articleList = array();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach($stmt->fetchAll() as $listRow) {
            $article = new Article($conn, $listRow);
            $articleList[] = $article;
        }
     
        return $articleList;
    }
    
    static function getArticleById($conn, $articleId) {
        $selectArticles = "SELECT articles.*, users.fullName as author
        FROM Articles LEFT JOIN (users)
        ON users.userId=articles.authorId
        WHERE articles.articleId=:articleId";
        $stmt = $conn->prepare($selectArticles);
        $stmt->bindParam(':articleId', $articleId, PDO::PARAM_INT);
        $stmt->execute();
   
        $articleId = array();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach($stmt->fetchAll() as $listRow) {
            $article = new Article($conn, $listRow);
            $articleId[] = $article;
        }
 
        return $articleId;
    }







}









