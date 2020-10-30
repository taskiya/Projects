<?php

$db = mysqli_connect("localhost", "root", "", "insert");

//create variable
$bts = "";

//insert details when submit is clicked
if(isset($_POST['submit'])){
    //taking values from form
$name  = $_POST['name'];
$text = $_POST['add'];
$date = $_POST['date'];
$date1 = $_POST['date1'];


//if fields are not empty
if($name != "" && $text != "" && $date != "" && $date1 != ""){
    //sql query to enter in table
    $sql = "INSERT INTO i_table(p_name, p_address, p_date, p_date1) VALUES('$name', '$text', '$date', '$date1')";
    mysqli_query($db, $sql);
    $bts = "Details submitted sucessfully";
}
else{
    $bts = "Please fill the details";
}
}

if(isset($_POST['update'])){
    $name  = $_POST['name'];
    $text = $_POST['add'];
    $date = $_POST['date'];
    $date1 = $_POST['date1'];

    if($name != "" && $text != "" && $date != "" && $date1 != ""){
        $sql = "UPDATE i_table SET p_name = '$name', p_add = '$text', p_date = '$date', p_date1 = '$date1' WHERE p_name = '$name'";
        mysqli_query($db, $sql);
        $bts = "Updated succesfully";
    }else{
        $bts = "Please fill the details correct";
    }
}

?>