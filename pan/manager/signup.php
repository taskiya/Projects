<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Signup Page</title>
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
		
		<link rel="stylesheet" type="text/css" href="sign.css">
	
</head>
<body>
<div class="login-page-1">
  <div class="form-1">
    <form class="register-form" action="signup.php" method="post">
    <?php include('errors.php'); ?>
      <input type="text" placeholder="username" name="username"/>
      <input type="password" placeholder="password" name="password_1"/>
      <input type="password" placeholder="confirm password" name="password_2"/>
      <button type="submit" name="submit">Create</button>
      <p class="message">Already registered? <a href="login.php">Log In</a></p>
    </form>
</div>
</div>
</body>
</html>