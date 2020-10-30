<?php

session_start();
header('location: signup.php');

$servername = "localhost";
$username = "root";
$password = "";

//connnection creation
$con = mysqli_connect('localhost', 'root');
if($con){
   echo"Connection sucessfull";
}else{
    echo"Connection failed";
}

mysqli_select_db($con, 'signup');

$user = $_POST['uname'];
$pass = $_POST['upass'];

$q = "select * from sign where u_name = '$user' && u_pass = '$pass'";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);
if($num == 1){
    echo"Already Signed In";
}else{
    $qury = "insert into sign (u_name, u_pass) values('$user', '$pass')";
    mysqli_query($con,$qury);
}

$con->close();

?>
\]P}