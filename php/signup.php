<!DOCTYPE html>
<html>
<head>
<title>Project</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js" >
</script>

<style>
body{
    width: 100%;
    height: 100vh;
    background-image: url("1.jpg"); 
    background-position: center;
    background-size: cover;
}

.container{
    padding: 150px 20px;
}

h2{
    color: #fff;
    font-size: 40px;
    font-weight: 5px;
}

.form-label{
    color:#fff;
    font-size: 20px;
    font-weight: 5px;
}
</style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-6">
<h2>Sign Up Here</h2>
<form action="registration.php" method="post">
<div class="form-group">
<span class="form-label">Username</span>
<input type="text" class="form-control" name="uname">
</div>

<div class="form-group">
<span class="form-label">Password</span>
<input type="password" class="form-control" name="upass">
</div>

<button class="btn btn-outline-light btn-md">Sign In</button>
</form>
</div>

<div class="col-md-6">
<h2>Login Here</h2>
<form action="validation.php" method="post">
<div class="form-group">
<span class="form-label">Username</span>
<input type="text" class="form-control" name="uname">
</div>

<div class="form-group">
<span class="form-label">Password</span>
<input type="password" class="form-control" name="upass">
</div>

<button class="btn btn-outline-light btn-md">Login</button>
</form>
</div>
</div>
</div>


</body>
</html>