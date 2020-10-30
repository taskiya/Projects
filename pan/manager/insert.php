<?php
 require('rita.php');
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$p_name = $_POST['p_name'];
$p_des =$_POST['p_des'];
$p_pri = $_POST['p_pri'];
$ins_query="insert into service (p_name,`p_des`,`p_pri`) values ('$p_name','$p_des','$p_pri')";
mysqli_query($conn,$ins_query) or die(mysql_error());
$status = "New service Inserted Successfully.</br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New services</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="service.php">services</a>

<div>
<h1>Insert New Services</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="p_name" placeholder="Enter Package Name" required /></p>
<p><input type="text" name="p_des" placeholder="Enter Package description" required /></p>
<p><input type="text" name="p_pri" placeholder="Enter Package price" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
<br /><br /><br /><br />
</div>
</div>
</body>
</html>
