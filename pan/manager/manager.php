<?php

session_start();
if (isset($_SESSION['username']));

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Manager panel</title>

        <!--Boostrap css-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!--Bootsrap javascript-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--Bootsrap Jquery-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<!--Fontawesome for icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<!--google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto+Slab|Source+Sans+Pro" rel="stylesheet">

    <link href="man.css" type="text/css" rel="stylesheet">
</head>


<body data-target="#navbarResponsive">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#index.php">SECW</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="service.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="view1.php">Two wheeler</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="view.php">Four wheeler</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active " href="..\ex.html">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<div class="container">
<h1>Welcome <?php echo $_SESSION['username']; ?></h1>
</div>






</body>
</html>
