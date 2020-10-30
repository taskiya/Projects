<?php
require('rita.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>center1</title>
<link rel="stylesheet" href="style10.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
<div class="form">
<p><a href="manager.php">Home</a> 
<h2>BOOKINGS FOR TWO WHEELER</h2>
<table class="table table-responsive table-hover" width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
    <th>ID</strong></th>
<th><strong>FIRST_NAME</strong></th>
<th><strong>LAST_NAME</strong></th>
<th><strong>PHONE_NO</strong></th>
<th><strong>SERVICES</strong></th>
<th><strong>NO OF VEHICLES</strong></th>
<th><strong>DATE</strong></th>
<th><strong>TIME</strong></th>
<th><strong>DELETE</strong></th>
</tr>
</thead>
<tbody>
<?php
$sel_query="Select * from tbook";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["fname"]; ?></td>
<td ><?php echo $row["sname"]; ?></td>
<td><?php echo $row["pnum"]; ?></td>
<td><?php echo $row["serv"]; ?></td>
<td><?php echo $row["wheel"]; ?></td>
<td ><?php echo $row["date"]; ?></td>
<td><?php echo $row["time"]; ?></td>
<td align="center"><a href="delete1.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</body>
</html>