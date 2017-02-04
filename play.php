<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Title</title>

    <?php require("Header.php"); ?>
    <script src="css/jquery.min.js"></script>
    <script src="css\bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="stylePlay.css" />



    <style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 70%;
        margin: auto;
    }
    </style>
</head>



<body>

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="images/play/a.jpg" alt="a">
        <div class="carousel-caption">
          <h3>Image 1</h3>
          <p>Sur cette image on voit des enfants jouer</p>
        </div>
      </div>

      <div class="item">
        <img src="images/play/p.jpg" alt="p">
        <div class="carousel-caption">
          <h3>Image 2</h3>
          <p>Sur cette image on voit des </p>
        </div>
      </div>

      <div class="item">
        <img src="images/play/b.jpe" alt="b">
        <div class="carousel-caption">
          <h3>Image 3</h3>
          <p>Sur cette image on voit</p>
        </div>
      </div>

    </div>

  </div>
</div>

</body>
</html>
