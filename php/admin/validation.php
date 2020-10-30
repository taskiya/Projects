<?php

session_start();

$con = mysqli_connect('localhost', 'root');
if($con){
    echo"Connection sucesssfully";
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
    $_SESSION['u_name'] = $user;
    header('location: index.php');
}else{
    header('location: signup.php');
}

$con->close();
?>