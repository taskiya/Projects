<?php
 require('rita.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>services</title>
<link rel="stylesheet" href="style1.css" />
</head>
<body>
<div class="form">
<p><a href="..\ex.html">SECW</a> |
<h2>Available Services</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<th><strong><b>Package Name<b></strong></th>
<th><strong><b>Package Description</strong></th><th>
<strong>Price</strong></th><th>
</thead>
<tbody>
<?php
$sel_query="Select * from service";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="center"><?php echo $row["p_name"]; ?></td>
<td align="center"><?php echo $row["p_des"]; ?></td>
<td align="center"><?php echo $row["p_pri"]; ?></td>
<?php } ?>
</tbody>
</table>
</div>
</body>
</html>
