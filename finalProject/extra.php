
<!DOCTYPE html>
<html lang="en">
<?php
  include("../includes/navbar.php");
?>
 
 <head>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Welcome to News Site</h1>
    <p class="lead">Catch up on breaking news, hot gossip, and everything you need to start your day.</p>
  </div>
</div>
</head>


<body>


<style>
.carousel-item{
    height:32rem;
    background:#777;
    color: white;
    position: relative;
}
.container{
    position: absolute;
    bottom:0;
    left:0;
    right0;
    padding-bottom:50px;
}
</style>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>carousel slider</title>
  </head>
  
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 

<!-- carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="la.jpg" alt="Los Angeles">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>LA is always so much fun!</p>
      </div>
    </div>

    <div class="item active">
      <img src="chicago.jpg" alt="Chicago">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>
    </div>

    <div class="item active">
      <img src="ny.jpg" alt="New York">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</body>
</html>





























<title>carousel slider</title>
  </head>
  <body>

    <style>
.carousel-item{
    height:32rem;
    background:#777;
    color: white;
    position: relative;
}

.container{
    position: absolute;
    bottom:0;
    left:0;
    right:0;
    padding-bottom:50px;
}
</style>




<div id="myCarousel" class="carousel slide"
    data-ride="carousel">
    <ol class= "carousel-indicators">
        <li data-target="#myCarousel"
         data-slide-to="0" class="active"></li>
       <li data-target="#myCarousel"
       data-slide-to="1"></li>
</ol>

<!-- Wrapper for slides -->
<div class ="carousel-inner">
<div class="carousel-item active">
    <div class="container">
        <p>cras justo odio dapibus ac faciltis in, egestat eget quam.
             doec id elit non mi porta gravida at eget metus. nullam id dolor</P>
        <a href="#" class="btn.btn-lg btn-primary">
        sign up today
    </a>
</div>
</div>
<div class="carousel-item">
    <div class="container">
        <h1 example headline</h1>
        <p>something not latin here 
             doec id elit non mi porta gravida at eget metus. nullam id dolor</p>
             <a href="#" class="btn.btn-lg btn-primary">
             dont click this button
</div>
</div>
<div class="carousel-inner">
</div>
<div class="carousel-item">
</div>
</div>





<style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 50%;
    height: 50%;
  }
  </style>
<!-- Carousel wrapper -->
<div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button
      type="button"
      data-mdb-target="#carouselBasicExample"
      data-mdb-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselBasicExample"
      data-mdb-slide-to="1"
      aria-label="Slide 2"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselBasicExample"
      data-mdb-slide-to="2"
      aria-label="Slide 3"
    ></button>
  </div>

  <!-- Inner -->
  <div class="carousel-inner" align="center">
    <!-- Single item -->
    <div class="carousel-item active">
      <img src="greatSeal.jpg" class="d-block h-60 w-50" alt="eaglesNest"/>
      <div class="carousel-caption d-none d-md-block">
        <h5>Great Seal</h5>
        <p>State Park</p>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img src="eaglesNest.jpg" class="d-block w-50" alt="greatSeal"/>
      <div class="carousel-caption d-none d-md-block">
        <h5>Eagles Nest</h5>
        <p>State Park</p>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img src="airyForest.jpg" class="d-block w-50" alt="airy forest/>
      <div class="carousel-caption d-none d-md-block">
        <h5>Airy Forest</h5>
        <p>State Park</p>
      </div>
    </div>
  <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
  <!-- Inner -->

  <!-- Controls -->
</div>
<!-- Carousel wrapper -->

 <!-- Option 1: Bootstrap Bundle with Popper -->

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
