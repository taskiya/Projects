<?php
$servername = "localhost";
$username= "root";
$password= "";
$dbname= "d";
//create connection
$conn= new MySQLi($servername,$username,$password,$dbname);

//check the connection
if($conn->connect_error)
{
die("connection failed".$conn->connect_error);
}
?>





