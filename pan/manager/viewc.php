<?php
require('rita.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="index.php">Home</a> 
<h2>CONTACTS<b></h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>F_Name</strong></th>
<th><strong>L_name</strong></th>
<th><strong>Email_id</strong></th>
<th><strong>Message</strong></th>
<th><strong>Delete</strong></th></tr>
</thead>
<tbody>
<?php
$sel_query="Select * from contact";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="center"><?php echo $row["first_name"]; ?></td>
<td align="center"><?php echo $row["last_name"]; ?></td>
<td align="center"><?php echo $row["email_address"]; ?></td>
<td align="center"><?php echo $row["message"]; ?></td>
<td align="center"><a href="delete2.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</body>
</html>
