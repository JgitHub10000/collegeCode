<?php

class Scales {
    // parameters
    public $conn;
    public $scaleId;
    public $scaleType;
    public $scalePosition;
    public $horizontalPosition;
    public $veritcalPosition;
    public $scaleImage;
 
    function __construct($conn, $scaleInfo) {
        $this->conn = $conn;
        $this->scaleId = $scaleInfo['scaleId'];
        $this->scaleType = $scaleInfo['scaleType'];
        $this->scalePosition = $scaleInfo['scalePosition'];
        $this->horizontalPosition = $scaleInfo['horizontalPosition'];
        $this->veritcalPosition = $scaleInfo['verticalPosition'];
        $this->scaleImage = $scaleInfo['scaleImage'];
    }
 
    function __destruct() { }


    static function getScalesFromDb($conn, $numScales = 5) {
        $selectScaleId = "SELECT ScalePatterns";
        
       /* .*, users.fullName AS author FROM Articles LEFT JOIN (users) 
        ON users.userId=articles.authorId
         WHERE isPublished=true 
         ORDER BY publishDate DESC
         LIMIT :numArticles";
    */


        $stmt = $conn->prepare($selectScalePatterns);
    
        $stmt->bindParam(':numScales', $numScales, PDO::PARAM_INT);
        $stmt->execute();
       
        $scaleList = array();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach($stmt->fetchAll() as $listRow) {
            $scales = new Scales($conn, $listRow);
            $ScaleList[] = $scales;
        }
     
        return $ScaleList;
    }
    /*
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
    }*/







}


?>

