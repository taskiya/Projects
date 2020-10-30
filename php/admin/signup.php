<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Signup and Login</title>
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

<!---CSS-->
    <link href="css/sign-style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="register-form" method="POST" action="registration.php" id="sign">
      <input type="text" placeholder="Your Username" name="user"/>
      <input type="password" placeholder="Password" name="pass"/>
      <input type="password" placeholder="Confirm Password" name="confirm"/>
      <button type="submit" name="submit">Create</button>
      <p class="message">Already registered? <a href="#log">Login</a></p>
    </form>
    <form class="login-form" method="POST" action="validation.php" id="log">
      <input type="text" placeholder="username" name="user"/>
      <input type="password" placeholder="password" name="pass"/>
      <button type="submit" name="submit">Login</button>
      <p class="message">Not registered? <a href="#sign">Create an account</a></p>
    </form>
  </div>
</div>


<script>
$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
    </script>
</body>
</html>