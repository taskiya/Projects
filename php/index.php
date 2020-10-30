<?php
include('process.php');?>
<!DOCTYPE html>
<html>
<head>
<title>Webpage</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<nav>
<ul>
<li><a href="#home">Home</a></li>
<li><a href="#insert">Insert</a></li>
<li><a href="#">Retrieve</a></li>
<li><a href="#update">Update</a></li>
<li><a href="#">Delete</a></li>
</ul>
</nav>

<section class="sec" id="home"></section>

<section class="container" id="insert">
<div class="row">
<div class="col-md-8">
    <h1>Doctor Details</h1>
<form method="post">
<div class="form-group">
<span class="form-label">Patient Name</span>
<input type="text" class="form-control" name="name" placeholder="enter name">
</div>

<div class="form-group">
<span class="form-label">Patient Address</span>
<input type="text" class="form-control" name="add" placeholder="enter address">
</div>

<div class="form-group">
<span class="form-label">Patient Admit Date</span>
<input type="date" class="form-control" name="date">
</div>

<div class="form-group">
<span class="form-label">Patient Discharge Date</span>
<input type="date" class="form-control" name="date1">
</div>

<button class="btn btn-outline-dark btn-md" name="submit">Submit</button>

</form>
</div>
</div>
</section>



<section class="container" id="update">
<div class="row">
<div class="col-md-8">
    <h1>Updating Details</h1>
<form method="post">
<div class="form-group">
<span class="form-label">Patient Name</span>
<input type="text" class="form-control" name="name" placeholder="enter name">
</div>

<div class="form-group">
<span class="form-label">Patient Address</span>
<input type="text" class="form-control" name="add" placeholder="enter address">
</div>

<div class="form-group">
<span class="form-label">Patient Admit Date</span>
<input type="date" class="form-control" name="date">
</div>

<div class="form-group">
<span class="form-label">Patient Discharge Date</span>
<input type="date" class="form-control" name="date1">
</div>

<button class="btn btn-outline-dark btn-md" name="update">Update</button>

</form>
</div>
</div>
</section>
</body>
</html>