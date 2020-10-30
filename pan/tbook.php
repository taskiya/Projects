<?php
include('tpro.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Two wheeler booking</title>
<!--Boostrap css-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!--Bootsrap javascript-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--Bootsrap Jquery-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<!--google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto+Slab|Source+Sans+Pro" rel="stylesheet">

<!--jquery-ui-->
    <link href="jquery-timepicker/jqeury-ui.css" rel="stylesheet">

    <script src="jquery.js"></script>

    <script src="jquery-ui.js"></script>
<!--jquery-ui close-->


   <link href="css/tbook.css" type="text/css" rel="stylesheet">
</head>

<body data-target="#navbarResponsive">

<section>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="tbook.php">SECW</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="ex.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active " href="..\login.php">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</section>

<section class="container">
    <h1>Two Wheeler Booking</h1>
        <form  method="POST">
        <h2 class="success"><?php echo $q; ?></h2>
           <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                  <span class="form-label">First Name</span>
                  <input type="text" class="form-control" name="fname" placeholder="first name"/>
                  </div>
               
                  <div class="form-group">
                    <span class="form-label">Second Number</span>
                    <input type="text" class="form-control" name="sname" placeholder="second name"/>
                  </div>
             
                  <div class="form-group">
                    <span class="form-label">Phone Number</span>
                    <input type="tel" class="form-control" name="pnumber" placeholder="phone number"/>
                  </div>
              

                  <div class="form-group">
                     <span class="form-label">Services</span>
                      <select class="form-control" name="service">
                         <option value="" disabled selected>service</option>
                         <option>Shampoo pressure wash $80</option>
                         <option>Shampoo+Diesel Pressure wash $150</option>
                      </select>
                  </div>

                  <div class="form-group">
                    <span class="form-label">Wheelers</span>
                    <select class="form-control" name="wheel">
                      <option value="" disabled selected>wheeler</option>
                      <option>0</option>
                       <option>1</option>
                       <option>2</option>
                     </select>
                  </div>

                  <div class="form-group">
                     <span class="form-label">Date</span>
                     <input type="text" id="calendar" class="form-control" name="date" placeholder="date"/>
                  </div>

                  <div class="form-group">
                     <span class="form-label">Time</span>
                     <select class="form-control" name="time">
                       <option value="" disabled selected>time</option>
                       <option>9am-10am</option>
                       <option>10am-11am</option>
                       <option>11am-12am</option>
                       <option>12am-1am</option>
                       <option>2am-3am</option>
                       <option>3am-4am</option>
                     </select>
                  </div>
                  
                  <h2 class="error"><?php echo $s; ?></h2>
                  <button class="btn btn-outline-light btn-lg" type="submit" name="submit">Book</button>
              </div>  
           </div>
      </form>
</section>
<script>
    $(document).ready(function() {
        $("#calendar").datepicker({
            minDate: 0,
            maxDate: "2m"
        });
    });
</script>
</body>
</html>
