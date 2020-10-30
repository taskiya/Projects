<?php
require('rita.php');
$id=$_REQUEST['id'];
$query = "DELETE service WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: viewb.php"); 
?>