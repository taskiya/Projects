<?php
require('rita.php');
$id=$_REQUEST['id'];
$query = "DELETE tbook1 WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: view.php"); 
?>