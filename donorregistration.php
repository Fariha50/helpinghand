<?php include('donorserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>Register</h2>
  </div>
    
  <form method="post" action="donorregistration.php">
      <?php include('errordonor.php'); ?>
      <div class="input-group">
      <label>Name</label>
      <input type="text" name="name1" value="<?php echo $name1; ?>">
    </div>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username1" value="<?php echo $username1; ?>">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email1" value="<?php echo $email1; ?>">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2">
      </div>
      <div class="input-group">
      <label>PhoneNumber</label>
      <input type="text" name="phonenumber1" value="<?php echo $phonenumber1; ?>">
      </div>
      <div class="input-group">
      <label>Location</label>
      <input type="text" name="location1" value="<?php echo $location1; ?>">
      </div>
      
      <label>Gender</label>
      <input type="radio" name="gender1"  value="Male">Male
      <input type="radio" name="gender1" value="Female">Female
      <br><br>

      
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
       <!-- Already a member? <a href="login.php">Sign in</a>-->
    </p>
  </form>
</body>
</html>
<?php include('footer.php') ?>