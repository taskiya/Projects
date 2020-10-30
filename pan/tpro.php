<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "d");  // p_center1
  // Assign a variable
  $s = "";
  $q = "";

  // Insert function when submit is clicked
  if(isset($_POST['submit'])) {
    // Take values from inputs and store in variable
     $fname = $_POST['fname'];
     $sname = $_POST['sname'];
     $pnum = $_POST['pnumber'];
     $serv = $_POST['service'];
     $wheel = $_POST['wheel'];
     $date = $_POST['date'];
     $time = $_POST['time'];

    // Retrieve details from database
    $query = "SELECT * FROM tbook";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);

    // If fields are not empty
  if($fname != "" && $sname != "" && $pnum != "" && $serv != "" && $wheel != "" && $date != "" && $time != "") {
    // If the details are matching with database
    if ($date == $row['date'] && $time == $row['time']) {
      $s = "Sorry this time slot is not available, already booked!";
    } else {
      // SQL Query to insert values into database
    $sql = "INSERT INTO tbook (fname, sname, pnum, serv, wheel, date, time) VALUES ('$fname', '$sname', '$pnum', ' $serv', '$wheel', '$date', '$time' )";
    mysqli_query($db, $sql);
    $q = "Booking was done successfully!";
    }
  } else {
    $s = "Please fill out the details!";
  }
  }

?>