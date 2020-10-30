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
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <title>Insert Servicesu</title>
<!--Boostrap css-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!--Bootsrap javascript-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--Bootsrap Jquery-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<!--Fontawesome for icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<!--google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto+Slab|Source+Sans+Pro" rel="stylesheet">
<link rel="stylesheet" href="style.css" />

</head>
<body>
<div class="container">
<div class="row">
    <div class="col-lg-6">
        <form method="post" >
            <div class="form-group">
<input type="hidden" name="new" value="1" />
</div>

<div class="form-group">
<input type="text" name="p_name" placeholder="Enter Package Name"  required />
</div>

<div class="form-group">
<input type="text" name="p_des" placeholder="Enter Package description" required />
</div>

<div class="form-group">
<input type="text" name="p_pri" placeholder="Enter Package price" required />
</div>

<div class="form-group">
<input name="submit" type="submit" value="Submit" />
</div>

<p style="color:#FF0000;"><?php echo $status; ?></p>
</form>
</div>
</div>
</div>
</body>
</html>
