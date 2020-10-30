<?php
require('rita.php');
$id = $_REQUEST['id'];
$query = "SELECT * from service where id ='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update services</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="service.php"><b>Services</a> 
<h1>Update services</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
      $id= $_POST['id'];
    $p_name = $_POST['p_name'];
    $p_des = $_POST['p_des'];
    $p_pri = $_POST['p_pri'];
    $update="update service set p_name='".$p_name."',p_des='".$p_des."',p_pri='".$p_pri."' where id='".$id."'";
    mysqli_query($conn,$update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br><a href='viewb.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<input type="text" name="p_name" placeholder="Enter Package Name" required /></p>
<p><input type="text" name="p_des" placeholder="Enter Package description" required /></p>
<p><input type="text" name="p_pri" placeholder="Enter Package price" required /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>
