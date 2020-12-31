<?php include('donorserver.php') ?>
<?php
if(isset($_SESSION['username1'])){
    header("location: home.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="donorlogin.php">
  	<?php include('errordonor.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username1" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="donorregistration.php">Sign up</a>
  	</p>
  </form>
</body>
</html>